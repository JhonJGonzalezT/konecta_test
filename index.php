<?php
    require_once 'settings/settings.php';
    require_once 'libs/routes.php';
    require_once 'settings/connection.php';
    require_once 'controllers/EmployeeController.php';

    if(isset($_GET['controller'])){
        $controller = upController($_GET['controller']);
        if(isset($_GET['action'])){
            if(isset($_GET['id'])){
                upAction( $controller, $_GET['action'], $_GET['id']);
            }else{
                upAction( $controller, $_GET['action']);
            }
        }else{
            upAction( $controller, MAIN_ACTION);
        }
    }else{
        $controller = upController('Employee');
        $action = MAIN_ACTION;
        $controller->$action();
    }
