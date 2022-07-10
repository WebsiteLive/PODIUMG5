<?php
session_start();
    
    include 'dbcon.php';
    $id=$_SESSION['User_Id'];
    $fname=$_POST['fname'];
    $mname=$_POST['mname'];
    $lname=$_POST['lname'];
    $ename=$_POST['ename'];
    $address=$_POST['address'];
    $bday=$_POST['bday'];
    
 
    

   

    if(!$con){
        header("Error.php");
    }
    else{
      

        $query ="UPDATE [dbo].[user_basicinfo]
        SET [first_name] = '$fname'
           ,[middle_name] = '$mname'
           ,[last_name] = '$lname'
           ,[ext_name] = '$ename'
           ,[user_address] = '$address'
           ,[user_birthdate] = '$bday'
        WHERE User_Id='$id'";
        $result = odbc_exec($con,$query);

        
        header("Location: browse.php");
    }
     


    
?>