<?php
    session_start();
    include 'getimgurl.php';
    include 'dbcon.php';
    $id=$_SESSION['User_Id'];
    $jd=$_POST['Job_Description'];
    $fb=$_POST['fburl'];
    $ig=$_POST['igurl'];
    $lang=$_POST['language'];
    $img=$img_upload_path;
    $intro=$_POST['selfintro'];

   

    if(!$con){
        header("Error.php");
    }
    else{
        $query = "INSERT INTO [dbo].[user_profile]
        (User_Id,Profile_img,job_desc,language,fb_url,ig_url,self_description)
        VALUES('$id','$img','$jd','$lang','$fb','$ig','$intro')";
        $result = odbc_exec($con,$query);

        $query2 ="UPDATE user_type
        SET  user_type = 'Freelancer'
        WHERE User_Id='$id'";
        $result = odbc_exec($con,$query2);
        $_SESSION['user_type']='Freelancer';

        
        header("Location: browse.php");
    }
     


    
?>