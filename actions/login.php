<?php 

    include('../config.php');

    if ($_SERVER["REQUEST_METHOD"] == "POST"){

        $username=$_POST['username'];
        $student_id=$_POST['student_id'];
        $password=$_POST['password'];
    
        $sql="SELECT * FROM students WHERE student_id='$student_id' AND password='$password' AND username ='$username' ";

        $result = $conn->query($sql);

        if($result->num_rows === 1){
            // echo "your login in   was successfull";

            $_SESSION['username'] = $username;
            $_SESSION['student_id'] = $student_id;
            $row = $result->fetch_assoc();
            $_SESSION['fullname'] = $row["full_name"];

            header('location: ../index.php');

        }else{
            header('location: ../login.php?$msg=invalid-credentials');
        }
        
    }
        
    
   
   
   
    // function inject_checker ($connection, $field){
    //     return (htmlentities(trim(mysqli_real_escape_string($connection, $field))));
   
    

?>