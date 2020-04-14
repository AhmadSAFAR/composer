<?php

use App\Wcs\Hello;
require_once '../src/Wcs/Hello.php';
$hello= new App\Wcs\Hello();
echo $hello->talk();