<?php 

// CLASS GROUPE_MANAGER
require_once 'groupeManager.class.php';

$groupeManager = new GroupeManager();
$groupeManager->chargementGroupesBDD();  // Connexion DB + rrecupérations de tous les groupes dans le tableau $groupeBDD


ob_start();
?>


<table class="table text-center mt-5">

    <tr class="table-light text-dark">
        <th>Image</th>
        <th>Nom du groupe</th>
        <th>Année Création</th>
        <th>Albums disponibles</th>
    </tr>

    <?php 
        // Tableau des groupes 
        $groupes = $groupeManager->getGroupes();
    
        for ($i = 0; $i < count($groupes); $i++) { ?>

        <tr>
            <td class="align-middle"><img src="public/images/<?= $groupes[$i]->getImage() ?>" width="100px"></td>
            <td class="align-middle"><?= $groupes[$i]->getnom() ?></td>
            <td class="align-middle"><?= $groupes[$i]->getAnneeCreation() ?></td>
        </tr>

    <?php } ?>

</table>







<?php 
$titre = "Liste des Groupes";
$content = ob_get_clean();
require 'template.php';
?>