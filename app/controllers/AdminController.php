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
			require_once(ROOT . '/app/views/admin/student.php');
			return true;
	}

	public function actionAddSubject()
	{
			require_once(ROOT . '/app/views/admin/subject.php');
			return true;
	}

	public function actionAddTeacher()
	{
			require_once(ROOT . '/app/views/admin/teacher.php');
			return true;
	}
}
