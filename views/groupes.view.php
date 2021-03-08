<?php 
ob_start();
?>



<table class="table table-striped text-center mt-5">

    <tr class="table-light text-dark">
        <th>Image</th>
        <th>Nom du groupe</th>
        <th>Année Création Groupe</th>
        <th>Description</th>
    </tr>

    <?php 

        for ($i = 0; $i < count($groupes); $i++) { ?>

        <tr>
            <td class="align-middle"><img src="public/images/<?= $groupes[$i]->getImage() ?>" width="100px"></td>
            <td class="align-middle"><?= $groupes[$i]->getnom() ?></td>
            <td class="align-middle"><?= $groupes[$i]->getAnneeCreation() ?></td>
            <td class="align-middle" width="300px"><?= substr($groupes[$i]->getDescription(),0, 105) ?></td>
        </tr>

    <?php } ?>

</table>




<?php 
$titre = "Liste des Groupes";
$content = ob_get_clean();
require 'template.php';
?>