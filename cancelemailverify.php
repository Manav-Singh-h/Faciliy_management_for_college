
<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception; 



require 'PHPMailer-master/src/Exception.php';
require 'PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/src/SMTP.php';
$mail = new PHPMailer();
$mail->IsSMTP();
$mail->Mailer = "smtp";
$mail->SMTPDebug  = 1;  
$mail->SMTPAuth   = TRUE;
$mail->SMTPSecure = "tls";
$mail->Port       = 587;
$mail->Host       = "smtp.gmail.com";
$mail->Username   = "5crazynoobs@gmail.com";
$mail->Password   = "crazynoobs@123";
$mail->SetFrom("5crazynoobs@gmail.com", "MAYANK");


     
    $con = mysqli_connect("localhost", "root", "1234", "project");
    $ids=$_GET[('ids')];
    $selectquery = " insert into cancled (bid,f_id,Date,Start_Time,End_time,Facility_name,Event_name) select bid,f_id,Date,Start_Time,End_time,Facility_name,Event_name from facility where bid='$ids'";
            mysqli_query($con,$selectquery);

      
        $sql = "select Email_id,bid,Event_name from register,facility where register.f_id=facility.f_id and bid='$ids'";  
        $result = mysqli_query($con, $sql);  
        // $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count >0){ 
            while($row = mysqli_fetch_array($result)){
                $z=$row['Event_name'];
                $mail->AddAddress($row['Email_id']);
                $content = "<b> SORRY </b> <br> Your Booking is cancled  for event <b> $z</b> by the admin";
            }
               $mail->IsHTML(true);
               
                $mail->Subject = "Booking";
                
                $mail->MsgHTML($content); 
                if(!$mail->Send()) {
                echo "Error while sending Email.";
                
                } else {
                   
                    $selectquery1 = "delete from facility where bid='$ids'";
                    mysqli_query($con,$selectquery1);
                    echo "<script>
                    window.location.href ='index.php';
                    </script>";
                
                

           

            }

             
 
        }  

        else{  
            // echo "<h1> Login failed. Invalid username or password.</h1>";  
            echo "<script>
            window.location.href ='index.php';
            </script>";

         
        } 
            
?>
<!-- <?php
// header('location:register1.php');
?>