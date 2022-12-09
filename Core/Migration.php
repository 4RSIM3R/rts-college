<?php


namespace Core;


use Doctrine\DBAL\Schema\Schema;

interface Migration
{

	public function up(Schema $schema);
	public function down(Schema $schema);

}