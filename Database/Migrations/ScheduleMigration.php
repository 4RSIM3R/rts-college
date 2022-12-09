<?php


namespace Database\Migrations;


use Core\Migration;
use Doctrine\DBAL\Schema\Schema;
use Doctrine\DBAL\Schema\SchemaException;

class ScheduleMigration implements Migration
{

	/**
	 * @throws SchemaException
	 */
	public function up(Schema $schema)
	{
		$table = $schema->createTable('schedules');
		$table->addColumn("id", "integer", ["unsigned" => true])->setAutoincrement(true);
		$table->addColumn("tenant_id", "integer", ["unsigned" => true]);
		$table->addColumn("room_id", "integer", ["unsigned" => true]);
		$table->addColumn("date", "date");
		$table->addColumn("start_at", "time");
		$table->addColumn("end_at", "time");
		$table->addForeignKeyConstraint('tenants', ['tenant_id'], ['id'], ["onUpdate" => "CASCADE", "onDelete" => "CASCADE"]);
		$table->addForeignKeyConstraint('rooms', ['room_id'], ['id'], ["onUpdate" => "CASCADE", "onDelete" => "CASCADE"]);
		$table->setPrimaryKey(["id"]);
	}

	/**
	 * @throws SchemaException
	 */
	public function down(Schema $schema)
	{
		$schema->dropTable('schedules');
	}
}