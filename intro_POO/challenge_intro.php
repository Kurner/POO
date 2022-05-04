<?php

    class Connexion
    {

        public function __construct($login, $password)
        {
            $this->login = $login;
            $this->password = $password;
        }

        function dbConnect()
        {
            try 
            {
                return $db = new PDO('mysql:host=localhost;dbname=Connexion;charset=utf8', $this->login, $this->password);
            }
            catch(PDOException $e)
            {
                echo "Erreur : " . $e->getMessage();
            }
        }

        function count()
        {
            $count = $this->dbConnect()->prepare("SELECT COUNT(*) as total FROM test");
            $count->execute();
            $data = $count->fetch(PDO::FETCH_OBJ);
            echo $data->total;
        }
    }

?>

