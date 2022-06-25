<?php include('header1.php')?>
<?php $tilte="LogIn"?>

<div style="width:50%">

<fieldset>

<legend>Login</legend>

<form method="POST" action="actions/login.php">



<tr>
<td>Student ID <input type="text" name="student_id" ></td><br><br>
</tr>
<tr>
<td>username <input type="text" name="username" ></td><br><br>
</tr>
<tr>
<td>password <input type="text" name="password" ></td><br><br>
</tr>
<tr>
<input type="submit" value="Log In"><br><br>
</tr>
    
   Click <button class="login"><a href="index.php">Here</a></button> to create an account.
</form>

</fieldset>




</div>