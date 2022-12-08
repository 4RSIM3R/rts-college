<?php


namespace Models;


class Tenant extends BaseModel
{

	protected $table = "room";

	public function __construct()
	{
		parent::__construct($this->table);
	}

}