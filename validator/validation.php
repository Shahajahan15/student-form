<?php

if(
        isset($_POST["full_name"]) &&
        isset($_POST["father_name"]) &&
        isset($_POST["mother_name"]) &&
        isset($_POST["password"]) &&
        isset($_POST["confirm_password"]) &&
        isset($_POST["email"]) &&
        isset($_POST["mobile_number"]) &&
        isset($_POST["birth_day"]) &&
        isset($_POST["birth_month"]) &&
        isset($_POST["birth_year"]) &&
        isset($_POST["genders"]) &&
        isset($_POST["religions"])
    )
{

    // to cross validation 

        $validation = array(
            nameValidate($_POST["full_name"]),
            nameValidate($_POST["father_name"]),
            nameValidate($_POST["mother_name"]),
            passwordvaltidate($_POST["password"]),
            cpassvaltidate($_POST["password"], $_POST["confirm_password"]),
            emailvaltidate($_POST["email"]),
            // arrayValidate($genders,$_POST["genders"]) 
        );

     //print_r($validation); to check values
        if (in_array(0, $validation) == 1) {
         echo "Submission faild";
        }else{

            // custom variable for input fields
     // $name = $_POST["full_name"];
     // $father = $_POST["father_name"];
     // $mother = $_POST["mother_name"];
     // $email = $_POST["email"];
     // $password = $_POST["password"];
     // $mobile = $_POST["mobile_number"];
    // $gender = $_POST["genders"];
     // $religion = $_POST["religions"];

    
    }

     $birth = $_POST["birth_year"] .'-'. $_POST["birth_month"] .'-'. $_POST["birth_day"];

     
    
    
    // to show succcess message
    $sql = "INSERT INTO `students` (`name`, `father_name`, `mother_name`, `email`, `password`, `mobile`,`birth_date`, `gender_id`, `religion_id` ) VALUES ('".$_POST["full_name"]."', '".$_POST["father_name"]."', '".$_POST["mother_name"]."', '".$_POST["email"]."', '".md5($_POST["password"])."', '".$_POST["mobile_number"]."', '$birth' , '".$_POST["genders"]."', '".$_POST["religions"]."')";

       
    

        // $result = mysqli_query($conn,$sql);

        if ($conn->query($sql) === TRUE) {
            echo "Database created successfully";
        } else {
            echo "Error creating database: " .$conn->error; 
            }

            $conn->close();

}
             
        
    
?>
    