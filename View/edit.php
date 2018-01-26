<!DOCTYPE html>
<html lang="">
<head>
    <title>View Your apartment</title>
    <meta charset="UTF-8">
     <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet"> 
    
    <link rel="shortcut icon" href="../View/Pictures/favicon.png" type="image/png">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>
    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
    
     <link rel="stylesheet" href="../View/css/side.css">
    <link rel="stylesheet" href="../View/css/style.css">
    <script src="../Model/js/coustom.js"></script>
    <meta charset="UTF-8">
    
</head>
<body>
<nav class="navbar navbar-light bg-light justify-content-between">
    <a class="navbar-brand" href="home2.html">
    <img src="../View/pictures/icon.png" width="50" height="50" class="icon" alt=""><Strong style="color: black">Smart Home</Strong>
   </a>
 
  <form class="form-inline">
       
   <span style="font-size:30px;cursor:pointer" onclick="openNav()" >&#x02261; &nbsp;Menu</span>
  </form>
</nav>
    
<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="../View/home2.html">Home</a>
     <a href="../View/user.php"> Profile</a>
     <a href="../View/dashboard.html">Dashboard</a>
  <a href="../View/view.php">View appartment</a>
  <a href="../View/manage.html">Manage appartment</a>
    <a href="../Controller/logout.php">Logout</a>
<a href="../View/contactlog.html">Contact us</a>

</div>
   

    <script>
function openNav() {
    document.getElementById("mySidenav").style.width = "100%";
}

/* Close/hide the sidenav */
function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
} 
    </script>
    <?php
    include '../Controller/config.php';
      $userId= session_name();
      $query_FName= "SELECT FirstName FROM user where Userid='$userId'";
      $query_LName= "SELECT LastName FROM user where Userid='$userId'";
      $query_Pwd= "SELECT Password FROM user where Userid='$userId'";
      $query_FNameExecute= mysqli_query($dbcon, $query_FName);
      $query_LNameExecute= mysqli_query($dbcon, $query_LName);
      $query_PwdExecute= mysqli_query($dbcon, $query_Pwd);




    ?>
         
<body>
    <br>
<div class="container">
    <h1>Edit Profile Details:</h1>
  	<hr>
	<div class="row">
      
      <div class="col-md-9 personal-info">
        
        
        <form class="form-horizontal" role="form">
          <div class="row" style="margin-left:190px;">
    <div class="col">
       
      username: <input type="text" name="username" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" required>
         First Name: <input type="text" name="FirstName" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" required>
         last Name: <input type="text" name="LastName" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" required>
       Password: <input type="password" name="Password" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" required>
        Confirm password: <input type="password" name="cpass" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" required>
        
    </div>
      <div class="vl"></div>
    <div class="col">
      Birthday: <input type="Date" name="DOB" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" required>
         Gender: <br> <label class="radio-inline"><input  type="radio" value="male" name="gender" required>&nbsp;Male</label>&nbsp;
	<label class="radio-inline"><input type="radio" name="gender" value="female" required>&nbsp;Female</label>&nbsp;
	<label class="radio-inline"><input type="radio" name="gender" value="other" required>&nbsp;Other</label>&nbsp;<br> 
         Email: <input type="email" name="EmailID" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" required>
        Address:<input type="text" name="Address" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" required>
        Product.id:<input type="text" name="ProductID" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" required>
    </div>
  </div>
            
         

    

<hr>
    
 <div class="form-group" style="margin-left:350px;" >
            <label class="col-md-3 control-label"></label>
            <div class="col-md-8" >
                <a href="../View/user.php" class="btn btn-outline-danger my-2 my-sm-0" type="submit">cancel</a>
              
                <a  href="" class="btn btn-outline-success my-2 my-sm-0" type="submit" style="margin-right: 16px">Save changes</a>
    
            </div>
          </div>
   
        </form>
          
        </div>
    </div>
    </div>
  
        
    
<hr class="style18">
    
 
       
        <footer style="width: auto">    
  
    <div class="copyright">
  <div class="container">
    <div class="col-md-6">
      <p>© 2017 - All Rights with Smart Home</p>
    </div>
    <div class="col-md-6">
      <ul class="bottom_ul">
        
        
      </ul>
    </div>
  </div>
</div>

        
        </footer>
   
</body>
</html>
