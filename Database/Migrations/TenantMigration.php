<?php


namespace Database\Migrations;


use Core\Migration;
use Doctrine\DBAL\Schema\Schema;
use Doctrine\DBAL\Schema\SchemaException;

class TenantMigration implements Migration
{

	/**
	 * @throws SchemaException
	 */
	public function up(Schema $schema)
	{
		$table = $schema->createTable('tenants');
		$table->addColumn("id", "integer", ["unsigned" => true])->setAutoincrement(true);
		$table->addColumn("name", "string");
		$table->addColumn("pic_name", "string");
		$table->addColumn("is_internal", "boolean");
		$table->addColumn("phone_number", "string");
		$table->setPrimaryKey(["id"]);
	}

	/**
	 * @throws SchemaException
	 */
	public function down(Schema $schema)
	{
		$schema->dropTable('tenants');
	}
}