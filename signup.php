<?php
     include 'dbcon.php';
     include 'id_generator.php';
     $user_id=id_generator('id');
     
     $email=$_POST['email'];
     $uname=$_POST['uname'];
     $pass=$_POST['password'];
     $cpass=$_POST['cpassword'];
     $fname=$_POST['fname'];
     $mname=$_POST['mname'];
     $lname=$_POST['lname'];
     $address=$_POST['address'];
     $ext_name=$_POST['extname'];
     $birth=$_POST['bday'];
     
 
     echo $pass,$user_id,$email,$fname, $mname, $lname, $address,$birth;
 
     if(!$con){
         header("Location: Ghost.html");
     }
     else{

        if($pass==$cpass){
            $queryemail = "select*from UserLogIn_Credentials WHERE user_email = '$email' ";
            $resultemail = odbc_exec($con,$queryemail);
            if(odbc_num_rows($resultemail) >= 1){
                $mess="Account Already Exists";
                header("Location: index.php?mess=$mess");
            }
            else{
            $query = "INSERT INTO UserLogin_Credentials(User_Id,user_email,user_name,user_password)
            VALUES('$user_id','$email','$uname','$pass')";
            $result = odbc_exec($con,$query);
 
            $query2 = "INSERT INTO user_basicinfo(User_Id
            ,first_name
            ,middle_name
            ,last_name
            ,ext_name
            ,user_address
            ,user_birthdate)
            VALUES('$user_id','$fname','$mname','$lname','$ext_name','$address','$birth')";
            $result2 = odbc_exec($con,$query2);
 
            $query3 = "INSERT INTO [dbo].[user_type]
            (User_Id,user_type)VALUES
            ('$user_id', 'User')";
 
            $result3 = odbc_exec($con,$query3);
 
 
            echo $result,$result2;
 
            if(!$result || !$result2 || !$result3){
             header("Location: Ghost.html");
            }
            else{
             $mess="Sign Up Succes";
             header("Location: index.php?mess=$mess");
         }
        }
        }
        else{
            $mess="Password does not match";
             header("Location: index.php?mess=$mess");

        }
        
         
     }
 
?>