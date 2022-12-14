<?php


namespace Controller\Auth;


use Core\View;
use Models\Users;

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

		$model = new Users();

		$user = $model->detail("email", $email);

		if (!$user) {
			// TODO : Prompt user login failed here
			View::render('auth/login', []);
		}

		if (!password_verify($password, $user['password'])) {
			View::render('auth/login', []);
		}

		$_SESSION["user"] = $user['email'];

		header(sprintf('location: %s%s', $_ENV['BASE_URL'], "admin"));


	}

}