<?php

class GetData
{
		public static function getStudents()
		{
				$db = Db::getConnection();

				$sql = 'SELECT * FROM student';

				$result = $db->prepare($sql);
				$result->execute();

				$student = $result->fetch();

				return $student;
		}

		public static function getMonths()
		{
				$db = Db::getConnection();

				$sql = 'SELECT * FROM month';

				$result = $db->prepare($sql);
				$result->execute();

				$student = $result->fetch();

				return $student;
		}

		public static function getTeachers()
		{
				$db = Db::getConnection();

				$sql = 'SELECT * FROM teacher';

				$result = $db->prepare($sql);
				$result->execute();

				$student = $result->fetch();

				return $student;
		}

		public static function getGrades()
		{
				$db = Db::getConnection();

				$sql = 'SELECT * FROM grade';

				$result = $db->prepare($sql);
				$result->execute();

				$student = $result->fetch();

				return $student;
		}

		public static function getSubjects()
		{
				$db = Db::getConnection();

				$sql = 'SELECT * FROM subject';

				$result = $db->prepare($sql);
				$result->execute();

				$student = $result->fetch();

				return $student;
		}
}
