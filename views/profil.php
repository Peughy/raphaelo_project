<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= CSS ?>profil.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display:ital@0;1&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display:ital@0;1&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <title>Profil</title>
</head>

<body>
    <header class="header">
        <div class="user_infos">
            <h1 class="name"><?= $user["username"] ?></h1>
            <h1 class="email"><?= $user["email"] ?></h1>
            <div>
                <a href="index.php" style="font-size: 20px; color:white;">Acceuil</a>
                <a href="index.php?action=menu" style="font-size: 20px; color:white; margin-left: 12px;">Menu</a>
            </div>
        </div>
        <form class="" action="index.php?action=profil" method="post">
            <input type="submit" value="Deconnexion" name="deconnexion_btn">
        </form>
    </header>

    <!-- navigation  -->
    <div class="navigations">
        <button class="navLinks">Dashboard</button>
        <button class="navLinks <?php if (!isset($_GET["error"])) {
                                    echo "active";
                                } ?>">Mes commandes</button>
        <!-- <button class="navLinks">Mon panier</button> -->
        <button class="navLinks <?php if (isset($_GET["error"])) {
                                    echo "active";
                                } ?>">Profil</button>
    </div>

    <!-- content -->
    <div class="container">
        <h1 class="title"><?php if (isset($_GET["error"])) {
                                echo "Profil";
                            } else {
                                echo "Mes commandes";
                            } ?></h1>

        <!-- dashboard -->
        <div class="dashboard" id="dashboard" style="display: <?php if (isset($_GET["error"])) {
                                                                    echo "none";
                                                                } ?>">
            <!-- card presentation -->
            <div class="card-group">
                <!-- card utilisateur -->
                <div class="card">

                    <!-- header -->
                    <div class="card-header">
                        <p>Commandes livres</p>
                        <svg class="icon" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                            <path fill-rule="evenodd" d="M20 10H4v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-8ZM9 13v-1h6v1a1 1 0 0 1-1 1h-4a1 1 0 0 1-1-1Z" clip-rule="evenodd" />
                            <path d="M2 6a2 2 0 0 1 2-2h16a2 2 0 1 1 0 4H4a2 2 0 0 1-2-2Z" />
                        </svg>

                    </div>

                    <!-- body -->
                    <div class="card-body">
                        <p class="number"><?= $nbr_commandes_livre ?></p>
                    </div>
                </div>

                <div class="card">

                    <!-- header -->
                    <div class="card-header">
                        <p>Commandes en cours</p>
                        <svg class="icon" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linejoin="round" stroke-width="2" d="M10 12v1h4v-1m4 7H6a1 1 0 0 1-1-1V9h14v9a1 1 0 0 1-1 1ZM4 5h16a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V6a1 1 0 0 1 1-1Z" />
                        </svg>

                    </div>

                    <!-- body -->
                    <div class="card-body">
                        <p class="number"><?= $nbr_commandes_encours ?></p>
                    </div>
                </div>

                <!-- card activity -->
                <div class="card">

                    <!-- header -->
                    <div class="card-header">
                        <p>Commentaires</p>
                        <svg class="icon" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                            <path fill-rule="evenodd" d="M3 6a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2v9a2 2 0 0 1-2 2h-6.616l-2.88 2.592C8.537 20.461 7 19.776 7 18.477V17H5a2 2 0 0 1-2-2V6Zm4 2a1 1 0 0 0 0 2h5a1 1 0 1 0 0-2H7Zm8 0a1 1 0 1 0 0 2h2a1 1 0 1 0 0-2h-2Zm-8 3a1 1 0 1 0 0 2h2a1 1 0 1 0 0-2H7Zm5 0a1 1 0 1 0 0 2h5a1 1 0 1 0 0-2h-5Z" clip-rule="evenodd" />
                        </svg>
                    </div>

                    <!-- body -->
                    <div class="card-body">
                        <p class="number"><?= count($commentaires) ?></p>
                    </div>
                </div>
            </div>

            <h1 class="title" style="margin-top: 82px;">Mes commentaires</h1>
            <div class="card-group">
                <?php
                foreach ($commentaires as $commentaire) {
                ?>
                    <div class="card">
                        <p class="date"><?= date("l d M o - H:i", strtotime($commentaire["date_commentaire"])) ?></p>
                        <p class="content"><?= $commentaire["content"] ?></p>
                    </div>
                <?php
                }
                ?>
            </div>
        </div>
        <div class="commandes" id="commandes" style="display: <?php if (isset($_GET["error"])) {
                                                                    echo "none";
                                                                } ?>">
            <form action="index.php?action=profil" method="post" class="form">
                <input type="number" value="<?php if (isset($_POST["num_commande_search"])) {
                                                echo $_POST["num_commande_search"];
                                            } ?>" name="num_commande_search" id="" placeholder="Rechercher une commande">
                <input type="submit" value="Rechercher" name="search_commande_btn">
                <input type="submit" value="Annuler" name="cancel_commande_btn">
            </form>
            <?php if (isset($_POST["num_commande_search"])) {
            ?>
                <p style="font-size: 22px; margin-bottom: 32px;font-weight: bold">Resultat pour le numero <?= $_POST["num_commande_search"] ?> </p>
            <?php
            } ?>
            <p style="font-size: 20px;">Les commandes qui vous attendent</p>
            <table class="table">
                <tr class="head">
                    <td>Numero de commande </td>
                    <td>Date de commande </td>
                    <td>Representation</td>
                    <td>Etat de la commande</td>
                    <td>Date de retrait</td>
                </tr>
                <?php
                foreach ($commandes as $commande) {
                    if ($commande["etat_commande"] == "attente") {
                ?>
                        <tr class="body">
                            <td>
                                <p class="name" id="nums_commande"><?= $commande["num_commande"] ?></p>
                            </td>
                            <td>
                                <p class="name"><?= date("l d M o - H:i", strtotime($commande["date_commnade"])) ?></p>
                            </td>
                            <td>
                                <p class="name"><?= $commande["lieu"] ?></p>
                            </td>
                            <td>
                                <p style="display: inline; margin-top: 16px" class="<?php if ($commande["etat_commande"] == "attente") {
                                                                                        echo "badge-attente";
                                                                                    } else {
                                                                                        echo "badge-livre";
                                                                                    } ?>"><?= $commande["etat_commande"] ?></p>
                            </td>
                            <td><?= date('l d M o', strtotime($commande["date_recup"])) ?> - <?= date('H:i', strtotime($commande["heure_recup"])) ?></td>
                            <td>
                                <button class="delete" id="views_btn_commandes" onclick="">
                                    <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                        <path fill-rule="evenodd" d="M4.998 7.78C6.729 6.345 9.198 5 12 5c2.802 0 5.27 1.345 7.002 2.78a12.713 12.713 0 0 1 2.096 2.183c.253.344.465.682.618.997.14.286.284.658.284 1.04s-.145.754-.284 1.04a6.6 6.6 0 0 1-.618.997 12.712 12.712 0 0 1-2.096 2.183C17.271 17.655 14.802 19 12 19c-2.802 0-5.27-1.345-7.002-2.78a12.712 12.712 0 0 1-2.096-2.183 6.6 6.6 0 0 1-.618-.997C2.144 12.754 2 12.382 2 12s.145-.754.284-1.04c.153-.315.365-.653.618-.997A12.714 12.714 0 0 1 4.998 7.78ZM12 15a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" clip-rule="evenodd" />
                                    </svg>
                                </button>
                            </td>
                        </tr>
                <?php }
                } ?>
            </table>

            <p style="font-size: 20px;">Les commandes passees</p>
            <table class="table">
                <tr class="head">
                    <td>Numero de commande </td>
                    <td>Date de commande </td>
                    <td>Representation</td>
                    <td>Etat de la commande</td>
                    <td>Date de retrait</td>
                </tr>
                <?php
                foreach ($commandes as $commande) {
                    if ($commande["etat_commande"] == "livre") {
                ?>
                        <tr class="body">
                            <td>
                                <p class="name" id="nums_commande"><?= $commande["num_commande"] ?></p>
                            </td>
                            <td>
                                <p class="name"><?= date("l d M o - H:i", strtotime($commande["date_commnade"])) ?></p>
                            </td>
                            <td>
                                <p class="name"><?= $commande["lieu"] ?></p>
                            </td>
                            <td>
                                <p style="display: inline; margin-top: 16px" class="<?php if ($commande["etat_commande"] == "attente") {
                                                                                        echo "badge-attente";
                                                                                    } else {
                                                                                        echo "badge-livre";
                                                                                    } ?>"><?= $commande["etat_commande"] ?></p>
                            </td>
                            <td><?= date('l d M o', strtotime($commande["date_recup"])) ?> - <?= date('H:i', strtotime($commande["heure_recup"])) ?></td>
                            <td>
                                <button class="delete" id="views_btn_commandes" onclick="">
                                    <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                        <path fill-rule="evenodd" d="M4.998 7.78C6.729 6.345 9.198 5 12 5c2.802 0 5.27 1.345 7.002 2.78a12.713 12.713 0 0 1 2.096 2.183c.253.344.465.682.618.997.14.286.284.658.284 1.04s-.145.754-.284 1.04a6.6 6.6 0 0 1-.618.997 12.712 12.712 0 0 1-2.096 2.183C17.271 17.655 14.802 19 12 19c-2.802 0-5.27-1.345-7.002-2.78a12.712 12.712 0 0 1-2.096-2.183 6.6 6.6 0 0 1-.618-.997C2.144 12.754 2 12.382 2 12s.145-.754.284-1.04c.153-.315.365-.653.618-.997A12.714 12.714 0 0 1 4.998 7.78ZM12 15a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" clip-rule="evenodd" />
                                    </svg>
                                </button>
                            </td>
                        </tr>
                <?php }
                } ?>
            </table>
        </div>
        <div class="paniers" id="paniers" style="display: <?php if (isset($_GET["error"])) {
                                                                echo "none";
                                                            } ?>">
        </div>
        <div class="profil" id="profil" style="display: <?php if (isset($_GET["error"])) {
                                                            echo "block";
                                                        } ?>">
            <p class="title">Modification profile</p>
            <?php
            if (isset($error_msg)) {
            ?>
                <p style="background-color: red; font-size: 20px; padding: 12px; border-radius: 16px; color:white; width: 100%"><?= $error_msg ?></p>
            <?php
            }
            ?>
            <form action="index.php?action=profil" method="post">
                <div class="div-input">
                    <label for="">Nom d'utilisateur</label>
                    <input type="text" name="username" value="<?= $user["username"] ?>">
                </div>
                <div class="div-input">
                    <label for="">Adresse mail</label>
                    <input type="email" name="email" value="<?= $user["email"] ?>">
                </div>
                <div class="div-input">
                    <label for="">Mot de passe</label>
                    <input type="password" name="mdp" value="">
                </div>
                <div class="div-input">
                    <label for="">Telephone</label>
                    <input type="text" name="tel" value="<?= $user["phone"] ?>">
                </div>
                <div class="div-submit">
                    <input type="submit" value="Modifier" name="updateBtn">
                </div>
            </form>
        </div>
    </div>

    <div class="main-div" id="commande-view"
        style="transform: <?= (isset($_GET["num_commande"]) && $_GET["num_commande"] != null) ? "translateY(0)" : ""  ?>">

        <div class="div">
            <span id="exit_view_commande">&times;</span>
            <div class="head">
                <?php if (isset($msg)) {
                    echo "<p class=\"erreur\">" . $msg . "</p>";
                } ?>
                <h1 class="title" style="color: red">Visualiser la commande: <?= $commande_all_infos[0]["num_commande"] ?></h1>
                <div class="body">
                    <div class="infos">
                        <h2>Date de la commande</h2>
                        <p><?= $commande_all_infos[0]["date_commnade"] ?></p>
                    </div>
                    <div class="infos">
                        <h2>Recuperation le</h2>
                        <p><?= $commande_all_infos[0]["date_recup"] ?> a <?= $commande_all_infos[0]["heure_recup"] ?></p>
                    </div>
                    <div class="infos">
                        <h2>Pour monsieur</h2>
                        <p><?= $commande_all_infos[0]["username"] ?> (<?= $commande_all_infos[0]["email"] ?>)</p>
                    </div>
                    <div class="infos">
                        <h2>Representation de</h2>
                        <p><?= $commande_all_infos[0]["lieu"] ?></p>
                    </div>
                    <div class="infos">
                        <h2>Etats de la commande</h2>
                        <p style="display: inline; margin-top: 16px" class="<?php if ($commande_all_infos[0]["etat_commande"] == "attente") {
                                                                                echo "badge-attente";
                                                                            } else {
                                                                                echo "badge-livre";
                                                                            } ?>"><?= $commande_all_infos[0]["etat_commande"] ?></p>
                    </div>
                    <p></p>
                    <h1 style="margin: 24px 0;color: red">Visualisation des plats</h1>
                    <p></p>
                    <?php
                    foreach ($commande_all_infos as $commande_detail) {
                    ?>
                        <div>
                            <div class="infos">
                                <h2>Plats</h2>
                                <p><?= $commande_detail["nom_produit"] ?></p>
                            </div>
                            <div class="infos">
                                <h2>Type de plat</h2>
                                <p><?= $commande_detail["type_produit"] ?></p>
                            </div>
                            <div class="infos">
                                <h2>Nombre de plat</h2>
                                <p><?= $commande_detail["qte"] ?> plats</p>
                            </div>
                            <div class="infos">
                                <h2>Supplements</h2>
                                <p><?= $commande_detail["supplement"] ?></p>
                            </div>
                        </div>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</body>

<script src="<?= JS ?>profil.js"></script>

</html>