<?php

class RegisterUser 
{
		public static function register($email, $password) 
		{
				$db = Db::getConnection();

				$sql = 'INSERT INTO user VALUES (NULL, :user, :pass)';

				$result = $db->prepare($sql);
				$result->bindParam(':user', $email, PDO::PARAM_STR);
				$result->bindParam(':pass', $password, PDO::PARAM_INT);
				$result->execute();
		}
}
