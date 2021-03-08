<?php 


ob_start();
?>

<table class="table table-striped text-center mt-5">

    <tr class="table-light text-dark">
        <th>Cover</th>
        <th>Groupe</th>
        <th>Année Création</th>
        <th>Album</th>
        <th>Sortie</th>
        <th colspan="2">Actions</th>
    </tr>

    <?php 
  
       
        for ($i = 0; $i < count($tabGroupeAlbum); $i++) { ?>


        <tr>
            <td class="align-middle"><img src="public/images/<?= $tabGroupeAlbum[$i]->getImageAlbum() ?>" width="100px"></td>
            <td class="align-middle"><?= $tabGroupeAlbum[$i]->getnom()?></td>
            <td class="align-middle"><?= $tabGroupeAlbum[$i]->getAnneeCreation();?></td>
            <td class="align-middle"><?= $tabGroupeAlbum[$i]->getNomAlbum();?></td> 
            <td class="align-middle"><?= $tabGroupeAlbum[$i]->getDate() ?></td>
            <td class="align-middle"><a href="" class="btn btn-outline-warning">Modifier</a></td>
            <td class="align-middle"><a href="" class="btn btn-outline-danger">Supprimer</a></td>

        </tr>


<?php } ?>

</table>


<a href="" class="btn btn-success d-block">Ajouter un nouveau groupe</a>


<?php 
$titre = "Dashboard ADMIN";
$content = ob_get_clean();
require 'views/template.php';
?>