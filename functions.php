<?php

function getDatas($path, $dir) {
//créer une variable date qui récupère la date de derniere modification du dossier
      $date = "Dernière modification le :        " . date ("d F Y H:i:s.", filemtime($path));
//créer une variable '$filetype' qui récupère le type de fichier
      $filetype = "Type de fichier : " . mime_content_type($path);
//ajouter àla variable le résultat de la fonction qui récupère les infos du propriétaire du fichier sous forme de tableau
      $ownerinfo = posix_getpwuid(fileowner($path));
//de ce tableau extraire le premier élément qui correspond au nom du propriétaire et ajouter cette string à la variable
      $owner = "Propriétaire: " . $ownerinfo['name'];
//envoyer dans la variable '$folders' les variables name path date filetype owner
    return ['name' => $dir, 'path' => $path, 'date' => $date, 'filetype' => $filetype, 'owner' => $owner];
    }
?>
