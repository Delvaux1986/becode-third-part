<?php
    class Validator{
        public function __construct($data = ""){
            $this->data = $data;
        }

        public function sanitizeString($string = ''){
            $string = filter_var($string ,FILTER_SANITIZE_STRING );
            echo '<p class="text-center"> String sanitize ! et est mtn '.$string.'</p>';
        }
        public function sanitizeInt($integer = 0){
            $integer = filter_var($integer , FILTER_SANITIZE_NUMBER_INT);
            echo '<p class="text-center"> Integer sanitize ! et est mtn '.$integer.'</p>';
            
        }
        public function sanitizeFloat($float = 0.01){
            $float = filter_var($float , FILTER_SANITIZE_NUMBER_FLOAT);
            echo '<p class="text-center"> Float sanitize ! et est mtn '.$float.'</p>';
        }
        public function sanitizeMail($mail = ""){
            $mail = filter_var($mail, FILTER_SANITIZE_EMAIL);
            echo '<p class="text-center"> E-miel sanitize ! et est mtn '.$mail.'</p>';
        }
    }

?>