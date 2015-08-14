<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<?php
include_once 'controller/controller.php';
$model = new model();
$view = new view();
$controller = new controller($model, $view);
echo $controller->action();
?>
</body>
</html>