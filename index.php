<?php
use model\Cliente;
use view\ClienteView;


require_once 'autoload.php';

$cli = new Cliente (1, 'Bruce Wayne');

$view = new ClienteView($cli);


$view->show();