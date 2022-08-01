<?php
include 'include/header.php';
?>
    
<form action="" method="POST">
    <section class= "formulaire">
    <h1>Formulaire de contact</h1>
    <div>
        <label class="label-de-merde" for="prenom">Prénom</label>
    <input type="text" id="prenom" name="user">
    </div>
    <div>
        <label class="label-de-merde" for="nom">Nom</label>
        <input type="text" id="nom" name="user_name">
    </div>
    <div>
        <label class="label-de-merde" for="mail">E-mail</label>
        <input type="email" id="mail" name="user_mail">
    </div>
    <div class="message">
        <label class="label-de-merde" for ="message">Message</label>
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