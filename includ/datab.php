<?php 

$hst = 'mysql:host=localhost;port=3306;dbname=gym' ;
$usuer = 'root' ;
$pass = '' ;
try{
    $db = new PDO($hst ,$usuer  ,$pass);
}
catch(PDOException $e){
    echo 'failed' . $e->getMessage();
}


