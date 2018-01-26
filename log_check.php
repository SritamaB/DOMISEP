
<?php 
 
include("../Controller/config.php");

 session_start();
    $email = $_POST['mail'];
    $pass = $_POST['pass'];
    $_SESSION['login_user']=$email; 
    $query1 = "SELECT EmailID FROM user WHERE EmailID='$email' and Password='$pass'";
        $query2=mysqli_query($dbcon,$query1);
        $query3= mysqli_fetch_array($query2);
        
       // echo $query3;
     if ($query3!= 0)
    {
      if ($email=="admin@gmail.com")
        header('Location:../View/admindas.php');
      else
     header('Location: ../View/dashboard.html');

    }
      else{
      
    echo "<script type='text/javascript'>alert('User Name Or Password Invalid!')</script>";
    include('../View/login.html');

        //include_once("../Controller/Login.php");
        //header ('Location:../view/index2.php');
    }



    ?>


