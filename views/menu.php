<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?= CSS."output.css" ?>" rel="stylesheet">
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
    <link rel="stylesheet"  href="<?= CSS."swiper-bundle.min.css" ?>"/>
</head>
<body>

  <!-- header -->
  <?php require_once CONTROLLER."header_controller.php" ?>

    <!-- main_menu -->
     <div class="relative">
        <img src="<?= IMG."main_menu_img.jpg" ?>" alt="" class="object-cover w-full h-400px">
        <div class="absolute top-1/2 w-full flex justify-center flex-col items-center"  style="background-color: rgba(0, 0, 0, .1);">
            <h1 class="title w-full text-white text-center mb-4">Ne tardez plus, commander</h1>
            <form action="" method="post" class="w-1/2 relative">
                <input type="search" placeholder="Rechercher..." name="" id="" class="w-full rounded-radius border-none focus:outline-none px-4">
                <button type="submit" class="absolute top-0 right-0 px-6 py-2 rounded-r-radius bg-main_color">
                    <p class="text-white">SEARCH</p>                      
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
                    <img src="<?= IMG."carrousel7_pizza.jpg" ?>" alt="" class="object-cover rounded-radius h-200px w-full">
                    <h1 class="absolute rounded-b-radius text-main_color cursor-pointer text-center group-hover:bg-main_color group-hover:text-white bottom-0 w-full p-2">Pizza</h1>
                </div>
                <div class="relative group hover:cursor-pointer group">
                    <img src="<?= IMG."carrousel4_tacos.jpg" ?>" alt="" class="object-cover rounded-radius h-200px w-full">
                    <h1 class="absolute rounded-b-radius text-main_color cursor-pointer text-center group-hover:bg-main_color group-hover:text-white bottom-0 w-full p-2">Tacos</h1>
                </div>
                <div class="relative group hover:cursor-pointer group">
                    <img src="<?= IMG."carrousel6_pizza.jpg" ?>" alt="" class="object-cover rounded-radius h-200px w-full">
                    <h1 class="absolute rounded-b-radius text-main_color cursor-pointer text-center group-hover:bg-main_color group-hover:text-white bottom-0 w-full p-2">Saucisses</h1>
                </div>
                <div class="relative group hover:cursor-pointer group">
                    <img src="<?= IMG."ice_cream.jpg" ?>" alt="" class="object-cover rounded-radius h-200px w-full">
                    <h1 class="absolute rounded-b-radius text-main_color cursor-pointer text-center group-hover:bg-main_color group-hover:text-white bottom-0 w-full p-2">Gremes et glaces</h1>
                </div>
                <div class="relative group hover:cursor-pointer group">
                    <img src="<?= IMG."carrousel3_pizza.jpg" ?>" alt="" class="object-cover rounded-radius h-200px w-full">
                    <h1 class="absolute rounded-b-radius text-main_color cursor-pointer text-center group-hover:bg-main_color group-hover:text-white bottom-0 w-full p-2">Boissons</h1>
                </div>
            </div>
         </div>

         <!-- recement ajoute -->
          <div>
            <h1 class="text-4xl text-main_color my-12">De nouvelles recettes pour des gouts encore meilleur</h1>
            <div class="grid grid-cols-3 gap-6">

              <!-- card -->
               <?php
                foreach($model_infos as $model_info){ ?>
                  <div class="rounded-radius overflow-hidden shadow">
                    <!-- card header -->
                    <div class="relative hover:cursor-pointer group">
                        <img src="<?= "./assets/produitsImages/".$model_info["image"] ?>" alt="" class="object-cover h-200px w-full">
                        <span class="absolute top-2 right-2 text-main_color font-semibold bg-red-200 p-1 text-xs rounded-radius">nouveau</span>
                        <span class="absolute top-2 left-2 group-hover:block hidden bg-fuchsia-100 p-1 rounded-full">
                          <svg class="w-5 h-5 text-fuchsia-600" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12.01 6.001C6.5 1 1 8 5.782 13.001L12.011 20l6.23-7C23 8 17.5 1 12.01 6.002Z"/>
                          </svg>                      
                        </span>
                    </div>

                    <!-- card body -->
                      <div class="p-2">
                        <p id="numeros" style="display: none;"><?= $model_info["id_produit"] ?></p>
                        <h2 class="mb-2 text-lg"><?= ucfirst($model_info["nom_produit"]) ?></h2>
                        <p class="text-sm text-gray-500 mb-3"><?= ucfirst($model_info["ingredient"]) ?></p>
                        <p class="text-white text-sm bg-main_color p-1 rounded-radius inline-block">FCFA <?= $model_info["prix"] ?></p>
                        <p class="text-white text-sm bg-main_color p-1 rounded-radius inline-block">Type de pizza: <?= $model_info["type_pizza"] ?></p>
                      </div>
    
                      <!-- card footer -->
                      <div id="add_panier" class="mt-3 border-t w-full group p-2 rounded-b-radius hover:bg-main_color cursor-pointer flex items-center justify-center">
                        <svg class="w-8 h-8 text-main_color group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                          <path d="M12.268 6A2 2 0 0 0 14 9h1v1a2 2 0 0 0 3.04 1.708l-.311 1.496a1 1 0 0 1-.979.796H8.605l.208 1H16a3 3 0 1 1-2.83 2h-2.34a3 3 0 1 1-4.009-1.76L4.686 5H4a1 1 0 0 1 0-2h1.5a1 1 0 0 1 .979.796L6.939 6h5.329Z"/>
                          <path d="M18 4a1 1 0 1 0-2 0v2h-2a1 1 0 1 0 0 2h2v2a1 1 0 1 0 2 0V8h2a1 1 0 1 0 0-2h-2V4Z"/>
                        </svg>                    
                      </div>
                  </div>
              <?php } ?>
            </div>
          </div>
      </div>


      <!-- plus -->
       <div class="w-full h-full fixed top-0 z-50" id="more_product"   style="background-color: rgba(0, 0, 0, .8); transform: <?= (!$pass_info) ? "translate(-100%)" : "" ?>; transition: all .3s ease-out">
          <div class="w-1/2 h-full bg-white fixed right-0 top-0 overflow-auto">
              <img src="<?= "./assets/produitsImages/".$product_one["image"] ?>" alt="" class="object-cover w-full h-300px">
              <div class="my-4 px-8">
                  <h1 class="text-xl mb-3 flex justify-between"><?= $product_one["nom_produit"] ?>
                  <button id="close_more_product" class="border border-main_color p-2 cursor-pointer text-main_color rounded-radius text-sm hover:text-white hover:bg-main_color">close</button></h1>
                  <p class="text-gray-500 mb-3">Description: <?= $product_one["description"] ?></p>
                  <p class="mb-4">Ingredients: <?= $product_one["ingredient"] ?></p>
                  <br>
                  <p class="mb-4">Type Pizza: <?= $product_one["type_pizza"] ?></p>
                  <p class="mb-4">Prix: <span><?= $product_one["prix"] ?></span> FCFA</p>
              </div>

              <!-- commander -->
               <div class="border border-main_color p-8 rounded-radius m-5">
                <h1 class="text-3xl text-main_color w-full text-center mb-8">Commander</h1>

                <!-- quantite -->
                <div class="flex items-center">
                  <p class="text-gray-500 mr-5">Mettre une quantiete</p>
                  <div class="mt-2 flex items-center">
                    <input class="py-7px px-4 border rounded-radius border-main_color bg-white text-main_color" value="1" id="qte">
                  </div>
                </div>

                <!-- position -->
                 <div class="my-5 flex items-center">
                  <p class="text-gray-500 mr-5">Lieux de destination: </p>
                  <button class="group border hover:bg-main_color border-main_color rounded-radius p-1">
                   <svg class="w-6 h-6 text-main_color group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                     <path fill-rule="evenodd" d="M11.906 1.994a8.002 8.002 0 0 1 8.09 8.421 7.996 7.996 0 0 1-1.297 3.957.996.996 0 0 1-.133.204l-.108.129c-.178.243-.37.477-.573.699l-5.112 6.224a1 1 0 0 1-1.545 0L5.982 15.26l-.002-.002a18.146 18.146 0 0 1-.309-.38l-.133-.163a.999.999 0 0 1-.13-.202 7.995 7.995 0 0 1 6.498-12.518ZM15 9.997a3 3 0 1 1-5.999 0 3 3 0 0 1 5.999 0Z" clip-rule="evenodd"/>
                   </svg>
                 </button>
                 <p class="text-sm text-main_color mx-2" style="font-style: italic; margin-left: 8px">Comming soon</p>
                 </div>

                 <div class="my-5 flex items-center">
                    <p class="text-gray-500 mr-5">Lieux de destination </p>
                    <input type="text" placeholder="Lieux de destination" class="py-7px px-4 border rounded-radius border-main_color bg-white text-main_color">
                 </div>

                 <div class="my-5 flex items-center">
                      <p class="text-gray-500 mr-5">Representation finale </p>
                      <select name="representation" id="type" class="rounded-radius" style="cursor: pointer;">
                        <option value="">--</option>
                        <?php
                            foreach($representations as $representation){ ?>
                                <option value="<?= $representation["id_representation"] ?>"><?= $representation["lieu"] ?></option>
                            <?php } ?>
                      </select>
                 </div>

                 <!--  temps livraison -->
               <div class="flex items-center">
                <p class="text-gray-500">Livre le </p>
                <input type="date" name="" id="" class="mx-3 p-2 rounded-radius border border-main_color">
                <p class="text-gray-500">a</p>
                <input type="time" name="" id="" class="mx-3 rounded-radius border border-main_color">
              </div>

              <!-- description -->
               <div class="my-8">
                <p class="text-gray-500 mb-4">Que voulez vous?</p>
                <textarea name="" id="" cols="30" rows="4" class="bg-red-200 border-none text-gray-500 rounded-radius w-full" placeholder="Personalisez vos commande en fonction de votre gout!"></textarea>
               </div>

               <div class="flex justify-between mb-6"> 
                <button class="bg-transparent border border-main_color rounded-radius px-3 py-1.5 group hover:bg-main_color hover:cursor-pointer flex items-center justify-center">
                  <svg class="w-6 h-6 text-main_color group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M12.268 6A2 2 0 0 0 14 9h1v1a2 2 0 0 0 3.04 1.708l-.311 1.496a1 1 0 0 1-.979.796H8.605l.208 1H16a3 3 0 1 1-2.83 2h-2.34a3 3 0 1 1-4.009-1.76L4.686 5H4a1 1 0 0 1 0-2h1.5a1 1 0 0 1 .979.796L6.939 6h5.329Z"/>
                    <path d="M18 4a1 1 0 1 0-2 0v2h-2a1 1 0 1 0 0 2h2v2a1 1 0 1 0 2 0V8h2a1 1 0 1 0 0-2h-2V4Z"/>
                  </svg>
                  <p class="ml-3 text-main_color group-hover:text-white">Ajouet panier</p>                    
                </button>
                  <button class="bg-transparent border border-main_color rounded-radius px-3 py-1.5 group hover:bg-main_color hover:cursor-pointer flex items-center justify-center">
                    <svg class="w-6 h-6 text-main_color group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                      <path fill-rule="evenodd" d="M3 4a1 1 0 0 0-.822 1.57L6.632 12l-4.454 6.43A1 1 0 0 0 3 20h13.153a1 1 0 0 0 .822-.43l4.847-7a1 1 0 0 0 0-1.14l-4.847-7a1 1 0 0 0-.822-.43H3Z" clip-rule="evenodd"/>
                    </svg>
                    <p class="ml-3 text-main_color group-hover:text-white">commander</p>                    
                  </button>
               </div>

               </div>
          </div>
       </div>
    <script src="<?= JS."swiper-bundle.min.js"?>"></script>
    <script src="<?= JS."flowbite.min.js" ?>"></script>
    <script src="<?= JS."menu.js" ?>"></script>
</body>
</html>