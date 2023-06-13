<?php

 include 'lib/database.php';

class Register{
    public $db;

    public function __construct()
    {
        $this->db = new Database();
        
    }
   //insert data satrt 
   public function addRegister($_post) {
    $name = $_post['name'];
    $email = $_post['email'];
    $password = $_post['password'];
        
       
    
    
        
    
            $stmt = $this->db->link->prepare("INSERT INTO register (name, email, password ) VALUES (?, ?, ?)");
            $stmt->bind_param("sss", $name, $email, $password);
            $result = $stmt->execute();
            $stmt->close();
    
            if ($result) {
                // Set a session variable to hold the success message
                $_SESSION["msg"] = ['success',' Registration successful'];
               
                
                // Redirect the user to the home page
                header("Location: login.php");
                exit;
            } else {
                $_SESSION["msg"] = ['error',' Registration failed!'];
                
            }
            
        }
    }  //insert data end 



        
    






?>