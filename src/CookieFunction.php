<?php namespace Tenaga\Http;

interface CookieFunction {

  public function setName(string $name);
  public function setValue($value);
  public function setExpired(int $time);
  public function setPath(string $path);
  public function setDomain(string $domain);
  public function setSecure(bool $secure);
  public function setHttpOnly(bool $httpOnly);
  public function create();

}
