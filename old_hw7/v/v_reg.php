<form method="post" id="form">
	<input type="text" name="name" placeholder="Введите имя" required>
	<input type="text" name="login" placeholder="Введите логин" required>
	<input type="password" name="password" placeholder="Введите пароль" required>
	<input type="submit" name="button" value="Зарегистрировать">
</form>
<?php if(isset($text)){echo "<script>alert('$text');document.getElementById('form').style.display = 'none';</script>";}?>