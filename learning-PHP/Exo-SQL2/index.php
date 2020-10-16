<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo SQL 2 </title>
</head>
<body>
    <?php 
        try
        {
            // On se connecte à MySQL
            $bdd = new PDO('mysql:host=localhost;dbname=becode;charset=utf8', 'root', '');
            echo 'Connected to DB';
        }
            catch(Exception $e)
        {
            // En cas d'erreur, on affiche un message et on arrête tout
                die('Erreur : '.$e->getMessage());
        }
        // $requestAll = $bdd->query('SELECT * FROM students,school');
        $dataAll = $requestAll->fetchAll();
        // echo '<pre>';
        // print_r($dataAll);
        // echo '</pre>';
        // $req = $bdd->query('SELECT prenom FROM students');
        // echo '<pre>';
        // print_r($req->fetchAll());
        // echo '</pre>';
        // $req = $bdd->query('SELECT prenom,datenaissance,school FROM students');
        // echo '<pre>';
        // print_r($req->fetchAll());
        // echo '</pre>';
        // $req = $bdd->query('SELECT prenom FROM students WHERE genre= "F"');
        // echo '<pre>';
        // print_r($req->fetchAll());
        // echo '</pre>';
        // $req = $bdd->query('SELECT prenom FROM students ORDER BY prenom DESC limit 2');
        // echo '<pre>';
        // print_r($req->fetchAll());
        // echo '</pre>';
        // $req = "INSERT INTO students (nom,prenom,datenaissance,genre,school) VALUES ('Dalor','Ginette',19300101,'F',1)";
        // $bdd->exec($req);
        // $req = "UPDATE students SET genre = 'M',prenom = 'Omer' WHERE prenom = 'Ginette' AND genre = 'F'";
        // $bdd->exec($req);
        // $req = "DELETE FROM students WHERE idStudent = '3'";
        // $bdd->exec($req);
        $modif = "ALTER TABLE students MODIFY school VARCHAR(15)";
        $bdd->exec($modif);
        $req = "UPDATE students SET school = 'Central' WHERE school = '1'";
        $bdd->exec($req);
        $req2 = "UPDATE students SET school = 'Anderlecht' WHERE school = '2'";
        $bdd->exec($req2);
    ?>
</body>
</html>