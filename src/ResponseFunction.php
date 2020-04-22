<?php namespace Http\Tenaga;

/**
 *
 */
interface ResponseFunction
{
  public function setResponse($response);
  public function getResponse();
  public function appendResponse($response);
}
