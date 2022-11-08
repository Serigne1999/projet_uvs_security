<?php
session_start();

$conn = mysqli_connect('localhost','root','');
 
mysqli_select_db($conn,'burder_code');

$name = $_POST['user'];
$password = $_POST['pwd'];

$select = "select * from connection where identifiants = '$name' && mot_de_passe = '$password'";

$result = mysqli_query($conn,$select);

$num  = mysqli_num_rows($result);

if($num == 1){
    echo "Inscription impossible";
}else{
    $reg = "insert into connection(identifiants,mot_de_passe) values('$name','$password')";
    mysqli_query($conn,$reg);
    echo "Inscription avec succées";
}


?>