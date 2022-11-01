<?php 
    $title="LogIn";

    include('header1.php');
?>

<div style="width:50%">

<fieldset>

<legend>Login</legend>

<form method="POST" action="actions/login.php">


<tr>
<td>Student ID <input type="text" name="student_id" ></td><br><br>
</tr>
<tr>
<td>Username <input type="text" name="username" ></td><br><br>
</tr>
<tr>
<td>Password <input type="password" name="password" ></td><br><br>
</tr>
<tr>
<input type="submit" value="Log In"><br><br>
</tr>
    
   Click <button class="login"><a href="register.php">Here</a></button> to create an account.
</form>

</fieldset>




</div>