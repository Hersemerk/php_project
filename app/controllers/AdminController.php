<?php

class AdminController extends AdminBase
{
    /**
     * Action для стартовой страницы "Панель администратора"
     */
    public function actionIndex()
    {
        // Проверка доступа
        self::checkAdmin();

        // Подключаем вид
        require_once(ROOT . '/app/views/admin/index.php');
        return true;
    }

	public function actionAddStudent()
	{
			// Обработка формы
		if (isset($_POST['submit'])) {
			// Если форма отправлена
			// Получаем данные из формы
			$last_name = $_POST['last_name'];
			$first_name = $_POST['first_name'];
			$middle_name = $_POST['middle_name'];
			$address = $_POST['address'];
			$phone = $_POST['phone'];
			$birthday = $_POST['birthday'];

			// Флаг ошибок
			$errors = false;
			AddStudent::add($last_name, $first_name, $middle_name, $address, $phone, $birthday);
        	}
		require_once(ROOT . '/app/views/admin/student.php');
		return true;
	}

	public function actionAddSubject()
	{	
		// Обработка формы
		if (isset($_POST['submit'])) {
			// Если форма отправлена
			// Получаем данные из формы
			$name = $_POST['name'];

			// Флаг ошибок
			$errors = false;

			//AddSubject::add();
		}
		require_once(ROOT . '/app/views/admin/subject.php');
		return true;
	}

	public function actionAddTeacher()
	{
		// Обработка формы
		if (isset($_POST['submit'])) {
			// Если форма отправлена
			// Получаем данные из формы
			$last_name = $_POST['last_name'];
			$first_name = $_POST['first_name'];
			$middle_name = $_POST['middle_name'];

			// Флаг ошибок
			$errors = false;

			AddTeacher::add($last_name, $first_name, $middle_name);
		}
		require_once(ROOT . '/app/views/admin/teacher.php');
		return true;
	}
}
