<?php

require_once(MODEL . 'localisation_model.php');

class ModifierRepresentation
{

    public function updateRepresentation($id, $lieu, $phone, $facebook, $instagram)
    {

        if (!empty($lieu) && !empty($phone) && !empty($facebook) && !empty($instagram)) {
            $lieu = htmlspecialchars(trim($lieu));
            $phone = htmlspecialchars(trim($phone));
            $facebook = htmlspecialchars(trim($facebook));
            $instagram = htmlspecialchars(trim($instagram));

            $localisation_model = new ModelLocalisation();

            $rep = $localisation_model->updateRepresentation($id, $lieu, $phone, $facebook, $instagram);
            if ($rep) {
                header("Location: index.php?action=gestion");
                exit();
            } else {
                header("Location: index.php?action=gestion&id_representation=".$_GET["id_representation"]."&error=error&choice_rep=modif");
                exit();
            }
        } else {
            header("Location: index.php?action=gestion&id_representation=".$_GET["id_representation"]."&error=emptyfield&choice_rep=modif");
            exit();
        }
    }
}
