<?php

$controller = $_GET["controller"] ;

$doc=$_GET["action"];
$ficher=$_GET["fich"];
$rt=$_GET["rt"];

$rtfich=$_GET["rtfich"];


require("../controllers/".$controller.".php");

