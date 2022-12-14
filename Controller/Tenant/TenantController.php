<?php


namespace Controller\Tenant;


use Core\View;
use Models\Room;
use Models\Tenant;

class TenantController
{

	public function getAllTenant()
	{
		$model = new Tenant();
		View::render("tenant/index", ["result" => $model->all()]);
	}

	public function viewAddTenant()
	{

		View::render("tenant/add", []);
	}

	public function doAddTenant($request, $post)
	{
		$model = new Tenant();
		$post['is_internal'] = isset($post['is_internal']) ? 1 : 0;
		$result = $model->insert($post);
		header(sprintf('location: %s%s', $_ENV['BASE_URL'], "admin/tenant"));
	}

	public function viewEditTenant()
	{

	}

	public function doEditTenant()
	{

	}

	public function deleteTenant()
	{

	}

}