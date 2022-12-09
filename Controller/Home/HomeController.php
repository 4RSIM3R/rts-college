<?php


namespace Controller\Home;


use Core\View;

class HomeController
{

	public function home()
	{
		View::render("home/index", []);
	}

}