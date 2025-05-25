<?php

require_once(MODEL.'produit_model.php');

class AjouterProduit {

    private function getId(): string{
        $caracteres = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
        $len = strlen($caracteres);

        $matricule = "";
        for($i=0; $i<19; $i++){
            $matricule .= $caracteres[rand(0, $len-1)];
        }

        return $matricule;
    }

    // treat the image
    private function treatImage($image, $nom, $type_produit){
    
        if($image["error"] === UPLOAD_ERR_OK)
        {

            // name of the file
            $extension  = pathinfo($image["name"], PATHINFO_EXTENSION);
            $name_file = str_replace("", "_", $nom)."_".$type_produit."_product.".$extension;
            $path = "assets/produitsImages/".$name_file; 

            if(move_uploaded_file($image["tmp_name"], $path)){
                return $name_file;
            }
            else{
                header("Location: index.php?action=gestion&error=errorImage&choice=add");
                exit(0);
            }
            
        }
        else{
            header("Location: index.php?action=gestion&error=errorImage&choice=add");
            exit(0);
        }
    }

    public function setInformations($nom_produit, $prix, $ingredient, $description, $type_produit, $image)
    {

        if(!empty($nom_produit) && !empty($prix) && !empty($ingredient) && !empty($description) && !empty($type_produit))
        {
            $nom_produit = htmlspecialchars(trim($nom_produit));
            $prix = htmlspecialchars(trim($prix));
            $ingredient = htmlspecialchars(trim($ingredient));
            $description = htmlspecialchars(trim($description));
            $type_produit = htmlspecialchars(trim($type_produit));

            if(strlen($nom_produit))
            {
                $produit_model = new ModelProduit();
                $matricule = $this->getId();
                $data = $produit_model->getExist($nom_produit, $type_produit);

                    if(!$data)
                    {
                        $image_name = $this->treatImage($image, $nom_produit, $type_produit);
                        $rep = $produit_model->addProduit($matricule, $nom_produit, $prix, $ingredient, $description, $type_produit, $image_name);

                        if($rep){
                            header("Location: index.php?action=gestion");
                        }
                        else{
                            header("Location: index.php?action=gestion&error=error&choice=add");
                        }
                    }
                    else{
                        header("Location: index.php?action=gestion&error=accountExist&choice=add");
                        exit();
                    }
            }
            else{
                header("Location: index.php?action=gestion&error=sizeError&choice=add");
                exit(); 
            }

        }
        else{
            header("Location: index.php?action=gestion&error=emptyfield&choice=add");
            exit();
        }
        
    }

}
