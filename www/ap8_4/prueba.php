<?php 
require_once "autoloader.php";
$modelo = new Modelo();
$modelo->init();
$modelo->showAllTasks();