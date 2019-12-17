<head>
<meta http-equiv="Content-Type" content="text/html" charset=utf-8" />
<title></title>
</head>
<body>
<div>
	<?php if(isset ($errors) && is_array($errors)): ?>
	 <ul>
	   <?php foreach ($errors as $error): ?>
		<li> - <?php echo $error; ?> </li>
		<?php endforeach; ?>
	 </ul>
	<?php endif; ?>

<div>
 <h1>Добавление данных в таблицу</h1>
 
 <h2>Студент</h2>
<form action="#" method="post" name="tablestud">
<p><label>Фамилия студента<br>
<input name="last_name"="20" type="text" value=""></label></p> 
<p><label>Имя студента<br>
<input name="first_name"="20" type="text" value=""></label></p> 
<p><label>Отчество студента<br>
<input name="middle_name"="20" type="text" value=""></label></p> 
<p><label>Домашний адрес студента<br>
<input name="address"="40" type="text" value=""></label></p> 
<p><label>Телефон студента<br>
<input name="phone"="11" type="tel" value=""></label></p>
<p><label>Дата рождения студента<br>
<input name="birthday"="20" type="date" value=""></label></p>  
<p><input name="submit" type="submit" value="Добавить данные"></p>
 </form>
</div>
</div>
</body>
</html>
