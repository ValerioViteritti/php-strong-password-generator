<?php 

function generatePassword($chairList, $length) {
    $psw = '';

    while (strlen($psw) < $length) {
        $char = getChar($chairList);
        $psw = $char;
    }


    return $psw;
}

function getChar($chairList){

    return $chairList[rand(0, strlen($chairList)-1)];
}


?>