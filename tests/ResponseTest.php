<?php

use PHPUnit\Framework\TestCase;
use Tenaga\Http\Response;

class ResponseTest extends TestCase {

  public function testSetResponse(){
    $response = new Response;
    $response->setResponse('test');
    $this->assertEquals(
        'test',
        $response->getResponse()
    );
  }

  public function testAppendResponse(){
    $response = new Response;
    $response->setResponse('test');
    $response->appendResponse('test');
    $this->assertEquals(
        'testtest',
        $response->getResponse()
    );
  }

  public function testGetResponse(){
    $response = new Response;
    $response->setResponse('test1');
    $response->appendResponse('test2');
    $response->appendResponse('test3');
    $this->assertEquals(
        'test1test2test3',
        $response->getResponse()
    );
  }

}
