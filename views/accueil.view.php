<?php 
ob_start();
?>



<div class="container mt-5">
    <div class="text-center">
        <img src="public/images/accueil.jpeg" class="w-75" alt="cd">
    </div>
</div>




<?php 
$titre = "Bienvenue";
$content = ob_get_clean();
require 'template.php';
?>