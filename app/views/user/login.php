<!DOCTYPE html>
<html>
<head>

</head>
<body>
	<?php if(isset ($errors) && is_array($errors)): ?>
	 <ul>
	   <?php foreach ($errors as $error): ?>
		<li> - <?php echo $error; ?> </li>
		<?php endforeach; ?>
	 </ul>
	<?php endif; ?>

<form action="#" method="post">
    <input type="text" class="user" name="email" placeholder="Логин" value="<?php echo $email; ?>"/><br><br>
    <input type="password"  class="user" name="password" placeholder="Пароль" value="<?php echo $password; ?>"/><br><br>
    <input type="submit" name="submit" class="button" value="Вход" />
	<a href="register">Регистрация</a>
</form>
</body>
</html>

