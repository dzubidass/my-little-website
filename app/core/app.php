<?php

class App {

    protected $controller = 'Home';
    protected $method = 'index';
    protected $params = [];

    public function __construct() {
        $url = self::splitUrl();

        if (file_exists('../app/controllers/' . ucfirst(strtolower($url[0])) . '.php')) {
            $this->controller = ucfirst(strtolower($url[0]));
            unset($url[0]);
        } else {
            require_once '../app/controllers/' . $this->controller . '.php';
        }
        require_once '../app/controllers/' . $this->controller . '.php';

        $this->controller = new $this->controller;

        if (isset($url[1])) {
            if (method_exists($this->controller, $url[1])) {
                $this->method = $url[1];
                unset($url[1]);
            }
        }

        $this->params = array_values($url);
        call_user_func_array([$this->controller, $this->method], $this->params);
    }

    /*
     *  Funkcia splitUrl() vypise do pola [] hodnoty zadane do url adresy (controler/ method/ params[])
     */

    public static function splitUrl() {
        if (isset($_SERVER['REQUEST_URI'])) {
            return explode('/', trim($_SERVER['REQUEST_URI'], '/'));
        }
    }

}
