<?php
session_start();
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
  header("location : register1.php");
  exit;
}

?>



<!DOCTYPE html>
<html>
<title>Home Page</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<style>
@import url('https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@800&display=swap');
</style>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
    </script>
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}

body, html {
  height: 100%;
  line-height: 1.9;
}

.header {
  padding: 100px;
  text-align:center;
  
  /* background: #1abc9c; */
  background-image: url('college.jpeg');
  background-size:100%;  
  color: white;
  font-family: 'Sansita Swashed', cursive;
  font-size: 30px;
  height: 400px;
  overflow:visible;
}



.w3-bar .w3-button {
  padding: 16px;
}
.a{
  background-color: red;
}
.p{
  /* font-family: 'Merienda', cursive;
font-family: 'Sansita Swashed', cursive; */
font-family: 'Sansita Swashed', cursive;
}
.dropbtn {
  background-color: #dd3030;
  color: white;
  padding: 20px;
  font-size: 16px;
  border: none;
  cursor: pointer;
}

.dropdown {
  position: relative;
  display: inline-block;
  float: right;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
  right: 0;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #0e5bc0}

.dropdown:hover .dropdown-content {
  display: block;
}

.dropdown:hover .dropbtn {
  background-color: #3e8e41;
}
.s{
  float: right;
}
.z{
  overflow:visible;
}
.w3-bar{
  overflow:visible;
}
</style>
<body>

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar a w3-card" id="myNavbar" >

    <img src="sus1.png" alt="Sushant Logo" style="width:245px;height:70px;">


  
    <div class="dropdown s">
      <button class="dropbtn"><img src="avator.jpeg" alt="menu" class="rounded-pill" width="30px"> <?php echo $_SESSION['f_id'] ?></button>
      <div class="dropdown-content">
      <a href="showbook.php">CONFIRMED BOOKINGS</a>
      <a href="showcan.php">CANCELED BOOKINGS</a>
      <a href="#contact">CONTACT</a>
      <a href="logout.php">LOGOUT</a>
      </div>
      </div>
    </div>
  </div>


<!-- Sidebar on small screens when clicking the menu icon -->
<div id="carouselExampleIndicators" class="carousel slide z" data-ride="carousel" >
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="auditorium1.jpg" width="1600" height="500"  class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="amphi3.jpg" width="1600" height="500" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="auditorium2.jpg" width="1600" height="500" class="d-block w-100" alt="...">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <div class="w3-container w3-light-grey" style="padding:50px 16px" id="Facilities">

<h1 class="w3-center" width="30" height="30"><b>𓊈𒆜🅵🅰🅲🅸🅻🅸🆃🆈 🅱🅾🅾🅺🅸🅽🅶𒆜𓊉</b></h1>





 


<!-- "Auditorium" -->
<div class="w3-container w3-light-grey" style="padding:80px 40px">
  <div class="w3-row-padding">
    <div class="w3-col m6">
      <h3><b><u>AUDITORIUM</u></b></h3>
      <p>An auditorium is a room built to enable an audience to hear and watch performances. For movie theatres, the number of auditoria (or auditoriums) is expressed as the number of screens. Auditoria can be found in entertainment venues, community halls, and theaters, and may be used for rehearsal, presentation, performing arts productions, or as a learning space.
          
    <br>Size - 7585x4644</br>
          Capacity - 250 persons
          .</p>
      <p><a href="canevent.html" class="w3-button w3-red"><i class="fa fa-th"></i> CANCEL EVENT</a>
		<a href="auditorium.html" class="w3-button w3-red"><i class="fa fa-th" ></i> Book Now</a></p>
    </div>
    <div class="w3-col m6">
      <img class="w3-image w3-round-large" src="audi2.jpg" alt="Club" width="650" height="350">
    </div>
  </div>
</div>


<!-- "Architechture Amphitherter" -->
<div class="w3-container w3-light-grey" style="padding:128px 40px">
    <div class="w3-row-padding">
      <div class="w3-col m6">
        <h3><b><u>ARCHITECTURE AMPHITHEATER</u></b></h3>
        <p>An oval large stadium with tiers of seats; an arena in which contests and spectacles are held
            <br>
            Size - 7589x8589<br>
            Capacity - 300 persons
        </p>
        <p><a href="canevent.html" class="w3-button w3-red"><i class="fa fa-th"></i> CANCEL EVENT</a>
          <a href="book_amphi.php" class="w3-button w3-red" ><i class="fa fa-th" ></i> Book Now</a></p>
      </div>
      <div class="w3-col m6">
        <img class="w3-image w3-round-large" src="amphi1.jpg" alt="Club" width="650" height="300">
      </div>
    </div>
  </div>
  <!-- "Conference room" -->
<div class="w3-container w3-light-grey" style="padding:128px 40px">
    <div class="w3-row-padding">
      <div class="w3-col m6">
        <h3><b><u>CONFERENCE ROOM</u></b></h3>
        <p>Conference rooms are meant for formal or large meetings. Due to their size and seating possibilities, conference rooms are often used for lectures with one person leading the meeting and speaking to the rest of the group. The best type of conference room meeting is focused on education, training, or presentations.</p>
       <br> Size-5464x3544<br>
       Capacity - 14 persons
        <p><a href="canevent.html" class="w3-button w3-red"><i class="fa fa-th"></i> CANCEL EVENT</a>
          <a href="conference.html" class="w3-button w3-red"><i class="fa fa-th"></i> Book Now</a></p>
      </div>
      <div class="w3-col m6">
        <img class="w3-image w3-round-large" src="conference2.jpg" alt="Club" width="650" height="300">
      </div>
    </div>
  </div>
  <!-- "Basketball Ground" -->
<div class="w3-container w3-light-grey" style="padding:128px 40px">
    <div class="w3-row-padding">
      <div class="w3-col m6">
        <h3><b><u>BASKETBALL GROUND</u></b></h3>
        <p>In basketball, the basketball court is the playing surface, consisting of a rectangular floor, with baskets at each end. Indoor basketball courts are almost always made of polished wood, usually maple, with 3.048 metres (10.00 ft)-high rims on each basket. Outdoor surfaces are generally made from standard paving materials such as concrete or asphalt.</p>
       <br> Size - 28m long and 15m wide.
        <p><a href="canevent.html" class="w3-button w3-red"><i class="fa fa-th"></i> CANCEL EVENT</a>
          <a href="basketball_court.html" class="w3-button w3-red"><i class="fa fa-th"></i> Book Now</a></p>
      </div>
      <div class="w3-col m6">
        <img class="w3-image w3-round-large" src="basket1.jpg" alt="Club" width="650" height="300">
      </div>
    </div>
  </div>
 
   <!-- "Bus Service" -->
<div class="w3-container w3-light-grey" style="padding:128px 40px">
    <div class="w3-row-padding">
      <div class="w3-col m6">
        <h3><b><u>Bus Service</u></b></h3>
        <p>Bus, any of a class of large, self-propelled, wheeled vehicles that are designed to carry passengers, generally on a fixed route. They were developed at the beginning of the 20th century to compete with streetcars by providing greater route flexibility.</p>
<br> Size - 1223x546<br>
Capacity - 48 persons
        <p><a href="canevent.html" class="w3-button w3-red"><i class="fa fa-th"></i> CANCEL EVENT</a>
          <a href="bus_service.html" class="w3-button w3-red"><i class="fa fa-th"></i> Book Now</a></p>
      </div>
      <div class="w3-col m6">
        <img class="w3-image w3-round-large" src="bus1.png" alt="Club" width="650" height="300">
      </div>
    </div>
  </div>

  </div>
</div>

<!-- Contact Section -->
<div class="w3-container w3-light-grey" style="padding:128px 40px" id="contact">
  <h3 class="w3-center" >CONTACT </h3>
  <p class="w3-center w3-large">Lets get in touch. Send us a message:</p>
  <div style="margin-top:48px">
    <p><i class="fa fa-map-marker fa-fw w3-xxlarge w3-margin-right"></i> Sec-56 Gurugram, Haryana</p>
    <p><i class="fa fa-phone fa-fw w3-xxlarge w3-margin-right"></i> Phone: 1800 270 5520</p>
    <p><i class="fa fa-envelope fa-fw w3-xxlarge w3-margin-right"> </i> Email: info@ansaluniversity.edu.in</p>
    <br>
    <form action="alert.php">
      <p><input class="w3-input w3-border" type="text" placeholder="Name" required name="Name"></p>
      <p><input class="w3-input w3-border" type="text" placeholder="Email" required name="Email"></p>
      <p><input class="w3-input w3-border" type="text" placeholder="Subject" required name="Subject"></p>
      <p><input class="w3-input w3-border" type="text" placeholder="Message" required name="Message"></p>
      <p>
        <button class="w3-button w3-black" type="submit"  >
          <i class="fa fa-paper-plane" onclick='save()'></i> SEND MESSAGE
        </button>
      </p>
    </form>

 
<script>
// Modal Image Gallery
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}


// Toggle between showing and hiding the sidebar when clicking the menu icon
var mySidebar = document.getElementById("mySidebar");

function w3_open() {
  if (mySidebar.style.display === 'block') {
    mySidebar.style.display = 'none';
  } else {
    mySidebar.style.display = 'block';
  }
}

// Close the sidebar with the close button
function w3_close() {
    mySidebar.style.display = "none";
}

function save(){
  windows.alert("under construction.");
  header('home_page.php');
}
</script>

</body>
</html>