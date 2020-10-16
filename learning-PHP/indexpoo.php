<?php
   require "html.php";
   require "validator.php";
   require "./assets/php/Form.php";
   $source = "https://cdn11.bigcommerce.com/s-53cwszo4/images/stencil/2048x2048/products/363/1955/Dog_Poo_1500__66287.1481140949.1280.1280-min__65109.1481749130.jpg?c=2";
   $lien = 'https://becode.org/';
   $js = "./assets/js/horloge.js";
   
   $html = new html(array(
       'balise' => 'link'
   ));
   
 

   $name = isset($_POST['name']) ? $_POST['name'] : "";
   $number = isset($_POST['number']) ? $_POST['name'] : 0;
   $floatNumber = isset($_POST['floatNumber']) ? $_POST['name'] : 0;
   $mail = isset($_POST['mail']) ? $_POST['name'] : "";


   echo $html->bootstrapLink();
   echo '<p class="text-center text-info"><span id="horloge"></span> script importer via POO</p>';
   echo $html->genCss('style');
   echo $html->genMeta();
   echo $html->genImg($source);
   echo $html->genLink($lien);
   echo $html->genJsBalise($js);

   
   
   
   
   echo '<form action="" method="post" class="text-center">';
   $form = new Form();
   echo $form->inputText('name');
   echo $form->inputInt();
   echo $form->inputFloat();
   echo $form->inputMail();
   echo $form->genSelect("list de pays", "Belgique","France","Espagne");
   echo $form->genRadio("une marque" , "Nokia" , "Samsung", "Huawei");
   echo $form->submit('Envoyer');
   echo '</form>';
   

   $validator = new Validator();
   echo $validator->sanitizeString($name);
   echo $validator->sanitizeInt($number);
   echo $validator->sanitizeFloat($floatNumber);
   echo $validator->sanitizeMail($mail);


?>