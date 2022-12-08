<?php


namespace Models;


use Core\Database;
use Doctrine\DBAL\Exception;

class BaseModel
{

	protected $table;

	/** @var Database|null */
	protected $database = null;

	public function __construct($table)
	{
		$this->table = $table;
		$this->database = Database::getInstance();
	}

	public function all()
	{
		try {
			$statement = $this->database->connection->prepare("SELECT * FROM {$this->table}");
			return $statement->executeQuery()->fetchAllAssociative();
		} catch (Exception $e) {
			return $e;
		}
	}

	public function detail($condition, $identifier)
	{
		try {
			$statement = $this->database->connection->prepare("SELECT * FROM {$this->table} WHERE {$identifier} = ?");
			$statement->bindValue(1, $condition);
			return $statement->executeQuery()->fetchAssociative();
		} catch (Exception $e) {
			return $e;
		}
	}

	public function insert(array $payload = [])
	{
		try {
			return $this->database->connection->insert($this->table, $payload);
		} catch (Exception $e) {
			return $e;
		}
	}

	public function update(array $payload = [], array $condition = [])
	{
		try {
			return $this->database->connection->update($this->table, $payload, $condition);
		} catch (Exception $e) {
			return $e;
		}
	}

	public function delete(array $condition = [])
	{
		try {
			return $this->database->connection->delete($this->table, $condition);
		} catch (Exception $e) {
			return $e;
		}
	}

}