
<?php include('header1.php')?>
<?php $tilte="register"?>

<div style="width:50%">

<fieldset>

<legend>Login</legend>

<form METHOD="POST" action="actions/register.php">



<tr>
<td>Full Name <input required type="text" name="full_name" ></td><br><br>
</tr>
<tr>
<td>Studend ID <input required type="text" name="student_id" ></td><br><br>
</tr>
<tr>
<td>Email <input required type="text" name="email" ></td><br><br>
</tr>
<tr>
<td>password <input required type="password" name="password" ></td><br><br>
</tr>
<tr>
<td>Phone <input required type="text" name="phone" ></td>
<input type="submit" value="submit"><br><br>
</tr>
    
    <button class="login"><a href="login.php">Log in</a></button> here if you Aready have an account.
</form>

</fieldset>




</div>