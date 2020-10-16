<?php
    require './assets/php/html.php';
    require './assets/php/voiture.php';
    require './assets/php/function.php';

    $html = new Html();
    echo $html->setBootstrap();
    echo $html->genCss("style");


    $carOne = new Voiture('Audi',"RS" , 1800 , "BE" , 80000 , "White" , 1998 , "./assets/img/audi_rs.jpg"); // 8 Arguments ( model , mark , weight , country , Km , color , year , sourceIMG)
    $carTwo = new Voiture('Renault',"Kangou", 3800 , "DE" , 250000 , "White", 1986 , "./assets/img/kangou.jpg");
    $carThree = new Voiture('Vw', 'Caddy' , 2500 , "DE" , 310000 , "Blue" , 2000 , "./assets/img/caddy.jpg");
    $carFour = new Voiture("Citroen","Ax", 1200 , "FR" , 350000 , "Red" , 1995 , "./assets/img/ax.jpg");
    $carFive = new Voiture("Bmw" , "X7" , 3000 , "DE" , 80000 , "Black", 2014 , "./assets/img/bmw-x7.jpg");
    $carSix = new Voiture("Ford","Mustang", 1800 , "BE" , 15000 , "Black" , 2015 , "./assets/img/mustang.jpg");
    $carSeven = new Voiture("Honda","Civic" , 1100 , "BE" , 151000 , "Red" , 2000 , "./assets/img/honda.jpg");
    $carEight = new Voiture("Montego" , "Montego" , 1300 , "FR" , 387000 , "Grey" , 1995 , "./assets/img/montego.jpg");
    $carNine = new Voiture("Lada", "Caradisiac" , 3000 , "DE" , 320000 , "Green", 2001 , "./assets/img/lada.jpg");
    
    echo '<section class=" bg-light col-md-6 offset-md-3">';
    echo '<h2 class="text-center text-danger font-weight-bold mb-5">Liste de neuf voitures et display en POO </h2>';
    $carOne->displayCar();
    $carTwo->displayCar();
    $carThree->displayCar();
    $carFour->displayCar(); 
    $carFive->displayCar();
    $carSix->displayCar();
    $carSeven->displayCar();
    $carEight->displayCar();
    $carNine->displayCar();
    echo '</section>';
    
    
    

    
    
    
    

?>


<!-- // echo $carOne->getModel(). "<br>";
    // echo $carTwo->getModel(). "<br>";
    // echo $carOne->getWeight(). "<br>";
    // echo $carTwo->getWeight(). "<br>";
    // echo $carOne->getOrigin(). "<br>";
    // echo $carTwo->getOrigin(). "<br>";
    // echo "Before make to roll ".$carOne->used." Km <br>";
    // echo "on exec la method ToRoll() <br> ";
    // $carOne->toRoll();
    // echo "new Km after roll ".$carOne->used. "<br>";
    // echo $carOne->getUsing();
    // echo $carOne->getAge();
    // echo "################################################################################"; -->