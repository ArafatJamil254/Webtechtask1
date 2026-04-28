<?php
    session_start();
    $id=$_GET['id'];
    $users=$_SESSION['users'];
    
    foreach($users as $i=> $user){
        if($user['id'] == $id){
            unset($users[$i]);
            break;
        }
    }

    $_SESSION['users'] = array_values($users);
    header('location: ../view/user_list.php');
?>    