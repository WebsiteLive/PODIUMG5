<?php
    session_start();
    $email =$_POST['email'];
    $password =$_POST['password'];
    /*$current= $_SESSION['uri'];*/


    include "dbcon.php";
    
    
    $query = "select*from UserLogIn_Credentials WHERE user_email = '$email' ";
    $result = odbc_exec($con,$query);
    
    
    if (empty($result)) {
        echo "BOBO MALI<script>
            window.alert('Does not Exist');
           
            </script>";
    }
    else {
        while ($row = odbc_fetch_array($result) ) {
            $user_password=$row["user_password"];
            if($user_password==$password){
                $_SESSION['User_Id'] = $row['User_Id'];
                $id=$_SESSION['User_Id'];

                $query2 = "select user_type from user_type WHERE User_Id ='$id'";
                $result2 = odbc_exec($con,$query2);
                while ($row2 = odbc_fetch_array($result2) ) {
                    $_SESSION['user_type']=$row2['user_type'];
                    $type=$_SESSION['user_type'];
                   
                    
                    header("Location:gallerymarketpage_new.php");
                }
                
            }
            else{
                echo"BOBO MALI";
            }
        }
        
    }
    
?>