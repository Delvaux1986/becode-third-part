<?php
    class Form {

        private $data ;

        public function __construct($data = array()){
            $this->data = $data;
        }


        public function inputText($placeholder = ""){
            return "<input type='text' name='".$placeholder."' id='".$placeholder."' placeholder='".$placeholder."'><br>";
        }
        public function inputint($int = 0){
            return "<input type='number' name='number' class='mt-5'placeholder='Put a Number' min='0'><br>";
        }
        public function inputFloat($float = 0.1){
            return "<input type='number' name='floatNumber' min='0' step='.01' placeholder='put a Float Number'><br>";
        }
        public function inputMail($mail = ""){
            return "<input type='email' name='mail' placeholder='Your E-miel'><br>";
        }
        public function genSelect($select ="" , ...$item){
            echo '<select name="'.$select.'" id="'.$select.'">'.$select;
            foreach($item as $n){
                echo '<option value="'.$n.'">'.$n. '</option>';
            }
            echo '</select><br>';
        }
        public function genRadio($radio = "" , ...$item){
            echo '<p class="text-center text-info"> Veuillez séléctionner '.$radio.'</p>';
            foreach($item as $n){
                echo '<label for="'.$n.'"><input type="radio" id="'.$n.'" name="'.$n.'" value="'.$n.'"> '.$n.'</label>';
            }
            echo '<br>';
        }

        public function submit($send = ""){
            return "<input type='submit' value='".$send."' name='".$send."' class='btn btn-danger col-md-1 text-center form-control'>";
        }
    }

?>