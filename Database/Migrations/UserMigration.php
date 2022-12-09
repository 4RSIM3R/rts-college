<?php


namespace Database\Migrations;


use Core\Migration;
use Doctrine\DBAL\Exception;
use Doctrine\DBAL\Schema\Schema;
use Doctrine\DBAL\Schema\SchemaException;

class UserMigration implements Migration
{

	/**
	 * @throws SchemaException
	 * @throws Exception
	 */
	public function up(Schema $schema)
	{
		$table = $schema->createTable('users');
		$table->addColumn("id", "integer", ["unsigned" => true]);
		$table->addColumn("email", "string");
		$table->addColumn("password", "string");
		$table->setPrimaryKey(["id"]);
	}

	/**
	 * @throws SchemaException
	 */
	public function down(Schema $schema)
	{
		$schema->dropTable('users');
	}
}