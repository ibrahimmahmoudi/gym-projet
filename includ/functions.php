<?php

    function BMI($wg ,$hg , $ag , $gd , $act){
        $resl = ($wg * 10)+($hg * 6.25)-($ag * 5) ;
        if($gd == 'male'){
            $resl += 5 ;
        }else{
            $resl -=161 ;
        }
        switch($act){
            case "many" : $resl *=1.2 ;
            break ;
            case "light" : $resl *=1.375 ;
            break ;
            case "medium" : $resl *=1.55 ;
            break ;
            case "hight" : $resl *=1.725 ;
            break ;
            case "super" : $resl *=1.9 ;
            break ;
        }
        return $resl ;
    } 