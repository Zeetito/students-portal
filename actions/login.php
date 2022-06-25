
<?php include('../config.php');?>

<?php

    if($_SERVER['REQUEST_METHOD'] == "POST"){

        $username = $_REQUEST['username'];
        $student_id = $_REQUEST['student_id'];
        $password = $_REQUEST['password'];

        $sql = "SELECT *
        FROM students
        WHERE student_id='$student_id' 
        AND password = '$password'
        AND username='$username'";
        $result = $conn->query($sql);
        if( $result){

            $rows = $result->num_rows;
            for ($j = 0 ; $j < $rows ; ++$j)
                {
                $result->data_seek($j);
                $_SESSION["username"] = $result->fetch_assoc()['username'];
                
                $result->data_seek($j);
                $_SESSION["password"] =$result->fetch_assoc()['password'];
                
                $result->data_seek($j);
               $_SESSION["email"]=$result->fetch_assoc()['email'];
                }
            header("location: ../homepage.php");
        }else{
            die("username or password incorrect");
        }

        
    }

?>