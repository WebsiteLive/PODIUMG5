<?php
	session_start();
	include 'dbcon.php';
	$art_id=$_GET['threadid'];

	if(!$con){
        header("Location: Ghost.html");
    }
    else{
		$query = "SELECT art_submission.Creator_Id,user_basicinfo.first_name,user_basicinfo.middle_name,user_basicinfo.last_name,art_submission.item_title
		,art_submission.post_description,art_submission.item_imgurl,art_submission.item_dimension,art_submission.item_type
		FROM user_basicinfo
		RIGHT JOIN art_submission ON art_submission.Creator_Id=user_basicinfo.User_Id WHERE thread_Id='$art_id'";
        $result = odbc_exec($con,$query);
                               
            if(!empty($result)) {
                while ($row = odbc_fetch_array($result)) {
                $title=$row['item_title'];
                $name=$row['first_name'];
                $img_url=$row['item_imgurl'];
                $desc=$row['post_description'];
				$type=$row['item_type'];
				$dimension=$row['item_dimension'];
				$creator=$row['Creator_Id'];
                
                }
			}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/descriptionOfArt.css">
	<link rel="stylesheet" type="text/css" href="fontawesome/css/all.css">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,600,700" rel="stylesheet">

	

	<title>Description of Art</title>
	
</head>

<body>

	<div class="container">
		<div class="col-sm-12"> Description of Art</div>
	</div>	
	

	<div class="container">	  
		<div class="row justify-content-around">
		    <div class="col-sm-6">
		    	<img class="img-fluid" src="<?php ECHO $img_url?>" alt="artwork">
		    </div>
		    <div class="col-sm-6">

				<div class ="container">
					<div class="text">
						<h4><?php echo $title?></h4>
						<br>
						<strong><?php echo $name?></strong>
						<br>
						<h5><?php echo $type?></h5>
						<em><?php echo $dimension?></em>
						<br><br><br>
						<p>
						<?php echo $desc?>
		
					</div>
						<div class="floating-parent">
						<a href="freelancerpage.php?userid=<?php echo $creator?>" class="widgetlabel">Go to Artist's page  <i class="far fa-long-arrow-alt-right"></i></a>
					</div>
				</div>
			</div>
		</div>
	</div>
		



	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
	integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
	crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
	integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
	crossorigin="anonymous"></script>
</body>
</html>

