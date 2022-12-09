<?php


namespace Database\Migrations;


use Core\Migration;
use Doctrine\DBAL\Schema\Schema;
use Doctrine\DBAL\Schema\SchemaException;

class RoomMigrations implements Migration
{

	/**
	 * @throws SchemaException
	 */
	public function up(Schema $schema)
	{
		$table = $schema->createTable('rooms');
		$table->addColumn("id", "integer", ["unsigned" => true])->setAutoincrement(true);
		$table->addColumn("name", "string");
		$table->addColumn("location", "string");
		$table->setPrimaryKey(["id"]);
	}

	/**
	 * @throws SchemaException
	 */
	public function down(Schema $schema)
	{
		$schema->dropTable('rooms');
	}
}