<?php
/**
 * Created by PhpStorm.
 * User: wilder
 * Date: 25/09/18
 * Time: 13:11
 */
require "../vendor/autoload.php";

$Hello1 = new HelloWorld\SayHello();
echo $Hello1->world() . "<br/>";
$Hello1 = new App\Wcs\Hello();
echo $Hello1->talk();