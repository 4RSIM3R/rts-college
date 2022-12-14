<?php


namespace Controller\Admin;


use Core\View;
use Models\Room;
use Models\Schedule;
use Models\Tenant;

class AdminController
{

	public function getAllSchedule()
	{
		$model = new Schedule();

		$roomsJoin = ["join" => "rooms", "alias" => "r", "condition" => "s.room_id = r.id"];
		$tenantJoin = ["join" => "tenants", "alias" => "t", "condition" => "s.tenant_id = t.id"];

		$data = $model->join(
			"s",
			['r.name as room_name', 'r.location as location', 's.date as date', 's.start_at as start_at', 's.end_at as end_at', 't.name as tenant_name', 't.is_internal as internal'],
			[$roomsJoin, $tenantJoin]
		);
		View::render('admin/index', ["result" => $data]);
	}

	public function viewAddSchedule()
	{
		$rooms = new Room();
		$tenants = new Tenant();
		View::render("admin/add", ["rooms" => $rooms->all(), "tenants" => $tenants->all()]);
	}

	public function doAddSchedule($request, $post)
	{
		$model = new Schedule();
		$result = $model->insert($post);
		header(sprintf('location: %s%s', $_ENV['BASE_URL'], "admin"));
	}

	public function viewEditSchedule()
	{
		View::render('admin/edit', []);
	}

	public function doEditSchedule()
	{

	}

	public function deleteSchedule()
	{

	}

}