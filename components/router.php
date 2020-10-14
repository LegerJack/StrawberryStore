<?php
class Router{
    private $routes;

    public function __construct(){
        //Указываем путь к роутам
        $routesPath = ROOT.'/config/routs.php';
        //Присваеваем свойству routes массив в файле routs
        $this->routes = include($routesPath);
    }

    private function getURI(){
         if (!empty($_SERVER['REQUEST_URI'])){
            return trim($_SERVER['REQUEST_URI'], '/');
        }
    }
    public function run(){
        // print_r($this->routes);
        // echo 'Class Router run';
        //Получаем строку запроса
        $uri = $this->getURI();
        //Проверяем наличие такого запроса в routs.php
        foreach ($this->routes as $pattern => $path){
            //Сравниваем $pattern и $uri
            if(preg_match("~$pattern~", $uri)){
                // Получаем внутренний путь из внешнего
                $internalRoute = preg_replace("~$pattern~", $path, $uri);

                //Определяем какой action и контроллер обрабатывают запросы
                $segment = explode('/', $internalRoute);

                $controllerName = array_shift($segment).'Controller';
                $controllerName = ucfirst($controllerName);

                $actionName = 'action'.ucfirst(array_shift($segment));


                $parameters = $segment;
                //Подключаем файлы класса контроллера
                $controllerFile = ROOT.'/controllers/'.
                $controllerName.'.php';

                if (file_exists($controllerFile)){
                    include_once($controllerFile);
                }

                //Создаем объект класса контроллера
                //Вызываем метод (action)
                $controllerObject = new $controllerName;
                $result = call_user_func_array(array($controllerObject,  $actionName), $parameters);

                if ($result != null){
                    break;
                } 
            }
        }
    }
}

?>