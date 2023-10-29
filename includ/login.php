<?php
    include 'datab.php' ;
    if($_SERVER['REQUEST_METHOD']=="POST"){
        $email =   $_POST['email'] ;
        $pass =   $_POST['password'] ;

        if(empty($email) || empty($pass) ){
            $loginerro = 'All required fields' ; 
        }else{
            $req = $db->prepare("INSERT INTO logingym values (default ,'$email' , '$pass')") ;
            $req -> execute() ;
        }
        header("location:../index.php?errlogin=$loginerro#signup");
    }