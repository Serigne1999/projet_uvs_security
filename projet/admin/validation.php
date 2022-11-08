<?php
session_start();

$conn = mysqli_connect('localhost','root','');
 
mysqli_select_db($conn,'burger_code');

$name = $_POST['user'];
$password = $_POST['pwd'];

$select = "select * from connection where identifiants = '$name' && mot_de_passe = '$password'";

$result = mysqli_query($conn,$select);

$num  = mysqli_num_rows($result);

if($num == 1){
    header('location:home.php');
}else{
    header('location:sign_up.php');
}


?>