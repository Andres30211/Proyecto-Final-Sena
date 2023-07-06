<?php

class ValidUser {
    private $user;
    
    public function __construct($u) {
        $this->user = $u;
    }
    
    public function GetUser(){
        return $this->user;
    }
}