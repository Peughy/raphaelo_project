    <!-- deleting user -->
    <div class="add-project" id="user_delete"
    style="transform: <?= (isset($_GET["deleteUser"]) && $_GET["deleteUser"] == true) ? "translateY(0)" : ""  ?>">>
        <div class="project">
            <span id="exit_delete_user">&times;</span>
            <p style="margin: 24px 12px;">Voulez vous supprimer l'utilisateur d'ID: <?= $_GET["registration"] ?> ?</p>
            <form action="index.php?action=inscription<?= (isset($_GET["registration"])) ? "&registration=".$_GET["registration"] : "" ?>" method="post">
                <button type="submit" class="btn-sup" name="supprimer">Supprimer</button>
            </form>
        </div>
    </div>


    <!-- edit activity -->
    <div class="add-project" id="edit_activity"
    style="transform: <?= (isset($_GET["modifyActivity"]) && $_GET["modifyActivity"] == true) ? "translateY(0)" : ""  ?>">>
        <div class="activity">
            <span id="exit_edit_activity">&times;</span>
            <div class="image">
                <img src="activitiesImage/<?= $activity["image"] ?>" alt="">
            </div>
            <div class="informations">
            <?php 
                if(isset($_GET["error"]) && !empty($_GET["error"]) && isset($_GET["modifyActivity"])){
                    if($_GET["error"] == "emptyField")
                        $msg = "Veuillez remplir tout les champs!";

                    if($_GET["error"] == "priceLetter")
                        $msg = "Le prix ou le nombre de reservation max est invalide";

                    if($_GET["error"] == "priceNegative")
                        $msg = "Le prix est invalide!";

                    echo "<p class=\"erreur\">".$msg."</p>";
                }  ?>

                <form action="index.php?action=addActivity&numero=<?= $_GET["numero"]?>" method="post">
                    <div class="div-input">
                    <label for="name" class="name">Nom de l'activite</label>
                    <input type="text" name="name" id="name" placeholder="Activite" value="<?= $activity["nom"] ?>">
                </div>
                <div class="div-input">
                    <label for="name" class="name">Prix de l'activite</label>
                    <input type="number" min="0" name="prix" id="name" placeholder="Prix" value="<?= $activity["prix"] ?>">
                </div>
                <div class="div-input">
                    <label for="type" class="name">Type activite</label>
                    <select name="type" id="type">
                        <option value="">--</option>
                        <option value="loisir" <?= ($activity["type"] == "loisir") ? "selected" : "" ?>>Loisirs</option>
                        <option value="hebergement" <?= ($activity["type"] == "hebergement") ? "selected" : "" ?>>Hebergements</option>
                        <option value="restauration" <?= ($activity["type"] == "restauration") ? "selected" : "" ?>>Restauration</option>
                        <option value="excursion" <?= ($activity["type"] == "excursion") ? "selected" : "" ?>>Excursions</option>
                        <option value="enfant" <?= ($activity["type"] == "enfant") ? "selected" : "" ?>>Espace bebe(-5 ans)</option>
                    </select>
                </div>
                <div class="div-input">
                    <label for="name" class="name">Tranche horaire</label>
                    <div class="temps">
                        De <input type="time" min="0" name="temps_debut" id="name"  value="<?= $activity["heure_debut"] ?>">
                        a <input type="time" min="0" name="temps_fin" id="name"  value="<?= $activity["heure_fin"] ?>">
                    </div>
                </div>
                <div class="div-input">
                    <label for="name" class="name">Description</label>
                    <textarea type="number" rows="5" cols="30" name="description" placeholder="Description"><?= $activity["description"] ?></textarea>
                </div>
                <div class="div-input">
                    <p class="title">Destination de l'activite</p>
                    <select name="destination" id="">
                        <option value="">--</option>
                        <option value="enfant" <?= ($activity["destinataire"] == "enfant") ? "selected" : "" ?>>Enfant</option>
                        <option value="adulte" <?= ($activity["destinataire"] == "adulte") ? "selected" : "" ?>>Adulte</option>
                        <option value="tout" <?= ($activity["destinataire"] == "tout") ? "selected" : "" ?>>Tout le monde</option>
                    </select>
                    <br>
                    <p class="title">Cathegorie</p>
                    <select name="cathegorie" id="">
                        <option value="">--</option>
                        <option value="individuelle" <?= ($activity["cathegorie"] == "individuelle") ? "selected" : "" ?>>Individuelle</option>
                        <option value="groupe" <?= ($activity["cathegorie"] == "groupe") ? "selected" : "" ?>>En groupe</option>
                        <option value="mixte" <?= ($activity["cathegorie"] == "mixte") ? "selected" : "" ?>>Mixte</option>
                    </select>
                </div>
                <div class="div-input">
                    <label for="name" class="name">Nombre reservation max</label>
                    <input type="number" min="0" name="nbr_max" id="name" value="<?= $activity["reservation_max"] ?>">
                </div>

                <div class="div-input">
                    <label for="" style="visibility: hidden;">Submit</label>
                    <input type="submit" value="Modifier" name="modifier">
                </div>
                </form>
            </div>
        </div>   
    </div>



    <!-- deleting activity -->
    <div class="add-project" id="user_delete"
    style="transform: <?= (isset($_GET["deleteActivity"]) && $_GET["deleteActivity"] == true) ? "translateY(0)" : ""  ?>">>
        <div class="project">
            <span id="exit_delete_user">&times;</span>
            <?php
             if($activity["reservation"] == 0){ ?>  
                <p style="margin: 24px 12px;">Voulez vous vraiment supprimer l'activite #<?= $_GET["numero"] ?></p>
            <form action="index.php?action=addActivity<?= (isset($_GET["numero"])) ? "&numero=".$_GET["numero"] : "" ?>" method="post">
                <button type="submit" class="btn-sup" name="supprimer">Supprimer</button>
            </form>
            <?php }else{ ?>
                <p style="margin: 24px 12px;">Impossible de supprimer l'activite #<?= $_GET["numero"] ?> car a ete deja reserve!</p>
             <?php } ?>
  
        </div>
    </div>



        <!-- displaying the form to modify  the reservations's informations  -->
        <div class="add-project" id="modify_reservation"
    style="transform: <?= (isset($_GET["modifyReservation"]) && $_GET["modifyReservation"] == true) ? "translateY(0)" : ""  ?>">
        <div class="project">
            <span id="exit_modify_reservation">&times;</span>
            <div class="header">
                <?php 
                if(isset($_GET["error"]) && !empty($_GET["error"]) && isset($_GET["modifyReservation"])){
                    if($_GET["error"] == "emptyField")
                        $msg = "Veuillez remplir tout les champs!";

                    if($_GET["error"] == "nbrIncorrect")
                        $msg = "Le prix est invalide!";

                    echo "<p class=\"erreur\">".$msg."</p>";
                }  ?>
                <p class="title">Traitement de reservation</p>
            </div>
            <form action="index.php?action=reservation_infos<?= (isset($_GET["numero"])) ? "&numero=".$_GET["numero"] : "" ?>" method="post" class="form_activite">
                <div class="div-input">
                    <label for="name" class="name">Nom de l'utilisateur</label>
                    <input type="text" id="name_utilisateur" value="<?= (isset($reservation)) ? $reservation["nom_utilisateur"] : "" ?>" disabled>
                </div>
                <div class="div-input">
                    <label for="email" class="name">Nom de l'activite</label>
                    <input type="email"  name="name_activite" id="name_activite" value="<?= (isset($reservation)) ? $reservation["nom"] : "" ?>" disabled>
                </div>
                <div class="div-input">
                    <label for="nbr" class="name">Nombre de place</label>
                    <input type="number" min="0" name="nbr_reservation" id="nbr" value="<?= (isset($reservation)) ? $reservation["quantite"] : "" ?>" disabled>
                </div>
                <div class="div-input">
                    <label for="date" class="name">Reserver le</label>
                    <input type="date" min="0"  id="date" value="<?= (isset($reservation)) ? $reservation["date_reservation"] : "" ?>" disabled>
                </div>
                <div class="div-input">
                    <label for="date" class="name">Pour le</label>
                    <input type="date" min="0" name="date"  id="date" value="<?= (isset($reservation)) ? $reservation["date"] : "" ?>" disabled>
                </div>
                <div class="div-input">
                    <label for="Submit" style="overflow: hidden;"></label>
                    <label for="Submit" style="overflow: hidden;"></label>
                </div>
                <div class="div-input">
                    <input type="submit" value="Valider" name="valider">
                </div>
                <div class="div-input">
                    <input type="submit" value="Annuler" name="annuler">
                </div>
            </form>
        </div>
    </div>



        <!-- displaying the form to modify  the user's informations  -->
        <div class="add-project" id="modify_users"
    style="transform: <?= (isset($_GET["modifyUser"]) && $_GET["modifyUser"] == true) ? "translateY(0)" : ""  ?>">
        <div class="project">
            <span id="exit_modify">&times;</span>
            <div class="header">
                <?php 
                if(isset($_GET["error"]) && !empty($_GET["error"]) && isset($_GET["modifyUser"])){
                    if($_GET["error"] == "emptyField")
                        $msg = "Veuillez remplir tout les champs!";

                    if($_GET["error"] == "errorEmail")
                        $msg = "L'adresse mail n'est pas valide!";

                    if($_GET["error"] == "nbrIncorrect")
                        $msg = "Le prix est invalide!";

                    echo "<p class=\"erreur\">".$msg."</p>";
                }  ?>
                <p class="title">Modifier un utilisateur</p>
            </div>
            <form action="index.php?action=inscription<?= (isset($_GET["registration"])) ? "&registration=".$_GET["registration"] : "" ?>" method="post">
                <div class="div-input">
                    <label for="name" class="name">Nom de l'utilisateur</label>
                    <input type="text" name="name" id="name" value="<?= (isset($one_users)) ? $one_users["nom_utilisateur"] : "" ?>">
                </div>
                <div class="div-input">
                    <label for="email" class="name">Email de l'utilisateur</label>
                    <input type="email"  name="email" id="email" value="<?= (isset($one_users)) ? $one_users["email"] : "" ?>">
                </div>
                <div class="div-input">
                    <label for="nbr" class="name">Nombre de reservation</label>
                    <input type="number" min="0" name="nbr_reservation" id="nbr" value="<?= (isset($one_users)) ? $one_users["nbr_reservation"] : "" ?>">
                </div>
                <div class="div-input">
                    <label for="date" class="name">Date d'inscription</label>
                    <input type="date" min="0" name="date_inscription" id="date" value="<?= (isset($one_users)) ? $one_users["date_inscription"] : "" ?>">
                </div>
                <div class="div-input">
                        <input type="submit" value="Modifier" name="modifier">
                </div>
            </form>
        </div>
    </div>