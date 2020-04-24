<?php namespace Tenaga\Http;

class Cookie implements CookieInterface {

    /**
     * Register Cookie Parameters
     * @var Array
     */
    private $cookie = [];

    /**
     * For prepare cookie
     * @var Object
     */
    public $prepare;

    /**
     * Register $prepare & $cookie
     */
    public function __construct(){
        $this->prepare = $this;
        /**
         * List Of key
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

    /**
     * Set Cookie name
     * @param String $name  Name of cookie
     */
    public function setName(string $name){
        $this->cookie[0] = $name;
        return $this->prepare;
    }

    /**
     * Set Cookie Value
     * @param Any $value Any type of variable can save
     */
    public function setValue($value){
        $this->cookie[1] = $value;
        return $this->prepare;
    }

    /**
     * Set Cookie Expired
     * @param Int $time time() + $time
     */
    public function setExpired($time){
        $this->cookie[2] = time() + $time;
        return $this->prepare;
    }

    /**
     * Set Cookie Path
     * @param String $path Path of cookie
     */
    public function setPath(string $path){
        $this->cookie[3] = $path;
        return $this->prepare;
    }

    /**
     * Set Domain
     * @param String $domain i.e : localhost.com
     */
    public function setDomain(string $domain){
        $this->cookie[4] = $path;
        return $this->prepare;
    }

    /**
     * Set secure of cookie (optional)
     * @param bool $secure Default false
     */
    public function setSecure(bool $secure){
        $this->cookie[5] = $secure;
        return $this->prepare;
    }

    /**
     * Set Http Only can access, for reduce XSS
     * @param bool $httpOnly Default false
     */
    public function setHttpOnly(bool $httpOnly){
        $this->cookie[6] = $path;
        return $this->prepare;
    }

    /**
     * Create the cookie
     * @return Object setcookie
     */
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
