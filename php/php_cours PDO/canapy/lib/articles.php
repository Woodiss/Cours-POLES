<?php
// require_once('db.php');

class Article
{
    public $title;
    public $price;
    public $image;
    public $connectDb;
    public $id;
    public $articles;
    public $idUser;

    public function __construct(PDO $db)
    {
        $this->connectDb = $db;
    }

    public function insert($title, $price, $image)
    {
        $this->title = $title;
        $this->price = $price;
        $this->image = $image;
        $this->idUser = $_SESSION['id'];

        $insertArticle = $this->connectDb->prepare("INSERT INTO `article` (`title`, `price`, `image`, `id_user`) VALUES (:title, :price, :image, :id_user)");

        $insertArticle->bindParam(":title", $this->title);
        $insertArticle->bindParam(":price", $this->price);
        $insertArticle->bindParam(":image", $this->image);
        $insertArticle->bindParam(":id_user", $this->idUser);
        $insertArticle->execute();

        $folder = "image_articles/upload/";
        $path = $folder . $this->image;

        $tmpName = $_FILES['image']['tmp_name'];
        move_uploaded_file($tmpName, $path);
    }


    public function selectById($id)
    {
        $this->id = $id;

        $select = $this->connectDb->prepare("SELECT * FROM article WHERE `id_article` = :idarticle");
        $select->bindParam("idarticle", $this->id, PDO::PARAM_INT);
        $select->execute();

        return $select->fetch(PDO::FETCH_ASSOC);

        // $this->title = $article['title'];
        // $this->price = $article['price'];
        // $this->image = $article['image'];
    }

    public function selectLast()
    {
        $select = $this->connectDb->prepare("SELECT * FROM `article` ORDER BY `id_article` DESC LIMIT 3;");
        $select->execute();
        return $select->fetchAll(PDO::FETCH_ASSOC);
    }


    public function selectAll()
    {
        $select = $this->connectDb->prepare("SELECT * FROM article");
        $select->execute();
        return $select->fetchAll(PDO::FETCH_ASSOC);
    }

    public function editArticle($id, $title, $price, $image, $idUser)
    {
        $this->id = $id;
        $this->idUser = $idUser;
        $this->title = $title;
        $this->price = $price;
        $this->image = $image;

        $editArticleSql = $this->connectDb->prepare("UPDATE `article` SET `title`=:title,`price`=:price,`image`=:image,`id_user`=:user WHERE `id_article` = :id");
        $editArticleSql->bindParam(":title", $this->title);
        $editArticleSql->bindParam(":price", $this->price);
        $editArticleSql->bindParam(":image", $this->image);
        $editArticleSql->bindParam("user", $this->idUser);
        $editArticleSql->bindParam("id", $this->id);
        $editArticleSql->execute();

        $path = "image_articles/upload/" . $this->image;

        $tmpName = $_FILES['image']['tmp_name'];
        move_uploaded_file($tmpName, $path);

        header("Location: shop.php");
    }
}
