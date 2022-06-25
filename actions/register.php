<?php include('../config.php');?>

<?php 

if ($_SERVER["REQUEST_METHOD"] ==  "POST") {

$full_name=$_POST['full_name'];
$student_id=$_POST['student_id'];
$email=$_POST['email'];
$password=$_POST['password'];
$phone=$_POST['phone'];


$sql="INSERT INTO students (full_name, student_id, email, password, phone)
VALUES ('$full_name', '$student_id', '$email', '$password', '$phone' )";

if ($conn->query($sql) == !TRUE) {
    die("Connection failed:" . $conn->connect_error);
}else{

           
 header('location: ../home.php');
}


}


?>