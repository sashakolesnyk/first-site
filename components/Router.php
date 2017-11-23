<?php
class Router
{
	private $routes;

	public function __construct()
	{
		$routesPath = ROOT.'/config/routes.php';
		$this->routes = include($routesPath);
	}

	/**
	 * Return request string
	 * @return string
	 */
	private function getURI()
	{
		if (!empty($_SERVER['REQUEST_URI']))
		{
			return trim($_SERVER['REQUEST_URI'], '/');
		}
	}


	public function run()
	{
		// get request string
		$uri = $this->getURI();
		
		// check this request in routes.php
		foreach ($this->routes as $uriPattern => $path)
		{
			// compare key and request from request string with our routes
			if (preg_match("#$uriPattern#", $uri))
			{
				// get path with arguments and replace them with values
				$internalRoute = preg_replace("~$uriPattern~", $path, $uri);

				// choose controller and action adn arguments from received array
				$segments = explode('/', $internalRoute); // array to string

				// if we have coincidence with routes, get names of controller, action, and parameters in array
				$controllerName = array_shift($segments).'Controller';
				$controllerName = ucfirst($controllerName);
				$actionName = 'action'.ucfirst(array_shift($segments));
			
				$parameters = $segments; // remains in array are parameters from request string

				// include controller-file
				$controllerFile = ROOT.'/controllers/'.$controllerName.'.php';

				if (file_exists($controllerFile))
				{
					include_once($controllerFile);
				}

				// create an object, start method
				$controllerObject = new $controllerName;

				
				$result = call_user_func_array(array($controllerObject, $actionName), $parameters);


				if ($result != null)
				{
					break;
				}
			}
		}
	}


}