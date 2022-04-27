<?php

class Controller {

    protected static function viewPage($view) {
        if (file_exists('../app/views/' . $view . '.php')) {
            include '../app/views/' . $view . '.php';
        } else {
            include '../app/views/notFound.php';
        }
    }

    protected static function loadModel($model) {
        if (file_exists('../app/views/' . $model . '.php')) {

            include '../app/views/' . $model . '.php';

            return $model = new $model();
        }
        return false;
    }

}

