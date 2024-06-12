<?php

    // router.php
function router($controller, $action) {
    $controller_file = "controllers/{$controller}_controller.php";
    
    if (file_exists($controller_file)) {
        include_once $controller_file;
        
        $action_function = "{$controller}_{$action}";
        
        if (function_exists($action_function)) {
            
        //      if(isset($data)) {
        //       $action_function($data);
        // }else{
            $action_function();
        // }
        } else {
            echo "Action '{$action}' not found.";
        }
    } else {
        echo "Controller '{$controller}' not found.";
    }
}
function router_2($controller, $action,$id) {
    $controller_file = "controllers/{$controller}_controller.php";
    
    if (file_exists($controller_file)) {
        include_once $controller_file;
        
        $action_function = "{$controller}_{$action}";
    

        if (function_exists($action_function)) {
            $action_function($id);
        } else {
            echo "Action '{$action}' not found.";
        }
    } else {
        echo "Controller '{$controller}' not found.";
    }
}
?> 