<?php 

// // CLASS GROUPE_MANAGER
// require_once 'groupeManager.class.php';

// $groupeManager = new GroupeManager();
// $groupeManager->chargementGroupesBDD();


// // CLASS ALBUM_MANAGER
// require_once 'albumManager.class.php';

// $albumManager = new AlbumManager();
// $albumManager->chargementAlbumGroupeBDD();
// $albumManager->chargementAlbumsBDD();


require_once 'GroupeAlbumManager.class.php';

$groupeAlbumManager = new GroupeAlbumManager();
$groupeAlbumManager->chargementAlbumGroupeBDD();

ob_start();
?>

<table class="table text-center mt-5">

    <tr class="table-light text-dark">
        <th>Image</th>
        <th>Nom du groupe</th>
        <th>Année Création</th>
        <th colspan="2">Albums:Sorties</th>
        <th colspan="2">Actions</th>
    </tr>

    <?php 
        // Tableau qui contient tous les groupes
        // $groupes = $groupeManager->getGroupes();
        // $albums = $albumManager->getAlbums();
        $groupeAlbum = $groupeAlbumManager->getGroupeAlbum();
       
    
    
        for ($i = 0; $i < count($groupeAlbum); $i++) { ?>

           
            


        <tr>
            <td class="align-middle"><img src="public/images/<?= $groupeAlbum[$i]->getImageAlbum() ?>" width="100px"></td>
            <td class="align-middle"><?= $groupeAlbum[$i]->getnom()?></td>
            <td class="align-middle"><?= $groupeAlbum[$i]->getAnneeCreation();?></td>
            <td class="align-middle"><?= $groupeAlbum[$i]->getNomAlbum();  

          ?>
            
            </td> 
            <td class="align-middle"><?= $groupeAlbum[$i]->getDate() ?></td>
            <td class="align-middle"><a href="" class="btn btn-outline-warning">Modifier</a></td>
            <td class="align-middle"><a href="" class="btn btn-outline-danger">Supprimer</a></td>

        </tr>


<?php } ?>

</table>


<a href="" class="btn btn-success d-block">Ajouter un nouveau groupe</a>


<?php 
$titre = "Dashboard ADMIN";
$content = ob_get_clean();
require 'template.php';
?>