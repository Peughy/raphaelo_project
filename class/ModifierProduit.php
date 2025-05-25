<?php

require_once(MODEL . 'produit_model.php');

class ModifierProduit
{

    // treat the image
    // private function treatImage($image, $nom, $type_produit, $id_produit)
    // {

    //     if ($image["error"] === UPLOAD_ERR_OK) {

    //         // name of the file
    //         $extension  = pathinfo($image["name"], PATHINFO_EXTENSION);
    //         $name_file = str_replace("", "_", $nom) . "_" . $type_produit . "_product." . $extension;
    //         $path = "assets/produitsImages/" . $name_file;

    //         if (move_uploaded_file($image["tmp_name"], $path)) {
    //             return $name_file;
    //         } else {
    //             header("Location: index.php?action=gestion&id_produit=".$id_produit."&error=errorImage&choice=add");
    //             exit(0);
    //         }
    //     } else {
    //         header("Location: index.php?action=gestion&id_produit=".$id_produit."&error=errorImage&choice=add");
    //         exit(0);
    //     }
    // }


    public function updateInformations($id_produit, $nom_produit, $prix, $ingredient, $description, $type_produit, $image)
    {

        if (!empty($nom_produit) && !empty($prix) && !empty($ingredient) && !empty($description) && !empty($type_produit)) {
            $nom_produit = htmlspecialchars(trim($nom_produit));
            $prix = htmlspecialchars(trim($prix));
            $ingredient = htmlspecialchars(trim($ingredient));
            $description = htmlspecialchars(trim($description));
            $type_produit = htmlspecialchars(trim($type_produit));

            if (strlen($nom_produit)) {
                $produit_model = new ModelProduit();

                // $image_name = $this->treatImage($image, $nom_produit, $type_produit, $id_produit);
                $rep = $produit_model->updateProduit($id_produit, $nom_produit, $prix, $ingredient, $description, $type_produit);

                if ($rep) {
                    header("Location: index.php?action=gestion");
                } else {
                    header("Location: index.php?action=gestion&id_produit=".$id_produit."&error=error&choice=modif");
                }
            } else {
                header("Location: index.php?action=gestion&id_produit=".$id_produit."&error=sizeError&choice=modif");
                exit();
            }
        } else {
            header("Location: index.php?action=gestion&id_produit=".$id_produit."&error=emptyfield&choice=modif");
            exit();
        }
    }
}
