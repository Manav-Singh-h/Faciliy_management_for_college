
<!--  -->
<link href='style1.css' rel='stylesheet' type='text/css'>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Merienda&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
<div id="navwrapper">
  <div id="navbar"> <table class="tablewrapper">
    <tr>
      <form action="login.php" method="post">
      <td class="row1">Faculty ID</td>
      <td class="row1">Password</td>
    </tr>
    <tr>
      <td><input type="text" class="inputtext" name='f_id'>
      </td>
      <td><input type="text" class="inputtext" name='Password'>
      </td>
      <td><div><button type="submit" id="button" name="login" >Log In</button></div></td>
    </tr>
    <tr>
      <td>
       
  </table>
</form>  
    <h1 class="logowrapper">Sushant University</h1>
   
  </div>
  </div>

  <div id="contentwrapper">
    <div id="content">
      
      <div id="leftbod">
        
        <div class="connect bolder">
          </div>
         

        


          
          <!-- <div class="leftbar"-->
          <!-- <img src="img/meet.jpeg" alt="" class="iconwrap fb1" /> -->
          <!-- <a target="_blank" href=""><img src="img/meet.jpeg" alt="" width="50%" height="27%"></a> -->
          <!-- <div class="fb1">
            <span class="rowtext">Conference Room</span>
            <span class="rowtext2 fb1"></span>
            </div>
          </div>
             
            <div class="leftbar">
          <img src="img/basketball-courts.jpg" alt="" class="iconwrap fb1"/>
          <div class="fb1">
            <span class="rowtext">basketball Courts</span>
            <span class="rowtext2 fb1"></span>
        </div> 
        </div>  --> 
       
            
      </div>
      
      <div id="rightbod">
        <div class="signup bolder">Register</div>
    
        <form action="connect3.php" class="login" method="post">
        <div class="formbox">
        <input type="text" class="inputbody in1" placeholder="First name" name="fname" id="fname"required>
        <input type="text" class="inputbody in1 fr" placeholder="Last name" name="Lname" id="Lname"required>
        <input type="text" class="inputbody in2" placeholder="Faculty ID" name="f_id" id="f_id"required>
        </div>
        <div class="formbox">
        <input type="email" class="inputbody in2" placeholder="Email" name="Email_id" id="Email_id"required>
        
        </div>
        <div class="formbox">
        <input type="text" class="inputbody in2" placeholder="Mobile number" name="mobile_no" id="mobile_no"required>
        </div>
        <div class="formbox">
        <input type="password" class="inputbody in2" placeholder="Password" name="Password" id="Password"required>
        <i class="far fa-eye" id="togglePassword" style="margin-left: -30px; cursor: pointer;" onclick="myfunction()"></i>
        <input type="text" class="inputbody in2" placeholder="School_name" name="School_name" id="School_name"required>
        </div>
       
            <div class="formbox">
              <button type="submit" class="signbut bolder" name="register" id="register" >Register</button>
            </div>
        
</form>   
        
      </div>
     </div>
    </div>
<script>
  
  </script>
    
<!-- <script>
  function alrt()
  {
    windows.alert("Successfully Registered");  
  }
</script> -->
<!-- 
//    if($_POST['register'])
// {
//    $f_id=isset($_POST["f_id"]);
// $firstname=$_POST['fname'];
// $lastname=$_POST['Lname'];
// $mobilenumber=$_POST['mobile_no'];
// $emailid=$_POST['Email_id'];
// $password=$_POST['Password'];
// $schoolname=$_POST['School_name'];
// $query="INSERT INTO register VALUES('$f_id','$firstname','$lastname','$mobilenumber','$emailid','$password','$schoolname');
// $data=mysqli_query($conn,$query)";
// if($data)
// {
//    echo "Data Inserted into database";
// }
// else
// {
//    echo "Failed";
// }
// }
// ?>
     -->