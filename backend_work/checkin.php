<?php
session_start();
if(isset($_POST['submit'])){
    if(isset($_POST['username'])&&isset($_POST['password'])){
        include "connectdb.php";
        $username = $_POST['username'];
        $password = md5($_POST['password']);
        $url = $_POST['url'];
        $search = mysqli_query($conn,"SELECT * FROM user WHERE username='$username'");
        if(mysqli_num_rows($search)>0){
            $d = mysqli_fetch_assoc($search);
            if($password==$d['password']){
                $_SESSION['username']=$username;
                $_SESSION['password']=$password;
                $_SESSION['login']=TRUE;
                header("Location:$url");
            }else{
                header("Location:$url?alert=incorrect");
            }
        }else{
            header("Location:$url?alert=nouser");
        }
    }
}