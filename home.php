<?php
$server = "127.0.0.1:3306"; 
$username = "root";
$password = "";
$database = "anime";
 
$conn = mysqli_connect($server, $username, $password, $database); 
if($_SERVER["REQUEST_METHOD"] == "POST"){
    
    $username = $_POST["email"];
    $password = $_POST["password"];
    $cpassword = $_POST["cpassword"]; 
    $exists=false; 
    if(($password == $cpassword) && $exists==false){
        $sql = "INSERT INTO `users` ( `username`, `password`) VALUES ('$username', '$password')";
        $result = mysqli_query($conn, $sql);
        if ($result){ 
            $showAlert = true;
            header("location:home.php");
        }
    }
    else{ 
        $showError = "Passwords do not match";  
    }
}
?>
<html> 
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anime Recommendations </title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" media="screen and (max-width:1170)" href="css/phone.css">
    <link href="https://fonts.googleapis.com/css?family=Baloo+Bhai|Bree+Serif&display=swap" rel="stylesheet">
    <style>
        *{
    margin: 0;
    padding:0;
}
html{
    scroll-behavior: smooth;
}
:root{
    --navbar-height:59px;
}

#logo {
  margin:10px 34px;
}
#logo img{
    height:59px;
    margin:3px 6px;
}

.navbar {
  overflow: hidden;
  background-color: #333;
}


.navbar a {
  float: left;
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}
.navbar a ,x{
    margin-left: 10px;
}

.dropdown {
  float: left;
  overflow: hidden;
  margin-left: 30px;
}

.dropdown .dropbtn {
  font-size: 16px;  
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.navbar a:hover, .dropdown:hover .dropbtn {
  background-color: red;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

/*.dropdown-content a:hover {
  background-color: #ddd;
}*/

.dropdown:hover .dropdown-content {
  display: block;
}
/* Home Section */
#home{
    display: flex;
    flex-direction: column;
    padding:3px 200px;
    height: 550px;
    justify-content: center;
    align-items: center;
}

#home::before{ 
    content: "";
    position: absolute;
    background: url('') no-repeat center center/cover;
    height: 642px;
    top:0px;
    left:0px;
    width: 100%;
    z-index: -1;
    opacity:0.89;
}

#home h1{
    color:white;
    text-align: center;
    font-family: 'Bree Serif', serif;
}

#home p{
    color:white;
    text-align: center;
    font-size: 1.5rem;
    font-family: 'Bree Serif', serif;
}
/* Services Section */
#gener{
    margin: 34px;
    display: flex;
}
#gener .box{ 
    border: 2px solid brown;
    padding: 34px;
    margin: 2px 55px;
    border-radius: 28px;
    background: #f2f2f2;
    margin-bottom: 20px;
}

#gener .box img{ 
   height: 160px;
   margin: auto;
   display: block;
}

#gener .box p{
    font-family: 'Bree Serif', serif;

} 
#country{ 
    position: relative;
}

#country::before{
 content: "";
 position: absolute;
 background: url('https://th.bing.com/th/id/OIP.maQpFJiRuDMauaTZ3N7KiQHaEo?pid=ImgDet&rs=1');
 width: 100%;
 height: 100%;
 z-index: -1;
 opacity: 0.3;
}

#country{
    display: flex;
    justify-content: center;
    align-items: center;
}

.country{
    padding: 34px;
}

#country img{
    height: 124px;
}



/* Contact Section */



footer{
    background: black;
    color: white;
    padding: 9px 20px;
    position:sticky;
    margin-top:435px ;
}

/* Utility Classes */
.h-primary{
    font-family: 'Bree Serif', serif;
    font-size: 3.8rem;
    padding: 12px;
}

.h-secondary{
    font-family: 'Bree Serif', serif;
    font-size: 2.3rem;
    padding: 12px;
}

.btn{
    padding: 6px 20px;
    border: 2px solid white;
    background-color: brown;
    color: white;
    margin: 17px;
    font-size: 1.5rem;
    border-radius: 10px;
    cursor:pointer;
}

.center{
    text-align: center;
}
/* Navigation */
/* #navbar {
    flex-direction: column; 
} */

/* #navbar ul li a{
    font-size: 1rem;
    padding: 0px 7px;
    padding-bottom: 8px;
    text-decoration: none;
} */
/* Home section */
/* #home{
    height: 370px; 
    padding: 3px 28px;
} */

/* #home::before{
    height: 480px; 
} */

/* #home p{
    font-size: 13px;
} */

/* Services section  */


/* Clients section */


/* Contact us section */
#movie {
    width:80%;
}
/* Footer */

/* Utility classes */
.h-primary{
    font-size:26px;
}
.btn{
    font-size: 13px;
    padding: 4px 8px;
}
#background-video {
  height: 100vh;
  width: 100vw;
  object-fit: cover;
  position: fixed;
  left: 0;
  right: 0;
  top: 0;
  bottom: 0;
  z-index: -1;
}

/* page content */
h1, h2 {
  color: white;
  font-family: Trebuchet MS;
  font-weight: bold;
  text-align: center;
}

h1 {
  font-size: 6rem;
  margin-top: 30px; 
}

h2 { font-size: 3rem; }

@media (max-width: 750px) {
    #background-video { display: none; }
    body {
      background: url("https://assets.codepen.io/6093409/river.jpg") no-repeat;
      background-size: cover;
    }
}

.search input[type=text]{
        width:300px;
        height:50px;
        border-radius:20px;
        border: none;
        font-size: 20px;
        /* border-color: aqua; */
        cursor: pointer;
    }
         
    .search{
        align-items: center;
        margin-left:600px;
        margin-top: 70px;
        border-color: aqua;
    }
         
    input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}
input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for all buttons */
button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  align-items: center;
        margin-left:600px;
        margin-top: 70px;
}
#sub{
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  
}

button:hover {
  opacity: 0.8;
}

/* Extra styles for the cancel button */
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

/* Center the image and position the close button */
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
  position: relative;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
  position: absolute;
  right: 25px;
  top: 0;
  color: #000;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: red;
  cursor: pointer;
}

/* Add Zoom Animation */
.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}
  
@keyframes animatezoom {
  from {transform: scale(0)} 
  to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
#sign {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
  align-items: center;
        margin-left:60px;
        margin-top: 70px;
}

#sign:hover {
  opacity:1;
}

/* Extra styles for the cancel button */
.cancelbtn1 {
  padding: 14px 20px;
  background-color: #f44336;
  align-items: center;
        margin-left:60px;
        margin-top: 70px;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn1, .signupbtn {
  float: left;
  width: 50%;
  align-items: center;
        margin-left:60px;
        margin-top: 70px;

}

/* Add padding to container elements */
.container1 {
  padding: 16px;
}

/* The Modal (background) */
.modal1 {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  
  padding-top: 50px;
}

/* Modal Content/Box */
.modal1-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
}

/* Style the horizontal ruler */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}
 
/* The Close Button (x) */
/* .close1 {
  position: absolute;
  right: 35px;
  top: 15px;
  font-size: 40px;
  font-weight: bold;
  color: #f1f1f1;
} */

.close1:hover,
.close1:focus {
  color: #f44336;
  cursor: pointer;
}

/* Clear floats */
.clearfix1::after {
  content: "";
  clear: both;
  display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
  .cancelbtn, .signupbtn {
     width: 100%;
  }
}
    </style>
</head>
<body>
    <video id="background-video" autoplay loop muted poster="https://assets.codepen.io/6093409/river.jpg">
        <source src="https://assets.codepen.io/6093409/river.mp4" type="video/mp4">
    </video>
    <div class="navbar">
        
        <a class="x" href="home.php">Home</a>
        
         
        <!-- <a href="#gener">Gener</a> -->
        <div class="dropdown">
            <button class="dropbtn">Gener
                <i class="fa fa-caret-down"></i>
              </button>
              <div class="dropdown-content">
                <a href="#action">Action</a>
                <a href="#drama">Drama</a>
                <a href="#romantic">Romantic</a>
        </div> 
        </div>
        <div class="dropdown">
          <button class="dropbtn">Country
            <i class="fa fa-caret-down"></i>
          </button>
          <div class="dropdown-content">
            <a href="https://www.bing.com/videos/search?q=indian+anime+movie+link&FORM=HDRSC3">India</a>
            <a href="https://www.bing.com/videos/search?q=japnes%20anime%20movie%20link&qs=n&form=QBVR&=%25eManage%20Your%20Search%20History%25E&sp=-1&pq=japnes%20anime%20movie%20link&sc=0-23&sk=&cvid=2BAD8D54A0E646B3B941074F419A7B10&ghsh=0&ghacc=0&ghpl=">Japan</a>
            <a href="#">Brazil</a>
          </div>
        </div>
        <div class="dropdown">
            <button class="dropbtn">Movie
              <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
              <a href="#">xyz</a>
              <a href="#">lmn</a>
              <a href="#">pqr</a>
            </div>
          </div>
        
    </div>
      </div>
</nav>

</div>
      
      <h1>THIS IS A ANIME.</h1>
      <h2>How majestic.</h2>
      <body>

        
        
        <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</button>
        
        <div id="id01" class="modal">
          
          <form class="modal-content animate" action="/try/khush.php" method="post">
            <div class="imgcontainer">
              <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
              
            </div>
        
            <div class="container">
              <label for="uname"><b>Username</b></label>
              <input type="text" placeholder="Enter Username" name="uname" required>
        
              <label for="psw"><b>Password</b></label>
              <input type="password" placeholder="Enter Password" name="psw" required>
                
              <button type="submit" id="sub">Submit</button>
              <label>
                <input type="checkbox" checked="checked" name="remember"> Remember me
              </label> 
            </div>
        
            <div class="container" style="background-color:#f1f1f1">
              <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
              <!-- <span class="psw">Forgot <a href="#">password?</a></span> -->
            </div>
          </form>
        </div>
        
        <script>
        // Get the modal
        var modal = document.getElementById('id01');
        
        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
        </script>
        <button onclick="document.getElementById('id02').style.display='block'" style="width:auto;" id="sign">Sign Up</button>

        <div id="id02" class="modal1">
          <span  class="close1" title="Close Modal">&times;</span>
          <form class="modal1-content" action="/try/home.php" method="post"> 
            <div class="container1">
              <h1>Sign Up</h1> 
              <p>Please fill in this form to create an account.</p>
              <hr>
              <label for="email"><b>Email</b></label>
              <input type="text" placeholder="Enter Email" name="email" required>
        
              <label for="password"><b>Password</b></label>
              <input type="password" placeholder="Enter Password" name="password" required>
        
              <label for="cpassword"><b>Confirm Password</b></label> 
              <input type="password" placeholder="Confirm Password" name="cpassword" required>
              
              <label>
                <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
              </label>
        
              <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>
        
              <div class="clearfix1">
                <button type="submit" class="signupbtn">Sign Up</button> 
                <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn1">Cancel</button>

              </div> 
            </div>
          </form> 
        </div>  
        
        <script>
        // Get the modal
        var modal = document.getElementById('id02');
        
        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
          if (event.target == modal1) {
            modal1.style.display = "none";
          }
        } 
         </script>
    <section id="Movie">
        <h1 class="h-primary center"></h1>
        <div id="Movie">
           
        </div>
    </section>
    <footer>
        <div class="center">
            Copyright &copy; www.Myonlineanime.com.All rights reserved!
        </div>
    </footer>
</body>
</html>
<!-- onclick="document.getElementById('id02').style.display='none'" -->
<!-- onclick="document.getElementById('id01').style.display='none'" -->