<?php



class User
{

    public $id_user;
    public $firstname;
    public $lastname;
    public $email;
    public $password;
    public $power;

    public $connectDb;

    public function __construct(PDO $db)
    {
        $this->connectDb = $db;
    }

    public function register($firstname, $lastname, $email, $passwordCrypted)
    {


        $checkMail = $this->connectDb->prepare("SELECT * FROM user WHERE email = :email");
        $checkMail->bindParam(":email", $email);
        $checkMail->execute();

        $tableUser = $checkMail->rowCount();


        if ($tableUser == 0) {

            $sqlInsertUser = $this->connectDb->prepare("INSERT INTO `user`(`firstname`, `lastname`, `email`, `password`) VALUES (:firstname, :lastname, :email, :password)");

            $sqlInsertUser->bindParam(":firstname", $firstname);
            $sqlInsertUser->bindParam(":lastname", $lastname);
            $sqlInsertUser->bindParam(":email", $email);
            $sqlInsertUser->bindParam(":password", $passwordCrypted);

            $sqlInsertUser->execute();
        } else {
            echo "ERREUR EMAIL DEJA EXISTANT";
        }
    }

    public function login($email, $password)
    {
        $this->email = $email;
        $this->password = $password;

        $sqlCheckUser = $this->connectDb->prepare("SELECT * FROM user WHERE email = :email AND password = :password");

        $sqlCheckUser->bindParam(":email", $email);
        $sqlCheckUser->bindParam(":password", $password);
        $sqlCheckUser->execute();

        $tableUserSelect = $sqlCheckUser->rowCount();

        if ($tableUserSelect != 0) {
            $userInfo = $sqlCheckUser->fetch(PDO::FETCH_ASSOC);

            $_SESSION['id'] = $userInfo['id_user'];
            $_SESSION['firstname'] = $userInfo['firstname'];
            $_SESSION['lastname'] = $userInfo['lastname'];
            $_SESSION['power'] = $userInfo['power'];

            header("Location: index.php");
        }
    }

    public function deco()
    {
        session_unset();
        session_destroy();
        header('Location: ../index.php');
    }
}
