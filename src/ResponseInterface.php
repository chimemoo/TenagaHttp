<?php namespace Http\Tenaga;

/**
 *
 */
interface ResponseInterface
{
  public function setResponse($response);
  public function getResponse();
  public function appendResponse($response);
}
