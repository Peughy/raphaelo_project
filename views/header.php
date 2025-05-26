<nav class="bg-white dark:bg-gray-900 sticky shadow-md w-full z-20 top-0 start-0 border-b border-gray-200 dark:border-gray-600">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-2 px-16">
    <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
        <img src="<?= IMG."logo.png" ?>" class="object-cover w-75px scale-150" alt="Raphaelo">
    </a>
    <div class="flex items-center md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">

      <?php
          if(!$user_connection){ ?>
            <a style="margin-right: 8px; padding: 4px 8px" href="index.php?action=signIn" type="button" class="hover:text-main_color btn mr-2 border-2 border-main_color text-main_color hover:bg-main_color hover:text-white hover:cursor-pointer">connexion</a>
          <?php } else { ?>
            <a href="index.php?action=profil" class="group" style="margin-right: 8px;">
              <svg class="w-8 h-8 text-black group-hover:text-main_color" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                <path fill-rule="evenodd" d="M12 20a7.966 7.966 0 0 1-5.002-1.756l.002.001v-.683c0-1.794 1.492-3.25 3.333-3.25h3.334c1.84 0 3.333 1.456 3.333 3.25v.683A7.966 7.966 0 0 1 12 20ZM2 12C2 6.477 6.477 2 12 2s10 4.477 10 10c0 5.5-4.44 9.963-9.932 10h-.138C6.438 21.962 2 17.5 2 12Zm10-5c-1.84 0-3.333 1.455-3.333 3.25S10.159 13.5 12 13.5c1.84 0 3.333-1.455 3.333-3.25S13.841 7 12 7Z" clip-rule="evenodd"/>
              </svg>
            </a>
          <?php } ?>
        <button class="relative mx-4 group">
            <svg class="w-8 h-8 text-gray-800 group-hover:text-main_color" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
              <path fill-rule="evenodd" d="M4 4a1 1 0 0 1 1-1h1.5a1 1 0 0 1 .979.796L7.939 6H19a1 1 0 0 1 .979 1.204l-1.25 6a1 1 0 0 1-.979.796H9.605l.208 1H17a3 3 0 1 1-2.83 2h-2.34a3 3 0 1 1-4.009-1.76L5.686 5H5a1 1 0 0 1-1-1Z" clip-rule="evenodd"/>
            </svg>  
            <span class="absolute top-0 right-0 py-px px-1 group-hover:border group-hover:border-white text-xs rounded-full bg-main_color text-white">0</span>            
        </button> 
        <button data-collapse-toggle="navbar-sticky" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-sticky" aria-expanded="false">
          <span class="sr-only">Menu</span>
          <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
          </svg>
        </button>
    </div>
    <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
      <ul class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-radius bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
        <li>
          <a href="index.php" class="li text-xl <?php if($action == "home"){ echo "active"; } ?>" aria-current="page">Acceuil</a>
        </li>
        <li>
          <a href="index.php?action=menu" class="li text-xl <?php if($action == "menu"){ echo "active"; } ?>">Menu</a>
        </li>
        <li>
          <a href="index.php?action=localisation" class="li text-xl <?php if($action == "localisation"){ echo "active"; } ?>">Localisation</a>
        </li>
      </ul>
    </div>
    </div>
</nav>