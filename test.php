<?php

require_once(dirname(__FILE__) . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php');

use Tenaga\Http\Request as A;
use Tenaga\Http\Cookie;

$a = new A;
$a->set();
var_dump($a->get('id'));

$b = new Cookie;
var_dump($b->prepare->setName('aa')->setValue('aaa')->create()); 
var_dump($_COOKIE);
