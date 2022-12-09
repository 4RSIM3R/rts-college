<?php


namespace Middleware;


class AuthMiddleware implements Middleware
{

	function before()
	{

		session_start();
		if (!$_SESSION['user']) {
			header('location: /rts/login');
			exit(0);
		}

	}
}