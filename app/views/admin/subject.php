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
<h2>Предмет</h2>
<form action="#" method="post" name="tablepred">
<p><label>Наименование предмета<br>
<input name="name"="20" type="text" value=""></label></p> 
<p><label>Месяц за который определяется рейтинг<br>
<input name="month"="20" type="text" value=""></label></p> 
<p><label>Текущая оценка<br>
<input name="tek_ocenka"="20" type="text" value=""></label></p> 
<p><label>Максимальная оценка<br>
<input name="max_ocenka"="40" type="text" value=""></label></p> 
<p><input name="submit" type="submit" value="Добавить данные"></p>
 </form>
</div>
</div>
</body>
</html>
