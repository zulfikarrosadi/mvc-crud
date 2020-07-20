<?php 

class App {
	private $controller = 'Home', $method = 'index', $params = [];

	public function __construct()
	{
		$url = $this->parseURL();
		if (file_exists('../app/controller/' . $url[0] . '.php')) {
			$this->controller = $url[0];
			unset($url[0]);
		}

		require_once '../app/controller/' . $this->controller. '.php';
		$this->controller = new $this->controller;
		
		if (!isset($url[1])) {
			$url[1] = $this->method;
			// var_dump($url[1]); die;
			unset($url[1]);
		} elseif (method_exists($this->controller, $url[1])) {
			$this->method = $url[1];
			// var_dump($url[1]); die;
			unset($url[1]);
		}
				
		if (!empty($url)) {
			$this->params = array_values($url);	
		}

		// var_dump($this->controller, $this->method); die;
		call_user_func_array([$this->controller, $this->method], $this->params);

	}
	public function parseURL()
	{
		if (isset($_GET['url'])) {
			$url = rtrim($_GET['url'], '/');
			$url = filter_var($url, FILTER_SANITIZE_URL);
			$url = explode('/', $url);
			return $url;
		}
	}
}