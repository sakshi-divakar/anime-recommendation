<?php
$server="localhost";
$username="root";
$password="";

$conn=mysqli_connect($server,$username,$password);

if(!$conn){
    echo "failed";
}
else{
    echo "success";

}