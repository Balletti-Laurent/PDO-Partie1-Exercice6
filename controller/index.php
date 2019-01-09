<?php
//Instenciation de l'objet shows. 
//$client devient une instance de la classe show.
//la methode magique construct est appelée automatiquement 
//grace au mot clé new.
$shows= new shows();
$showListByTitle=$shows->getShowListByTitle();
?>

