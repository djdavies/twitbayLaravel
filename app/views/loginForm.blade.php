<!-- TODO - if not logged in, display login form -->
<!-- TODO - when the form action is completed, link to PHP -->
<!-- script that will store login details in the session variable-->

<!-- require login PHP script? this script should only -->
<!-- display the form (similar to the one below) if the user -->
<!-- is NOT currently logged in.  If the user IS logged in, -->
<!-- then display a welcome message -->


<!-- TO DO : doLogin.php -->
<form 
method = "POST" 
action="doLogin.php"
>
	Username: <input type="text" name="username" /> 
	Password: <input type="text" name="password" />
	<input type="submit" value="Sign in" />
</form>

<!-- end of login -->