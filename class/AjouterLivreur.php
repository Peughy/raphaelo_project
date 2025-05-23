<?php

require_once(MODEL.'livreur_model.php');

class AjouterLivreur {

    private function getRegistrationNumber(): string{
        $caracteres = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
        $len = strlen($caracteres);

        $matricule = "";
        for($i=0; $i<19; $i++){
            $matricule .= $caracteres[rand(0, $len-1)];
        }

        return $matricule;
    }

    public function setInformations($nom, $email, $pwd, $tel, $representation)
    {

        if(!empty($nom) && !empty($email) && !empty($pwd) && !empty($tel) && !empty($representation))
        {
            $name = htmlspecialchars(trim($nom));
            $mail = htmlspecialchars(trim($email));
            $phone = htmlspecialchars(trim($tel));
            $representation = htmlspecialchars(trim($representation));

            if((strlen($name) || strlen($mail)) <= 100)
            {
                if(filter_var($mail, FILTER_VALIDATE_EMAIL))
                {
                    $password = sha1(trim($pwd));

                    $livreur_model = new ModelLivreur();
                    $data = $livreur_model->getInformations($mail, $password);

                    if(!$data)
                    {   
                        $id_livreur = $this->getRegistrationNumber();
                        $rep = $livreur_model->addUser($id_livreur, $name, $mail, $password, $phone, "livreur");

                        if($rep > 0)
                        {
                            $rep = $livreur_model->affectRepresentation($id_livreur, $representation);
                            if($rep > 0){
                                header("Location: index.php?action=gestion");
                            }
                            else{
                                header("Location: index.php?action=gestion&error=error&addLivreur=true");
                                exit();
                            }
                        }
                    }
                    else{
                        header("Location: index.php?action=gestion&error=accountExist&addLivreur=true");
                        exit();
                    }
                }
                else{
                    header("Location: index.php?action=gestion&error=mailError&addLivreur=true");
                    exit();
                }
            }
            else{
                header("Location: index.php?action=gestion&error=sizeError&addLivreur=true");
                exit(); 
            }

        }
        else{
            header("Location: index.php?action=gestion&error=emptyfield&addLivreur=true");
            exit();
        }
        
    }

}
