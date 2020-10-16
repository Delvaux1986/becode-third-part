<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Pangolin&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./../css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    
        <section class="main text-center">
            <section class="entete">
                <h1>Bienvenue a l'école de Springfield</h1>
            </section>
                <form  method="GET">
                    <label for="nameofChild" >Nom de l'enfant <input type="text" name="nameofChild" placeholder="Nom de l'enfant"></label><br>
                    <label for="gender" >Garçon ou Fille :<br><label for="fille">Fille</label><input type="radio" name="gender" value="Ma fille "></label>
                                                            <label for="garcon">Garçon</label><input type="radio" name="gender" value="Mon fils "></label><br>
                        <label for="nomduProf" >Nom du professeur <input type="text" name="nomduProf" placeholder="Nom du Profeseur"></label><br>    
                            <select type="select" name="reason">
                                    <libellé>Quel est la raison de l'absence ?</libellé>
                                    <option name="maladie" value="de maladie .">Maladie</option>
                                    <option name="deathofPet" value="de la mort de notre animal de compagnie .">Mort d'un animal de compagnie ou un membre de la famille</option>
                                    <option name="extraScolaire" value=" d'activité extra-scolaire .">Activité extra-Scolaire</option>
                                    <option name="other" value="Tout autres raisons .">Autre</option>
                                    </select><br>
                                    <input type="submit" name="submit" value="Validate"/>
                </form>
            </section>
    <?php
    $status = false;
    $checkedReason = '';
    
    if(isset($_GET['gender']) && isset($_GET['nameofChild'])  && isset($_GET["nomduProf"]) && isset($_GET["reason"])){
         $gender = $_GET["gender"];
         $prof = $_GET['nomduProf'];
         $reason = $_GET["reason"];
         $name = $_GET["nameofChild"];
    }else{ 
        $gender = "none";
        $prof = "none";
        $reason = "none";
        $name = "none";
    }
    // $prof = isset($_GET["nomduProf"]);
    // $reason = isset($_GET["reason"]);
    $now = date('l jS \of F Y A');
    $why = '';
    date_default_timezone_set('UTC')+1;
    ?>
    <section class="containerText">
    <?php
            echo '<article class="textArea">';
            echo '<p class="text-center note"> Monsieur le principal , <br>';
            echo  $gender." ".$name.', élève en classe de 4ième dans votre collège chez le professeur '.$prof.'.<br> ne pourra pas assister au cours aujourd’hui.<br>';
            echo 'Pour cause ' .$reason. ' <br>Notre enfant devrait reprendre la classe dans une semaine du ' .$now ;
            echo     '<br>Pour tout complément d’informations n’hésitez surtout pas à nous contacter<br>Nos plus sincères salutations<br> Signature des parents mère ou père<br></p>';
            echo '</article>';
    ?>
    </section>
    <section class="fakeBox"><a href="./../../index.php">RETURN INDEX </a></section>
       
     
</body>
</html>


<!-- 

     -->