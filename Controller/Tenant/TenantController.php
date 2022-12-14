<?php


namespace Controller\Tenant;


use Core\View;
use Models\Room;
use Models\Tenant;

class TenantController
{

	protected Tenant $model;

	public function __construct()
	{
		$this->model = new Tenant();
	}

	public function getAllTenant()
	{
		View::render("tenant/index", ["result" => $this->model->all()]);
	}

	public function viewAddTenant()
	{
		View::render("tenant/add", []);
	}

	public function doAddTenant($request, $post)
	{
		$model = new Tenant();
		$post['is_internal'] = isset($post['is_internal']) ? 1 : 0;
		$result =  $this->model->insert($post);
		header(sprintf('location: %s%s', $_ENV['BASE_URL'], "admin/tenant"));
	}

	public function viewEditTenant($request, $post)
	{
		$id = $request->params["id"];
		$data = $this->model->detail("id", $id);
		View::render("tenant/edit", $data);
	}

	public function doEditTenant($request, $post)
	{
		$id = $request->params["id"];
		$post['is_internal'] = isset($post['is_internal']) ? 1 : 0;
		$result = $this->model->update($post, ["id" => $id]);
		header(sprintf('location: %s%s', $_ENV['BASE_URL'], "admin/tenant"));
	}

	public function deleteTenant($request, $post)
	{
		$id = $request->params["id"];
		$result = $this->model->delete(["id" => $id]);
		header(sprintf('location: %s%s', $_ENV['BASE_URL'], "admin/tenant"));
	}

}