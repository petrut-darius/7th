<?php

class contoare extends connection_to_db{

    protected $username;
    protected $email;
    protected $nume;
    protected $prenume;
    protected $telefon;
    protected $created_at;
    protected $nume_contor;
    protected $serie;
    protected $serie2;
    protected $link_poza;
    protected $date;
    protected $result;
    protected $val;
    protected $id;

    protected function get_contor(){
        if(isset($_GET)){

        }else{
            echo'<h1>Alege un contor</h1>';
        }
    }   

    protected function username_exist($username){
        $this->username = $username;
        $query = "SELECT * FROM users WHERE Username = :username";
        //aicia trebuie sa mai fac functia connect din alta clasa la baza de date
        if(!$stmt = $this->connect()->prepare($query)){
            header("Location: .signup.php?cris=username_exist_failed");
        }

        $stmt->bindParam(':username',$this->username);
        $stmt->execute();

        $result_data = $stmt->fetch(PDO::FETCH_ASSOC);
        if($result_data === 1){
            return true; //aicia este deja un user creat 
        }

        return false;
    }

    protected function email_exist($username){
        $this->username = $username;
        $query = "SELECT * FROM users WHERE Email = :username";
        //aicia trebuie sa mai fac functia connect din alta clasa la baza de date
        if(!$stmt = $this->connect()->prepare($query)){
            header("Location: .signup.php?cris=username_exist_failed");
        }

        $stmt->bindParam(':username',$this->username);
        $stmt->execute();

        $result_data = $stmt->fetch(PDO::FETCH_ASSOC);
        if($row = $result_data){
            return true; //aicia este deja un user creat 
        }

        return false;
    }

    protected function email_and_username_exist($username,$email){
        $this->username = $username;
        $this->email = $email;
        $query = "SELECT * FROM users WHERE Email = :email AND Username = :username";
        //aicia trebuie sa mai fac functia connect din alta clasa la baza de date
        if(!$stmt = $this->connect()->prepare($query)){
            header("Location: email.php?cris=email_exist_failed");
        }
        $stmt->bindParam(':username',$this->username);
        $stmt->bindParam(':email',$this->email);
        $stmt->execute();

        $result_data = $stmt->fetch(PDO::FETCH_ASSOC);
        if($row = $result_data){
            return true; //aicia este un user creat 
        }

        return false;
    }

    protected function create_user($username,$nume,$prenume,$email,$telefon){
        $this->username = $username;
        $this->nume = $nume;
        $this->prenume = $prenume;
        $this->email = $email;
        $this->telefon = $telefon;
        $this->date= date('Y-m-d H:i:s');
        $query = 'INSERT INTO users SET Username = :username , Nume = :nume , Prenume = :prenume , Email = :email , Telefon = :telefon , Created_at = :created_at';
        $stmt = $this->connect()->prepare($query);
        $this->username = htmlspecialchars(strip_tags($this->username));
        $this->nume = htmlspecialchars(strip_tags($this->nume));
        $this->prenume = htmlspecialchars(strip_tags($this->prenume));
        $this->email = htmlspecialchars(strip_tags($this->email));
        $this->telefon = htmlspecialchars(strip_tags($this->telefon));
        $stmt->bindParam(':username',$this->username);
        $stmt->bindParam(':nume',$this->nume);
        $stmt->bindParam(':prenume',$this->prenume);
        $stmt->bindParam(':email',$this->email);
        $stmt->bindParam(':telefon',$this->telefon);
        $stmt->bindParam(':created_at', $this->date);

        if(!$stmt->execute()){
            header("Location: index.php?cris=create_the_user_failed");
        }
        session_start();
        $_SESSION['username'] = $this->username;    
        

        

    }
    
    protected function create_contor($nume_contor,$serie,$serie2){
        $this->nume_contor = $nume_contor;
        $this->serie = $serie;
        $this->serie2 = $serie2;
        $this->date = date('Y-m-d H:i:s');
        $query = 'INSERT INTO contoare SET Nume_contor = :nume_contor , Serie = :serie , Serie2 = :serie2 , Created_at = :created_at';
        $stmt = $this->connect()->prepare($query);
        $this->username = htmlspecialchars(strip_tags($this->nume_contor));
        $this->nume = htmlspecialchars(strip_tags($this->serie));
        $this->prenume = htmlspecialchars(strip_tags($this->serie2));
        $stmt->bindParam(':nume_contor',$this->nume_contor);
        $stmt->bindParam(':serie',$this->serie);
        $stmt->bindParam(':serie2',$this->serie2);
        $stmt->bindParam(':created_at', $this->date);

        if(!$stmt->execute()){
            header("Location: index.php?cris=create_the_contor_failed");
        }else{
            header("Location: index.php?cris=created_the_contor");
        }


    }
public function create_index($nume_contor,$link_poza,$val){
        $this->link_poza = $link_poza;
        $this->val = $val;
        $this->id = $nume_contor;
        $this->created_at = date('Y-m-d H:i:s');
        //$query = 'INSERT INTO  index (Nume_contor) SELECT Nume_contor FROM contoare AND INSERT INTO index SET link_poza = :link_poza, Created_at = :created_at';
        $query = 'INSERT INTO valorii SET Nume_contor = :nume_contor , valoare = :valoare , link_poza = :link_poza , Created_at = :created_at';
        $stmt = $this->connect()->prepare($query);
        $this->nume_contor = htmlspecialchars(strip_tags($this->nume_contor));
        $stmt->bindParam(':nume_contor',$this->id);
        $stmt->bindParam(':valoare',$this->val);
        $stmt->bindParam(':link_poza',$this->link_poza);
        $stmt->bindParam(':created_at', $this->created_at);

        if(!$stmt->execute()){
            header("Location: create_index.php?cris=create_index_failed");
        }

        return true;
    }

    protected function get_all_contoare(){
        $query = 'SELECT * FROM contoare';
        $stmt = $this->connect()->prepare($query);
        if(!$stmt->execute()){
            header("Location: create_index.php?cris=could_not_get_all_the_contoare_failed");
        }else

        return $this->result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    protected function update_contor($id,$serie,$serie2){
    /*    $this->nume_contor = $nume_contor;
        $this->serie = $serie;
        $this->serie2 = $serie2;
        $query = 'UPDATE contoare SET Serie = :serie, Serie2 = :serie2 WHERE Nume_contor = :nume_contor';
        $stmt = $this->connect()->prepare($query);
        $stmt->bindParam(':nume_contor', $this->nume_contor);
        $stmt->bindParam(':serie', $this->serie);
        $stmt->bindParam(':serie2', $this->serie2);
        
        if (!$stmt->execute()) {
            header("Location: signup.php?cris=could_not_update_the_contor_failed");
            exit(); // Always exit after header redirect
        } 
     
     */
     
        $this->id = $id;
        $this->serie = $serie;
        $this->serie2 = $serie2;
        $query = 'UPDATE contoare SET Serie = :serie , Serie2 = :serie2 WHERE Id = :id';
        $stmt = $this->connect()->prepare($query);
        $this->username = htmlspecialchars(strip_tags($this->nume_contor));
        $this->nume = htmlspecialchars(strip_tags($this->serie));
        $this->prenume = htmlspecialchars(strip_tags($this->serie2));
        $stmt->bindParam(':id',$this->id);
        $stmt->bindParam(':serie',$this->serie);
        $stmt->bindParam(':serie2',$this->serie2);

        if(!$stmt->execute()){
            header("Location: contoare_update.php?cris=could_not_update_the_contor_failed");
            exit();
        }
    }

    protected function get_the_10_last_contoare(){
        $query= "SELECT * FROM contoare ORDER BY Id DESC LIMIT 10";
        $stmt = $this->connect()->prepare($query);
        $stmt->execute();
        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
        echo 'Uite ultimele contoare:<br>';
        foreach ($rows as $row) {
            echo " - Nume: " . $row["Nume_contor"]. "<br>";
        }        
       

    }

}