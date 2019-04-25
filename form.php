<!DOCTYPE html>
<html>
<head>
	<title>Авторизация Пользователя</title>
</head>
<body>
<div >
	<p>
		<br>Выберите язык
	</p>
</div>
<form action="secretplace.php" method="POST">
	<select multiple name="lang">
	<option value="ru">русский</option>
    <option value="ua">украинский</option>
    <option value="en">английский</option>
    <option value="it">итальянский</option>
	</select> 
	<br>
	<input type="submit" value="ok">
</form>
<a href="index.php?logout=true"><br><br>Выход</a>
</body>
</html>