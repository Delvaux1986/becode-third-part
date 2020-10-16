<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/sqlstyle.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ExoSQL PDO </title>
</head>
<body>
    
</body>
</html>
<?php
        $db = 'weatherapp';
        try
        {
            // On se connecte à MySQL
            $bdd = new PDO('mysql:host=localhost;dbname='.$db.';charset=utf8', 'root', '');
        }
        catch(Exception $e)
        {
            // En cas d'erreur, on affiche un message et on arrête tout
                die('Erreur : '.$e->getMessage());
        }

        echo '<p>Connecté a la DB okay !!!</p><br>';
        echo '<p>Maintenant on va recuperé les données . </p><BR>';

        
        $resultat = $bdd->query('SELECT * FROM Météo ORDER BY id ASC');  // on prepare la requete
        $datas = $resultat->fetch();    // on fetch les data dans un array
                
      
        function fetchData($resultat,$datas){
            while($datas =  $resultat->fetch()){
                
                echo '<tr>';
                echo '<td> ' .$datas['ville']. '  </td>';
                echo '<td> ' .$datas['haut']. '  </td>';
                echo '<td> ' .$datas['bas']. '  </td>';
                echo '<td><label for="'.$datas['ville'].'">del?<input type="checkbox" name="'.$datas['ville'].'"></label></td>';
                echo '</tr>';
                
            }
        }
        //mtn on boucle pour affiché les données reCUp
        echo '<form method="GET">';
        echo '<table>';
        echo '<tr>';
        echo '<th>Ville</th>';
        echo '<th>Haut</th>';
        echo '<th>Bas</th>';
        fetchData($resultat,$datas);
        echo '</tr></table>';
        echo '<input type="submit" value="delete">';
        echo '</form>';

        if(!empty($_GET['delete'])){
            $cityToRemove = 'DELETE FROM Météo WHERE `ville`='.$_GET['delete'].'';
            $bdd->exec($cityToRemove);
            echo $_GET['delete']."blabla";
        }

?>
    <br><br>
    <form method="POST">
        <label for="ville">Entrez une ville <input type="text" name="ville" placeholder="Ville" ></label><br>
        <label for="haut">Entrez une temperature max <input type="number" name="haut" placeholder="Temp Max" ></label><br>
        <label for="bas">Entrez une temperature min<input type="number" name="bas" placeholder="Temp Min"></label><br>
        <input type="submit" value="Envoyer">
    </form>
    <?php
        //EXEC VAR EMPTY FOR LOADING
        $CityToAdd = '';
        $TempMax = 0;
        $TempMin = 0;

        //& IF IS SET WE GET DATA & EXEC REQUEST INSERT 
        if(isset($_POST['ville']) && isset($_POST['haut']) && isset($_POST['bas'])){
            $CityToAdd = $_POST['ville'];
            $TempMax = $_POST['haut'];
            $TempMin = $_POST['bas'];

            $Insert = 'INSERT INTO Météo (ville,haut,bas) VALUES ("'.$CityToAdd.'", '.$TempMax.','.$TempMin.')';
            $bdd->exec($Insert);
            
        }


    ?>
    