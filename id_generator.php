<?php
    function id_generator(){
        $month=date('m');
        $day=date('d');
        $yr=date('y');
        
        $id="";
        for($i= 1; $i<=2 ; $i++){
            $letters = "QWERTYUIOPASDFGHJKLZXCVBNM";
            $letterArray= str_split($letters);  
            $random_letter=rand(0,25);
            $id= "$id"."$letterArray[$random_letter]";
        }

        $id="$id"."$month"."$day"."$yr";
        for($i= 1; $i<=8 ; $i++){
            $numbers = "0123456789";
            $numberArray= str_split($numbers);  
            $random_number=rand(0,9);
            $id= "$id"."$numberArray[$random_number]";
        }
        return $id;
    }
    function id_checkunique(){
        $id;
        $con = new mysqli("localhost:3307","root","d14nof4m","heaventee");
        if($con->connect_error){
            die("Failed To Connect: ".$con->connect_error);
        }
        else {
            $query = "select * from users_info where user_id= ?";
            $check = $con->prepare($query);
            $check ->bind_param("s", $id);
            $check->execute();
            $check_result = $check->get_result();
        }
        return $check_result;
    }

?>