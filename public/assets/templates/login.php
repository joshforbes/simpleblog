<?php if (isset($loginError)) {
	echo $loginError;
}
?>
<form action="/login/login" method="post">
Username: <input type="text" name="username"><br>
Password: <input type="text" name="password"><br>
<input type="submit">
</form>