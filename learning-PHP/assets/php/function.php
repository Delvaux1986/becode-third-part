<?php
    date_default_timezone_set('UTC');
    $toCapitalize = 'emile';
    
    $name = ucfirst($toCapitalize); 
    echo "First Letter Upper with ucwords() " .$name;
    echo '<br>';
    echo "Nous sommes en : ".date("Y"). " Utlisation de l'objet date() <br><br>";
    echo 'Maintenant la date complete avec date minutes secondes <br>';
    echo date('l jS \of F Y h:i:s A')."<br><br>";


    function sum($a,$b){
        echo  $a * $b;
    }
    echo 'Ici vous avez le resultat de la function sum qui prend 2 arguments <br>';

    sum(4,8);

    echo "Second function cette fois il check si les arguments sont bien des INT<br>";

    function secondSum($c,$d){
        if(is_int($c) && is_int($d) ){
            echo $c * $d.'<br>';
        }else{
            echo "Error: argument is the not a number.<br>";
        }
    }

    echo 'ici on passe en arguments un string et un chiffre  : <br>';
    secondSum("er", 5);
    echo '<br>';
    echo 'Mtn on passe 2 INT en arguments 8 et 10: <br>';
    secondSum(8,10);
    echo '----------------------------------------------------------------------------------------------------------------------------------<br><br>';

    $str = "In code we trust!";
    $result = "";
  

    function acro($string){
        $split = explode(" ", $string);
        $result = $split[0][0] . $split[1][0] . $split[2][0] . $split[3][0];
        return strtoupper($result);
        }
    
    echo acro($str). "  un peu a la Barbare car avec un foreach et explode ca n'allait pas :s <br><br>";

    $replaceLetter = array();
    $regex = "/ae/i";
    $secondRegex = "/æ/i";

    echo preg_replace($regex,"æ","caecotrophie chaenichthys microsphaera sphaerotheca");
    echo '<br>';
    echo preg_replace($secondRegex,"ae","cæcotrophie chænichthys microsphæra sphærotheca");
    echo '<br><br>';    

    function returnInf($msg, $class = "info"){
        echo '<div class="'.$class.'">'.$class.': '.$msg. '</div>';
    }

    echo 'function qui return notice  warning or error prend 2 arguments msg & class(error notice ou warning)<br>';
    returnInf("Incorrect email address","error");
    echo 'avec un ARGUMENTS et 1 par defaut<br>';
    returnInf('Incorrect address');
    echo '-------------------------------------------------------------------------------------------------------------------------------------------<br><br>';

    

    
    
    function randomWords($longueur){
       $charac = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
       $characLength = strlen($charac);
       $randomW = '';
       for($i = 0;$i < $longueur ; $i++){
           $randomW .= $charac[rand(0, $characLength -1)];
       }
       return $randomW;
    }
    
    
    echo 'String générer aléatoirement :<br>';
    echo randomWords(rand(1,5)). '<br>' ;
    echo randomWords(rand(7,15));
    echo '-------------------------------------------------------------------------------------------------------------------------------------------<br><br>';

    echo 'DECAPITALIZE a string<br>';
    $strToDecapitalize = "STOP YELLING I CAN'T HEAR MYSELF THINKING!!<br>";
    echo 'The string is : ' .$strToDecapitalize;
    echo strtolower($strToDecapitalize);
    echo '-------------------------------------------------------------------------------------------------------------------------------------------<br><br>';

    echo 'Create a Function take 2 arguments height & ray & calculate the volume <br>' ;
    
    function calculate_cone_volume($height,$ray){
        echo  'The volume of a cone which ray is '.$ray. ' and height is ' .$height. ' = ' .$ray * $ray * 3.14 * $height * (1/3).'cm<sup>3</sup><br />';
    }

    calculate_cone_volume(5,10);



?>

<br><br>

<a href="./../../index.php">RETURN INDEX </a>