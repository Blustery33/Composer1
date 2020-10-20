<?php
require "../vendor/autoload.php";

$hello = new \App\Wcs\Hello();
var_dump($hello->talk());