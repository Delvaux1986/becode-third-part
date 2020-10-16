<?php
    require './php/DB.php';
    require 'php/html.php';


    $db = new Db("colyseum");
    $html = new Html();


    echo $html->bootstrapLink();
    echo $html->genCss("style");
    echo $html->linkIndex();



    
    $data =  $db->query("SELECT * FROM clients");
    echo '<h2 class="text-center text-danger">Afficher tous les clients.</h2>';
    echo "<pre>";
    print_r($data);
    echo "</pre>";

    $shows = $db->displayShows();
    echo '<h2 class="text-center text-danger">Afficher tous les types de spectacles possibles.</h2>';
    echo '<pre>';
    print_r($shows);
    echo '</pre>';

    $firstClt = $db->query("SELECT firstName FROM clients ORDER BY firstName ASC LIMIT 20 ");

    echo '<h2 class="text-center text-danger">Afficher les 20 premiers clients.</h2>';
    echo '<pre>';
    print_r($firstClt);
    echo '</pre>';


    $withCard = $db->query("SELECT firstName,lastName,cardNumber FROM clients WHERE cardNumber != 'NULL'");
    echo '<h2 class="text-center text-danger">N\'afficher que les clients possédant une carte de fidélité.</h2>';
    echo '<pre>';
    print_r($withCard);
    echo '</pre>';

    echo $startwithM = $db->displayNameM();

    echo $db->displayVignet();

    echo $db->displayClients();
    
   









?>
