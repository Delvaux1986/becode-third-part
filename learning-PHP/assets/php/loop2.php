<?php
    $firstname = array('Pierre','Nico','Simon','John','Aleksandra','Aurore','Calvin','Chris','Loic','Bastien');

    foreach($firstname as $firstname){
        echo 'Hello ' .$firstname. '<br>';
    }

    $country = array('Belgium','France','Allemagne','Italie','Espagne','China','Usa','Canada','Suisse','Bulgarie');

    
    echo 'Option generate by a LOOP from array <br>';
    echo '<select>';
    foreach($country as $country){
        echo '<option name="'.$country.'" value="'.$country.'"> '.$country.' </option>';
    }
    echo '</select><br>';
    
    
    $country2 = array('Belgium','France','Allemagne','Italie','Espagne','China','Usa','Canada','Suisse','Bulgarie');
    $iso = array('BE','FR','AL','IT','ES','CH','USA','CA','SU','BU');

    $newCountry = array_combine($iso , $country2 );

    echo 'Nouveau Tableau avec Key VALUES a BASE DE 2 AUTRES TABLEAUX <br>';
    echo '<pre>';
    print_r( $newCountry);
    echo '</pre>';

    echo '---------------------------------------------------------------------------------------------------------------------------<br><br><br>';

    echo 'Adapt SelectBox with Iso <br>';
    echo '<select>';
    echo '<pre>';
    foreach($newCountry as $key => $value){
        echo '<option name="'.$value.'" value="'.$key.'"> '.$value.' </option>';
    };
    echo '</pre>'; 
    echo '</select><br><br>';       


?>
<a href="./../../index.php">RETURN INDEX </a>