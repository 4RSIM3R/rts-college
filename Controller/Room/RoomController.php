<?php


namespace Controller\Room;


use Core\View;
use Models\Room;

class RoomController
{

	protected Room $model;

	public function __construct()
	{
		$this->model = new Room();
	}

	public function getAllRoom()
	{
		$model = new Room();
		View::render("room/index", ["result" => $this->model->all()]);
	}

	public function viewAddRoom()
	{
		View::render("room/add", []);
	}

	public function doAddRoom($request, $post)
	{
		$this->model->insert($post);
		header(sprintf('location: %s%s', $_ENV['BASE_URL'], "admin/room"));
	}

	public function viewEditRoom($request, $post)
	{
		$id = $request->params["id"];
		$data = $this->model->detail("id", $id);
		View::render("room/edit", $data);
	}

	public function doEditRoom($request, $post)
	{
		$id = $request->params["id"];
		$result = $this->model->update($post, ["id" => $id]);
		header(sprintf('location: %s%s', $_ENV['BASE_URL'], "admin/room"));
	}

	public function deleteRoom($request, $post)
	{
		$id = $request->params["id"];
		$result = $this->model->delete(["id" => $id]);
		header(sprintf('location: %s%s', $_ENV['BASE_URL'], "admin/room"));
	}

}