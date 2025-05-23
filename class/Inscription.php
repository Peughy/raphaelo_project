<?php

require_once(MODEL.'connexion_model.php');
require_once(MODEL.'inscription_model.php');

class Inscription {

    private function getRegistrationNumber(): string{
        $caracteres = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
        $len = strlen($caracteres);

        $matricule = "";
        for($i=0; $i<19; $i++){
            $matricule .= $caracteres[rand(0, $len-1)];
        }

        return $matricule;
    }

    public function setInformations($nom, $email, $pwd, $tel)
    {

        if(!empty($nom) && !empty($email) && !empty($pwd) && !empty($tel))
        {

            $name = htmlspecialchars(trim($nom));
            $mail = htmlspecialchars(trim($email));
            $phone = htmlspecialchars(trim($tel));

            if((strlen($name) || strlen($mail)) <= 100)
            {
                if(filter_var($mail, FILTER_VALIDATE_EMAIL))
                {
                    $password = sha1(trim($pwd));

                    $signIn = new ModelConnexion();
                    $data = $signIn->getInformations($mail, $password);

                    if(!$data)
                    {
                        $signUp = new ModelInscription();
                        $rep = $signUp->addUser($this->getRegistrationNumber(), $name, $mail, $password, $phone);

                        if($rep > 0)
                        {
                            header("Location: index.php?action=signIn");
                        }
                    }
                    else{
                        header("Location: index.php?action=inscription&error=accountExist");
                        exit();
                    }
                }
                else{
                    header("Location: index.php?action=inscription&error=mailError");
                    exit();
                }
            }
            else{
                header("Location: index.php?action=inscription&error=sizeError");
                exit(); 
            }

        }
        else{
            header("Location: index.php?action=inscription&error=emptyfield");
            exit();
        }
        
    }

}
