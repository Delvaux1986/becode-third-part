<form method="GET">
<label for="note">Veuillez entrer la note de l'eleve<input type="number" name="note"></label>
<input type="submit" name="submit" value="Validate">
</form>

<?php
    $note = $_GET["note"];
    echo $note;

    if($note < 4){
        echo 'This work is really bad. What a dumb kid! ';
    }else if($note < 9 && $note > 5){
        echo 'This is not sufficient. More studying is required.';
    }else if($note == 10){
        echo 'barely enough!';
    }else if($note > 10 && $note < 14){
        echo 'Not bad!';
    }else if($note > 15 && $note < 18){
        echo 'Bravo, bravissimo!';
    }else if($note == 19 ||  $note == 20){
        echo 'Too good to be true : confront the cheater!';
    }
?>

<a href="./../../index.php">RETURN INDEX </a>