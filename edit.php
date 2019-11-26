<html>
    <head>
        <title> Delegate edit form</title>
    </head>
    <body>


            <?php
                include 'mysql_connect.php';
            $id = $_GET["id"];
            $sql    = "SELECT * FROM students WHERE id='$id'";
            $result =$conn->query($sql);
            while ($row    = mysql_fetch_array($result))

                {

                    $Name     = $row['Name'];
                    $father_name = $row['User_name'];
                    $mother_name = $row['User_password'];
                }

            ?>




        <form action="register.php" method="post">
            Name
            <input type="text" name= "Name" value= "<?php echo $row ['Name']; ?> "size=10>
            Username
            <input type="text" name= "father_name" value= "<?php echo $row ['father_name']; ?> "size=10>
            Password
            <input type="text" name= "mother_name" value= "<?php echo $row ['mother_name']; ?>" size=17>
            <input type="submit" name= "submit" value="Update">
        </form>
    </body>
</html>