<?php
   session_start();
   include 'dbcon.php';

   $id=$_SESSION['User_Id'];

      $query = "SELECT* 
      FROM user_basicinfo WHERE User_Id='$id'";
      $result = odbc_exec($con,$query);
      while ($row = odbc_fetch_array($result)) {
       $fname=$row['first_name'];
       $mname=$row['middle_name'];
       $lname=$row['last_name'];
       $ename=$row['ext_name'];
       $address=$row['user_address'];
       $bday=$row['user_birthdate'];

       
       
       /*$name=$row['first_name']." ".$row['last_name'];*/
 
 
      
 
   }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/EditAccount.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <title>Personal Information</title>
</head>
<body style="background-image: url(Account.jpg); background-size: cover;">
    <form action="updatebasicinfo.php">
    <div class="wrapper">
        <div class="title">
          Edit Account
        </div>
        <div class="form">
           <div class="inputfield">
              <label>First Name</label>
              <input name="fname"type="text" class="input" value="<?php echo $fname?>"required>
           </div>  
           <div class="inputfield">
            <label>Middle Name</label>
            <input name="mname"type="text" class="input" value="<?php echo $mname?>"required>
         </div>  
            <div class="inputfield">
              <label>Last Name</label>
              <input name="lname"type="text" class="input" value="<?php echo $lname?>"required>
           </div>
           <div class="inputfield">
            <label>Extension Name</label>
            <input name="ename"type="text" class="input"value="<?php echo $ename?>" placeholder="Jr">
         </div>  
           
          <div class="inputfield">
              <label>Address</label>
              <textarea name="address"class="textarea" required><?php echo $address?></textarea>
           </div>   
           <div class="inputfield">
            <label>Date of Birth</label>
            <input name="bday"type="date" class="input" value="<?php echo $bday?>"required>
         </div>   
          <div class="inputfield">
            <input type="submit" value="Update" class="btn">
          </div>
        </div>
    </div>
</form>
</body>
</html>