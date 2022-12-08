<?php


namespace Core;


class Router
{

	public static $routes = [];

	public static function get($path, $controller, $function, $middlewares)
	{
		self::$routes[] = [
			"path" => $path,
			"method" => "GET",
			"controller" => $controller,
			"function" => $function,
			'middlewares' => $middlewares
		];
	}

	public static function post($path, $controller, $function, $middlewares)
	{
		self::$routes[] = [
			"path" => $path,
			"method" => "POST",
			"controller" => $controller,
			"function" => $function,
			'middlewares' => $middlewares
		];
	}

	public static function run()
	{
		$request = new ServerRequest($_SERVER);

		$routes = array_column(self::$routes, null, 'path');

		if (!isset($routes[$request->path])) {
			echo "404 Not Found";
		} else {
			$routes = $routes[$request->path];

			if ($routes['method'] != $request->method) {
				header('Location: 405.html');
			}

			$controller = new $routes['controller'];
			$function = $routes['function'];

			call_user_func_array([$controller, $function], [$request]);
		}

	}

}