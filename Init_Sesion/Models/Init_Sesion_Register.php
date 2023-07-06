<?php

    class ModelRegistredUser{
        
        private $nom,$ape,$ciu,$tel,$cnt;
        
        public function __construct($n,$c,$t,$ct) {
            $this->nom = $n;
            $this->ciu = $c;
            $this->tel = $t;
            $this->cnt = $ct;
        }
        
        public function GetNom(){
            return $this->nom;
        }
        
        public function GetCiu(){
            return $this->ciu;
        }
        
        public function GetTel(){
            return $this->tel;
        }
        
        public function GetConts(){
            return $this->cnt;
        }
    }