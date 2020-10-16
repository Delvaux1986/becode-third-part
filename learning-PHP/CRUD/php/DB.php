<?php
    class Db{
         private $db_name, $db_user , $db_pass, $db_host , $bdd;
         
         
         public function __construct($db_name , $db_user = "root", $db_pass = "" , $db_host = "localhost"){
            $this->db_name = $db_name;
            $this->db_user = $db_user;
            $this->db_pass = $db_pass;
            $this->db_host = $db_host;
        }
        // FUNCTION SECURISATION DATA 
        public function securisation($donnees){
            $donnees = htmlspecialchars($donnees); 
            $donnees = trim($donnees); 
            $donnees = stripcslashes($donnees); 
            $donnees = strip_tags($donnees); 
        
            return $donnees; 
        }
        
        // CONNECT TO DB
        private function connectDb(){
            if($this->bdd === null){
                $bdd = new PDO("mysql:host=localhost:3306;dbname=colyseum","root","");
                $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $this->bdd = $bdd;
            }
            return $this->bdd;
                
        }
        public function query($request){
            
            $req = $this->connectDb()->query($request);
            $datas = $req->fetchAll(PDO::FETCH_OBJ);

            return $datas;
        }
        // OTHER METHOD
        public function displayShows(){
            $req = $this->connectDb()->query('SELECT * FROM showtypes');
            $datas = $req->fetchAll(PDO::FETCH_OBJ);

            return $datas;
        }

        public function displayNameM(){
            $req = $this->connectDb()->query("SELECT firstName,lastName FROM clients WHERE lastName LIKE 'M%' ORDER BY lastName ASC");
            echo '<h2 class="text-center text-danger">Afficher uniquement le nom et le prénom de tous les clients dont le nom commence par la lettre "M" .</h2>';
            foreach($req as $row){
                echo 'Nom : ' .$row['lastName']. '<br>';
                echo 'Prénom : ' .$row['firstName']. '<br><br><br>';
            }
        }
        public function displayVignet(){
            $req = $this->connectDb()->query("SELECT title,performer,`date`,startTime FROM shows ORDER BY title ASC");
            echo '<h2 class="text-center text-danger">Afficher le titre de tous les spectacles ainsi que l\'artiste, la date et l\'heure.</h2>';
            foreach($req as $row){
                echo $row['title']. ' Par : ' .$row['performer']. ', le ' .$row['date']. ' à ' .$row['startTime']. '<br><br>';
            }
        }
        public function displayClients(){
            $req = $this->connectDb()->query("SELECT * FROM clients ORDER BY lastName ASC");
            echo '<h2 class="text-center text-danger">Afficher tous les clients comme ceci .</h2>';
            foreach($req as $row){
                echo '<article class="card text-center">';
                echo '<p>Nom : ' .$row['lastName']. '<br>';
                echo 'Prénom : '.$row['firstName']. '<br>';
                echo 'Date de naissance : ' .$row['birthDate']. '<br>';
                    if($row['cardNumber'] === NULL){
                        echo 'Carte de fidélité : Non . <br>';
                    }else{
                        echo 'Carte de fidélité : Oui .<br>';
                        echo 'Numéro de carte : ' .$row['cardNumber']. '.<br>';
                    }
                }

        }
        // ADD DATA 
        public function addClt($name = "" , $first = "", $date ="" , $card = 1 ,$cb = 0){
            $req = "INSERT INTO clients (lastName, firstName, birthDate, `card` ,cardNumber) VALUES('$name','$first','$date','$card','$cb')";
            $this->connectDb()->exec($req);
            return  "<p class='text-center text-info'>Ajout executer</p>";
        }
        public function addCard($cardTypesId, $cardnumber){
            $req = "INSERT INTO cards (cardNumber, cardTypesId) VALUES ('".$cardTypesId."','".$cardnumber."')";
            die($req);
            $this->connectDb()->exec($req);
            return "<p class='text-center text-info'>Ajout de la carte effectuer</p>";
        }
    }
?>