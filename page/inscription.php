<?php
include './include/header.php';
?>

<main class="h-screen w-screen flex justify-center insc-main">
    <div id="form-cont" class="w-3/4 flex flex-col items-center">
        <div class="w-full h-1/6 mb-10 flex items-center align-center justify-center">
            <h1 class="font-mont font-bold text-4xl" >Inscription</h1>
        </div>
        <div id="progression" class="progression-cont flex justify-between w-5/6 mb-5">
            <div class="w-1/3 mr-3">
                <p class="mb-1 text-red" id="premier">1. Premier</p>
                <div class="insc-line h-2" id="first"></div>
            </div>
            <div class="w-1/3 mr-3">
                <p class="mb-1">2. Second</p>
                <div class="insc-line h-2"></div>
            </div>
            <div class="w-1/3 mr-3">
                <p class="mb-1">3. Troisième</p>
                <div class="insc-line h-2"></div>
            </div>
        </div>
        <form action="../systeme/inscription.php" method="POST" class="w-5/6 h-4/6"> <!-- J'appelle le fichier fonction de l'inscription -->
            <div id="slider-insc-cont" class="w-full h-full border-2 rounded-lg overflow-hidden">
                <div id="slider-insc" class="h-5/6 w-[300%] flex" >
            
                    <div class="slider-element flex flex-col items-center h-full w-full">
                        <!-- Nom prénom age -->
                        <div class="h-1/3 w-4/5 flex items-center">

                            <div class="flex flex-col justify-end w-4/12 h-10 mb-6 relative font-quick mr-10">
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
                                    " type="text" id="nom" name="nom" placeholder="Nom :" required>
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
                                        
                                    " for="nom">Nom :</label>
                            </div>

                            <div class="flex flex-col justify-end w-6/12 h-10 mb-6 relative font-quick mr-10">
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
                                    " type="text" id="prenom" name="prenom" placeholder="Prénom :" required>
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
                                        
                                    " for="prenom">Prénom :</label>
                            </div>

                            <div class="flex flex-col justify-end w-2/12 h-10 mb-6 relative font-quick">
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
                                    " type="number" id="age" name="age" placeholder="Age :" required>
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
                                        
                                    " for="prenom">Age :</label>
                            </div>

                        </div>

                        <!-- Mail  -->
                        <div class="h-1/3 w-4/5 flex items-center">

                            <div class="flex w-6/12 flex-col justify-end h-10 mb-6 relative font-quick mr-20">
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
                                    " type="mail" id="mail" name="mail" placeholder="Email :" required>
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

                            <div class="flex w-6/12 flex-col justify-end h-10 mb-6 relative font-quick">
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
                                    " type="mail" id="confMail" name="confMail" placeholder="Confirmation de votre email :" required>
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
                                        
                                    " for="confMail">Confirmation de votre email :</label>
                            </div>

                        </div>

                        <!-- Mot de passe  -->
                        <div class="h-1/3 w-4/5 flex justify-evenly items-center">

                            <div class="flex flex-col justify-end w-6/12 h-10 mb-6 relative font-quick mr-20">
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
                                    " type="password" id="password" name="password" placeholder="Mot de passe :" required>
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

                            <div class="flex flex-col justify-end w-6/12 h-10 mb-6 relative font-quick">
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
                                    " type="password" id="confPass" name="confPass" placeholder="Confirmation de votre mot de passe :" required>
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
                                        
                                    " for="confPass">Confirmation de votre mot de passe :</label>
                            </div>

                        </div>



                    </div>
                        
                    <div class="slider-element flex flex-col items-center h-full w-full">
                        
                        <!-- Taille poids genre -->
                        <div class="h-1/2 w-4/5 flex justify-evenly items-center">

                            <div class="flex flex-col justify-end w-3/12 h-10 mb-6 relative font-quick mr-10">
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
                                    " type="number" id="taille" name="taille" placeholder="Taille en cm :" required>
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
                                        
                                    " for="taille">Taille en cm :</label>
                            </div>

                            <div class="flex flex-col justify-end w-3/12 h-10 mb-6 relative font-quick mr-10">
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
                                    " type="number" id="poids" name="poids" placeholder="Poids :" required>
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
                                        
                                    " for="poids">Poids :</label>
                            </div>

                            <div class="flex flex-col justify-end w-6/12 h-10 mb-6 relative font-quick">
                                <select 
                                    class=" 
                                        text-gray-600  
                                        border-b 
                                        focus:border-b-2
                                        pl-3
                                        pb-1.5
                                        border-gray-500
                                        focus:outline-none
                                        focus:border-cyan-600
                                        bg-transparent
                                        z-10
                                    " id="genre" name="genre">
                                    <option selected disabled class="text-gray-600">choisissez votre genre</option>
                                    <option value="homme">Homme</option>
                                    <option value="femme">Femme</option>
                                    <option value="autre">Autre</option>
                                </select>
                            </div>

                        </div>
                        <!-- groupe sanguins  -->
                        <div class="h-1/3 w-4/5 flex items-center">
                            <select 
                                class=" 
                                    w-full
                                    text-gray-600  
                                    border-b 
                                    focus:border-b-2
                                    pl-3
                                    pb-1.5
                                    border-gray-500
                                    focus:outline-none
                                    focus:border-cyan-600
                                    bg-transparent
                                    z-10
                                " id="groupeSanguins" name="groupeSanguins" required>
                                <option selected disabled class="text-gray-600">Groupe sanguins</option>
                                <option value="ab+">AB+</option>
                                <option value="ab-">AB-</option>
                                <option value="a+">A+</option>
                                <option value="a-">A-</option>
                                <option value="b+">B+</option>
                                <option value="b-">B-</option>
                                <option value="o+">O+</option>
                                <option value="o-">O-</option>
                            </select>
                        </div>
                    </div>
                    
                    <div class="slider-element flex flex-col items-center h-full w-full">
                        <!-- catégories socioprofessionnelles parent -->
                        <div class="h-1/2 w-4/5 flex flex-col justify-center">
                            <!-- catégories socioprofessionnelles parent 1  -->
                            <select 
                                class=" 
                                    mb-20
                                    w-full
                                    text-gray-600  
                                    border-b 
                                    focus:border-b-2
                                    pl-3
                                    pb-1.5
                                    border-gray-500
                                    focus:outline-none
                                    focus:border-cyan-600
                                    bg-transparent
                                    z-10
                                " id="catSocP1" name="catSocP1">
                                <option selected value="" disabled class="text-gray-600">Catégories socioprofessionnelles parent 1</option>
                                <option value="1">Agriculteurs exploitants</option>
                                <option value="2">Artisans, commerçants, chefs d'entreprise</option>
                                <option value="3">Cadres et professions intellectuelles supérieures</option>
                                <option value="4">Professions intermédiaires</option>
                                <option value="5">Employés</option>
                                <option value="6">Ouvriers</option>
                                <option value="7">Autres</option>
                            </select>
                            <!-- catégories socioprofessionnelles parent 2  -->
                            <select 
                                class=" 
                                    w-full
                                    text-gray-600  
                                    border-b 
                                    focus:border-b-2
                                    pl-3
                                    pb-1.5
                                    border-gray-500
                                    focus:outline-none
                                    focus:border-cyan-600
                                    bg-transparent
                                    z-10
                                " id="catSocP2" name="catSocP2">
                                <option selected value="" disabled class="text-gray-600">Catégories socioprofessionnelles parent 2</option>
                                <option value="1">Agriculteurs exploitants</option>
                                <option value="2">Artisans, commerçants, chefs d'entreprise</option>
                                <option value="3">Cadres et professions intellectuelles supérieures</option>
                                <option value="4">Professions intermédiaires</option>
                                <option value="5">Employés</option>
                                <option value="6">Ouvriers</option>
                                <option value="7">Autres</option>
                            </select>
                        </div>
                    
                        <div class="h-1/3 w-4/5 flex justify-evenly items-center">
                            <div class="flex flex-col justify-end w-6/12 h-10 mb-6 relative font-quick mr-20">
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
                                    " type="number" id="salaireP1" name="salaireP1" placeholder="Salaire mensuelle parent 1 :">
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
                                        
                                    " for="salaireP1">Salaire mensuelle parent 1 :</label>
                            </div>
                            <div class="flex flex-col justify-end w-6/12 h-10 mb-6 relative font-quick">
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
                                    " type="number" id="salaireP2" name="salaireP2" placeholder="Salaire mensuelle parent 2 :">
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
                                        
                                    " for="salaireP1">Salaire mensuelle parent 2 :</label>
                            </div>
                        </div>
                    </div>

                </div>
                <div id="insc-btn-cont" class="h-1/6 w-full flex justify-end items-center">
                    <div class="h-full w-[100px] flex justify-end items-center mr-4">
                        <div class="insc-btn" id="insc-btn-precedent">précédent</div>
                    </div>
                    <div class="h-full w-[100px] flex justify-end items-center mr-6">
                        <div class="insc-btn" id="insc-btn-suivant">Suivant</div>
                        <button class="insc-btn" id="insc-btn-envoyer" type="submit" name="submit">Envoyer</button>
                    </div>
                </div>
            </div>
        </form>
    </div>

</main>

<script src="../asset/js/inscription.js"></script>

<?php
include './include/footer.php';
?>