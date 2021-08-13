<?php
    function upController ($controller){
        $className = ucwords(strtolower($controller)).'Controller';
        $path = 'controllers/'.$className.'.php';
        if (!is_file($path)) {
            $path = 'controllers/'.MAIN_CONTROLLER.'Controller.php';
        }
        require_once $path;
        return new $className();
    }
    function upAction($controller, $action, $id = null){
        if (!isset($action) || !method_exists($controller, $action)) {
            $action = MAIN_ACTION;
        }
        if ($id == null){
            $controller->$action();
        }else{
            $controller->$action($id);
        }


}