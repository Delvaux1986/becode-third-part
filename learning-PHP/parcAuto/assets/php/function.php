<?php

    function Securisation($donnees){ 
    $donnees = htmlspecialchars($donnees); 
    $donnees = trim($donnees); 
    $donnees = stripcslashes($donnees); 
    $donnees = strip_tags($donnees); 
    return $donnees; 

    } 

?>