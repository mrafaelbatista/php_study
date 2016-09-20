<?php

    function soma($a, $b){

        echo $a + $b;

    }

    soma(15789, 789456123);

    echo "<br />";

    function media($p1, $p2, $p3, $p4) {

        $result = ($p1+$p2+$p3+$p4)/4;
        return $result; 
    }

    $media = media(10,8,9,5);

    echo "Sua média foi: " . $media;
