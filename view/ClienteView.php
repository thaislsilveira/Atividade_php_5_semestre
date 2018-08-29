<?php
namespace view;

use model\Cliente;

class ClienteView{

    protected $model;
    protected $htmlFile;

    public function __construct( Cliente $model = null)
    {
        $this->model = is_null($model) ?new CLiente() : $model;
        $this->htmlFile = 'view/cliente_view.phtml';
    }

    private function drawTop(){
        require_once 'view/header.phtml';
    }

    private function drawFooter(){
        require_once 'view/footer.phtml';
    }

    public function show(){
        $this->drawHeader();
        require_once $this->htmlFile;
        $this->drawFooter();
    }

}