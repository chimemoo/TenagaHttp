<?php namespace Tenaga\Http;

/**
 * Header Class
 */
class Header implements HeaderFunction
{
  /**
   * HTTP Version
   * @var String
   */
  private $version = '1.1';

  /**
   * HTTP Status Code
   * @var Integer
   */
  private $code = 200;

  /**
   * Http Status Text
   * @var String
   */
  private $statusText = 'OK';

  /**
   * List all Header
   * @var Array
   */
  private $headers = [];

  /**
   * Status Text List
   * @var [type]
   */
  private $statusTexts = [
      100 => 'Continue',
      101 => 'Switching Protocols',
      102 => 'Processing',
      200 => 'OK',
      201 => 'Created',
      202 => 'Accepted',
      203 => 'Non-Authoritative Information',
      204 => 'No Content',
      205 => 'Reset Content',
      206 => 'Partial Content',
      207 => 'Multi-Status',
      208 => 'Already Reported',
      226 => 'IM Used',
      300 => 'Multiple Choices',
      301 => 'Moved Permanently',
      302 => 'Found',
      303 => 'See Other',
      304 => 'Not Modified',
      305 => 'Use Proxy',
      306 => 'Reserved',
      307 => 'Temporary Redirect',
      308 => 'Permanent Redirect',
      400 => 'Bad Request',
      401 => 'Unauthorized',
      402 => 'Payment Required',
      403 => 'Forbidden',
      404 => 'Not Found',
      405 => 'Method Not Allowed',
      406 => 'Not Acceptable',
      407 => 'Proxy Authentication Required',
      408 => 'Request Timeout',
      409 => 'Conflict',
      410 => 'Gone',
      411 => 'Length Required',
      412 => 'Precondition Failed',
      413 => 'Request Entity Too Large',
      414 => 'Request-URI Too Long',
      415 => 'Unsupported Media Type',
      416 => 'Requested Range Not Satisfiable',
      417 => 'Expectation Failed',
      418 => 'I\'m a teapot',
      422 => 'Unprocessable Entity',
      423 => 'Locked',
      424 => 'Failed Dependency',
      425 => 'Reserved for WebDAV advanced collections expired proposal',
      426 => 'Upgrade Required',
      428 => 'Precondition Required',
      429 => 'Too Many Requests',
      431 => 'Request Header Fields Too Large',
      500 => 'Internal Server Error',
      501 => 'Not Implemented',
      502 => 'Bad Gateway',
      503 => 'Service Unavailable',
      504 => 'Gateway Timeout',
      505 => 'HTTP Version Not Supported',
      506 => 'Variant Also Negotiates',
      507 => 'Insufficient Storage',
      508 => 'Loop Detected',
      510 => 'Not Extended',
      511 => 'Network Authentication Required',
  ];

  /**
   * Set Status Code
   * @param Integer $code       Http Status Code Number
   * @param String $statusText Http Status Text (Optional)
   */
  public function setStatusCode($code, $statusText = null)
  {
      if($statusText === null && array_key_exists( (int) $code, $this->statusTexts))
      {
          $this->statusText = $statusText[$code];
      }
      $this->code = (int) $code;
      $this->statusText = (string) $statusText;
  }

  /**
   * Set Content Type
   * @param String $type    Content Type
   * @param String $charset Charset
   */
  public function setContentType($type, $charset = null)
  {
    if($charset === null){
      $this->header[] = 'Content-Type: ' . $type;
    }
    else {
      $this->header[] = 'Content-Type: ' . $type . '; charset='.$charset;
    }
  }

  /**
   * Set Expires
   * @param String $date Example (Mon, 26 Jul 1997 05:00:00 GMT)
   */
  public function setExpires($date){
    $this->header[] = 'Expires: '.$date;
  }

  /**
   * Set Header for other header
   * @param String $name  Name
   * @param String $value Value
   */
  public function setHeader($name,$value){
    $this->header[] = $name . ' : ' . $value;
  }

  /**
   * Get All headre
   * @return Array List Of Header
   */
  public function getAllHeader(){
    $headers = array_merge(
            $this->getRequestLineHeaders(),
            $this->getStandardHeaders());
    return $headers;
  }

  /**
   * Get Standar Header
   * @return Array listOfHeader
   */
  public function getStandardHeaders(){
    return $this->header;
  }

  /**
   * Get Request Line Headers
   * @return Array
   */
  private function getRequestLineHeaders()
  {
    $headers = [];

    $requestLine = sprintf(
        'HTTP/%s %s %s',
        $this->version,
        $this->code,
        $this->statusText
    );

    $headers[] = trim($requestLine);

    return $headers;
  }


}
