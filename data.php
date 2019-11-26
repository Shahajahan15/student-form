<?php 
	 // $genders = array("1" => "male","2" => "female");
    //$religions = array("1" => "hindu","2" =>"muslim");

     $gender_sql = "SELECT * FROM `genders` WHERE status = 1";
     $gender_data = mysqli_query($conn ,$gender_sql);

     $religion_sql = "SELECT * FROM `religions`";
     $religion_data = mysqli_query($conn ,$religion_sql);
?>