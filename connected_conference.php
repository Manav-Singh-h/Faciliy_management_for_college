<?php
session_start();
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
  header("location : register1.php");
  exit;
}
?>

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
        
        $Facility_name ='Confrence room';
        $Date =  $_REQUEST['Date'];
        $Start_Time=$_REQUEST['Start_Time'];
        $End_time=$_REQUEST['End_time'];
        $Event_name=$_REQUEST['Event_name'];
        $f_id =$_SESSION['f_id'];
        
      
        
        
        
          
        // Performing insert query execution
        // here our table name is college
        $sql = "INSERT INTO facility(Facility_name,Date,Start_Time,End_time,Event_name,f_id) VALUES ('$Facility_name','$Date','$Start_Time','$End_time','$Event_name','$f_id')";
          
        if(mysqli_query($conn, $sql))
        {
            // echo "<h3>data stored in a database successfully." 
            //     . " Please browse your localhost php my admin" 
            //     . " to view the updated data</h3>"; 
  
            // echo nl2br("\n$f_id\n $fname\n "
            //     . "$Lname\n $mobile_no\n $Email_id\n $School_name\n");
            // echo "<script type='text/javascript'>windows.alert('Successfully Registered');</script>";
            echo "<script>alert('DATA SUCCESSFULLY RECORDED');
            window.location.href ='home_page.php';
            </script>";
           
        }
         else{
            echo "ERROR: Hush! Sorry $sql. " . mysqli_error($conn);
            echo "<script>alert('DATA SUCCESSFULLY RECORDED');
            window.location.href ='home_page.php';
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