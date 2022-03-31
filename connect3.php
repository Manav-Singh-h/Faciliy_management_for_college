<!DOCTYPE html>
<html>
  
<head>
    <title>Insert Page</title>
</head>
  
<body>
    <center>
        <?php
  
        // servername => localhost
        // username => root
        // password => empty
        // database name => staff
        $conn = mysqli_connect("localhost", "root", "1234", "project");
          
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. " 
                . mysqli_connect_error());
        }
          
        // Taking all 5 values from the form data(input)
        $f_id =  $_REQUEST['f_id'];
        $fname = $_REQUEST['fname'];
        $Lname =  $_REQUEST['Lname'];
        $mobile_no = $_REQUEST['mobile_no'];
        $Email_id = $_REQUEST['Email_id'];
        $Password=$_REQUEST['Password'];
        $School_name=$_REQUEST['School_name'];
          
        // Performing insert query execution
        // here our table name is college
        $sql = "INSERT INTO register VALUES ('$f_id', 
            '$fname','$Lname','$mobile_no','$Email_id', '$Password','$School_name')";
          
        if(mysqli_query($conn, $sql))
        {
            // echo "<h3>data stored in a database successfully." 
            //     . " Please browse your localhost php my admin" 
            //     . " to view the updated data</h3>"; 
  
            // echo nl2br("\n$f_id\n $fname\n "
            //     . "$Lname\n $mobile_no\n $Email_id\n $School_name\n");
            // echo "<script type='text/javascript'>windows.alert('Successfully Registered');</script>";
            // echo '<input id=save()  ></input>';
            echo "<script>alert('Successfully registered');
            window.location.href ='register1.php';
            </script>";
           
        }
         else{
            // echo "ERROR:Sorry $sql. " . mysqli_error($conn);
            echo "<script>alert('Username Already Exists');
            window.location.href ='register1.php';
            </script>";
        }
          
        // Close connection
        mysqli_close($conn);
        ?>
        <!-- <action="register1.php"> -->
    </center>
</body>



<!-- <script>
        alert("successfully registered");
</script> -->

    
  
</html>