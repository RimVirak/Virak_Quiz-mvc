<!DOCTYPE html>
<html>
   <title>PHP MySQL MVC</title>
   <script src="views/jquery-1.9.1.js" ></script>
   <script src="views/list.js" ></script>
   <script src="views/bootstrap-3.3.7/js/bootstrap.min.js"></script>
   <link href="views/bootstrap-3.3.7/css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all">
   <link href="views/style.css" rel="stylesheet" type="text/css" media="all">
</head>

<body data-gr-c-s-loaded="true">
    <div class="container">
             <legend class="header">
                <h3 class="pull">User Manager</h3>
                <!-- <form method='post' action="index.php?action=logout">
                   <input type="submit" class="btn btn-danger float-left" value="Logout" name="but_logout"> -->
                    <?php 
                    
                     //   if(!isset($_SESSION['uname'])){
                     //    header('Location: index.php');
                  //   }
      
                    ?>
                </form>
             </legend>

         <?php
            include "views/" . $data['page'] . ".php";
            // include "views/employee/view.php";
         ?> 
     </div> 

</body>
</html>
