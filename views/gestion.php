<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= CSS ?>gestion.css">
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
    <title>Gestion</title>
</head>

<body>

    <!-- content the link's bar -->
    <div class="sidebar">
        <div class="brand">
            <img src="<?= IMG ?>logo-light.png" alt="">
        </div>
        <hr>

        <!-- links -->
        <div class="Glinks">
            <div class="links">
                <ul>
                    <li>
                        <button href="" id="link" class="link">
                            <svg class="" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                <path fill-rule="evenodd" d="M12 6a3.5 3.5 0 1 0 0 7 3.5 3.5 0 0 0 0-7Zm-1.5 8a4 4 0 0 0-4 4 2 2 0 0 0 2 2h7a2 2 0 0 0 2-2 4 4 0 0 0-4-4h-3Zm6.82-3.096a5.51 5.51 0 0 0-2.797-6.293 3.5 3.5 0 1 1 2.796 6.292ZM19.5 18h.5a2 2 0 0 0 2-2 4 4 0 0 0-4-4h-1.1a5.503 5.503 0 0 1-.471.762A5.998 5.998 0 0 1 19.5 18ZM4 7.5a3.5 3.5 0 0 1 5.477-2.889 5.5 5.5 0 0 0-2.796 6.293A3.501 3.501 0 0 1 4 7.5ZM7.1 12H6a4 4 0 0 0-4 4 2 2 0 0 0 2 2h.5a5.998 5.998 0 0 1 3.071-5.238A5.505 5.505 0 0 1 7.1 12Z" clip-rule="evenodd" />
                            </svg>
                            Clients
                        </button>
                    </li>
                    <li>
                        <button href="" id="link" class="link active">
                            <svg class="" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M4 5a2 2 0 0 0-2 2v2.5a1 1 0 0 0 1 1 1.5 1.5 0 1 1 0 3 1 1 0 0 0-1 1V17a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-2.5a1 1 0 0 0-1-1 1.5 1.5 0 1 1 0-3 1 1 0 0 0 1-1V7a2 2 0 0 0-2-2H4Z" />
                            </svg>
                            Commandes
                        </button>
                    </li>
                    <li>
                        <button href="" id="link" class="link">
                            <svg class="" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                <path fill-rule="evenodd" d="M20 10H4v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-8ZM9 13v-1h6v1a1 1 0 0 1-1 1h-4a1 1 0 0 1-1-1Z" clip-rule="evenodd" />
                                <path d="M2 6a2 2 0 0 1 2-2h16a2 2 0 1 1 0 4H4a2 2 0 0 1-2-2Z" />
                            </svg>
                            Menu - Recette
                        </button>
                    </li>
                    <li>
                        <button href="" id="link" class="link">
                            <svg class="" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                <path fill-rule="evenodd" d="M5.535 7.677c.313-.98.687-2.023.926-2.677H17.46c.253.63.646 1.64.977 2.61.166.487.312.953.416 1.347.11.42.148.675.148.779 0 .18-.032.355-.09.515-.06.161-.144.3-.243.412-.1.111-.21.192-.324.245a.809.809 0 0 1-.686 0 1.004 1.004 0 0 1-.324-.245c-.1-.112-.183-.25-.242-.412a1.473 1.473 0 0 1-.091-.515 1 1 0 1 0-2 0 1.4 1.4 0 0 1-.333.927.896.896 0 0 1-.667.323.896.896 0 0 1-.667-.323A1.401 1.401 0 0 1 13 9.736a1 1 0 1 0-2 0 1.4 1.4 0 0 1-.333.927.896.896 0 0 1-.667.323.896.896 0 0 1-.667-.323A1.4 1.4 0 0 1 9 9.74v-.008a1 1 0 0 0-2 .003v.008a1.504 1.504 0 0 1-.18.712 1.22 1.22 0 0 1-.146.209l-.007.007a1.01 1.01 0 0 1-.325.248.82.82 0 0 1-.316.08.973.973 0 0 1-.563-.256 1.224 1.224 0 0 1-.102-.103A1.518 1.518 0 0 1 5 9.724v-.006a2.543 2.543 0 0 1 .029-.207c.024-.132.06-.296.11-.49.098-.385.237-.85.395-1.344ZM4 12.112a3.521 3.521 0 0 1-1-2.376c0-.349.098-.8.202-1.208.112-.441.264-.95.428-1.46.327-1.024.715-2.104.958-2.767A1.985 1.985 0 0 1 6.456 3h11.01c.803 0 1.539.481 1.844 1.243.258.641.67 1.697 1.019 2.72a22.3 22.3 0 0 1 .457 1.487c.114.433.214.903.214 1.286 0 .412-.072.821-.214 1.207A3.288 3.288 0 0 1 20 12.16V19a2 2 0 0 1-2 2h-6a1 1 0 0 1-1-1v-4H8v4a1 1 0 0 1-1 1H6a2 2 0 0 1-2-2v-6.888ZM13 15a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1v-2Z" clip-rule="evenodd" />
                            </svg>

                            Representations
                        </button>
                    </li>
                </ul>
            </div>
            <div style="padding: 24px 0 24px 24px; margin: 12px 0;">
                <button name="" href="" id="link" class="link" style="margin: 32px 0;">
                    <svg class="" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                        <path fill-rule="evenodd" d="M17 10v1.126c.367.095.714.24 1.032.428l.796-.797 1.415 1.415-.797.796c.188.318.333.665.428 1.032H21v2h-1.126c-.095.367-.24.714-.428 1.032l.797.796-1.415 1.415-.796-.797a3.979 3.979 0 0 1-1.032.428V20h-2v-1.126a3.977 3.977 0 0 1-1.032-.428l-.796.797-1.415-1.415.797-.796A3.975 3.975 0 0 1 12.126 16H11v-2h1.126c.095-.367.24-.714.428-1.032l-.797-.796 1.415-1.415.796.797A3.977 3.977 0 0 1 15 11.126V10h2Zm.406 3.578.016.016c.354.358.574.85.578 1.392v.028a2 2 0 0 1-3.409 1.406l-.01-.012a2 2 0 0 1 2.826-2.83ZM5 8a4 4 0 1 1 7.938.703 7.029 7.029 0 0 0-3.235 3.235A4 4 0 0 1 5 8Zm4.29 5H7a4 4 0 0 0-4 4v1a2 2 0 0 0 2 2h6.101A6.979 6.979 0 0 1 9 15c0-.695.101-1.366.29-2Z" clip-rule="evenodd" />
                    </svg>

                    Profil
                </button>
                <form action="index.php?action=gestion" method="post">
                    <button type="submit" name="logout_btn" href="" id="" class="link">
                        <svg class="" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12H8m12 0-4 4m4-4-4-4M9 4H7a3 3 0 0 0-3 3v10a3 3 0 0 0 3 3h2" />
                        </svg>
                        Deconnexion
                    </button>
                </form>
            </div>
        </div>
    </div>

    <!-- displaying all the content of this page -->
    <div class="container">
        <nav class="navigation">
            <div class="menu">
                <svg class="" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="M5 7h14M5 12h14M5 17h10" />
                </svg>
                <div class="search">
                    <input type="search" name="" id="" placeholder="Rechercher...">
                </div>
            </div>
            <div class="">
                <span class="letterOne">
                    <p>
                        <?= ucfirst($user_prop["username"][0]) ?>
                    </p>
                </span>
                <div class="info_userProp">
                    <p class="name"><?= ucfirst($user_prop["username"]) ?></p>
                    <p class="role">Admin</p>
                </div>
            </div>
        </nav>

        <!-- header content section -->
        <header></header>


        <!-- content section -->
        <div class="content">

            <!-- title section -->
            <div style="display: flex; align-items: center; justify-content:space-between">
                <div class="title">
                    <h1 style="color: #ff0000">Gestion Raphaëlo</h1>
                </div>
                <div class="add-message">
                    <button class="add" id="btnAddRepresenatation">
                        <svg class="" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14m-7 7V5" />
                        </svg>
                        Ajouter une representation
                    </button>
                </div>
            </div>

            <!-- card presentation -->
            <div class="card-group">
                <!-- card utilisateur -->
                <div class="card">

                    <!-- header -->
                    <div class="card-header">
                        <p>Clients</p>
                        <svg class="icon" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                            <path fill-rule="evenodd" d="M12 6a3.5 3.5 0 1 0 0 7 3.5 3.5 0 0 0 0-7Zm-1.5 8a4 4 0 0 0-4 4 2 2 0 0 0 2 2h7a2 2 0 0 0 2-2 4 4 0 0 0-4-4h-3Zm6.82-3.096a5.51 5.51 0 0 0-2.797-6.293 3.5 3.5 0 1 1 2.796 6.292ZM19.5 18h.5a2 2 0 0 0 2-2 4 4 0 0 0-4-4h-1.1a5.503 5.503 0 0 1-.471.762A5.998 5.998 0 0 1 19.5 18ZM4 7.5a3.5 3.5 0 0 1 5.477-2.889 5.5 5.5 0 0 0-2.796 6.293A3.501 3.501 0 0 1 4 7.5ZM7.1 12H6a4 4 0 0 0-4 4 2 2 0 0 0 2 2h.5a5.998 5.998 0 0 1 3.071-5.238A5.505 5.505 0 0 1 7.1 12Z" clip-rule="evenodd" />
                        </svg>
                    </div>

                    <!-- body -->
                    <div class="card-body">
                        <p class="number"><?= $nbrs_client ?></p>
                    </div>
                </div>

                <!-- card activity -->
                <div class="card">

                    <!-- header -->
                    <div class="card-header">
                        <p>Commandes</p>
                        <svg class="icon" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M4 5a2 2 0 0 0-2 2v2.5a1 1 0 0 0 1 1 1.5 1.5 0 1 1 0 3 1 1 0 0 0-1 1V17a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-2.5a1 1 0 0 0-1-1 1.5 1.5 0 1 1 0-3 1 1 0 0 0 1-1V7a2 2 0 0 0-2-2H4Z" />
                        </svg>

                    </div>

                    <!-- body -->
                    <div class="card-body">
                        <p class="number"><?= count($commande_infos) ?></p>
                    </div>
                </div>

                <div class="card">

                    <!-- header -->
                    <div class="card-header">
                        <p>Menu - Recettes</p>
                        <svg class="icon" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                            <path fill-rule="evenodd" d="M20 10H4v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-8ZM9 13v-1h6v1a1 1 0 0 1-1 1h-4a1 1 0 0 1-1-1Z" clip-rule="evenodd" />
                            <path d="M2 6a2 2 0 0 1 2-2h16a2 2 0 1 1 0 4H4a2 2 0 0 1-2-2Z" />
                        </svg>
                    </div>

                    <!-- body -->
                    <div class="card-body">
                        <p class="number"><?= count($products_infos) ?></p>
                    </div>
                </div>

                <div class="card">

                    <!-- header -->
                    <div class="card-header">
                        <p>Representations</p>
                        <svg class="icon" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                            <path fill-rule="evenodd" d="M5.535 7.677c.313-.98.687-2.023.926-2.677H17.46c.253.63.646 1.64.977 2.61.166.487.312.953.416 1.347.11.42.148.675.148.779 0 .18-.032.355-.09.515-.06.161-.144.3-.243.412-.1.111-.21.192-.324.245a.809.809 0 0 1-.686 0 1.004 1.004 0 0 1-.324-.245c-.1-.112-.183-.25-.242-.412a1.473 1.473 0 0 1-.091-.515 1 1 0 1 0-2 0 1.4 1.4 0 0 1-.333.927.896.896 0 0 1-.667.323.896.896 0 0 1-.667-.323A1.401 1.401 0 0 1 13 9.736a1 1 0 1 0-2 0 1.4 1.4 0 0 1-.333.927.896.896 0 0 1-.667.323.896.896 0 0 1-.667-.323A1.4 1.4 0 0 1 9 9.74v-.008a1 1 0 0 0-2 .003v.008a1.504 1.504 0 0 1-.18.712 1.22 1.22 0 0 1-.146.209l-.007.007a1.01 1.01 0 0 1-.325.248.82.82 0 0 1-.316.08.973.973 0 0 1-.563-.256 1.224 1.224 0 0 1-.102-.103A1.518 1.518 0 0 1 5 9.724v-.006a2.543 2.543 0 0 1 .029-.207c.024-.132.06-.296.11-.49.098-.385.237-.85.395-1.344ZM4 12.112a3.521 3.521 0 0 1-1-2.376c0-.349.098-.8.202-1.208.112-.441.264-.95.428-1.46.327-1.024.715-2.104.958-2.767A1.985 1.985 0 0 1 6.456 3h11.01c.803 0 1.539.481 1.844 1.243.258.641.67 1.697 1.019 2.72a22.3 22.3 0 0 1 .457 1.487c.114.433.214.903.214 1.286 0 .412-.072.821-.214 1.207A3.288 3.288 0 0 1 20 12.16V19a2 2 0 0 1-2 2h-6a1 1 0 0 1-1-1v-4H8v4a1 1 0 0 1-1 1H6a2 2 0 0 1-2-2v-6.888ZM13 15a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1v-2Z" clip-rule="evenodd" />
                        </svg>

                    </div>

                    <!-- body -->
                    <div class="card-body">
                        <p class="number"><?= count($representations_infos) ?></p>
                    </div>
                </div>


            </div>

            <!-- projects description -->
            <div class="header">
                <p id="title">Commandes</p>
            </div>

            <!-- client -->
            <div class="client-presentation">
                <div class="project-display" id="project-lists">
                    <table class="table">
                        <tr class="head">
                            <td>Nom </td>
                            <td>Telephone </td>
                            <td>Date d'inscription</td>
                            <td>Type de compte</td>
                        </tr>
                        <?php
                        foreach ($users_informations as $users_information) {
                            if ($users_information["type_account"] == "client") {
                        ?>
                                <tr class="body">
                                    <td>
                                        <div class="infos">
                                            <p class="name"><?= $users_information["username"] ?></p>
                                            <p class="email"><?= $users_information["email"] ?></p>
                                            <p id="registrations" style="display: none;"><?= $users_information["id_user"] ?></p>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="name"><?= $users_information["phone"] ?></p>
                                    </td>
                                    <td><?= date('d/m/Y H:m:s', strtotime($users_information["date_inscription"])) ?></td>
                                    <td>
                                        <p class="name"> <?= ucfirst($users_information["type_account"]) ?> (e)</p>
                                    </td>
                                </tr>
                        <?php }
                        } ?>
                    </table>
                </div>
            </div>

            <!-- commandes -->
            <div class="commande-presentation">
                <form action="index.php?action=gestion" method="post" class="form">
                    <input type="number" value="<?php if (isset($_POST["num_commande_search"])) {
                                                    echo $_POST["num_commande_search"];
                                                } ?>" name="num_commande_search" id="" placeholder="Rechercher une commande">
                    <input type="submit" value="Rechercher" name="search_commande_btn">
                    <input type="submit" value="Annuler" name="cancel_commande_btn">
                </form>
                <div class="project-display" id="project-lists">
                    <table class="table">
                        <tr class="head">
                            <td>Date Commande</td>
                            <td>Nom client </td>
                            <td>Tel client</td>
                            <td>Representation agence</td>
                            <td>Etat de la commande</td>
                        </tr>
                        <?php
                        foreach ($commande_infos as $commande_info) {
                            if ($commande_info) {
                        ?>
                                <tr class="body">
                                    <td>
                                        <div class="infos">
                                            <p class="name"><?= date('d/m/Y H:m:s', strtotime($commande_info["date_commnade"])) ?></p>
                                            <p id="ids_commande" style="display: none;"><?= $commande_info["num_commande"] ?></p>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="email"><?= $commande_info["username"] ?></p>
                                    </td>
                                    <td>
                                        <p class="name"><?= $commande_info["phone"] ?></p>
                                    </td>
                                    <td>
                                        <p class="name"><?= $commande_info["lieu"] ?></p>
                                    </td>
                                    <td>
                                        <p style="display: inline;" class="<?php if ($commande_info["etat_commande"] == "attente") {
                                                                                echo "badge-attente";
                                                                            } else {
                                                                                echo "badge-livre";
                                                                            } ?>"><?= $commande_info["etat_commande"] ?></p>
                                    </td>
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
            </div>

            <!-- produits -->
            <div class="produit-presentation">
                <form action="index.php?action=gestion" method="post" class="form">
                    <input type="name" value="<?php if (isset($_POST["name_menu_search"])) {
                                                    echo $_POST["name_menu_search"];
                                                } ?>" name="name_menu_search" id="" placeholder="Rechercher un menu">
                    <input type="submit" value="Rechercher" name="search_menu_btn">
                    <input type="submit" value="Annuler" name="cancel_menu_btn">
                </form>
                <div class="add-message">
                    <button class="add" id="btnAddProduct">
                        <svg class="" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14m-7 7V5" />
                        </svg>
                        Ajouter un menu
                    </button>
                </div>
                <div class="activite-group">
                    <?php
                    foreach ($products_infos as $products_info) {
                        if ($products_info) { ?>
                            <div class="activite-card">

                                <!-- activite header -->
                                <div class="activite-header">
                                    <img src="assets/produitsImages/<?= $products_info["image"] ?>" alt="">
                                </div>

                                <!-- body -->
                                <div class="activite-body">
                                    <p class="title"><?= $products_info["nom_produit"] ?></p>
                                    <p class="notes"><?= $products_info["prix"] ?> FCFA</p>
                                </div>
                                <div class="activite-body">
                                    <p class="notes"><?= ucfirst($products_info["type_produit"]) ?></p>
                                </div>

                                <div class="activite-footer">
                                    <p class="numero"><span id="ids_produits"><?= $products_info["id_produit"] ?></span></p>
                                    <div class="actions">
                                        <button class="edit" id="view_menus">
                                            <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                                <path fill-rule="evenodd" d="M11.32 6.176H5c-1.105 0-2 .949-2 2.118v10.588C3 20.052 3.895 21 5 21h11c1.105 0 2-.948 2-2.118v-7.75l-3.914 4.144A2.46 2.46 0 0 1 12.81 16l-2.681.568c-1.75.37-3.292-1.263-2.942-3.115l.536-2.839c.097-.512.335-.983.684-1.352l2.914-3.086Z" clip-rule="evenodd" />
                                                <path fill-rule="evenodd" d="M19.846 4.318a2.148 2.148 0 0 0-.437-.692 2.014 2.014 0 0 0-.654-.463 1.92 1.92 0 0 0-1.544 0 2.014 2.014 0 0 0-.654.463l-.546.578 2.852 3.02.546-.579a2.14 2.14 0 0 0 .437-.692 2.244 2.244 0 0 0 0-1.635ZM17.45 8.721 14.597 5.7 9.82 10.76a.54.54 0 0 0-.137.27l-.536 2.84c-.07.37.239.696.588.622l2.682-.567a.492.492 0 0 0 .255-.145l4.778-5.06Z" clip-rule="evenodd" />
                                            </svg>

                                        </button>
                                    </div>
                                </div>
                            </div>
                    <?php }
                    } ?>
                </div>
            </div>

            <!-- commandes -->
            <div class="localisation-presentation">
                <div class="project-display" id="project-lists">
                    <table class="table">
                        <tr class="head">
                            <td>Lieu</td>
                            <td>Telephone </td>
                            <td>Facebook</td>
                            <td>Instagram</td>
                        </tr>
                        <?php
                        foreach ($representations_infos as $representations_info) {
                            if ($representations_info) {
                        ?>
                                <tr class="body">
                                    <td>
                                        <p class="email"><?= $representations_info["lieu"] ?></p>
                                        <p id="id_representations" style="display: none;"><?= $representations_info["id_representation"] ?></p>
                                    </td>
                                    <td>
                                        <p class="email"><?= $representations_info["tel"] ?></p>
                                    </td>
                                    <td>
                                        <p class="name"><?= $representations_info["facebook"] ?></p>
                                    </td>
                                    <td>
                                        <p class="name"><?= $representations_info["instagram"] ?></p>
                                    </td>
                                    <td>
                                        <button class="delete" id="views_btn_representations" onclick="">
                                            <svg class="" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                                <path fill-rule="evenodd" d="M11.32 6.176H5c-1.105 0-2 .949-2 2.118v10.588C3 20.052 3.895 21 5 21h11c1.105 0 2-.948 2-2.118v-7.75l-3.914 4.144A2.46 2.46 0 0 1 12.81 16l-2.681.568c-1.75.37-3.292-1.263-2.942-3.115l.536-2.839c.097-.512.335-.983.684-1.352l2.914-3.086Z" clip-rule="evenodd" />
                                                <path fill-rule="evenodd" d="M19.846 4.318a2.148 2.148 0 0 0-.437-.692 2.014 2.014 0 0 0-.654-.463 1.92 1.92 0 0 0-1.544 0 2.014 2.014 0 0 0-.654.463l-.546.578 2.852 3.02.546-.579a2.14 2.14 0 0 0 .437-.692 2.244 2.244 0 0 0 0-1.635ZM17.45 8.721 14.597 5.7 9.82 10.76a.54.54 0 0 0-.137.27l-.536 2.84c-.07.37.239.696.588.622l2.682-.567a.492.492 0 0 0 .255-.145l4.778-5.06Z" clip-rule="evenodd" />
                                            </svg>

                                        </button>
                                    </td>
                                </tr>
                        <?php }
                        } ?>
                    </table>
                </div>
            </div>

            <!-- profil -->
            <div class="profil-sections">
                <p class="title">Modification profile</p>
                <form action="" method="post">
                    <div class="div-input">
                        <label for="">Nom d'utilisateur</label>
                        <input type="text" name="username" value="<?= $user_prop["username"] ?>">
                    </div>
                    <div class="div-input">
                        <label for="">Adresse mail</label>
                        <input type="email" name="email" value="<?= $user_prop["email"] ?>">
                    </div>
                    <div class="div-input">
                        <label for="">Mot de passe</label>
                        <input type="password" name="mdp" value="">
                    </div>
                    <div class="div-input">
                        <label for="">Telephone</label>
                        <input type="text" name="tel" value="<?= $user_prop["phone"] ?>">
                    </div>
                    <div class="div-submit">
                        <input type="submit" value="Modifier">
                    </div>
                </form>
            </div>
        </div>

    </div>

    <!-- displaying the form to add a livreur -->
    <div class="add-project" id="add-project"
        style="transform: <?= (isset($_GET["addLivreur"]) && $_GET["addLivreur"] == true) ? "translateY(0)" : ""  ?>">

        <div class="project">
            <span id="exit">&times;</span>
            <div class="header">
                <?php if (isset($msg)) {
                    echo "<p class=\"erreur\">" . $msg . "</p>";
                } ?>
                <h1 class="title">Ajouter une commande</h1>
            </div>
            <form action="index.php?action=gestion" method="post" enctype="multipart/form-data" class="form_activite">
                <div class="div-input">
                    <label for="name" class="name">Nom du client</label>
                    <input type="text" name="name" id="nom" placeholder="Nom d'utilisateur">
                </div>
                <div class="div-input">
                    <label for="name" class="name">Adresse mail</label>
                    <input type="email" min="0" name="email" id="name" placeholder="Prix">
                </div>
                <div class="div-input">
                    <label for="name" class="name">Telephone</label>
                    <input type="tel" name="tel" id="nom" placeholder="+237 Telephone">
                </div>
                <div class="div-input">
                    <label for="name" class="name">Mot de passe</label>
                    <input type="password" min="0" name="pwd" id="name" placeholder="Mot de passe">
                </div>
                <div class="div-input">
                    <label for="type" class="name">Representation associe</label>
                    <select name="representation" id="type" style="cursor: pointer;">
                        <option value="">--</option>
                        <?php
                        foreach ($representations as $representation) { ?>
                            <option value="<?= $representation["id_representation"] ?>"><?= $representation["lieu"] ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="div-input">
                    <label for="" style="visibility: hidden;">Submit</label>
                    <input type="submit" value="Ajouter" name="ajouter">
                </div>
            </form>
        </div>
    </div>


    <!-- add produit  -->
    <div class="add-project" id="add_product"
        style="transform: <?= (isset($_GET["choice"]) && $_GET["choice"]) ? "translateY(0)" : ""  ?>">
        <div class="project">
            <span id="exit_add_produit">&times;</span>
            <div class="header">
                <?php if (isset($msg)) {
                    echo "<p class=\"erreur\">" . $msg . "</p>";
                } ?>
                <h1 class="title">
                    <?php
                    if ($choice == "modif") {
                        echo "Modifier ";
                    } else {
                        echo "Ajouter ";
                    }
                    ?> un menu</h1>
            </div>
            <form action="<?php
                            if ($choice == "modif") {
                                echo "index.php?action=gestion&id_produit=" . $_GET["id_produit"] . "&choice=modif";
                            } else {
                                echo "index.php?action=gestion&choice=add ";
                            }
                            ?>" enctype="multipart/form-data" method="post" enctype="multipart/form-data" class="form_activite">
                <div class="div-input">
                    <label for="name" class="name">Nom du produit</label>
                    <input type="text" placeholder="Nom produit" name="name" value="<?php if (isset($produit)) {
                                                                                        echo $produit["nom_produit"];
                                                                                    } ?>">
                </div>
                <div class="div-input">
                    <label for="name" class="name">Prix du produit</label>
                    <input type="number" min="0" placeholder="Prix" name="prix" value="<?php if (isset($produit)) {
                                                                                            echo $produit["prix"];
                                                                                        } ?>">
                </div>
                <div class="div-input">
                    <label for="" class="name">Ingredients</label>
                    <textarea name="ingredient" id="" cols="10" rows="8" placeholder="ecrivez..."><?php if (isset($produit)) {
                                                                                                        echo $produit["ingredient"];
                                                                                                    } ?></textarea>
                </div>
                <div class="div-input">
                    <label for="" class="name">Description</label>
                    <textarea name="description" id="" cols="15" rows="10" placeholder="ecrivez..."><?php if (isset($produit)) {
                                                                                                        echo $produit["description"];
                                                                                                    } ?></textarea>
                </div>
                <div class="div-input">

                    <?php
                    if ($choice == "add") { ?>
                        <label for="name" class="name">Photo d'illustration</label>
                        <input type="file" name="image" id="">
                    <?php

                    } else { ?>
                        <img src="assets/produitsImages/<?= $produit["image"] ?>" alt="" style="object-fit: cover; width: 100%; height: 150px; border-radius: 16px">
                    <?php
                    }
                    ?>
                </div>
                <div class="div-input">
                    <label for="" class="name">Type de produit</label>
                    <select name="type_produit" id="">
                        <option value="">--</option>
                        <option value="simple" <?php if (isset($produit) && $produit["type_produit"] == "simple") {
                                                    echo "selected";
                                                } ?>>Simple</option>
                        <option value="large" <?php if (isset($produit) && $produit["type_produit"] == "large") {
                                                    echo "selected";
                                                } ?>>Large</option>
                        <option value="famille" <?php if (isset($produit) && $produit["type_produit"] == "famille") {
                                                    echo "selected";
                                                } ?>>Famille</option>
                    </select>
                </div>
                <?php
                if ($choice == "modif") {
                ?>
                    <div>
                        <div class="div-input">
                            <label for="" style="visibility: hidden">Submit</label>
                            <input type="submit" value="Supprimer le menu" name="supprimer_produit">
                        </div>
                    </div>
                <?php
                } ?>
                <div class="div-input">
                    <label for="" style="visibility: hidden">Submit</label>
                    <?php
                    if ($choice == "modif") {
                    ?>
                        <input type="submit" value="Modifier le menu" name="modifier_produit">
                    <?php
                    } else { ?>
                        <input type="submit" value="Ajouter le menu" name="ajouter_produit">
                    <?php
                    }
                    ?>
                </div>
            </form>
        </div>
    </div>

    <!-- display detail commande -->
    <div class="add-project" id="view_commande"
        style="transform: <?= (isset($_GET["numero_commande"]) && $_GET["numero_commande"] != null) ? "translateY(0)" : ""  ?>">

        <div class="project">
            <span id="exit_view_commande">&times;</span>
            <div class="header">
                <?php if (isset($msg)) {
                    echo "<p class=\"erreur\">" . $msg . "</p>";
                } ?>
                <h1 class="title">Visualiser une commande numero <?= $commande[0]["num_commande"] ?></h1>
            </div>
            <?php
            if (isset($commande_msg)) {
            ?>
                <p class="commande_msg">La commande a ete livre</p>
            <?php }
            ?>
            <div class="body">
                <div class="infos">
                    <h1>Date de la commande</h1>
                    <p><?= $commande[0]["date_commnade"] ?></p>
                </div>
                <div class="infos">
                    <h1>Recuperation le</h1>
                    <p><?= $commande[0]["date_recup"] ?> a <?= $commande[0]["heure_recup"] ?></p>
                </div>
                <div class="infos">
                    <h1>Pour monsieur</h1>
                    <p><?= $commande[0]["username"] ?> (<?= $commande[0]["email"] ?>)</p>
                </div>
                <div class="infos">
                    <h1>Representation de</h1>
                    <p><?= $commande[0]["lieu"] ?></p>
                </div>
                <div class="infos">
                    <h1>Etats de la commande</h1>
                    <p style="display: inline; margin-top: 16px" class="<?php if ($commande[0]["etat_commande"] == "attente") {
                                                                            echo "badge-attente";
                                                                        } else {
                                                                            echo "badge-livre";
                                                                        } ?>"><?= $commande[0]["etat_commande"] ?></p>
                </div>
                <p></p>
                <h1 style="margin: 24px 0;">Visualisation des plats</h1>
                <p></p>
                <?php
                foreach ($commande as $commande_detail) {
                ?>
                    <div>
                        <div class="infos">
                            <h1>Plats</h1>
                            <p><?= $commande_detail["nom_produit"] ?></p>
                        </div>
                        <div class="infos">
                            <h1>Type de plat</h1>
                            <p><?= $commande_detail["type_produit"] ?></p>
                        </div>
                        <div class="infos">
                            <h1>Nombre de plat</h1>
                            <p><?= $commande_detail["qte"] ?> plats</p>
                        </div>
                        <div class="infos">
                            <h1>Supplements</h1>
                            <p><?= $commande_detail["supplement"] ?></p>
                        </div>
                    </div>
                <?php
                }
                ?>
            </div>
            <?php
            if ($commande[0]["etat_commande"] == "attente") {
            ?>
                <form class="form_commande" action="index.php?action=gestion&numero_commande=<?= $commande[0]["num_commande"] ?>" method="post">
                    <input type="submit" name="brn_commande_livre" value="Marquer comme livre">
                </form>
            <?php
            } ?>

        </div>
    </div>
    

    <!-- add representation  -->
    <div class="add-project" id="add_representation"
        style="transform:  <?= (isset($_GET["choice_rep"]) && $_GET["choice_rep"]) ? "translateY(0)" : ""  ?>">
        <div class="project">
            <span id="exit_add_representation">&times;</span>
            <div class="header">
                <?php if (isset($msg)) {
                    echo "<p class=\"erreur\">" . $msg . "</p>";
                } ?>
                <h1 class="title">
                    <?php
                    if ($choice_rep == "modif") {
                        echo "Modifier ";
                    } else {
                        echo "Ajouter ";
                    }
                    ?> une representation</h1>
            </div>
            <form action="<?php
                            if ($choice_rep == "modif") {
                                echo "index.php?action=gestion&id_representation=" . $_GET["id_representation"] . "&choice_rep=modif";
                            } else {
                                echo "index.php?action=gestion&choice_rep=add ";
                            }
                            ?>" enctype="multipart/form-data" method="post" enctype="multipart/form-data" class="form_activite">
                <div class="div-input">
                    <label for="name" class="name">Lieu</label>
                    <input type="text" placeholder="Lieu" name="lieu" value="<?php if (isset($representation)) {
                                                                                        echo $representation["lieu"];
                                                                                    } ?>">
                </div>
                <div class="div-input">
                    <label for="name" class="name">Telephone</label>
                    <input type="name"  placeholder="Telephone" name="phone" value="<?php if (isset($representation)) {
                                                                                            echo $representation["tel"];
                                                                                        } ?>">
                </div>
                <div class="div-input">
                    <label for="name" class="name">Facebook</label>
                    <input type="text" placeholder="Facebook" name="facebook" value="<?php if (isset($representation)) {
                                                                                        echo $representation["facebook"];
                                                                                    } ?>">
                </div>
                <div class="div-input">
                    <label for="name" class="name">Instagram</label>
                    <input type="text" placeholder="Instagram" name="instagram" value="<?php if (isset($representation)) {
                                                                                        echo $representation["instagram"];
                                                                                    } ?>">
                </div>
                <div class="div-input">
                    <?php
                    if ($choice_rep == "add") { ?>
                        <label for="name" class="name">Photo d'illustration</label>
                        <input type="file" name="image" id="">
                    <?php

                    } else { ?>
                        <img src="assets/representationImages/<?= $representation["image"] ?>" alt="" style="object-fit: cover; width: 100%; height: 150px; border-radius: 16px">
                    <?php
                    }
                    ?>
                </div>
                <div style="visibility: hidden;">
                    <p>Suivant</p>
                </div>
                <?php
                if ($choice_rep == "modif") {
                ?>
                    <div>
                        <div class="div-input">
                            <label for="" style="visibility: hidden">Submit</label>
                            <input type="submit" value="Supprimer la representation" name="supprimer_rep">
                        </div>
                    </div>
                <?php
                } ?>
                <div class="div-input">
                    <label for="" style="visibility: hidden">Submit</label>
                    <?php
                    if ($choice_rep == "modif") {
                    ?>
                        <input type="submit" value="Modifier la representation" name="modifier_rep">
                    <?php
                    } else { ?>
                        <input type="submit" value="Ajouter la representation" name="ajouter_rep">
                    <?php
                    }
                    ?>
                </div>
            </form>
        </div>
    </div>


    <script src="<?= JS ?>gestion.js"></script>
</body>

</html>