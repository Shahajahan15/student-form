<?php 
	include 'mysql_connect.php';
	include 'data.php';
?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>show database</title>
 	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
 </head>
 <body class="bg-info m-5">
	<?php 
		//$sql = "SELECT * FROM students";
		 $sql = "SELECT * ,
		  genders.title AS gender, 
		  religions.title AS religion 
		  FROM students 
		  JOIN genders ON genders.id = students.gender_id 
		  JOIN religions ON religions.id = students.religion_id
		 ";
		
		 $result = $conn->query($sql);



	?>
 		<div class="container">
 			<h1 class="text-center text-uppercase" style="border-bottom: 2px solid white ;">mysql data</h1>
 			<div class="row" style=" text-transform: capitalize;">
			    <div class="col-sm">
			      <h6>full name</h6>
			    </div>
			    <div class="col-sm">
			      <h6>father name</h6>
			    </div>
			    <div class="col-sm">
			      <h6>mother name</h6>
			    </div>
			    <div class="col-sm">
			      <h6>email</h6>
			    </div>
			    <div class="col-sm">
			      <h6>mobile</h6>
			    </div>
			    <div class="col-sm">
			      <h6>birth_date</h6>
			    </div>
			    <div class="col-sm">
			      <h6>gender</h6>
			    </div>
			    <div class="col-sm">
			      <h6>religion</h6>
			    </div>
			    <div  class="col-sm">
			    	<h6>delete</h6>
			    </div>
			    <div  class="col-sm">
			    	<h6>Edit</h6>
			    </div>
			</div>
 		</div>
 	<?php while ( $row = mysqli_fetch_array($result)) {
 		
 	 ?> 	

 				
 		
		<div class="container">			
		  <div class="row"  style="border: 1px solid white;">
		    <div class="col-sm">
		      <p value=""><?php echo $row["name"]; ?></p>
		    </div>
		    <div class="col-sm">
		      <p value=""><?php echo $row["father_name"]; ?></p>
		    </div>
		    <div class="col-sm">
		      <p value=""><?php echo $row["mother_name"]; ?></p>
		    </div>
		    <div class="col-sm">
		      <p value=""><?php echo $row["email"]; ?></p>
		    </div>
		     <div class="col-sm">
		      <p value=""><?php echo $row["mobile"]; ?></p>
		    </div>
		     <div class="col-sm">
		      <p value=""><?php echo $row["birth_date"]; ?></p>
		    </div>
		    <div class="col-sm">
		      <p value=""><?php echo $row["gender"]; ?></p>
		    </div>
		        <div class="col-sm">
		      <p value=""><?php echo $row["religion"]; ?></p>
		    </div>
		       <div class="col-sm">
		      	<a href="delete.php?id=<?php echo $row["id"]; ?>"><button type="button" class="btn btn-danger btn-sm">Delete</button></a>
		    </div>
		    <div class="col-sm">
		      	<a href="register.php?id=<?php echo $row["id"]; ?>"><button type="button" class="btn btn-dark btn-sm">Edit</button></a>
		    </div>
		  </div>
		</div>
	 		

 	<?php } ?>

 </body>
 </html> 