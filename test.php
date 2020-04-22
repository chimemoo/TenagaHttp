<?php

require_once(dirname(__FILE__) . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php');

use Tenaga\Http\Response as A;

$resp = new A;
$resp->header->setContentType('application/json');
$resp->header->setStatusCode(200, 'Mantap');
var_dump($resp->header->getAllHeader());
