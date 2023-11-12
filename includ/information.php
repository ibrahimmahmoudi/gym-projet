<?php
include('datab.php') ;
include('functions.php') ;
$resultats = 0  ;
$erhght = '' ;
$erage = '' ;
$erwght = '' ;
$eract = '' ;
$ergnd = '' ;
if($_SERVER['REQUEST_METHOD']=="POST"){
    
    
    $age      = $_POST['age'] ;
    $height   = $_POST['height'] ;
    $weight   = $_POST['weight'];
    $activite = $_POST['activite'] ;
    $gender   = $_POST['gender'] ;
    if(empty($height) || $height>300 ||$height <50
    ||empty($age) || $age > 100 || $age <1
    || empty($weight) || $weight > 200 || $weight < 1
    ||empty($activite)|| empty($gender)) {
        $message='The information is incorrect' ;
        header("location:../index.php?&ermes=$message#calculat");

    }else{
        $resultats = BMI($weight ,$height ,$age ,$gender ,$activite);
        header("location:../index.php?&reslt=$resultats&ag=$age&hght=$height&wght=$weight#calculat");
    }
}
