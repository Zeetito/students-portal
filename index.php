<?php
    include('config.php');
    include('session.php');
    include('header2.php');
?>

hello world.<br>

<p>Good Morning <?php echo $_SESSION['fullname'];?><br> Have a Nice Day</p>


<?php
include('footer2.php')

?>