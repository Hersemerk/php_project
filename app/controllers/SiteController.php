<?php

class SiteController
{
    public function actionIndex($page = 1)
    {
      
		$students = GetData::getStudents();
		$months = GetData::getMonths();
		$subjects = GetData::getSubjects();

        require_once(ROOT . '/app/views/site/index.php');
        return true;
    }
}
