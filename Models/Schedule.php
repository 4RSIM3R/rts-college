<?php


namespace Models;


class Schedule extends BaseModel
{

	protected $table = "schedules";

	public function __construct()
	{
		parent::__construct($this->table);
	}

}