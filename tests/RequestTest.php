<?php

use PHPUnit\Framework\TestCase;
use Tenaga\Http\Request;

class RequestTest extends TestCase{

  public function testAll(){
    $_POST['skill'] = 'coding';
    $request = new Request;
    $request->set();

    $this->assertEquals(
        'coding',
        $request->all('skill')
    );
  }

  public function testGet(){
    $_GET['name'] = 'test';
    $request = new Request;
    $request->set();

    $this->assertEquals(
        'test',
        $request->get('name')
    );
  }

  public function testPost(){
    $_POST['name'] = 'test';
    $request = new Request;
    $request->set();

    $this->assertEquals(
        'test',
        $request->post('name')
    );
  }

  public function testFiles(){
    $_FILES['name'] = 'test.jpg';
    $request = new Request;
    $request->set();

    $this->assertEquals(
        'test.jpg',
        $request->file('name')
    );
  }

  public function testCookie(){
    $_COOKIE['name'] = 'test';
    $request = new Request;
    $request->set();

    $this->assertEquals(
        'test',
        $request->cookie('name')
    );
  }

  public function testParameters(){
    $_POST['name'] = 'test';
    $_POST['skill'] = 'coding';
    $request = new Request;
    $request->set();

    $this->assertEquals(
        [
          'name' => 'test',
          'skill' => 'coding'
        ],
        $request->parameters()
    );
  }

  public function testUri(){
    $_SERVER['REQUEST_URI'] = 'test?id=123';
    $request = new Request;
    $request->set();

    $this->assertEquals(
        $_SERVER['REQUEST_URI'],
        $request->uri()
    );
  }

  public function testPath(){
    $_SERVER['PATH_INFO'] = 'test/test/1';
    $request = new Request;
    $request->set();

    $this->assertEquals(
        $_SERVER['PATH_INFO'],
        $request->path()
    );
  }

  public function testMethod(){
    $_SERVER['REQUEST_METHOD'] = ['POST'];
    $request = new Request;
    $request->set();

    $this->assertEquals(
        $_SERVER['REQUEST_METHOD'],
        $request->method()
    );
  }

  public function testHttpAccept(){
    $_SERVER['HTTP_ACCEPT'] = 'Content-type:application/pdf';
    $request = new Request;
    $request->set();

    $this->assertEquals(
        $_SERVER['HTTP_ACCEPT'],
        $request->httpAccept()
    );
  }

  public function testReferer(){
    $_SERVER['HTTP_REFERER'] = '192.168.1.10 - - [16/Apr/2008:16:12:36 +1200] "GET /php-http-referer-variable/ HTTP/1.1" 200 2014 "https://www.electrictoolbox.com/" Mozilla/5.0 (compatible; Konqueror/3.5; Linux) KHTML/3.5.8 (like Gecko)"';
    $request = new Request;
    $request->set();

    $this->assertEquals(
        $_SERVER['HTTP_REFERER'],
        $request->referer()
    );
  }

  public function testUserAgent(){
    $_SERVER['HTTP_USER_AGENT'] = 'Mozilla/5.0 (Windows NT 6.1; rv:16.0) Gecko/20100101 Firefox/16.0';
    $request = new Request;
    $request->set();

    $this->assertEquals(
        $_SERVER['HTTP_USER_AGENT'],
        $request->userAgent()
    );
  }

  public function testIpAddress(){
    $_SERVER['REMOTE_ADDR'] = '192.168.1.10';
    $request = new Request;
    $request->set();

    $this->assertEquals(
        $_SERVER['REMOTE_ADDR'],
        $request->ipAddress()
    );
  }

  public function testIsSecure(){
    $request = new Request;
    $request->set();

    $this->assertEquals(
        false,
        $request->isSecure()
    );
  }
}
