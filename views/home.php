<?php require_once CONTROLLER . "header_controller.php" ?>


<!-- ecplain section -->
<div class="bg-main_color w-full h-full flex items-center justify-center px-8 pt-8 relative">
    <div class="ml-16">
        <h1 class="title text-white w-3/4">Deguster le meilleur etant chez vous ou au travail</h1>
        <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus doloremque ut, repellat sunt facilis commodi amet et? Cum ut dolore totam distinctio est molestiae! Maxime quam rem ad distinctio maiores?</p> -->
        <a href="index.php?action=menu" class="btn bg-transparent hover:bg-white hover:text-main_color text-white hover:cursor-pointer border-2 border-white mt-8 inline-block text-lg">Commander</a>
    </div>
    <img src="<?= IMG . "chef_cuisinier.png" ?>" alt="">
</div>

<!-- content -->
<div class="px-10percent py-5percent text-center">
    <div>
        <h1 class="title text-main_color text-center w-full">Decouvrez nos meilleurs plats fait maison avec des ingredients bio !!</h1>
    </div>

    <!-- cartes -->
    <div class="grid grid-cols-3 gap-x-8 mt-28">
        <div class="rounded-radius overflow-hidden flex justify-start flex-col">
            <img src="<?= IMG . "pizza_grand.jpg" ?>" class="object-cover w-full h-300px" alt="">
            <h1 class="my-2 text-main_color text-3xl text-left w-3/4 font-bold">Des pizzas a couper le soufle</h1>
            <p class="text-left mt-4 text-lg"> Des pizzas qui vous laisseront sans voix ! Une explosion de saveurs à chaque bouchée. Des recettes créatives et originales pour satisfaire toutes vos envies.</p>
            <button class="mt-4 text-main_color btn border-2 border-main_color hover:text-white hover:bg-main_color inline w-1/2">En savoir plus</button>
        </div>
        <div class="rounded-radius overflow-hidden flex justify-start flex-col">
            <img src="<?= IMG . "pulet_cameroun.jpg" ?>" alt="" class="object-cover w-full h-300px">
            <h1 class="my-2 text-main_color text-3xl text-left w-3/4 font-bold">Decouvez une autre saveur!</h1>
            <p class="text-left mt-4 text-lg">Partez à la découverte de nouvelles saveurs avec nos pizzas uniques. Des recettes du monde entier revisitées pour votre plus grand plaisir</p>
            <button class="mt-4 text-main_color btn border-2 border-main_color hover:text-white hover:bg-main_color inline w-1/2">En savoir plus</button>
        </div>
        <div class="rounded-radius overflow-hidden flex justify-start flex-col">
            <img src="<?= IMG . "ice_cream.jpg" ?>" alt="" class="object-cover w-full h-300px">
            <h1 class="my-2 text-main_color text-3xl text-left w-5/6 font-bold">Decouvez de nouvelles sensations</h1>
            <p class="text-left mt-4 text-lg">Découvrez de nouvelles sensations glacées ! Des parfums originaux et des textures onctueuses pour éveiller vos papilles.</p>
            <button class="mt-4 text-main_color btn border-2 border-main_color hover:text-white hover:bg-main_color inline w-1/2">En savoir plus</button>
        </div>
    </div>

    <div class="flex justify-center items-center">
        <h1 class="title mt-24 text-cente">Mangez bien, mangez sain, mangez chez vous!</h1>
    </div>

    <div class="swiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide"><img src="<?= IMG . "carrousel8_pizza.jpg" ?>" alt="" class="object-cover w-full h-full"></div>
            <div class="swiper-slide"><img src="<?= IMG . "carrousel2_pizza.jpg" ?>" alt="" class="object-cover w-full h-full"></div>
            <div class="swiper-slide"><img src="<?= IMG . "carrousel4_tacos.jpg" ?>" alt="" class="object-cover w-full h-full"></div>
            <div class="swiper-slide"><img src="<?= IMG . "caroussel5_pizza.jpg" ?>" alt="" class="object-cover w-full h-full"></div>
            <div class="swiper-slide"><img src="<?= IMG . "carrousel3_pizza.jpg" ?>" alt="" class="object-cover w-full h-full"></div>
            <div class="swiper-slide"><img src="<?= IMG . "carrousel6_pizza.jpg" ?>" alt="" class="object-cover w-full h-full"></div>
        </div>
        <div class="swiper-pagination"></div>
        <div class="swiper-button-prev bg-main_color btn p-8"></div>
        <div class="swiper-button-next bg-main_color btn p-8"></div>
        <div class="swiper-scrollbar"></div>
    </div>

    <div class="flex justify-center items-center flex-col">
        <h1 class="title my-12 text-center w-full text-main_color">Personnalisez vos commandes!</h1>
        <p class="text-center mt-4 text-xl" style="margin: 0 15%;">Créez votre pizza comme vous l'aimez ! Personnalisez votre commande en choisissant parmi une variété d'ingrédients frais et de sauces. Grâce à notre service de personnalisation, vous êtes sûr de trouver la pizza qui vous fera craquer. <br> Des allergies ? Des envies particulières ? Aucun problème, nous adaptons votre pizza à vos goûts. Laissez libre cours à votre imagination et dégustez une pizza unique</p>
    </div>

    <div class="flex justify-center items-center flex-col">
        <h1 class="text-3xl my-12 text-center w-full">Les commentaires de nos clients satisfaits</h1>
        <div class="grid grid-cols-3 gap-4">
            <?php
            foreach ($commentaires as $commentaire) {
            ?>
                <div class="bg-white shadow-lg hover:bg-main_color hover:cursor-pointer group rounded-radius p-4 flex justify-center items-center flex-col">
                    <div class="flex items-center justify-center">
                        <span style="background-color: green; width: 50px; height: 50px" class="text-white text-4xl rounded-full flex items-center justify-center"><?= ucfirst($commentaire["username"][0]) ?></span>
                        <p class="text-3xl font-bold text-gray-700 group-hover:text-white ml-2"><?= $commentaire["username"] ?></p>
                    </div>
                    <p class="my-4 text-xl text-gray-600 group-hover:text-white"> <?= $commentaire["content"] ?> </p>
                </div>
            <?php
            }
            ?>
        </div>
    </div>
</div>

<footer class="w-full bg-main_color px-16 flex justify-between items-center">
    <img src="<?= IMG . "logo-light.png" ?>" alt="" class="object-cover w-100px h-100px scale-125">
    <div>
        <ul>
            <li class="li">
                <a href="#" class="flex justify-center items-center text-white">
                    <svg class="w-6 h-6 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                        <path fill-rule="evenodd" d="M13.135 6H15V3h-1.865a4.147 4.147 0 0 0-4.142 4.142V9H7v3h2v9.938h3V12h2.021l.592-3H12V6.591A.6.6 0 0 1 12.592 6h.543Z" clip-rule="evenodd" />
                    </svg>
                    Facebook
                </a>
            </li>
            <li class="li">
                <a href="#" class="flex justify-center items-center text-white">
                    <svg class="w-6 h-6 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path fill="currentColor" fill-rule="evenodd" d="M12 4a8 8 0 0 0-6.895 12.06l.569.718-.697 2.359 2.32-.648.379.243A8 8 0 1 0 12 4ZM2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10a9.96 9.96 0 0 1-5.016-1.347l-4.948 1.382 1.426-4.829-.006-.007-.033-.055A9.958 9.958 0 0 1 2 12Z" clip-rule="evenodd" />
                        <path fill="currentColor" d="M16.735 13.492c-.038-.018-1.497-.736-1.756-.83a1.008 1.008 0 0 0-.34-.075c-.196 0-.362.098-.49.291-.146.217-.587.732-.723.886-.018.02-.042.045-.057.045-.013 0-.239-.093-.307-.123-1.564-.68-2.751-2.313-2.914-2.589-.023-.04-.024-.057-.024-.057.005-.021.058-.074.085-.101.08-.079.166-.182.249-.283l.117-.14c.121-.14.175-.25.237-.375l.033-.066a.68.68 0 0 0-.02-.64c-.034-.069-.65-1.555-.715-1.711-.158-.377-.366-.552-.655-.552-.027 0 0 0-.112.005-.137.005-.883.104-1.213.311-.35.22-.94.924-.94 2.16 0 1.112.705 2.162 1.008 2.561l.041.06c1.161 1.695 2.608 2.951 4.074 3.537 1.412.564 2.081.63 2.461.63.16 0 .288-.013.4-.024l.072-.007c.488-.043 1.56-.599 1.804-1.276.192-.534.243-1.117.115-1.329-.088-.144-.239-.216-.43-.308Z" />
                    </svg>
                    WathsApp
                </a>
            </li>
            <li class="li">
                <a href="#" class="flex justify-center items-center text-white">
                    <svg class="w-6 h-6 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M7.978 4a2.553 2.553 0 0 0-1.926.877C4.233 6.7 3.699 8.751 4.153 10.814c.44 1.995 1.778 3.893 3.456 5.572 1.68 1.679 3.577 3.018 5.57 3.459 2.062.456 4.115-.073 5.94-1.885a2.556 2.556 0 0 0 .001-3.861l-1.21-1.21a2.689 2.689 0 0 0-3.802 0l-.617.618a.806.806 0 0 1-1.14 0l-1.854-1.855a.807.807 0 0 1 0-1.14l.618-.62a2.692 2.692 0 0 0 0-3.803l-1.21-1.211A2.555 2.555 0 0 0 7.978 4Z" />
                    </svg>
                    Telephone
                </a>
            </li>
        </ul>
    </div>
</footer>
<script src="<?= JS . "swiper-bundle.min.js" ?>"></script>
<script src="<?= JS . "flowbite.min.js" ?>"></script>
</body>

</html>

<script>
    const swiper = new Swiper('.swiper', {
        direction: 'horizontal',
        loop: true,
        autoplay: true,
        pagination: {
            el: '.swiper-pagination',
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        scrollbar: {
            el: '.swiper-scrollbar',
        },
    });
</script>