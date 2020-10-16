<?php
    class Voiture{

        public function __construct($model = "", $mark = "" ,$weight = 0 , $origin = "" , $used = 0 , $color ="" , $date = 0 , $imgUrl = ""){
            $this->model = $model;
            $this->mark = $mark;
            $this->weight = $weight;
            $this->origin = $origin;
            $this->used = $used;
            $this->color = $color;
            $this->date = $date;
            $this->imgUrl = $imgUrl;
            
        }

        public $weight,$used,$color;
        private $model,$mark,$origin,$date,$toRoll,$imgUrl;
        
        
        // SETTERS 
        public function setArguments($mark, $weight, $origin , $used , $color , $date , $imgUrl){
            $this->mark = $mark;
            $this->weight = $weight;
            $this->origin = $origin;
            $this->used = $used;
            $this->color = $color;
            $this->date = $date;
            $this->imgUrl = $imgUrl;
        }
        public function setWeight($weight){
            $this->weight = $weight;
        }
        public function setUsed($used){
            $this->used = $used;
        }
        public function setColor($color){
            $this->color = $color;
        }
        
        // GETTERS
        
        
        public function getModel(){
            if($this->model === 'Audi'){
                $reserved = " Ce modele est reservée (".$this->model.")"  ;
                return $reserved;
            }else{
                $free = "Ce modele est libre (".$this->model.")" ;
                return $free;
            }  
        }
        public function getWeight(){
            if($this->weight > 3500){
                $utilitair = "Ce véhicule est classé utilitaire .(".$this->weight." Kg)";
                return $utilitair ;
            }else{
                $comm = "Ce véhicule est classé commercial .(".$this->weight." Kg)";
                return $comm ;
            }
        }
        public function getOrigin(){
            if($this->origin == "BE"){
               $country = $this->origin. "(Belgium)";
               return $country; 
            }
            if($this->origin == "DE"){
                $country = $this->origin. "(Deutshland)";
                return $country;
            }else{
                $country = $this->origin. "(France)";
                return $country;
            }
        }
        public function getUsing(){
            if($this->used <= 150000){
                return "L'usure de ce véhicule est faible <br>";
            }else if($this->used >= 150000 && $this->used <= 200000){
                return "L'usure de ce véhicule est moyenne <br>";
            }else{
                return "L'usure de ce véhicule est grande <br>";
            }
        }
        public function getAge(){
            $thisyear =  date("Y");
            $thisyear -= $this->date;
            return  $thisyear. "an(s)";
        }
        // OTHER METHOD
        public function toRoll(){
            $toroll = 100000;
            return $this->used = $this->used + $toroll ." Km";
        }
        public function genImg(){
            return "<img src='".$this->imgUrl."' alt='une image' height='200px' width='250px' class='m-5 text-left img-thumbnail'>";
        }
        public function displayCar(){
            echo "<article class='d-flex justify-content-center align-items-center bg-dark mt-3 mb-2 rounded carte'>";
            echo $this->genImg();
            echo "<section class='flex-column'>";
            echo "<p class='text-danger font-weight-bold title text-right mr-5'> ".$this->model." ". $this->mark. "</p><br>";
            echo "<p class='text-info text-right mr-3'> Couleur : " .$this->color. " </p>";
            echo "<p class='text-info text-right mr-3'> Kilométrage : " .$this->used. "</p>";
            echo "<p class='text-info text-right mr-3'> Poids : " .$this->weight. " Kg</p>";
            echo "<p class='text-info text-right mr-3'> Age : " .$this->getAge(). "</p>";
            echo "<p class='text-info text-right mr-3'> Immatriculé en : " .$this->getOrigin(). "</p>";
            echo "<section>";
            echo "</article>"; 
        }




    }
?>