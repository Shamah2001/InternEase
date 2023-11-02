<?php


class App
{
	private $controller = 'Dashboard';
	private $method 	= 'index';

	private function splitURL()
	{
		$URL = $_GET['url'] ?? 'dashboard';
		$URL = explode("/", trim($URL,"/"));
		return $URL;	
	}
	

	public function loadController()
	{
		$URL = $this->splitURL();

		/** select controller **/
		// $filename = "../app/controllers/Home.php";
		// if(file_exists($filename))
		// {
		// 	require $filename;
		// 	$this->controller = ucfirst($URL[0]);
		// 	unset($URL[0]);
		// }else{

		// 	$filename = "../app/controllers/_404.php";
		// 	require $filename;
		// 	$this->controller = "_404";
		// }

		// $controller = new $this->controller;

		// /** select method **/
		// if(!empty($URL[1]))
		// {
		// 	if(method_exists($controller, $URL[1]))
		// 	{
		// 		$this->method = $URL[1];
		// 		unset($URL[1]);
		// 	}	
		// }

		// call_user_func_array([$controller,$this->method], $URL);

		$controllerName = ucfirst($URL[0]) ?? 'Dashboard';
		$methodName = $URL[1] ?? 'index'; // Default to index if no method is provided

		$controllerFile = "../app/controllers/$controllerName.php";

		if (file_exists($controllerFile)) {
			require $controllerFile;
			$controller = new $controllerName();

			if (method_exists($controller, $methodName)) {
				$params = array_slice($URL, 2); // Pass remaining URL parts as parameters
				call_user_func_array([$controller, $methodName], $params);
			} else {
				$this->loadErrorPage();
			}
		} else {
			$this->loadErrorPage();
		}
	}	

	private function loadErrorPage() {
        $filename = "../app/controllers/_404.php";
        
        if (file_exists($filename)) {
            require $filename;
            $controller = new _404();
            $controller->index();
        } else {
            // If _404 controller doesn't exist, provide a generic error message
            echo "404 - Page Not Found";
        }
    }

}


