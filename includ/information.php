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
    if(empty($height) || $height>300 ||$height <50 ) {
        $erhght= "Please enter your height from 50 to 300cm" ;
        header("location:../index.php?&erhgh=$erhght&hght=$height#calculat");

    }elseif(empty($age) || $age > 100 || $age <1 ) {
        $erage= "Please enter your age from 1 to 100years" ;
        header("location:../index.php?&erage=$erage&ag=$age&hght=$height#calculat");

    }elseif(empty($weight) || $weight > 1200 || $weight < 1  ) {
        $erwght= "Please enter your weight from 1 to 200kg" ;
    }elseif(empty($activite)){
        $eract= "Please enter your activite" ;
    }elseif(empty($gender)) {
        $ergnd= "Please enter your gender" ;
    }else{
        
        $resultats = BMI($weight ,$height ,$age ,$gender ,$activite);
        $stm = $db->prepare("insert into informationbmi values(DEFAULT, 
        :age, :weight, :height, :activ, :gend,:reslt)");
        $stm->execute([
            ":age"=>$age ,
            ":weight"=>$weight,
            ":height"=>$height,
            ":activ"=>$activite,
            ":gend"=>$gender,
            ":reslt"=>$resultats,
        ]);
        
    }
    // header("location:../index.php?&erhgh=$erhght&erage=$erage&erwght=$erwght&eract=$eract&ergnd=$ergnd&reslt=$resultats&ag=$age&hght=$height&wght=$weight#calculat");

}
