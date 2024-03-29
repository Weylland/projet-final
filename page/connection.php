<?php
include './include/header.php';
?>

<main class="w-screen h-screen flex items-center justify-center relative">
    <form action="../systeme/connection.php" method="POST" class="flex flex-col items-center h-[700px] w-[400px] shadow-2xl rounded-lg relative insc-main">
        <div class="mb-32 mt-24">
            <h1 class="text-center text-xl font-mont font-medium">Connexion</h1>
        </div>
        <div class="flex flex-col justify-end w-52 h-10 mb-6 relative font-quick">
            <input 
                class=" 
                    text-gray-600 peer 
                    border-b 
                    focus:border-b-2
                    pl-3
                    border-gray-500
                    focus:outline-none
                    focus:border-cyan-600
                    placeholder-transparent
                    bg-transparent
                    z-10
                " type="mail" id="mail" name="emails" placeholder="Email :">
            <label 
                class="
                    transition-all 
                    text-gray-600 
                    text-sm 
                    absolute 
                    -top-2
                    left-0
                    peer-placeholder-shown:left-3
                    peer-placeholder-shown:text-base 
                    peer-placeholder-shown:text-gray-400 
                    peer-placeholder-shown:top-3
                    peer-focus:left-0
                    peer-focus:-top-2
                    peer-focus:text-sm
                    peer-focus:text-gray-600
                " for="mail">Email :</label>
        </div>
        <div class="flex flex-col justify-end w-52 h-10 mb-16 relative font-quick">
            <input 
                class=" 
                text-gray-600 peer 
                    border-b
                    focus:border-b-2
                    pl-3
                    border-gray-500
                    focus:outline-none
                    focus:border-cyan-600
                    placeholder-transparent
                    bg-transparent
                    z-10
                " type="password" id="password" name="password" placeholder="Mot de passe :"> <!-- L'id doit être identique au for dans le label -->
            <label 
                class="
                    transition-all 
                    text-gray-600 
                    text-sm 
                    absolute 
                    -top-2
                    left-0
                    peer-placeholder-shown:left-3
                    peer-placeholder-shown:text-base 
                    peer-placeholder-shown:text-gray-400 
                    peer-placeholder-shown:top-3
                    peer-focus:left-0
                    peer-focus:-top-2
                    peer-focus:text-sm
                    peer-focus:text-gray-600
                " for="password">Mot de passe :</label>
        </div>
        <button type="submit" name="submit"
            class="
                transition-all
                border 
                border-cyan-400 
                rounded-[18px] 
                w-[160px] h-[35px] 
                hover:shadow-lg 
                hover:border-2 
                active:bg-cyan-500
                active:scale-95
                hover:bg-cyan-400
                hover:text-white
                mb-4 
                font-quick
            ">Valider</button>
        <div>
            <a href="#" class="font-quick text-xs text-gray-400 hover:underline">Identifiant oublié ?</a>
        </div>
        <div class="absolute bottom-6">
            <a href="inscription.php" class="font-quick text-xs text-gray-400 hover:underline">Pas encore inscrit ?  s’enregistrer ici</a>
        </div>
    </form>
</main>

<?php
include './include/footer.php';
?>