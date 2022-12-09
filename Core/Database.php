<?php


namespace Core;


use Doctrine\DBAL\Connection;
use Doctrine\DBAL\DriverManager;
use Doctrine\DBAL\Exception;
use Doctrine\DBAL\Schema\Schema;

class Database
{

	private static $instance = null;

	/** @var Connection|null */
	public $connection = null;

	/** @var Schema|null */
	public $schema = null;

	public function __construct()
	{
		$this->initConnection();
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

		} catch (Exception $e) {
		}
	}

	public static function getInstance()
	{
		if (self::$instance == null) self::$instance = new Database();
		return self::$instance;
	}

	public function migrate($migrations = [])
	{


		try {

			$schema = $this->connection->createSchemaManager()->introspectSchema();

			foreach ($migrations as $migrate) {
				$migrate->up($schema);
			}

			$queries = $schema->toSql($this->connection->getDatabasePlatform());

			foreach ($queries as $query) {
				$this->connection->executeQuery($query);
			}

		} catch (Exception $e) {
			var_dump($e);
			die(0);
		}
	}

	public function down($migrations = [])
	{
		try {

			$schema = $this->connection->createSchemaManager()->introspectSchema();

			foreach ($migrations as $migrate) {
				$migrate->down($schema);
			}

			$queries = $schema->toSql($this->connection->getDatabasePlatform());

			foreach ($queries as $query) {
				$this->connection->executeQuery($query);
			}
		} catch (Exception $e) {
			var_dump($e);
			die(0);
		}
	}

}