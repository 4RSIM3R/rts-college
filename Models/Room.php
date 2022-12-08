<?php


namespace Models;


class Room extends BaseModel
{

	protected $table = "room";

	public function __construct()
	{
		parent::__construct($this->table);
	}

}