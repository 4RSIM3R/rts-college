<?php


namespace Core;


use Doctrine\DBAL\Connection;

interface Seeder
{

	public function create(Connection $connection);

}