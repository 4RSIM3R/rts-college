<?php


namespace Controller\Auth;


use Core\View;

class AuthController
{

	public function viewLogin($request, $post)
	{
		View::render('auth/login', []);
	}

	public function doLogin($request, $post)
	{
		$email = $post['email'];
		$password = $post['password'];

		// Auth Attempt Here
	}

}