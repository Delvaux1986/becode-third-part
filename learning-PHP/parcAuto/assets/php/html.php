<?php 
    class Html{
        public function __construct($data = array()){
            $this->data = $data; 
        }
        private $data;

        public function setBootstrap(){
            return '<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">';
        }
        public function genCss($style = ""){
            return " <link rel='stylesheet' href='./assets/css/" .$style. ".css'>";
        }
        
    }
?>