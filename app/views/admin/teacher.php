<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
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
 <h2>Преподаватель</h2>
<form action="#" method="post" name="tableprepod">
<p><label>Фамилия преподавателя<br>
<input name="last_name"="20" type="text" value=""></label></p> 
<p><label>Имя преподавателя<br>
<input name="first_name"="20" type="text" value=""></label></p> 
<p><label>Отчество преподавателя<br>
<input name="middle_name"="20" type="text" value=""></label></p> 
<p><input name="submit" type="submit" value="Добавить данные"></p>
 </form>
</div>
</div>
</body>
