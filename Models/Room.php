<?php


namespace Models;


class Room extends BaseModel
{

	protected $table = "rooms";

	public function __construct()
	{
		parent::__construct($this->table);
	}

}