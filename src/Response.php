<?php namespace Tenaga\Http;

/**
 * Response Class
 */
class Response implements ResponseInterface {

  /**
   * Response Variable
   * @var String
   */
  private $response;

  /**
   * Set Up response
   * @param String $response data to response
   */
  public function setResponse(String $response)
  {
    $this->response = $response;
  }

  /**
   * Adding response
   * @param  String $response data to response
   * @return Void           Add data to response
   */
  public function appendResponse(String $response){
    $this->response .= $response;
  }

  /**
   * Get Response
   * @return String Return simple response
   */
  public function getResponse(){
    return $this->response;
  }

}
