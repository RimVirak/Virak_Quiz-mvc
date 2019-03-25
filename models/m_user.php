<?php

   function m_get_data(){
       $query = "select*from user";
       include 'connection.php';
       $result = mysqli_query($dbconnect, $query);
       $rows = [];
       if(mysqli_num_rows($result) > 0){
           while ($get_result_to_array = mysqli_fetch_array($result, MYSQLI_ASSOC)){
               $rows[]= $get_result_to_array;
           }   
       }
        return $rows;
        // var_dump($rows);
    }

    function m_add_user(){
        // session_start();
        include 'connection.php';
        if(isset($_POST['btn-user'])){
            $username  = $_POST['username'];
            $name  = $_POST['name'];
            $password = md5 ($_POST['password']);
            $query = "INSERT INTO user (username,name,password) 
                      VALUES ('$username','$name','$password')";
            $result = mysqli_query($dbconnect, $query);
            
            if($result){
                header('location:index.php');   
                }else{
                  echo 'you cannot insert';
                }    
    }
   
}
// var_dump($result);
      
    function m_delete_user(){
        include 'connection.php';
        $id = $_GET['id'];

        $query = "DELETE FROM user WHERE id = '$id'";
        $result = mysqli_query($dbconnect, $query);
        return $result;
        
    }

    function getupdateinfo_user() {
        include "connection.php";
        $id = $_GET['id'];
        $query = "SELECT * FROM user WHERE id ='$id'";
        $data = mysqli_query($dbconnect, $query);
        // var_dump($data);die();
        return $data;
    }

    function m_update_user(){
        include "connection.php";
        $id = $_POST['id'];
       
        // if(isset($_POST['btn-update'])){
            $username  = $_POST['username'];
            $name  = $_POST['name'];
            $password = $_POST['password'];

         $query = "UPDATE user SET username ='$username',name='$name',password='$password' WHERE id ='$id'";
         $result = mysqli_query($dbconnect, $query);
         return $result;

         if($result){
            header("location:index.php");
        }else{
            header("location:add.php");
        }

    }

   function getall_detail(){
        

 }

 function loginvalidation(){
   
    include "connection.php";
    
    if(isset($_POST['but_submit'])){
    
        $uname = mysqli_real_escape_string($dbconnect,$_POST['txt_uname']);
        $password = mysqli_real_escape_string($dbconnect,$_POST['txt_pwd']);
    
        if ($uname != "" && $password != ""){
    
            $sql_query = "select count(*) as cntUser from user where username='".$uname."' and password='".$password."'";
            $result = mysqli_query($dbconnect,$sql_query);
            $row = mysqli_fetch_array($result);
    
            $count = $row['cntUser'];
    
            if($count > 0){
                $_SESSION['uname'] = $uname;
                header('Location: index.php?action=view');
            }else{
               header('Location: index.php?action=login');
            }
    
        }
    
    }

 }  



function userRegister(){
    include "connection.php";
        // $id = $_POST['id'];
        
        $fname = $_POST['username'];
        $nname= $_POST['name'];
        $pwd = $_POST["pwd"];
        $query = "INSERT INTO user (username,name,password) VALUES ('$fname','$nname','$pwd')";
        $result = mysqli_query($dbconnect, $query);
    
            if($result){
                header( 'location:index.php');
            }else{
                echo 'Cannot Registers';
            }

        return $result;  
}


