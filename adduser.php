<?php
include 'config.php';



$fname=$_POST['First_Name'];
$lname=$_POST['Last_Name'];
$user=$_POST['user'];
$email=$_POST['Email'];
$pass=$_POST['Password'];
$birth=$_POST['Date_0f_Birth'];
$phone=$_POST['phone'];
$address=$_POST['Address'];
$Productid=$_POST['product'];
//$rowcount='(select count(*) from products where ProductID="$Productid" and Used="0")';
//$rowcount1= mysqli_query($dbcon,$rowcount);
//echo $rowcount1+1;
//if ($rowcount1=1)
//{
	//$numberOfuser= 'select count(*) from user';
       
    //$numberOfuser1 = mysqli_query($dbcon,$numberOfuser);
    //$numberOfuser= (int)$numberOfuser1;
	//$userid= str_shuffle($fname);
    //echo $userid;
	/*$req="INSERT INTO `user` (`Userid`, `FirstName`, `LastName`,`user`, `EmailID`, `Password`, `DOB`, `Address`, `ProductID`, `UserStatusActive`,  `Gender`, `PhoneNumber`) VALUES('$userid',$fname','$lname','$user','$email','$pass','$birth','$address','$Productid','0','$phone')";*/
$req="INSERT INTO `user` (`Userid`, `FirstName`, `LastName`,`user`, `EmailID`, `Password`, `DOB`, `Address`, `ProductID`, `UserStatusActive`,  `Gender`, `PhoneNumber`) VALUES('gf5675','qq' ,'w','dsdsd','ddada','sasas','1995-12-12','sssss','sasas','sasas','21212')";
    //entering the data in the user table with the data from the signup page
    mysqli_query($dbcon,$req);
    /*$numberOfuser2= mysqli_query($dbcon,$numberOfuser);
    $numberOfuser2=(int)$numberOfuser2;
    if($numberOfuser2=$numberOfuser1+1){
        echo "success";
   // }
    else{
        echo "failure go die ragool!";
    }
    */
	//$req_hometable="INSERT INTO `home`(`Userid`) VALUES('$userid')";  // entering the userid in the home table;
    //mysqli_query($dbcon,$req_hometable);
	//$req_upProduct="UPDATE `products` SET  `Used` = '1' WHERE `products`.`ProductID` = '$prodId'"; // to set the productid as 1 hence used
    //mysqli_query($dbcon,$req_upProduct);
header ('Location:index.php');
//}
//else
	//echo "The product id entered is not valid";
 
   
   


//mysqli_query($dbcon,$req);
 //mysqli_close($dbcon);



?>

