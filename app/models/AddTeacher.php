<?php

class AddTeacher
{
		public static function add($last_name, $first_name, $middle_name)
		{
				$db = Db::getConnection();

				$sql = 'INSERT INTO teacher VALUES (NULL, :last_name, :first_name, :middle_name)';

				$result = $db->prepare($sql);
				$result->bindParam(':last_name', $last_name, PDO::PARAM_STR);
				$result->bindParam(':first_name', $first_name, PDO::PARAM_STR);
				$result->bindParam(':middle_name', $middle_name, PDO::PARAM_STR);
				$result->execute();
		}
}
