<h3><?php if(isset($text)){echo $text;}?></h3>
<br>
<form method="post">
	<input type="text" name="name" placeholder="Введите имя" required>
	<input type="text" name="login" placeholder="Введите логин" required>
	<input type="password" name="password" placeholder="Введите пароль" required>
	<input type="submit" name="button" value="Зарегистрировать">
</form>