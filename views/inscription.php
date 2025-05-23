<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="<?= CSS."output.css" ?>" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display:ital@0;1&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display:ital@0;1&family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
        <title>Inscription</title>
    </head>
    <body>
        <div class="grid grid-cols-2 h-screen overflow-hidden">
            <div class="mt-8 flex flex-col items-center justify-center">
                <h1 class="text-6xl font-bold text-center mb-1" style="color: red;">Creer votre compte</h1>
                <p class="text-center mb-6">Votre compte vous permettra de naviguer sur la plateforme <br> sans contrainte </p>
                <form method="post" action="index.php?action=inscription">
                    <div class="relative w-full">                        
                        <input type="text" placeholder="Nom d'utilisateur" name="username" class="border-none rounded-radius px-4  bg-input_color out3ine-none relative py-2 mb-2 pl-12 pr-20">
                        <svg class="w-7 h-7 text-gray-800 dark:text-gray-500 absolute top-2 left-2 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                            <path fill-rule="evenodd" d="M12 4a4 4 0 1 0 0 8 4 4 0 0 0 0-8Zm-2 9a4 4 0 0 0-4 4v1a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2v-1a4 4 0 0 0-4-4h-4Z" clip-rule="evenodd"/>
                        </svg>  
                    </div>
                    <div class="relative w-full">
                        <input type="email" name="email" placeholder="Adresse mail" class="border-none rounded-radius px-4  bg-input_color py-3 mb-2 pl-12 pr-20 outline-none">
                        <svg class="w-7 h-7 text-gray-800 dark:text-gray-500 top-2 left-2  absolute" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M2.038 5.61A2.01 2.01 0 0 0 2 6v12a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V6c0-.12-.01-.238-.03-.352l-.866.65-7.89 6.032a2 2 0 0 1-2.429 0L2.884 6.288l-.846-.677Z"/>
                            <path d="M20.677 4.117A1.996 1.996 0 0 0 20 4H4c-.225 0-.44.037-.642.105l.758.607L12 10.742 19.9 4.7l.777-.583Z"/>
                        </svg>                          
                    </div>
                    <div class="relative w-full">
                        <input type="password" name="mdp" placeholder="Mot de passe" class="border-none rounded-radius px-4  bg-input_color py-3 mb-5 pl-12 pr-20 outline-none ">
                        <svg class="w-7 h-7 text-gray-800 dark:text-gray-500 top-2 left-2 absolute " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                            <path fill-rule="evenodd" d="M8 10V7a4 4 0 1 1 8 0v3h1a2 2 0 0 1 2 2v7a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2v-7a2 2 0 0 1 2-2h1Zm2-3a2 2 0 1 1 4 0v3h-4V7Zm2 6a1 1 0 0 1 1 1v3a1 1 0 1 1-2 0v-3a1 1 0 0 1 1-1Z" clip-rule="evenodd"/>
                        </svg>                          
                    </div>
                    <div class="relative w-full">
                        <input type="tel" name="tel" placeholder="(+237) Telephone" class="border-none rounded-radius px-4  bg-input_color py-3 mb-5 pl-12 pr-20 outline-none ">
                        <svg class="w-7 h-7 text-gray-800 dark:text-gray-500 top-2 left-2 absolute " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M7.978 4a2.553 2.553 0 0 0-1.926.877C4.233 6.7 3.699 8.751 4.153 10.814c.44 1.995 1.778 3.893 3.456 5.572 1.68 1.679 3.577 3.018 5.57 3.459 2.062.456 4.115-.073 5.94-1.885a2.556 2.556 0 0 0 .001-3.861l-1.21-1.21a2.689 2.689 0 0 0-3.802 0l-.617.618a.806.806 0 0 1-1.14 0l-1.854-1.855a.807.807 0 0 1 0-1.14l.618-.62a2.692 2.692 0 0 0 0-3.803l-1.21-1.211A2.555 2.555 0 0 0 7.978 4Z"/>
                        </svg>
                    </div>

                    <button type="submit" name="inscription" class="w-full border-none rounded-radius  py-3 bg-main_color text-white mb-8">S'inscrire</button>
                    <p class="text-sm text-center my-3">Deja un compte ?&nbsp;&nbsp;<a href="index.php?action=signIn" class="text-gray-500 hover:text-main_color">Connectez-vous</a></p>
                </form>

                <?php
                    if(isset($error_msg)){
                         ?>
                    <p class="rounded-radius px-2 text-lg text-black mt-3" style="background-color: rgba(255, 0, 0, .2); padding: 16px 10px"><?= $error_msg ?></p>
                <?php } ?>

            </div>
            <div class="">
                <img src="<?= IMG."ice_cream.jpg" ?>" alt="" class=" h-full object-cover ">
            </div>
        </div>
    </body>
</html>