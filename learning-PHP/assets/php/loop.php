<?php
    $pronouns = array ('I', 'You', 'He/She','We', 'You', 'They');

    foreach ($pronouns as $key => $value){
        if($value === 'He/She'){
            echo $value. ' codes <BR>';
        }else{
        echo $value. ' code <br>';
        }
    }
    echo 'Create a Script that prints the numbers fro 1 to 120 using "while"<br>';

    $num = 1 ;
    while($num <= 120){
        echo $num. '<br>' ;
        $num++;
    }

    echo 'Write a script that prints the numbers from 1 to 120 using  "for"<br>';

    for($secondNum = 1 ; $secondNum <= 120 ; $secondNum++){
        echo $secondNum. '<br>' ;
    }
?>
<a href="./../../index.php">RETURN INDEX </a>