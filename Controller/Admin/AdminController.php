<?php


namespace Controller\Admin;


use Core\View;
use Models\Room;
use Models\Schedule;
use Models\Tenant;

class AdminController
{
	protected Schedule $model;
	protected Room $room;
	protected Tenant $tenant;

	public function __construct()
	{
		$this->model = new Schedule();
		$this->room = new Room();
		$this->tenant = new Tenant();
	}

	public function getAllSchedule()
	{

		$roomsJoin = ["join" => "rooms", "alias" => "r", "condition" => "s.room_id = r.id"];
		$tenantJoin = ["join" => "tenants", "alias" => "t", "condition" => "s.tenant_id = t.id"];

		$data = $this->model->join(
			"s",
			['r.name as room_name', 'r.location as location', 's.id as id', 's.date as date', 's.start_at as start_at', 's.end_at as end_at', 't.name as tenant_name', 't.is_internal as internal'],
			[$roomsJoin, $tenantJoin]
		);
		View::render('admin/index', ["result" => $data]);
	}

	public function viewAddSchedule()
	{
		View::render("admin/add", ["rooms" => $this->room->all(), "tenants" => $this->tenant->all()]);
	}

	public function doAddSchedule($request, $post)
	{
		$result = $this->model->insert($post);
		header(sprintf('location: %s%s', $_ENV['BASE_URL'], "admin"));
	}

	public function viewEditSchedule($request, $post)
	{
		$id = $request->params["id"];
		$data = $this->model->detail("id", $id);
		View::render('admin/edit', ["data" => $data, "rooms" => $this->room->all(), "tenants" => $this->tenant->all()]);
	}

	public function doEditSchedule($request, $post)
	{
		$id = $request->params["id"];
		$result = $this->model->update($post, ["id" => $id]);
		header(sprintf('location: %s%s', $_ENV['BASE_URL'], "admin"));
	}

	public function deleteSchedule($request, $post)
	{
		$id = $request->params["id"];
		$result = $this->model->delete(["id" => $id]);
		header(sprintf('location: %s%s', $_ENV['BASE_URL'], "admin"));
	}

}