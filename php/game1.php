<?php
    
    $ans1 = "5";
    $ans2 = "Respuesta 2";
    $ans3 = "Respuesta 3";

    $p1r1 = $_POST['r1'];
    $p2r2 = $_POST['r2'];
    $p3r3 = $_POST['r3'];

    if ($p1r1 == $ans1) {
        $p1 = true;
        //echo '1';
    }else{
        $p1 = false;
        //echo '2';
    }

    if ($p2r2 == $ans2) {
        $p2 = true;
        //echo '3';
    }else{
        $p2 = false;
        //echo '4';
    }

    if ($p3r3 == $ans3) {
        $p3 = true;
        //echo '5';
    }else{
        $p3 = false;
        //echo '6';
    }

    if ($p1 && $p2 && $p3) {
        //echo 'si';
        header("Location:../surprise.html");
    }else{
        //echo 'no';
        header("Location:../nop.html");
    }
?>