<?php
session_start();

require_once(MODEL.'connexion_model.php');

class Connexion{

    public function getInformations(string $email, string $pwd)
    {
        if(!empty($email) && !empty($pwd))
        {
            $mail = htmlspecialchars(trim($email));
            $password = sha1(trim($pwd));

            $connexion_model = new ModelConnexion();
            $data = $connexion_model->getInformations($mail, $password);

            if($data)
            {
                $_SESSION["access"] = true;
                $_SESSION["id_user"] = $data["id_user"];

                if($data["type_account"] == "client")
                {
                    header("Location: index.php?action=menu");
                    exit();
                }

                if($data["type_account"] == "gest")
                {
                    header("Location: index.php?action=gestion");
                    exit();
                }
            }
            else{
                header("Location: index.php?action=connexion&error=accountExist");
                exit();
            }
        }
        else{
            header("Location: index.php?action=connexion&error=emptyfield");
            exit();
        }
    }

}