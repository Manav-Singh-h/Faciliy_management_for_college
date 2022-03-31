<?php
session_start();
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
  header("location : register1.php");
  exit;
}
$bid = $_REQUEST['bid'];
$Y=$_SESSION['f_id'];

$con = mysqli_connect("localhost", "root", "1234", "project");
$sql = "select *from booked WHERE bid = '$bid' and f_id ='$Y' ";

$result = mysqli_query($con, $sql);  
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
$count = mysqli_num_rows($result);  
  
if($count == 1){  
    
$selectquery = " insert into cancled (bid,f_id,Date,Start_Time,End_time,Facility_name,Event_name) select bid,f_id,Date,Start_Time,End_time,Facility_name,Event_name from booked where bid='$bid'";
mysqli_query($con,$selectquery);
$selectquery1 = "delete from booked where bid='$bid'";
mysqli_query($con,$selectquery1);
echo "<script>
window.location.href ='home_page.php';
</script>";



  
}  
else{
    echo "<script>alert('Invalid booking id');
    window.location.href ='canevent.html';
    </script>"; 
}


?>

  
