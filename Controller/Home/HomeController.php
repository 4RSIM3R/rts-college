<?php


namespace Controller\Home;


use Core\View;
use Models\Schedule;

class HomeController
{

	public function home()
	{
		$model = new Schedule();

		$roomsJoin = ["join" => "rooms", "alias" => "r", "condition" => "s.room_id = r.id"];
		$tenantJoin = ["join" => "tenants", "alias" => "t", "condition" => "s.tenant_id = t.id"];

		$data = $model->join(
			"s",
			['r.name as room_name', 'r.location as location', 's.date as date', 's.start_at as start_at', 's.end_at as end_at', 't.name as tenant_name', 't.is_internal as internal'],
			[$roomsJoin, $tenantJoin]
		);

		View::render("home/index", ["result" => $data]);
	}

}