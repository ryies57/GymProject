<?php

class client extends Model {
    private $national_id;
    private $phone_number;
    private $email;
    private $membership_num;
    private $gender;
    private $inbody;
    private $name;
    private $date_of_sub;
    private $date_of_birth;
    private $date_of_register;

    function __construct()
    {
        parent::__construct();
    }

    function setNational_id($national_id){
        $this->national_id=$national_id;
    }

    function getNational_id(){
        return $this->national_id;
    }

    
    function setPhone_number($phone_number){
        $this->Phone_number=$phone_number;
    }

    function getPhone_number(){
        return $this->phone_number;
    }

    function setEmail($email){
        $this->email=$email;
    }

    function getEmail(){
        return $this->$email;
    }

    function setMembership_num($membership_num){
        $this->membership_num=$membership_num;
    }

    function getMembership_num(){
        return $this->$membership_num;
    }

    function setGender($gender){
        $this->gender=$gender;
    }

    function getGender(){
        return $this->$gender;
    }

    function setInbody($inbody){
        $this->inbody=$inbody;
    }
    
    function getInbody(){
        return $this->$inbody;
    }

    function setName($name){
        $this->name=$name;
    }

    function getName(){
        return $this->$name;
    }
    function setDate_of_sub($date_of_sub){
        $this->date_of_sub=$date_of_sub;
    }

    function getDate_of_sub(){
        return $this->$date_of_sub;
    }

    function setDate_of_birth($date_of_birth){
        $this->date_of_sub=$date_of_birth;
    }

    function getDate_of_birth(){
        return $this->$date_of_birth;
    }

    function setDate_of_register($date_of_register){
        $this->date_of_register=$date_of_register;
    }

    function getDate_of_register(){
        return $this->$date_of_register;
    }




}


?>