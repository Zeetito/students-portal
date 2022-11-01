<?php
    if(!isset($_SESSION['username'])){
        header('location: login.php?msg=session-not-set');
    }
?>