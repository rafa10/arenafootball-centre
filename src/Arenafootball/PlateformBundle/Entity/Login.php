<?php

namespace Arenafootball\PlateformBundle\Entity;


class Login
{
   
    public $username;
    public $password;

   
    public function getUsername()
    {
        return $this->username;
    }

  
    public function setUsername($username)
    {
        $this->username = $username;
    }

   
    public function getPassword()
    {
        return $this->password;
    }

    
    public function setPassword($password)
    {
        $this->password = $password;
    }
}