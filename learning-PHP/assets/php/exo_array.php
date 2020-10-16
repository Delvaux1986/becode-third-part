<?php
    $web_developpement = array(
        'frontend' => [],
        'backend' => [],
);

        array_push($web_developpement['frontend'] , 'xhtml','CSS', 'Javascript');
        array_push($web_developpement['backend'], 'Ruby on Rails', 'Flash');


        echo '<pre>';
        print_r($web_developpement);
        echo '</pre>';

        $replace = array(0 => 'HTML');


        $web_dev = array_replace($web_developpement['frontend'], $replace);

        echo 'Apres le Replace ';
        echo '<pre>';
        print_r($web_dev);
        echo '</pre>';

        $removed = 'Flash';

        unset($web_dev[array_search($removed,$web_dev)]);

        echo 'Apres le unset ';
        echo '<pre>';
        print_r($web_dev);
        echo '</pre>';


?>



<a href="./../../index.php">RETURN INDEX </a>