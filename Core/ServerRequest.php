<?php


namespace Core;


class ServerRequest
{

	public $path = null;
	public $method = null;
	public $params = [];

	public function __construct(array $server)
	{
		$this->path = isset($server['PATH_INFO']) ? $server['PATH_INFO'] : "/";
		$this->method = $server['REQUEST_METHOD'];
		parse_str($server['QUERY_STRING'], $this->params);
	}

}