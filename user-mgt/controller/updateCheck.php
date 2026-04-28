<?php
    session_start();
    if(isset($_POST['submit'])){
        $id = $_POST['id'];
        $username = $_POST['username'];
        $email = $_POST['email'];

        if($username=="" || $email==""){
            echo "username and email can not be empty";
        }
        else{
            $users = $_SESSION['users'];
            foreach($users as &$user){  
                if($user['id'] == $id){  
                    $user['username'] = $username;  
                    $user['email'] = $email;        
                    break; 
                }
            }
            $_SESSION['users'] = $users;
            header('location: ../view/user_list.php');
        }           
    }
?>