<?php

use App\Wcs\Hello;
require_once 'src/App/Wcs/Hello.php';
$hello= new App\Wcs\Hello();
echo $hello->talk();