<?php
//Criado por Anderson Ismael
//06 de abril de 2019

function isAjax(){
    if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
        return true;
    }else{
        return false;
    }
}
