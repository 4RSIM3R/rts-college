<?php


namespace Controller\Room;


use Core\View;
use Models\Room;

class RoomController
{

	public function getAllRoom()
	{
		$model = new Room();
		View::render("room/index", ["result" => $model->all()]);
	}

	public function viewAddRoom()
	{
		View::render("room/add", []);
	}

	public function doAddRoom($request, $post)
	{
		$model = new Room();
		$model->insert($post);
		header(sprintf('location: %s%s', $_ENV['BASE_URL'], "admin/room"));
	}

	public function viewEditRoom()
	{

	}

	public function doEditRoom()
	{

	}

	public function deleteRoom()
	{

	}

}