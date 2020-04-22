<?php namespace Tenaga\Http;

/**
 * Request Class
 */
class Request implements RequestsFunction {

  /**
   * Register $_REQUEST
   * @var Array
   */
  protected $request;

  /**
   * Register $_GET
   * @var Array
   */
  protected $get;

  /**
   * Register $_POST
   * @var Array
   */
  protected $post;

  /**
   * Register $_SERVER
   * @var Array
   */
  protected $server;

  /**
   * Register $_FILES
   * @var Array
   */
  protected $file;

  /**
   * Register $_COOKIE
   * @var Array
   */
  protected $cookies;

  /**
   * Register Global Variable
   */
  public function set()
  {
    $this->get = $_GET;
    $this->post = $_POST;
    $this->server = $_SERVER;
    $this->file = $_FILES;
    $this->cookie = $_COOKIE;
    $this->request = $_REQUEST;
  }

  /**
   * Get request with key from $_REQUEST
   * @param  String $key     Name of request
   * @param  Bool $default   Default value
   * @return Object          Object of request
   */
  public function all($key, $default = null)
  {
    if(array_key_exists($key, $this->request)){
        return $this->request[$key];
    }
    return $default;
  }

  /**
   * Get request from $_GET
   * @param  String $key     Name of get
   * @param  Bool $default   Default value
   * @return Object          Object of request
   */
  public function get($key, $default = null)
  {
    if(array_key_exists($key, $this->get)){
        return $this->get[$key];
    }
    return $default;
  }

  /**
   * Get request from $_POST
   * @param  String $key     Name of post
   * @param  Bool $default   Default value
   * @return Object          Object of request
   */
  public function post($key, $default = null)
  {
    if(array_key_exists($key, $this->post)){
        return $this->post[$key];
    }
    return $default;
  }

  /**
   * Get request from $_FILE
   * @param  String $key     Name of file
   * @param  Bool $default   Default value
   * @return Object          Object of request
   */
  public function file($key, $default = null)
  {
    if(array_key_exists($key, $this->file)){
        return $this->file[$key];
    }
    return $default;
  }

  /**
   * Get request from $_COOKIE
   * @param  String $key     Name of cookie
   * @param  Bool $default   Default value
   * @return Object          Object of request
   */
  public function cookie($key, $default = null)
  {
    if(array_key_exists($key, $this->cookie)){
        return $this->cookie[$key];
    }
    return $default;
  }

  /**
   * Get all parameters key & value
   * @return Array  Give $_GET & $_POST data
   */
  public function parameters()
  {
    return array_merge($this->get, $this->post);
  }

  /**
   * Request Uri
   * @return String Get URL like test.com/test1/test2/...
   */
  public function uri()
  {
    return $this->getServerVar('REQUEST_URI');
  }

  /**
   * Get Path URL
   * @return String Get Path URL like test1/test2/test3/...
   */
  public function path(){
    if(!array_key_exists('PATH_INFO', $this->server)){
        $this->server['PATH_INFO'] = '/';
    }
    return $this->getServerVar('PATH_INFO');
  }

  /**
   * Get which method was used to access page
   * @return String Example :'GET', 'HEAD', 'POST', 'PUT'.
   */
  public function method(){
    return $this->getServerVar('REQUEST_METHOD');
  }

  /**
   * Get header from current request
   * @return String
   */
  public function httpAccept(){
    return $this->getServerVar('HTTP_ACCEPT');
  }

  /**
   * The address of the page (if any) which referred the user agent to the current page.
   * @return String
   */
  public function referer(){
    return $this->getServerVar('HTTP_REFERER');
  }

  /**
   * Header from the current request, if there is one.
   * @return String
   */
  public function userAgent(){
    return $this->getServerVar('HTTP_USER_AGENT');
  }

  /**
   * The IP address from which the user is viewing the current page.
   * @return String
   */
  public function ipAddress(){
    return $this->getServerVar('REMOTE_ADDR');
  }

  /**
   * Check the current page using https
   * @return boolean
   */
  public function isSecure(){
    if(array_key_exists('HTTPS', $this->server)){
        return true;
    }
    return false;
  }

  
  public function getServerVar($key)
  {
    if(!array_key_exists($key, $this->server)){

    }
    return $this->server[$key];
  }
}
