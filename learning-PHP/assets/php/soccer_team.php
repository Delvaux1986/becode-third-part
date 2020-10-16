<?php
// EXO 4.6 SOCCER TEAM

    if(isset($_GET["soccer_gender"]) && isset($_GET["soccer_age"])){
        $gender = $_GET["soccer_gender"];
        $age = $_GET["soccer_age"];
    }else{
        $gender = '';
        $age = 0;
    }

    if($gender === "girl"){
        if( $age  <= 40 && $age  >= 21){
            echo 'Welcom to the team';
        }else if($age  > 41 || $age  < 20){
            echo "You Sorry you don't fit the criteria";
        }
    }else if($gender === "male"){
            echo "You Sorry you don't fit the criteria";
    }

?>
        <form action="" method="get">
                <label for="soccer_age">Enter Your Age : </label>
                    <input type="text" name="soccer_age" ><br>
                <label for="soccer_gender">Enter your gender</label>
                    <label for="male"> male<input type="radio" name="soccer_gender" value='male'></label>
                    <label for="girl"> Girl<input type="radio" name="soccer_gender" value='girl'></label><br>
                    <input type="submit" name="submit" value="Validate">
        </form>
        <a href="./../../index.php">RETURN INDEX </a>