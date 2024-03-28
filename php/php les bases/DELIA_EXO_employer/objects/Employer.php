<?php

class Employer
{

    public $connectDb;

    public function __construct($db)
    {
        $this->connectDb = $db;
    }

    public function selectALL()
    {
        $sqlSelect = $this->connectDb->prepare("SELECT * FROM `employe`");
        $sqlSelect->execute();
        return $sqlSelect->fetchAll(PDO::FETCH_ASSOC);
    }

    public function delete($id)
    {
        $sqlDelete = $this->connectDb->prepare("DELETE FROM `employe` WHERE `idEmploye` = :id");
        $sqlDelete->bindParam(":id", $id);
        $sqlDelete->execute();
    }

    public function add($prenom, $nom, $sexe, $service, $dateEmbauche, $salaire, $idSecteur)
    {
        $sqlAdd = $this->connectDb->prepare("INSERT INTO `employe`(`prenom`, `nom`, `sexe`, `service`, `dateEmbauche`, `salaire`, `idSecteur`) VALUES (:prenom, :nom, :sexe, :service, :dateEmbauche, :salaire, :idSecteur)");

        $sqlAdd->bindParam(":prenom", $prenom);
        $sqlAdd->bindParam(":nom", $nom);
        $sqlAdd->bindParam(":sexe", $sexe);
        $sqlAdd->bindParam(":service", $service);
        $sqlAdd->bindParam(":dateEmbauche", $dateEmbauche);
        $sqlAdd->bindParam(":salaire", $salaire);
        $sqlAdd->bindParam(":idSecteur", $idSecteur);

        $sqlAdd->execute();
    }

    public function selectById($id)
    {
        $sqlSlectId = $this->connectDb->prepare("SELECT * FROM `employe` WHERE `idEmploye` = :id");
        $sqlSlectId->bindParam(":id", $id);
        $sqlSlectId->execute();
        return $sqlSlectId->fetch(PDO::FETCH_ASSOC);
    }

    public function editById($id, $prenom, $nom, $sexe, $service, $dateEmbauche, $salaire, $idSecteur)
    {
        $sqlAdd = $this->connectDb->prepare("UPDATE `employe` SET `prenom`=:prenom,`nom`=:nom,`sexe`=:sexe,`service`=:service,`dateEmbauche`=:dateEmbauche,`salaire`=:salaire,`idSecteur`=:idSecteur WHERE `idEmploye` = :id");

        $sqlAdd->bindParam(":prenom", $prenom);
        $sqlAdd->bindParam(":nom", $nom);
        $sqlAdd->bindParam(":sexe", $sexe);
        $sqlAdd->bindParam(":service", $service);
        $sqlAdd->bindParam(":dateEmbauche", $dateEmbauche);
        $sqlAdd->bindParam(":salaire", $salaire);
        $sqlAdd->bindParam(":idSecteur", $idSecteur);
        $sqlAdd->bindParam(":id", $id);

        $sqlAdd->execute();
    }
}
