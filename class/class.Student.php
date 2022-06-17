<?php

class student
{
    public function construct()
    {
        $this->cnx = new PDO('mysql:host=localhost;dbname= 3wacademy', 'root', '');
    }
    public function Inscription($name, $email, $phone, $password,$departement,$prof,$msg)
    {
        $this->name = $name;
        $this->email = $email;
        $this->phone = $phone;
        $this->$password = $password;
        $this->Department = $departement;
        $this->profeseur = $prof;
        $this->message = $msg;
        $sql = "INSERT INTO `inscription`(`nom`,`email`,`phone`,`password`,`formation`,`prof`, `message`) VALUES ('$this->name','$this->email','$this->phone','$this->$password','$this->Department','$this->profeseur','$this->message')";
        echo $sql;
        $query = $this->cnx->prepare($sql);
        $res = $query->excute();
        if ($res) {
            return true;
        } else {
            return false;
        }
    }
    public function Login($email, $password)
    {
        $sql = "SELECT `email`,`password` FROM `inscription` WHERE email=$email And password=$password ";
        echo $sql;
        $query = $this->cnx->prepare($sql);
        $query->excute();
        $verif = $query->fetch(PDO::FETCH_ASSOC);
        return $verif;
    }
}

$user=new student();