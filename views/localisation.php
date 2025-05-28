<?php require_once CONTROLLER . "header_controller.php" ?>
<div>
    <img src="<?= IMG ?>localisation_grand.jpg" alt="" class="object-cover w-full" style="height: 600px;">
</div>

<div class="px-10percent py-5percent">
    <h1 class="title text-main_color w-full text-center">Decouvrez nos locaux a <br> travers le Cameroun</h1>
    <div class="grid grid-cols-3 gap-6 mt-16">
        <?php
        foreach ($localisations as $localisation) { ?>
            <div class="shadow-lg group hover:bg-main_color hover:cursor-pointer rounded-radius overflow-hidden">
                <img src="assets/representationImages/<?= $localisation["image"] ?>" alt="" class="object-cover w-full h-200px">
                <h1 class="ml-5 mt-3 text-xl group-hover:text-white"><?= $localisation["lieu"] ?></h1>
                <br>
                <p class="ml-5 mb-3 inline-flex items-center text-lg justify-center text-black group-hover:text-white">
                    <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12.017 6.995c-2.306 0-4.534.408-6.215 1.507-1.737 1.135-2.788 2.944-2.797 5.451a4.8 4.8 0 0 0 .01.62c.015.193.047.512.138.763a2.557 2.557 0 0 0 2.579 1.677H7.31a2.685 2.685 0 0 0 2.685-2.684v-.645a.684.684 0 0 1 .684-.684h2.647a.686.686 0 0 1 .686.687v.645c0 .712.284 1.395.787 1.898.478.478 1.101.787 1.847.787h1.647a2.555 2.555 0 0 0 2.575-1.674c.09-.25.123-.57.137-.763.015-.2.022-.433.01-.617-.002-2.508-1.049-4.32-2.785-5.458-1.68-1.1-3.907-1.51-6.213-1.51Z" />
                    </svg>
                    <?= $localisation["tel"] ?>
                </p>
                <br>
                <p class="ml-5 mb-3 inline-flex items-center text-lg justify-center text-black group-hover:text-white">
                    <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                        <path fill-rule="evenodd" d="M13.135 6H15V3h-1.865a4.147 4.147 0 0 0-4.142 4.142V9H7v3h2v9.938h3V12h2.021l.592-3H12V6.591A.6.6 0 0 1 12.592 6h.543Z" clip-rule="evenodd" />
                    </svg>
                    <?= $localisation["facebook"] ?>
                </p>
                <br>
                <p class="ml-5 mb-3 inline-flex items-center text-lg justify-center text-black group-hover:text-white">
                    <svg class="w-6 h-6 mr-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path fill="currentColor" fill-rule="evenodd" d="M3 8a5 5 0 0 1 5-5h8a5 5 0 0 1 5 5v8a5 5 0 0 1-5 5H8a5 5 0 0 1-5-5V8Zm5-3a3 3 0 0 0-3 3v8a3 3 0 0 0 3 3h8a3 3 0 0 0 3-3V8a3 3 0 0 0-3-3H8Zm7.597 2.214a1 1 0 0 1 1-1h.01a1 1 0 1 1 0 2h-.01a1 1 0 0 1-1-1ZM12 9a3 3 0 1 0 0 6 3 3 0 0 0 0-6Zm-5 3a5 5 0 1 1 10 0 5 5 0 0 1-10 0Z" clip-rule="evenodd" />
                    </svg>
                    <?= $localisation["instagram"] ?>
                </p>
            </div>
        <?php } ?>
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
</body>

</html>