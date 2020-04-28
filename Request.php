<?php
class Request {
	public function get($name)
	{
		return $_REQUEST[$name];//Супер глобальный массив в url
	}
}

?>