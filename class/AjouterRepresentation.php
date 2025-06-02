<?php

require_once(MODEL . 'localisation_model.php');

class AjouterRepresentation
{

    // treat the image
    private function treatImage($image, $nom)
    {

        if ($image["error"] === UPLOAD_ERR_OK) {

            // name of the file
            $extension  = pathinfo($image["name"], PATHINFO_EXTENSION);
            $name_file = str_replace("", "_", $nom) . "_rep." . $extension;
            $path = "assets/representationImages/" . $name_file;

            if (move_uploaded_file($image["tmp_name"], $path)) {
                return $name_file;
            } else {
                header("Location: index.php?action=gestion&error=errorImage&choice_rep=add");
                exit(0);
            }
        } else {
            header("Location: index.php?action=gestion&error=errorImage&choice_rep=add");
            exit(0);
        }
    }

    public function setInformations($lieu, $phone, $facebook, $instagram, $image)
    {

        if (!empty($lieu) && !empty($phone) && !empty($facebook) && !empty($instagram)) {
            $lieu = htmlspecialchars(trim($lieu));
            $phone = htmlspecialchars(trim($phone));
            $facebook = htmlspecialchars(trim($facebook));
            $instagram = htmlspecialchars(trim($instagram));

            $localisation_model = new ModelLocalisation();
            $image_name = $this->treatImage($image, $lieu);

            $rep = $localisation_model->addRepresentation($lieu, $phone, $facebook, $instagram, $image_name);
            if ($rep) {
                header("Location: index.php?action=gestion");
                exit();
            } else {
                header("Location: index.php?action=gestion&error=error&choice_rep=add");
                exit();
            }
        } else {
            header("Location: index.php?action=gestion&error=emptyfield&choice_rep=add");
            exit();
        }
    }
}
