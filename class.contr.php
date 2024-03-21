<?php

class contr extends contoare{

    protected $email_exist;
    protected $username_exist;
    protected $username;
    protected $email;
    protected $contor_name;
    protected $serie;
    protected $serie2;

    public function invalid_username_contr($username){
        $this->username = $username;
        if($this->username_exist($username) === true){
            return true;
        }
        return false;
    }

    public function invalid_email_contr($email){
        $this->email = $email;
        if($this->email_exist($email) === true){
            return true;
            header("Location: ../signup.php?cris=invalid_email");
        }

        return false;
    }


    public function log_in($username,$email){
        $this->username = $username;
        $this->email = $email;
        if($this->email_and_username_exist($this->username,$this->email) === true){
            session_start();
            $_SESSION['username'] = $this->username;
            header("Location: login.php?cris=loged_in");
        }else{
            header("Location: login.php?cris=log_in_failed");
        }
    }

    public function create_contor_contr($contor_name,$serie,$serie2){
        $this->nume_contor = $contor_name;
        $this->serie = $serie;
        $this->serie2 = $serie2;
        $this->create_contor($this->nume_contor,$this->serie,$this->serie2);
    }

    public function update_contor_contr($contor_name,$serie,$serie2){
        $this->nume_contor = $contor_name;
        $this->serie = $serie;
        $this->serie2 = $serie2;
        $this->update_contor($this->nume_contor,$this->serie,$this->serie2);
    }

    public function create_user_contr($username,$nume,$prenume,$email,$telefon){
        $this->username = $username;
        $this->nume = $nume;
        $this->prenume = $prenume;
        $this->email = $email;
        $this->telefon = $telefon;
        $this->create_user($this->username,$this->nume,$this->prenume,$this->email,$this->telefon);
    }

    public function choose_a_contor_contr(){
        if($all_contoare = $this->get_all_contoare()){
            echo'
                <select name="nume_contor" >
            ';
            foreach($all_contoare as $results){
                echo "<option value='" . $results['Id'] . "'>" . $results['Nume_contor'] . "</option>";
            }
            echo'
                </select><br><br>    
            ';
        }else{
            echo 'ce esti asa de prost';
        }
    }

    public function get_all_contoare_contr(){
        if($all_contoare_existente = $this->get_all_contoare()){
            return $this->result;
        }else{
            return false;
        }
    }

    public function create_index_contr($nume_contor,$link_poza,$val){
        $this->link_poza = $link_poza;
        $this->val = $val;
        $this->nume_contor = $nume_contor;
        $this->create_index($this->nume_contor,$this->link_poza,$this->val);
    }

    public function get_the_10_last_contoare_contr(){
        $this->get_the_10_last_contoare();
    }
}