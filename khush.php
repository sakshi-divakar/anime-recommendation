<?php
$server = "127.0.0.1:3306"; 
$username = "root";
$password = "";
$database = "anime";
 
$conn = mysqli_connect($server, $username, $password, $database); 
if($_SERVER["REQUEST_METHOD"] == "POST"){
    
    $username = $_POST["uname"];
    $password = $_POST["psw"];
    
    $sql = "Select * from users where username='$username' && password='$password'";
    $result=mysqli_query($conn,$sql);
    $num=mysqli_num_rows($result);
    if($num==1){
      $login=true;
      session_start();
      $_SESSION['loggedin']=true;
      $_SESSION['username']=$username;
      header("location:saku.html");  
    }
    else{ 
        $showError = "Passwords do not match";  
    }
}
?>