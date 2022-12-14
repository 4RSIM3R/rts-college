<?php


namespace Models;


class Users extends BaseModel
{

	protected $table = "users";

	public function __construct()
	{
		parent::__construct($this->table);
	}

}