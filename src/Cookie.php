<?php namespace Tenaga\Http;

class Cookie {

    private $cookie = [];
    public $prepare;

    public function __construct(){
        $this->prepare = $this;
        /**
        * 0 => name
        * 1 => value
        * 2 => expire
        * 3 => path
        * 4 => domain
        * 5 => secure
        * 6 => httponly
        */
        $this->cookie = [
            0 => null,
            1 => null,
            2 => time() + 3600,
            3 => '/',
            4 => null,
            5 => null,
            6 => null
        ];
    }

    public function setName($name){
        $this->cookie[0] = (string) $name;
        return $this;
    }
    public function setValue($value){
        $this->cookie[1] = $value;
        return $this;
    }
    public function setExpired($time){
        $this->cookie[2] = time() + $time; 
        return $this;
    }
    public function setPath($path){
        $this->cookie[3] = $path; 
        return $this;
    }
    public function setDomain($domain){
        $this->cookie[4] = $path; 
        return $this;
    }
    public function setSecure(bool $secure){
        $this->cookie[5] = $secure; 
        return $this;
    }
    public function setHttpOnly(bool $httpOnly){
        $this->cookie[6] = $path; 
        return $this;
    }
    public function create(){
        return setcookie(
            $this->cookie[0],
            $this->cookie[1],
            $this->cookie[2],
            $this->cookie[3],
            $this->cookie[4],
            $this->cookie[5],
            $this->cookie[6]
        );
    }

    

}