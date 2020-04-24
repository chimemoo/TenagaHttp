<?php namespace Tenaga\Http;

/**
 * Header Interface Function
 */
interface HeaderFunction
{
  public function setStatusCode($statusCode , $statusText = null);
  public function setContentType($type, $charset = NULL);
  public function setExpires($date);
  public function setHeader($name,$value);
  public function getAllHeader();
}
