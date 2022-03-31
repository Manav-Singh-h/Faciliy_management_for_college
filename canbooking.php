
<?php include 'script.php'; //CONFIRMATION PAGE?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
                    <th>f_id</th>
                    
                    <th>Date</th>
                    <th>StartTime</th>
                    <th>End Time</th>
                    <th>Facility Name</th>
                    <th>Event</th>
                    
                </tr>
            </thead>
            <tbody>
            <?php
            //$x=isset($_POST['accept']);
            $conn = mysqli_connect("localhost", "root", "1234", "project");
            //$ids=$_GET[('ids')];
            
            
            //$selectquery = " insert into cancled (bid,f_id,Date,Start_Time,End_time,Facility_name,Event_name) select bid,f_id,Date,Start_Time,End_time,Facility_name,Event_name from facility where bid='$ids'";
            //mysqli_query($conn,$selectquery);
            //$selectquery1 = "delete from facility where bid='$ids'";
           // mysqli_query($conn,$selectquery1);
            
            $show = "select * from cancled ";
            
            
            
         
           $query = mysqli_query($conn, $show);
            $nums=mysqli_num_rows($query);
            //

            while($res=mysqli_fetch_assoc($query))
            {
            ?>
            
            <tr>
                <th><?php echo $res['bid'] ?></th>
                <th><?php echo $res['f_id'] ?></th>
                
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
