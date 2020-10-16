<?php
     require './php/DB.php';
     require 'php/html.php';
     require 'php/form.php';

    $db = new Db("colyseum");
    $html = new Html();
    $form = new Form();

    // $lastName = isset($_POST['lastName']) ? $_POST['lastName'] : "";
    // $firstName = isset($_POST['firstName']) ? $_POST['firstName'] : "";
    // $birthDate = isset($_POST['birthDate']) ? $_POST['birthDate'] : "";
    // $lastName = isset($_POST['cardNumber']) ? $_POST['cardNumber'] : 0;




     echo $html->bootstrapLink();
     echo $html->linkIndex();

    echo '<h2 class="text-center text-danger">2eme partie du CRUD exo</h2>';
    echo '<section class="col-md-6 offset-md-3 text-center">';
    echo '<form method="post" action="#">';
    echo $form->inputText("firstName").'<br><br>';
    echo $form->inputText('lastName').'<br><br>';
    echo $form->inputDate('birthDate').'<br><br>';
    echo $form->inputInt("cardNumber").'<br><br>';
    echo $form->doubleCheckBox("oui","non" , "card")."<br>";
    echo $form->submit('Update');
    echo '</form>';
    echo '</section>';

    $lastName = isset($_POST['lastName']) ? $db->securisation($_POST['lastName']) : "";
    $firstName = isset($_POST['firstName']) ? $db->securisation($_POST['firstName']) : "";
    $birthDate = isset($_POST['birthDate']) ? $db->securisation($_POST['birthDate']) : "";
    $cardNumber = isset($_POST['cardNumber']) ? $db->securisation($_POST['cardNumber']) : 0;
    $card = isset($_POST['card']) ? $db->securisation($_POST['card']) : "";
    $cardType = isset($_POST['cardType']) ? $db->securisation($_POST['cardType']) : "";





    if(isset($_POST['Update'])){
        if(isset($_POST['firstName'] , $_POST['lastName'] , $_POST['birthDate'] , $_POST['cardNumber'], $_POST['card'])){
        echo $db->addClt($lastName,$firstName,$birthDate,$card,$cardNumber);
        }
    }
    echo '#####################################################################################################';

    echo '<h2 class="text-center text-danger">Ajout d\'un nouveau client avec Carte . </h2>';
    echo '<section class="col-md-6 offset-md-3 text-center">';
    echo '<form method="post" action="#">';
    echo $form->selectMenu("Quel type de carte voulez vous ?", "Fidélité" ,"Famille Nombreuse","Etudiant","Employé").'<br>';
    echo $form->inputInt("cardNumber").'<br><br>';
    echo $form->submit('Envoyer');
    echo '</form>';
    echo '</section>';


    if(isset($_POST['Envoyer'])){
        if(isset($_POST['cardType'])){
            echo $db->addCard($cardType , $cardNumber);
        }
    }





?>
