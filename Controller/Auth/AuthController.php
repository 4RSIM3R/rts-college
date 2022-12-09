<?php


namespace Controller\Auth;


use Core\View;

class AuthController
{

	public function viewLogin()
	{

		View::render('auth/login', []);

	}

	public function doLogin()
	{

	}

}