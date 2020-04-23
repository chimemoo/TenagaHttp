<?php

require_once(dirname(__FILE__) . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php');

use Tenaga\Http\Request as A;
use Tenaga\Http\Cookie;

$a = new A;
$a->set();
var_dump($a->httpAccept());

// $b = new Cookie;
// $b->prepare->setName('aa')->setValue('bbc')->create();
// var_dump($_COOKIE);
