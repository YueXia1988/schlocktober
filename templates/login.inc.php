<h1>Log In</h1>

<form action="index.php?page=login.try" method="post">
	<label for="email">E-Mail:</label>
	<input type="email" name="email" id="email">

<br>
	
	<label for="password">Password:</label>
	<input type="password" name="password" id="password">

<br>

	<input type="submit" name="login" id="log in">
	<?php if(isset($this->data['login-error'])): ?>
	<p><?=$this->data['login-error']?></p>
    <?php endif;  ?>


</form>