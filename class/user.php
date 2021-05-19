<?php

include "connection.php";

class User extends Connection{

 private $email;
 private $password;
 private $firstname;
 private $lastname;
 private $contact;

 public function __construct()
 {
     parent::__construct();
 }
 public function setFirstname($firstname)
 {
  $this->firstname = $firstname;
 }
 public function setLastname($lastname)
 {
  $this->lastname = $lastname;
 }
 public function setContact($contact)
 {
  $this->contact = $contact;
 }
 public function setEmail($email)
 {
    $this->email = $email;
 }

 public function setPassword($password)
 {
   $this->password = $password;
 }

 public function register()
 {
  $sql = "INSERT INTO user (firstname, lastname, email, password, contact)
  VALUES ('$this->firstname', '$this->lastname', '$this->email', '$this->password', '$this->contact')";
  
  if ($this->conn->query($sql) === TRUE) 
  {
    return array("success" => "You have successfully registered!. Please login to your account");
  } 
  else 
  {
    return array("error"=>"Error: " . $sql . "<br>" . $this->conn->error);
  }
 }

 public function validate()
 {
    $sql = "SELECT * FROM user WHERE email = '$this->email'";

    $result = $this->conn->query($sql);
    if(mysqli_num_rows($result) > 0)
    {
      foreach($result as $row)
      {
        if(password_verify($this->password, $row['password']))
        {
          session_start();
          foreach($result as $row)
          {
            $_SESSION['user_id'] = $row['user_id'];
            $_SESSION['firstname'] = $row['firstname'];
            $_SESSION['lastname'] = $row['lastname'];
            $_SESSION['email'] = $row['email'];
            $_SESSION['contact'] = $row['contact'];

          }
          return array("success"=>"Successfully Login");
        }
        else
        {
          return array("error"=> "Password Incorrect");
        }
      }
    }
    else
    {
      return array("error" => "Email not found");
    }
    $this->conn->close();
 }
}