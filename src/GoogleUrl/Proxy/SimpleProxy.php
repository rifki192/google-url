<?php

namespace GoogleUrl\Proxy;

use GoogleUrl\Proxy\SimpleProxyInterface;

/**
 * Description of SimpleProxy
 *
 * @author bob
 */
class SimpleProxy implements SimpleProxyInterface
{
   
    public $ip;
    public $port;
    public $login;
    public $password;
    public $proxyType;
            
    function __construct($ip, $port)
    {
        $this->ip = $ip;
        $this->port = $port;
        $this->proxyType = CURLPROXY_HTTP;
    }

    public function setIp($ip)
    {
        $this->ip = $ip;
    }


    public function getIp()
    {
        return $this->ip;
    }

    public function setPort($port)
    {
        $this->port = $port;
    }

    public function getPort()
    {
        return $this->port;
    }


    public function setLogin($login)
    {
        $this->login = $login;
    }

    public function getLogin()
    {
        return $this->login;
    }


    public function setPassword($password)
    {
        $this->password = $password;
    }

    public function getPassword()
    {
        return $this->password;
    }

    
    public function getProxyType()
    {
        return $this->proxyType;
    }

    public function setProxyType($proxyType)
    {
        $this->proxyType = $proxyType;
    }
}