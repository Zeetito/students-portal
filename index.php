<?php
    include('config.php');
    include('session.php');
    include('header2.php');
?>

hello world.<br>

<p>Good Morning <?php echo $_SESSION['fullname'];?><br> Hope you're having
a nice day</p>


<?php
include('footer2.php')

?>