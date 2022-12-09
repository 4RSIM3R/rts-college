<?php


namespace Models;


class Tenant extends BaseModel
{

	protected $table = "rooms";

	public function __construct()
	{
		parent::__construct($this->table);
	}

}