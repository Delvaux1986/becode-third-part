<?php 
    $name = 'Delvaux';
    $age = 34;
    $eyes = "blue/grey";
    $hungry = true;
    $familia = array(
            0 => 'Sandy',
            1 => 'Stacy',
            2 => 'Chantal'
    )
    
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Type of Var</title>
    </head>
    <body>
        <?php
            echo '<p>Hello My name is '.$name. ' .<br>';
            echo '<p>I am ' .$age. ' old.<br>';
            echo '<p>My eyes are ' .$eyes. '.<br>';
            echo '<p>The first person in my family is ' .$familia[0]. '.<br>';
            echo '<p>I am hungry its a boolean ' .$hungry. '.';
            ?>
            <a href="./../../index.php">RETOUR INDEX</a>
    </body>
    </html>