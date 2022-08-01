<?php
include 'include/header.php';
?>
    
<form class="form-formulaire" action="" method="POST">
    <section class= "formulaire">
    <h1>Formulaire de contact</h1>
    <div>
        <label class="label-formulaire" for="prenom">Prénom</label>
    <input class= "input-formulaire" type="text" id="prenom" name="user">
    </div>
    <div>
        <label class="label-formulaire" for="nom">Nom</label>
        <input class= "input-formulaire" type="text" id="nom" name="user_name">
    </div>
    <div>
        <label class="label-formulaire" for="mail">E-mail</label>
        <input class= "input-formulaire" type="email" id="mail" name="user_mail">
    </div>
    <div class="message">
        <label class="label-formulaire" for ="message">Message</label>
        <textarea id="msg" name="user_message"></textarea>
    </div>

    <div class="button-container">
        <button class= "btn-formulaire" type="submit">Envoyer le message</button>
    </div>
    </section>
</form> 

<?php
include 'include/footer.php';
?>