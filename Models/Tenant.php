<?php


namespace Models;


class Tenant extends BaseModel
{

	protected $table = "tenants";

	public function __construct()
	{
		parent::__construct($this->table);
	}

}