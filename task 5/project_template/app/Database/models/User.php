<?php

namespace app\Database\models;


use app\Database\models\Model;
use app\Database\models\contract\crud;

class User extends Model implements crud
{
    private $id, $first_name, $last_name, $gender, $phone, $password,
        $status, $email, $verification_code, $email_verfied_at,
        $created_at, $updated_at;
    const table = 'users';

    public function getId()
    {
        return $this->id;
    }
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    public function getFirst_name()
    {
        return $this->first_name;
    }
    public function setFirst_name($first_name)
    {
        $this->first_name = $first_name;
        return $this;
    }

    public function getLast_name()
    {
        return $this->last_name;
    }
    public function setLast_name($last_name)
    {
        $this->last_name = $last_name;
        return $this;
    }

    public function getGender()
    {
        return $this->gender;
    }
    public function setGender($gender)
    {
        $this->gender = $gender;
        return $this;
    }

    public function getPhone()
    {
        return $this->phone;
    }
    public function setPhone($phone)
    {
        $this->phone = $phone;
        return $this;
    }

    public function getPassword()
    {
        return $this->password;
    }
    public function setPassword($password)
    {
        $this->password =password_hash($password,PASSWORD_BCRYPT);
        return $this;
    }

    public function getStatus()
    {
        return $this->status;
    }
    public function setStatus($status)
    {

        $this->status = $status;
        return $this;
    }

    public function getEmail()
    {
        return $this->email;
    }
    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }

    public function getVerification_code()
    {
        return $this->verification_code;
    }
    public function setVerification_code($verification_code)
    {
        $this->verification_code = $verification_code;
        return $this;
    }

    public function getEmail_verified_at()
    {
        return $this->email_verfied_at;
    }
    public function setEmail_verified_at($email_verfied_at)
    {
        $this->email_verfied_at = $email_verfied_at;
        return $this;
    }

    public function getCreated_at()
    {
        return $this->created_at;
    }
    public function setCreated_at($created_at)
    {
        $this->created_at = $created_at;
        return $this;
    }

    public function getUpdated_at()
    {
        return $this->updated_at;
    }
    public function setUpdated_At($updated_at)
    {
        $this->updated_at = $updated_at;
        return $this;
    }

    public function create() :bool
    {
       $query = "INSERT INTO ".self::table . " (first_name,last_name,phone,email,password,gender,verification_code) 
       VALUES ( ? , ? , ? , ? , ? , ? , ?)" ;
       $stmt = $this->connection->prepare($query);
       if(! $stmt){
            return false;
       }    
       $bind = $stmt->bind_param("ssssssi",$this->first_name,$this->last_name,$this->phone
       ,$this->email,$this->password,$this->gender,$this->verification_code);
    
       return $stmt->execute();
    }
    public function update()
    {
    }
    public function read()
    {
    }
    public function delete()
    {
    }

    public function checkCode()
    {
        $query="SELECT * FROM ".self::table." WHERE email = ? AND verification_code = ?";
        $stmt=$this->connection->prepare($query);
        if(! $stmt){
            return false;
        }
        $stmt->bind_param("si",$this->email,$this->verification_code);
        $stmt->execute();
        return $stmt->get_result();
        
    }
    public function updateEmailVerified_at():bool
    {
        $query="UPDATE ". self::table ." SET `email_verfied_at`= ? WHERE email=?";
        $stmt=$this->connection->prepare($query);
        if(! $stmt){
            return false;
        }
        $stmt->bind_param('ss',$this->email_verfied_at,$this->email);
        return $stmt->execute();



    }
}
