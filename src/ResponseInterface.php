<?php namespace Tenaga\Http;

/**
 *
 */
interface ResponseInterface
{
  public function setResponse(String $response);
  public function getResponse();
  public function appendResponse(String $response);
}
