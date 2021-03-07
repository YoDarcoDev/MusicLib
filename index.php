<?php 
ob_start();
?>


ici la page d'accueil




<?php 
$titre = "Accueil";
$content = ob_get_clean();
require 'template.php';
?>