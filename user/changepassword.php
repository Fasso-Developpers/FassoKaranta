<?php
	include("../connect.php");
	include("../function.php");

	$error = "";

	if(logged_in())
	{
		if(isset($_POST["savepass"]))
		{

			$password = $_POST['password'];
			$confirmPassword = $_POST['confirmPassword'];
			if(strlen($password) < 5)
			{
				$error = "Password must be greater than 5 characters";
			}
			elseif($password !== $confirmPassword)
			{
				$error = "Password does not match";
			}
			else
			{
				$password = md5($password);

				if (mysql_query($con, "UPDATE student_registred SET password='$password' WHERE email='$email'")) 
				{
					$succes = "Password is changed succesfully !";
					header("Refresh: 3;URL=profile.php");// Redirection à près 5 secondes
				}
			}
		}

		?>
		<?php echo $error ?>
		<form method="POST" action="changepassword.php">
			<tr><td>Password: </td><td>
			<input class="textBox" type="password" name="password" maxlength="15" 
			oninvalid="InvalidMsg(this);" oninput="InvalidMsg(this);" required /></td></tr>
			<tr><td></td><td>

			<tr><td>Re-enter Password: </td><td>
			<input class="textBox" type="password" name="confirmPassword" maxlength="15" 
			oninvalid="InvalidMsg(this);" oninput="InvalidMsg(this);" required /></td></tr>
			<tr><td></td><td>

			<input id="soumettre" name="savepass" type="submit" value="Save" />
		</form>

			<?php
	}
?>