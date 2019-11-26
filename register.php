<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student form</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
</head>
<?php
        include 'mysql_connect.php';
        include 'data.php';
        include 'validator/validator.php';
        include 'validator/validation.php';

        // print_r($_POST);
?>
<body class="container bg_color">
    <h1>Student Registration</h1>
    <form action="" method="POST">
        <div class="form-group">
            <label for="">Full Name* :</label>
            <input name="full_name" class="form-group first_name" type="text" placeholder="Type your full name" required="required" pattern="[A-Za-z ]{1,32}">            
        </div>
        <div class="form-group">
            <label for="">Father's Name* :</label>
            <input name="father_name" class="form-group father_name" type="text" placeholder="Type your Father's name" required="required" pattern="[A-Za-z ]{1,32}">            
        </div>
        <div class="form-group">
            <label for="">Mother's Name* :</label>
            <input name="mother_name" class="form-group mother_name" type="text" placeholder="Type your Mother's name" required="required" pattern="[A-Za-z ]{1,32}"> 
        </div>
        <div class="form-group">
            <label for="">Password* :</label>  
            <input name="password" class="form-group password" type="password" placeholder="type your password" required="required" pattern="^\S{6,}$" onchange="this.setCustomValidity(this.validity.patternMismatch ? 'Must have at least 6 characters' : ''); if(this.checkValidity()) form.confirm_password.pattern = this.value;">  
        </div> 
        <div class="form-group">
            <label for="">Confirm password* :</label> 
            <input name="confirm_password" class="form-group confirm_password" type="password" placeholder="type your confirm password" required="required" pattern="^\S{6,}$" onchange="this.setCustomValidity(this.validity.patternMismatch ? 'Please enter the same Password as above' : '');">
        </div>
        <div class="form-group">
            <label for="">Email* :</label>
            <input name="email" class="form-group email" type="email" placeholder="type your email" required="required">
        </div> 
        <div class="form-group">
            <label for="">Mobile number* :</label>
            <input name="mobile_number" class="form-group moile" type="tel" placeholder="type your mobile number" required="required"  pattern="[0-9]{11}">
        </div> 
        <div class="form-group">
            <label for="">Birth Day :</label>
           <select name="birth_day" class="form-group">
               <option value="">select birth day</option> 
               <?php for($i=1; $i<=31; $i++) { ?>
                    <option value="<?php echo $i ?>"><?php echo $i ?></option> 
               <?php }?>            
           </select>
        </div>
         <div class="form-group">
            <label for="">Birth month :</label>
           <select name="birth_month" class="form-group">
               <option value="">select birth month</option> 
               <?php for($i=1; $i<=12; $i++) {  ?> 
                 <option value="<?php echo $i ?>"><?php echo $i ?></option> 
               <?php }?> 
           </select>
        </div>
         <div class="form-group">
            <label for="">Birth year :</label>
           <select name="birth_year" class="form-group">
               <option value="">select birth year</option>
               <?php for($i=2019; $i>=1990; $i--){ ?>
                    <option value="<?php echo $i ?>"><?php echo $i ?></option>
               <?php }?>               
           </select>
        </div>
        <div class="form-group">
            <label for="">Genders* :</label>
            <select name="genders" class="form-group" required="required">
                <option value="">Genders</option>
                <?php while($row = mysqli_fetch_array($gender_data)) { ?>
                    <option value="<?php echo $row["id"] ?>"><?php echo $row["title"]; ?></option>
                <?php } ?>
            </select>
        </div>
         <div class="form-group">
            <label for="">Religions :</label>
            <select name="religions" class="form-group">
                <option value="">Religions</option>
                <?php while($rel = mysqli_fetch_array($religion_data)) { ?>
                    <option value="<?php echo $rel["id"] ?>"><?php echo $rel["title"]; ?></option>
                <?php } ?>
            </select>
        </div>
        <div class="form-group button">          
            <input class="reset form-group btn btn-warning" type="reset" value="Reset">   
            <input class="submit form-group btn btn-success" type="submit" value="Submit">   
        </div>
        
    </form>
</body>

</html>
