<?php
include './include/header.php';
?>

<main class="w-screen h-screen flex items-center justify-center relative">
    <form action="" class="flex flex-col items-center h-[700px] w-[400px] shadow-2xl rounded-lg relative">
        <div class="mb-32 mt-24">
            <h1 class="text-center text-2xl font-mont font-medium">Connexion</h1>
        </div>
        <div class="flex flex-col justify-end w-52 h-10 mb-6 relative font-quick">
            <input 
                class=" 
                    text-gray-600 peer 
                    border-b-2 
                    pl-3
                    border-gray-500
                    focus:outline-none
                    focus:border-cyan-600
                    placeholder-transparent
                    bg-transparent
                " type="mail" id="mail" placeholder="Email :">
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
                    peer-placeholder-shown:top-3.5
                    peer-focus:left-0
                    peer-focus:-top-2
                    peer-focus:text-sm
                    peer-focus:text-gray-600
                    -z-10
                " for="mail">Email :</label>
        </div>
        <div class="flex flex-col justify-end w-52 h-10 mb-16 relative font-quick">
            <input 
                class=" 
                    text-gray-600 
                    peer 
                    border-b-2 
                    border-gray-500
                    focus:outline-none
                    focus:border-cyan-600
                    placeholder-transparent
                    bg-transparent
                " type="mail" id="password" placeholder="Mot de passe :">
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
                    peer-placeholder-shown:top-3.5
                    peer-focus:left-0
                    peer-focus:-top-2
                    peer-focus:text-s
                    peer-focus:text-gray-600
                    -z-10
                " for="password">Mot de passe :</label>
        </div>
        <button class="border border-cyan-600 rounded-[18px] w-[160px] h-[35px] hover:shadow-lg mb-2 font-quick">Valider</button>
        <div>
            <a href="#" class="font-quick text-xs text-gray-400 hover:underline">Identifiant oublié ?</a>
        </div>
        <div class="absolute bottom-6">
            <a href="#" class="font-quick text-xs text-gray-400 hover:underline">Pas encore inscrit ?  s’enregistrer ici</a>
        </div>
    </form>
</main>

<?php
include './include/footer.php';
?>