<?php

class Cart
{

    public $connectDb;

    public function __construct(PDO $db)
    {
        $this->connectDb = $db;
    }

    public function add($id_article, $quantity)
    {
        $insertCart = $this->connectDb->prepare("INSERT INTO cart (`id_user`, `id_article`, `quantity`) VALUES (:id_user, :id_article, :quantity)");

        $insertCart->bindParam(":id_user", $_SESSION['id']);
        $insertCart->bindParam(":id_article", $id_article);
        $insertCart->bindParam(":quantity", $quantity);

        $insertCart->execute();
    }

    public function select($id_user)
    {
        $selectCart = $this->connectDb->prepare("SELECT * FROM `cart` INNER JOIN `article` ON cart.id_article = article.id_article WHERE cart.id_user = :id_user;");
        $selectCart->bindParam(":id_user", $id_user);
        $selectCart->execute();
        return $selectCart->fetchAll(PDO::FETCH_ASSOC);
    }

    public function delete($id)
    {
        $deleteCart = $this->connectDb->prepare("DELETE FROM `cart` WHERE `id_cart` = :id");
        $deleteCart->bindParam(":id", $id);
        $deleteCart->execute();
    }

    public function update($form)
    {
        foreach ($form as $key => $value) {
            if ($value != "upadate") {

                $sqlUpadete = $this->connectDb->prepare("UPDATE `cart` SET `quantity`=:quantity WHERE `id_cart` = :id");
                $sqlUpadete->bindParam(":quantity", $value);
                $sqlUpadete->bindParam(":id", $key);
                $sqlUpadete->execute();
            }
        }
    }
}
