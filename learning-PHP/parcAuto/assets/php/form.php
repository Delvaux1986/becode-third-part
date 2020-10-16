<?php
    class Form{

        public function __construct($data = array()){
            $this->data = $data;
        }

        public function inputText($placeholder = ""){
            return "<input type='text' name='".$placeholder."' id='".$placeholder."' placeholder='".$placeholder."'>";
        }
        public function submit($send = ""){
            return "<input type='submit' value='".$send."' name='".$send."' class='btn btn-danger col-md-1 text-center form-control'>";
        }
        public function inputInt($int = ""){
            return "<input type='number' name='".$int."' class='mt-1'placeholder='".$int."' min='0'>";
        }
    }
?>