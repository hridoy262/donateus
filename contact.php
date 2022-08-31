<?php
$host_name='sql209.epizy.com';
$db_username= 'epiz_31625102';
$db_pass = 'e8uSLpEKKLY';
$db_name= 'epiz_31625102_submitform';
$con = mysqli_connect($host_name, $db_username, $db_pass, $db_name);



if (isset($_POST['submit'])) {

	$firstName = $_POST['name'];
	$email = $_POST['trx'];
	$password = $_POST['contact'];
	$messege = $_POST['Message'];

$sql = "INSERT INTO data (name, trx, contact, message) VALUES ('$firstName', '$email', '$password', '$messege')";
$done = mysqli_query($con, $sql);
if($done){
    echo "<h1> THanks For Donate </h1>";
    echo "<h2>Your Input:</h2>";
echo "Your Name :  " ;  
echo $firstName;
echo "<br>";
echo "Your Trx ID :  " ;
echo $email;
echo "<br>";
echo "Your Number :  " ;
echo $password;
echo "<br>";
echo "Your Messege :  " ;
echo $messege;
header("location: ../");



















}

}

?>















