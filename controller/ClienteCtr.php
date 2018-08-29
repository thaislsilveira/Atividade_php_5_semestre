<?php

namespace controller;

use model\Cliente;

class ClienteCtr{
    private $get;
    private $post;


    public function __construct()
    {
       $this->get = isset($_GET) ? $_GET : null;
       $this->post = isset($_POST) ? $_POST : null;
    }

    public Function viewToModel(){
        if(!is_null($this->post)){
            return new Cliente($this->post['id'], $this->post['nome']);
        }
    }
    public function save(){
        $cliente = $this->viewToModel();

        echo "<h2> Dados salvos com sucesso!! </h2>";
        echo "<p>{$cliente->getId()} - {$cliente->getNome()}</p>";
    }
}