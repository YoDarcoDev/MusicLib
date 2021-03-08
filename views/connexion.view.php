<?php 
ob_start();
?>


<div class="container mt-5">

    <form action="" method="POST">
        <div class="form-group">
            <label for="email">Email :</label>
            <input type="email" name="email" id="email" class="form-control" placeholder="Veuillez saisir votre adresse email">
        </div>
        <div class="form-group mt-5">
            <label for="password">Password :</label>
            <input type="password" name="password" id="password" class="form-control" placeholder="Veuillez saisir votre adresse password">
        </div>
        <input type="submit" class="btn btn-light mt-5" value="Se connecter">
    </form>

</div>



<?php 
$titre = "Connexion Admin";
$content = ob_get_clean();
require 'views/template.php';
?>