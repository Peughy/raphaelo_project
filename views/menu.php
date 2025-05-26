<!doctype html>
<html>

<head>
  <meta charset="UTF-8">
  <title>Menu</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="<?= CSS . "output.css" ?>" rel="stylesheet">
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
  <link rel="stylesheet" href="<?= CSS . "swiper-bundle.min.css" ?>" />
</head>

<body>

  <!-- header -->
  <?php require_once CONTROLLER . "header_controller.php" ?>

  <!-- main_menu -->
  <div class="relative">
    <img src="<?= IMG . "main_menu_img.jpg" ?>" alt="" class="object-cover w-full h-400px">
    <div class="absolute top-1/2 w-full flex justify-center flex-col items-center" style="background-color: rgba(0, 0, 0, .1);">
      <h1 class="title w-full text-white text-center mb-4">Ne tardez plus, commander</h1>
      <form action="index.php?action=menu" method="post" class="w-1/2 relative">
        <input type="search" placeholder="Rechercher..." value="<?php if(isset($_POST["nom_menu"])){ echo $_POST["nom_menu"]; } ?>" name="nom_menu" id="" class="w-full py-3 rounded-radius text-xl border-none focus:outline-none px-4">
        <button type="submit" name="search_menu_btn" class="absolute top-0 right-0 px-6 py-3 rounded-r-radius bg-main_color">
          <p class="text-white text-xl">SEARCH</p>
        </button>
      </form>
    </div>
  </div>

  <!-- container -->
  <div class="mx-10percent my-5percent">
    <!-- variete de produit -->
    <div>
      <h1 class="title w-full mb-12 text-center">Decouvrez nos varietes de produits</h1>
      <div class="grid grid-cols-5 gap-6 my-6">
        <div class="relative group hover:cursor-pointer group">
          <img src="<?= IMG . "carrousel7_pizza.jpg" ?>" alt="" class="object-cover rounded-radius h-200px w-full">
          <h1 class="absolute rounded-b-radius text-main_color  text-xl cursor-pointer text-center group-hover:bg-main_color group-hover:text-white bottom-0 w-full p-2">Pizza</h1>
        </div>
        <div class="relative group hover:cursor-pointer group">
          <img src="<?= IMG . "carrousel4_tacos.jpg" ?>" alt="" class="object-cover rounded-radius h-200px w-full">
          <h1 class="absolute rounded-b-radius text-main_color  text-xl cursor-pointer text-center group-hover:bg-main_color group-hover:text-white bottom-0 w-full p-2">Tacos</h1>
        </div>
        <div class="relative group hover:cursor-pointer group">
          <img src="<?= IMG . "carrousel6_pizza.jpg" ?>" alt="" class="object-cover rounded-radius h-200px w-full">
          <h1 class="absolute rounded-b-radius text-main_color  text-xl cursor-pointer text-center group-hover:bg-main_color group-hover:text-white bottom-0 w-full p-2">Saucisses</h1>
        </div>
        <div class="relative group hover:cursor-pointer group">
          <img src="<?= IMG . "ice_cream.jpg" ?>" alt="" class="object-cover rounded-radius h-200px w-full">
          <h1 class="absolute rounded-b-radius text-main_color  text-xl cursor-pointer text-center group-hover:bg-main_color group-hover:text-white bottom-0 w-full p-2">Gremes et glaces</h1>
        </div>
        <div class="relative group hover:cursor-pointer group">
          <img src="<?= IMG . "carrousel3_pizza.jpg" ?>" alt="" class="object-cover rounded-radius h-200px w-full">
          <h1 class="absolute rounded-b-radius text-main_color  text-xl cursor-pointer text-center group-hover:bg-main_color group-hover:text-white bottom-0 w-full p-2">Boissons</h1>
        </div>
      </div>
    </div>

    <!-- recement ajoute -->
    <div>
      <h1 class="text-5xl text-main_color my-12">De nouvelles recettes pour des gouts encore meilleur</h1>

      <?php if ($menu_last_infos != null) {
      ?>
        <h3 class="text-3xl my-12">Les menus recements ajoutes.</h3>
      <?php
      } ?>
      <div class="grid grid-cols-3 gap-6">

        <!-- card -->
        <?php
        if ($menu_last_infos != null) {
          foreach ($menu_last_infos as $model_info) { ?>
            <div class="rounded-radius overflow-hidden shadow">
              <!-- card header -->
              <div class="relative hover:cursor-pointer group">
                <img src="<?= "./assets/produitsImages/" . $model_info["image"] ?>" alt="" class="object-cover h-200px w-full">
                <span class="absolute top-2 right-2 text-main_color font-semibold bg-red-200 p-1 text-xs rounded-radius">nouveau</span>
                <span class="absolute top-2 left-2 group-hover:block hidden bg-fuchsia-100 p-1 rounded-full">
                  <svg class="w-5 h-5 text-fuchsia-600" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12.01 6.001C6.5 1 1 8 5.782 13.001L12.011 20l6.23-7C23 8 17.5 1 12.01 6.002Z" />
                  </svg>
                </span>
              </div>

              <!-- card body -->
              <div class="p-4 cursor-pointer" id="add_panier">
                <p id="numeros" style="display: none;"><?= $model_info["id_produit"] ?></p>
                <h2 class="mb-2 text-xl"><?= ucfirst($model_info["nom_produit"]) ?></h2>
                <p class="text-lg text-gray-500 mb-3"><?= ucfirst($model_info["ingredient"]) ?></p>
                <p class="text-white text-lg bg-main_color p-2 rounded-radius inline-block">FCFA <?= $model_info["prix"] ?></p>
                <p class="text-white text-lg bg-main_color p-2 rounded-radius inline-block">Type de pizza: <?= $model_info["type_produit"] ?></p>
              </div>
            </div>
        <?php }
        } ?>
      </div>
    </div>

    <?php if ($menu_last_infos != null) {
    ?>
      <h3 class="text-3xl my-12">Les menus que vous connaissez deja.</h3>
    <?php
    } else {
    ?>
      <h3 class="text-3xl my-12">Resultats pour "<?= $_POST["nom_menu"] ?>"</h3>
    <?php
    } ?>
    <div class="grid grid-cols-3 gap-6">

      <!-- card -->
      <?php
      foreach ($menu_infos as $model_info) { ?>
        <div class="rounded-radius overflow-hidden shadow">
          <!-- card header -->
          <div class="relative hover:cursor-pointer group">
            <img src="<?= "./assets/produitsImages/" . $model_info["image"] ?>" alt="" class="object-cover h-200px w-full">
            <span class="absolute top-2 right-2 text-main_color font-semibold bg-red-200 p-1 text-xs rounded-radius">nouveau</span>
            <span class="absolute top-2 left-2 group-hover:block hidden bg-fuchsia-100 p-1 rounded-full">
              <svg class="w-5 h-5 text-fuchsia-600" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12.01 6.001C6.5 1 1 8 5.782 13.001L12.011 20l6.23-7C23 8 17.5 1 12.01 6.002Z" />
              </svg>
            </span>
          </div>

          <!-- card body -->
          <div class="p-4 cursor-pointer" id="add_panier">
            <p id="numeros" style="display: none;"><?= $model_info["id_produit"] ?></p>
            <h2 class="mb-2 text-xl"><?= ucfirst($model_info["nom_produit"]) ?></h2>
            <p class="text-lg text-gray-500 mb-3"><?= ucfirst($model_info["ingredient"]) ?></p>
            <p class="text-white text-lg bg-main_color p-2 rounded-radius inline-block">FCFA <?= $model_info["prix"] ?></p>
            <p class="text-white text-lg bg-main_color p-2 rounded-radius inline-block">Type de pizza: <?= $model_info["type_produit"] ?></p>
          </div>
        </div>
      <?php } ?>
    </div>
  </div>
  </div>

  </div>

  <!-- plus -->
  <div class="w-full h-full fixed flex items-center justify-center  top-0 z-50" id="more_product" style="background-color: rgba(0, 0, 0, .8); transform: <?= (!$pass_info) ? "translate(-100%)" : "" ?>; transition: all .3s ease-out">
    <div class="flex bg-white bottom-100 overflow-auto" style="margin: 12px; border-radius: 16px; height: 97%; width: 97%">
      <div class="p-4 w-full">
        <img src="<?= "./assets/produitsImages/" . $product_one["image"] ?>" alt="" class="object-cover w-full" style="height: 400px;border-radius: 16px">
        <div class="mt-8">
          <h1 class="text-3xl mb-3 flex justify-between"><?= $product_one["nom_produit"] ?>
          </h1>
          <p class="text-gray-500 text-xl mb-3 font-bold">Description:</p>
          <p class="mb-3 text-lg"><?= $product_one["description"] ?></p>
          <p class="text-gray-500 text-xl mb-3 font-bold">Ingredients:</p>
          <p class="mb-3 text-lg"><?= $product_one["ingredient"] ?></p>
          <br>
          <p class="mb-4 text-xl">Type Pizza: <?= ucfirst($product_one["type_produit"]) ?></p>
          <p class="mb-4 text-xl">Prix: <span><?= $product_one["prix"] ?></span> FCFA</p>
        </div>

        <!-- commentaires -->
        <div class="commentaires">
          <h1 class="font-bold text-3xl mb-8">Les avis de nos clients</h1>
          <?php
          if (!$commentaires) {
          ?>
            <p class="text-xl" style="color: gray;">Aucun commentaire....Soyez le premier a commenter</p>
          <?php
          }
          foreach ($commentaires as $commentaire) {
          ?>
            <div class="w-full my-5">
              <div class="w-full mb-3 flex items-center justify-start">
                <span class="text-xl mr-2 flex items-center justify-center text-white h-25px w-25px rounded-full" style="background-color: green;">
                  <?= ucfirst($commentaire["username"][0]) ?>
                </span>
                <div class="flex items-center justify-center">
                  <p class="text-lg mr-2"><?= $commentaire["username"] ?></p>
                  <p class="text-sm" style="color: grey;">Le <?= $commentaire["date_commentaire"] ?></p>
                </div>
              </div>
              <p class="text-xl ml-5"><?= $commentaire["content"] ?></p>
            </div>
            <hr>
          <?php
          }
          ?>

          <?php
          if (isset($error_msg_comment)) {
          ?>
            <p class="text-sm w-full bg-main_color text-white p-4 my-4 rounded-radius"><?= $error_msg_comment ?></p>
          <?php
          }
          ?>
          <form action="index.php?action=menu&id_produit=<?= $_GET["id_produit"] ?>" method="post" class="my-8 w-full flex items-center justify-center">
            <textarea name="content_comment" id="" cols="30" rows="1" class="w-full rounded-radius text-xl" style="outline: none; background-color: #f7f3f3" placeholder="Votre commentaires"></textarea>
            <input type="submit" value="Commenter" name="comment_btn" class="ml-2 py-2 px-2 bg-main_color text-xl text-white rounded-radius cursor-pointer">
          </form>
          <p style="visibility: hidden;">Raphaelo</p>
        </div>
      </div>
      <!-- commander -->
      <div class="border border-main_color rounded-radius w-full relative" style="margin: 10px; padding: 18px;">
        <button id="close_more_product" style="top: 10px; right: 10px" class="border border-main_color absolute py-1 px-2 cursor-pointer text-main_color rounded-radius text-sm hover:text-white hover:bg-main_color">Fermer</button>
        <form method="post" action="index.php?action=menu&id_produit=<?= $_GET["id_produit"] ?>">
          <h1 class="text-4xl text-main_color w-full mb-8">Commander</h1>

          <?php
          if (isset($error_msg)) {
          ?>
            <p class="text-sm bg-main_color text-white p-4 my-4 rounded-radius"><?= $error_msg ?></p>
          <?php
          }
          ?>

          <!-- quantite -->
          <div class="flex justify-start w-full flex-col">
            <p class="text-gray-500 mr-5 text-xl">Mettre une quantiete</p>
            <input name="qte_commande" class="text-xl py-7px px-4 border outline-none rounded-radius border-main_color bg-white text-main_color" value="1" id="qte">
          </div>

          <div class="my-5 flex flex-col">
            <p class="text-gray-500 mr-5 text-xl">Representation finale </p>
            <select name="representation" id="type" class="text-xl rounded-radius outline-none" style="cursor: pointer;">
              <option value="">--</option>
              <?php
              foreach ($representations as $representation) { ?>
                <option value="<?= $representation["id_representation"] ?>"><?= $representation["lieu"] ?></option>
              <?php } ?>
            </select>
          </div>

          <!--  temps livraison -->
          <div class="flex flex-col">
            <p class="text-gray-500 mb-4 text-xl">Recuperation le</p>
            <input type="date" name="recup_date" id="" class=" text-xl w-ful outline-none mx-3 p-2 rounded-radius border border-main_color">
            <p class="text-gray-500">a</p>
            <input type="time" name="recup_heure" id="" class="text-xl w-full outline-none mx-3 rounded-radius border border-main_color">
          </div>

          <!-- description -->
          <div class="my-8">
            <p class="text-gray-500 mb-4 text-xl">Que voulez vous?</p>
            <textarea name="supplement" id="" cols="30" rows="10" style="outline: none; background-color: #f7f3f3" class="border text-xl border-main_color outline-none border-none text-gray-500 rounded-radius w-full" placeholder="Personalisez vos commande en fonction de votre gout!"></textarea>
          </div>

          <div class="flex justify-between mb-6">
            <button class="bg-transparent border border-main_color rounded-radius px-3 py-1.5 group hover:bg-main_color hover:cursor-pointer flex items-center justify-center">
              <svg class="w-6 h-6 text-main_color group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                <path d="M12.268 6A2 2 0 0 0 14 9h1v1a2 2 0 0 0 3.04 1.708l-.311 1.496a1 1 0 0 1-.979.796H8.605l.208 1H16a3 3 0 1 1-2.83 2h-2.34a3 3 0 1 1-4.009-1.76L4.686 5H4a1 1 0 0 1 0-2h1.5a1 1 0 0 1 .979.796L6.939 6h5.329Z" />
                <path d="M18 4a1 1 0 1 0-2 0v2h-2a1 1 0 1 0 0 2h2v2a1 1 0 1 0 2 0V8h2a1 1 0 1 0 0-2h-2V4Z" />
              </svg>
              <p class="ml-3 text-main_color group-hover:text-white text-xl">Ajouet panier</p>
            </button>
            <button type="submit" name="commander_btn" class="bg-transparent border border-main_color rounded-radius px-3 py-1.5 group hover:bg-main_color hover:cursor-pointer flex items-center justify-center">
              <svg class="w-6 h-6 text-main_color group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                <path fill-rule="evenodd" d="M3 4a1 1 0 0 0-.822 1.57L6.632 12l-4.454 6.43A1 1 0 0 0 3 20h13.153a1 1 0 0 0 .822-.43l4.847-7a1 1 0 0 0 0-1.14l-4.847-7a1 1 0 0 0-.822-.43H3Z" clip-rule="evenodd" />
              </svg>
              <p class="ml-3 text-main_color group-hover:text-white text-xl">Commander</p>
            </button>
          </div>

        </form>
      </div>
    </div>
  </div>
  <script src="<?= JS . "swiper-bundle.min.js" ?>"></script>
  <script src="<?= JS . "flowbite.min.js" ?>"></script>
  <script src="<?= JS . "menu.js" ?>"></script>
</body>

</html>