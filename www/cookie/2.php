<?php

if(!isset($_COOKIE['Dani'])){
    echo "la  cookie dani no existe";
} else{
    echo " Valor: ". $_COOKIE["Dani"];
}