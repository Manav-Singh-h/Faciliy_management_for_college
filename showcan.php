<?php

session_start();
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
  header("location : register1.php");
  exit;
}
?>
<?php include 'script.php'; //CONFIRMATION PAGE?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <link href="css/styles.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>
</head>
<body>
</div>
<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        CANCLED BOOKINGS
    </div>
    <div class="card-body">
        <table id="datatablesSimple">
            <thead>
                <tr>
                    <th>B_id</th>
                    
                    
                    <th>Date</th>
                    <th>StartTime</th>
                    <th>End Time</th>
                    <th>Facility Name</th>
                    <th>Event</th>
                    
                </tr>
            </thead>
            <tbody>
            <?php
         
            
            $conn = mysqli_connect("localhost", "root", "1234", "project");
    

            $Y=$_SESSION['f_id'];
            $show = "select * from cancled where f_id='$Y'";
            
            
            
         
           $query = mysqli_query($conn, $show);
            $nums=mysqli_num_rows($query);
            //

            while($res=mysqli_fetch_assoc($query))
            {
            ?>
            
            <tr>
                <th><?php echo $res['bid'] ?></th>
                
                
                <th><?php echo $res['Date']?></th>
                <th><?php echo $res['Start_Time'] ?></th>
                <th><?php echo $res['End_time'] ?></th>
                <th><?php echo $res['Facility_name'] ?></th>
                <th><?php echo $res['Event_name'] ?></th>

               
            </tr>
            
             

           <?php 
            }
           ?>
               
            </tbody>
    
</div>
</body>
</html>