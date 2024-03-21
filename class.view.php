<?php

class view extends contr{

    protected $username;
    protected $email;
    protected $nume;
    protected $telefon;
    protected $prenume;
    protected $function;
    protected $serie;
    protected $serie2;
    protected $contor_name;

    public function empty_input_login($username,$email){
        $this->username = $username;
        $this->email = $email;
        if(empty($this->username) || empty($this->email)){
            return true;
        }
        
        return false;
    } 

    public function empty_input($username,$email,$telefon,$nume,$prenume){
        $this->username = $username;
        $this->email = $email;
        $this->telefon = $telefon;
        $this->nume = $nume;
        $this->prenume = $prenume;
        if(empty($this->nume) || empty($this->email) || empty($this->telefon) || empty($this->username) || empty($this->prenume)){
            return true;
        }

        return false;
    }

    public function empty_input_contoare($contor_name,$serie,$serie2){
        $this->contor_name = $contor_name;
        $this->serie = $serie;
        $this->serie2 = $serie2;
        if(empty($this->serie) || empty($this->contor_name)){
            return true;
        }
        return false;
    }

    public function invalidusername($username){
        $this->username = $username;
        if(!preg_match("/^[a-zA-Z0-9]*$/", $this->username)){
            return true;
        }
        return false;
    }

    public function email_invalid($email){
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            return true;

        }
        return false;
    }
    
}