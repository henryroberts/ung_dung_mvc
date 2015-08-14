<?php
include_once 'controller/controller.php';
$model = new model();
$view = new view();
$controller = new controller($model, $view);
echo $controller->action();
?>