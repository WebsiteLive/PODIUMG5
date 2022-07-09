<?php
    session_start();
    include 'dbcon.php';
    include 'getimgurl.php';
    include 'id_generator.php';

    $creator=$_SESSION['User_Id'];
    $thread_id=id_generator('$id');
    $item_type=$_POST['item_type'];
    $post_type=$_POST['post_type'];
    $dimension=$_POST['dimension'];
    $post_caption=$_POST['caption'];
    $post_description=$_POST['desc'];

    $price=$_POST['Price'];
    $date=date('d/m/y');
    $title=$_POST['title'];
    
  
    
    if(!$con){
        header("Location: Ghost.html");
    }
    else{
        $query = "INSERT INTO art_submission(Creator_Id
        ,thread_Id
        ,item_imgurl
        ,item_dimension
        ,item_type
        ,post_type
        ,post_caption
        ,post_description
        ,price
        ,date_published
        ,item_title)VALUES('$creator','$thread_id','$img_upload_path','$dimension','$item_type','$post_type','$post_caption','$post_description','$price','$date','$title')";
        $result = odbc_exec($con,$query);
        header("Location: Freelancepage.php");
    }
    
?>

