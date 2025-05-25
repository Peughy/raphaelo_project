<!doctype html>
<html>
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
    </head>
    <body>
        <div class="grid grid-cols-2 h-screen overflow-hidden">
            <div class="">
                <img src="<?= IMG."pizza.png"?>" ?>" alt="" class="w-5/6 ">
            </div>
            <div class="mt-16 mr-20 flex flex-col items-center w-full">
                <h1 class="text-6xl font-bold my-6" style="color: red;">Connexion</h1>
                <div class="text-center w-3/4">
                    <form action="index.php?action=connexion" method="post">
                        <div class="relative w-full mb-2">
                            <svg style="top: 20px" class="w-6 h-6 text-gray-700  absolute left-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                <path fill-rule="evenodd" d="M12 4a4 4 0 1 0 0 8 4 4 0 0 0 0-8Zm-2 9a4 4 0 0 0-4 4v1a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2v-1a4 4 0 0 0-4-4h-4Z" clip-rule="evenodd"/>
                            </svg>                              
                            <input type="email" placeholder="Adresse mail" name="email" class="focus:outline-main_color w-full pl-12 rounded-radius border-none bg-input_color py-5 text-xl mb-2" style="outline: #ff0000;"><br>
                        </div>
                        <div class="relative w-full mb-2">
                            <svg style="top: 20px" class="w-6 h-6 text-gray-700  absolute left-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M2.038 5.61A2.01 2.01 0 0 0 2 6v12a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V6c0-.12-.01-.238-.03-.352l-.866.65-7.89 6.032a2 2 0 0 1-2.429 0L2.884 6.288l-.846-.677Z"/>
                                <path d="M20.677 4.117A1.996 1.996 0 0 0 20 4H4c-.225 0-.44.037-.642.105l.758.607L12 10.742 19.9 4.7l.777-.583Z"/>
                            </svg>                              
                            <input type="password" placeholder="Mot de passe" name="mdp" class="focus:outline-main_color w-full pl-12 rounded-radius border-none bg-input_color py-5 text-xl mb-5" style="outline: #ff0000;"><br>
                        </div>
                        <p class="text-lg my-6">Pas un compte ?&nbsp;&nbsp;<a href="index.php?action=signUp" class="text-gray-500 hover:text-main_color">Inscrivez vous</a></p>
                        <div class="w-full mb-3">
                            <button type="submit" name="connexion" class="w-full rounded-radius border-none uppercase text-white py-5 text-xl bg-main_color">Se connecter</button>
                        </div>
                        <a href="index.php" class="text-lg mt-3 text-gray-500 hover:text-main_color text-gray-500">Revenir a l'acceuil</a></p>
                        
                        <?php
                            if(isset($error_msg)){ ?>
                            <p class="w-full rounded-radius text-lg text-black mt-8" style="background-color: rgba(255, 0, 0, .2); padding: 16px 8px"><?= $error_msg ?></p>
                        <?php } ?>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>