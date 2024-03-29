<?php
function miAutoload($claseDesconocida){
    $fichero = "clase/{$claseDesconocida}.php";
    if(file_exists($fichero)){
    require_once $fichero;
    }
}
spl_autoload_register("miAutoload");
?>