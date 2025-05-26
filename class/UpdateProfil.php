<?php

require_once(MODEL.'profil_model.php');

class UpdateProfil {

    public function update_user($id_user, $nom, $email, $pwd, $tel)
    {

        if(!empty($nom) && !empty($email) && !empty($pwd) && !empty($tel))
        {

            $name = htmlspecialchars(trim($nom));
            $mail = htmlspecialchars(trim($email));
            $phone = htmlspecialchars(trim($tel));

            if((strlen($pwd) > 8))
            {
                if(filter_var($mail, FILTER_VALIDATE_EMAIL))
                {
                    $password = sha1(trim($pwd));
                    $profil_model = new ModelProfil();

                    $rep = $profil_model->updateUser($id_user, $name, $email, $password, $phone);
                    if($rep){
                        header("Location: index.php?action=profil");
                    }
                    else{
                        header("Location: index.php?action=profil&error=error");
                    } 
                }
                else{
                    header("Location: index.php?action=profil&error=mailError");
                    exit();
                }
            }
            else{
                header("Location: index.php?action=profil&error=sizeError");
                exit(); 
            }

        }
        else{
            header("Location: index.php?action=profil&error=emptyfield");
            exit();
        }
        
    }

}
