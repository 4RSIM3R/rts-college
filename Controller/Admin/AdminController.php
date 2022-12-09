<?php


namespace Controller\Admin;


use Core\View;

class AdminController
{

	public function getAllTenant()
	{
		View::render('admin/index', []);
	}

	public function viewAddTenant()
	{
		View::render('admin/add', []);
	}

	public function doAddTenant()
	{

	}

	public function viewEditTenant()
	{
		View::render('admin/edit', []);
	}

	public function doEditTenant()
	{

	}

	public function deleteTenant()
	{

	}

}