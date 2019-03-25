<?php
    $data = array();
    flexible_function($data);

    function flexible_function(&$data){
        $function ='login';
        if(isset($_GET['action'])){
            $action = $_GET['action'];
            $function=$action;
        }
        $function($data);
    }

     function login(&$data){
        $data ['page'] = 'login';
     }
     function loginvalidate(&$data){
         validateFromDb();
     }
    
      function view(&$data){
          $data['user_data'] = m_get_data();
          $data['page'] = "user/view";
    }
    function viewuser(&$data){
        $data['user_data'] = m_get_data();
        $data['page'] = "user/viewuser";
  }

      function add(&$data){
      $data['$data_add'] = m_add_user();
      $data['page'] = "user/add";
      
    }

    function delete(&$data){
        $data_delete = m_delete_user();
        if($data_delete){
            header('location:index.php');
        }else{
            echo 'you cannot delete';
        }
    }

    function update(&$data){
        $data['$data_update'] = getupdateinfo_user();
        $data['page'] = "user/update";

    }

    function update_info(&$data) {
        $data_update= m_update_user();
        $data['page'] = "user/update";
         if($data_update){
            header('location:index.php?action=view');
        }else{
            echo 'you cannot update';
        }
    }
    
    function viewdetail(&$data){
        $data['$data_view'] = getall_detail();
        $data['page'] = "user/viewdetail";  
    }

    function createUser(&$data){

         $data['page'] = 'register';
     }

     function usersRegister(&$data){
         $user  = userRegister();
         if($user){
            $action = 'login';
        }else{
            $action = 'register';
        }
    header("Location:index.php?action=$action");
    }
  