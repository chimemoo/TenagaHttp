<?php namespace Tenaga\Http;

interface RequestFunction {

    public function all($key, $default = null);
    public function post($key, $default = null);
    public function get($key, $default = null);
    public function file($key, $default = null);
    public function cookie($key, $default = null);
    public function parameters();
    public function uri();
    public function path();
    public function method();
    public function httpAccept();
    public function referer();
    public function userAgent();
    public function ipAddress();
    public function isSecure();

}