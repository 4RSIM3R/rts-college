<?php


namespace Database\Seeder;


use Core\Seeder;
use Doctrine\DBAL\Connection;
use Doctrine\DBAL\Exception;
use Models\Users;

class UserSeeder extends Users implements Seeder
{

	/**
	 * @throws Exception
	 */
	public function create(Connection $connection)
	{
		$data = [
			["email" => "john@mail.com", "password" => password_hash("12345678", PASSWORD_BCRYPT)]
		];

		foreach ($data as $datum) {
			$connection->insert($this->table, $datum);
		}
	}

}