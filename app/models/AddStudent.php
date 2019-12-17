<?php

class AddStudent 
{
		public static function add($last_name, $first_name, $middle_name, $address, $phone, $birthday) 
		{
				$db = Db::getConnection();

				$sql = 'INSERT INTO student VALUES (NULL, :last_name, :first_name, :middle_name, :address, :phone, :birthday)';

				$result = $db->prepare($sql);
				$result->bindParam(':last_name', $last_name, PDO::PARAM_STR);
				$result->bindParam(':first_name', $first_name, PDO::PARAM_STR);
				$result->bindParam(':middle_name', $middle_name, PDO::PARAM_STR);
				$result->bindParam(':address', $address, PDO::PARAM_STR);
				$result->bindParam(':phone', $phone, PDO::PARAM_STR);
				$result->bindParam(':birthday', $birthday, PDO::PARAM_STR);
				$result->execute();
		}
}
