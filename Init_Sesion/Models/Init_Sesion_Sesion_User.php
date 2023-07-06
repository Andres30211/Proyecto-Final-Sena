<?php

class InitSesion{
    private $tel,$pass;
    
    public function __construct($t,$p) {
        $this->tel  = $t;
        $this->pass = $p;
    }
    
    public function GetTel(){
        return $this->tel;
    }
    
    public function GetPass(){
        return $this->pass;
    }
}