<?php
    class html{

        private $data;

        public function __construct($data = array()){
            $this->data = $data; 
        }
        
        
        public function genCss($style = ""){
            return " <link rel='stylesheet' href='./assets/css/" .$style. ".css'>";
        }
        public function genMeta($meta = ""){
            return "<meta name='viewport' content='width=device-width, initial-scale=1.0'>";
        }
        public function genImg($url = ""){
            return "<img src='".$url."' alt='une image' height='250px' width='250px' class='text-center'>";
        }
        public function genLink($link = ""){
            return "<a href='".$link."' alt='un lien' target='_blank' class='text-center'>" .$link. "</a>";
        }
        public function genJsBalise($jslink = ""){
            return "<script src='".$jslink."'></script>";
        }
        public function bootstrapLink(){
            return '<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">';
        }

    }




?>