<?php


namespace Middleware;


class AuthMiddleware implements Middleware
{

	function before()
	{
		if (!$_SESSION['user']) {
			header('location: /rts/login');
			exit(0);
		}

	}
}