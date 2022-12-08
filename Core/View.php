<?php


namespace Core;


class View
{

	public static function render($view, $data)
	{
		require_once "./views/layouts/header.php";
		require_once "./views/" . $view . ".php";
		require_once "./views/layouts/footer.php";
	}


}