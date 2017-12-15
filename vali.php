<?php
$dbc = mysql_connect('localhost', 'root', ''); 
if (!$dbc) {
        die('not connected'.mysql_error());
}
$db_selected = mysql_select_db("newline", $dbc);
if (!$db_selected)
{
   die("cannot connect" .mysql_error());
    
}
// define variables and set to empty values
$nameErr = $emailErr =   $passwordErr = "";
$username = $email = $password= "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed"; 
    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format"; 
    }
  }
    
 $sql = "INSERT INTO user (userid,username,password,email) VALUES (NULL,'$username','$password_1','$email')";
}
?>