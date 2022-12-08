<?php


namespace Core;


use Doctrine\DBAL\Connection;
use Doctrine\DBAL\DriverManager;
use Doctrine\DBAL\Exception;

class Database
{

	private static $instance = null;

	/** @var Connection|null  */
	public $connection = null;

	public function __construct()
	{
		$this->initConnection();
	}

	public static function getInstance()
	{
		if (self::$instance == null) self::$instance = new Database();
		return self::$instance;
	}

	public function initConnection()
	{
		try {
			$this->connection = DriverManager::getConnection([
				'dbname' => $_ENV['DB_NAME'],
				'user' => $_ENV['DB_USER'],
				'password' => $_ENV['DB_PASSWORD'],
				'host' => $_ENV['DB_HOST'],
				'driver' => $_ENV['DB_CONNECTION'],
			]);
		}  catch (Exception $e) {
		}
	}

}