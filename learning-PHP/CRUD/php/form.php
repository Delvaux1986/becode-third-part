<?php
      class Form{

        public function __construct($data = array()){
            $this->data = $data;
        }
        
        public function inputText($placeholder = ""){
            return "<input type='text' name='".$placeholder."' id='".$placeholder."' placeholder='".$placeholder."' class='text-center'>";
        }
        public function submit($send = ""){
            return "<input type='submit' value='".$send."' name='".$send."' class='btn btn-danger text-center form-control'>";
        }
        public function inputInt($int = ""){
            return "<input type='number' name='".$int."' class='mt-1'placeholder='".$int."' min='0' max='9999' col='7'  class='text-center'>";
        }
        public function inputDate($date = ""){
            return "<input type='date' name='".$date."' value='2000-01-01' min='1880-01-01' max='2020-09-04'  class='text-center'>";
        }
        public function doubleCheckBox($value1 , $value2 , $id){
            echo '<p class="text-info text-center">Avez vous une carte de banque ?</p><br>';
            echo "<label for='".$value1."'>".$value1."<input type='checkbox' id='".$value1."' name='".$id."' value='1'  class='text-center'><br>";
            echo "<label for='".$value2."'>".$value2."<input type='checkbox' id='".$value2."' name='".$id."' value='2' class='mb-2 text-center'>"; 
        }
        public function selectMenu($libel,...$items){
            echo '<libellé>'.$libel.'</libellé><br>';
            echo '<select type="select" placeholder="Carte Type" name="cardType" class="text-center"><br>';
            foreach($items as $n){
                $i = 1; 
                echo '<option values="'.$i.'">'.$n.'</option>';
                $i++;
            }
            echo "</select>";
        }
    }
?>