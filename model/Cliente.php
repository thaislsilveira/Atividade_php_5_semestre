<?php
namespace model;

class CLiente {
    private $id;
    private $nome;
    

    public function __construct($id=0, $nome=null)
    {
        $this ->id = $id;
        $this ->nome = $nome;
    }

    public function setId($id){
        $this ->id = $id;
    }

    public function setNome($nome){
        $this ->nome = $nome;
    }

    public function getId(){
        return $this->id;
    }

    public function getNome(){
        return $this->nome;
    }

}