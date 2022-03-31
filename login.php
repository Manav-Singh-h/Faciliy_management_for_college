<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>import swal from 'sweetalert';</script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.all.min.js"></script> 
<link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.min.css'></link>   
<?php      
    $con = mysqli_connect("localhost", "root", "1234", "project");
    $f_id = $_POST['f_id'];
  
    $password = $_POST['Password'];  
      
        //to prevent from mysqli injection  
        $f_id = stripcslashes($f_id);  
        $password = stripcslashes($password);  
        $f_id = mysqli_real_escape_string($con, $f_id);  
        $password = mysqli_real_escape_string($con, $password);  
      
        $sql = "select *from register WHERE f_id = '$f_id' and Password = '$password'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            session_start();
            $_SESSION['loggedin']= true;
            $_SESSION['f_id']= $f_id;
            
       
           
          
            header('location: home_page.php');  
        }  
        elseif($f_id=='mayank1'&& $password=='mayank1')
        {
            session_start();
            $_SESSION['loggedin']= true;
            $_SESSION['f_id']= $f_id;

        


            
            header('location: index.php');
        }
        else{  
            // echo "<h1> Login failed. Invalid username or password.</h1>";  
            echo "<script>alert('Invalid Id or Password');
            window.location.href ='register1.php';
            </script>";

         
        } 
            
?>
 
