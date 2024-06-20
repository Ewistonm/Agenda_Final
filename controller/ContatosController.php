<?php

require_once 'model/ContatoModel.php';
class ContatosController 
{
    //Singleton
    public $model;

    function __construct()
    {
        $this->model = new ContatoModel();
    }

    public function listar()
    {
       $contatos = $this->model->list();

    //   var_dump($contatos); die();
       require_once 'view/listar.php';
    }

    public function adicionar()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->model->nome = $_POST['nome'];
            $this->model->telefone = $_POST['telefone'];
            $this->model->email = $_POST['email'];
            $this->model->insert($this->model);
            header('Location: index.php');
        } else {
            require_once 'view/criar.php';
        }
    }

    public function editar($id)
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->model->nome = $_POST['nome'];
            $this->model->telefone = $_POST['telefone'];
            $this->model->email = $_POST['email'];
            $this->model->update($id, $this->model);
            header('Location: index.php');
        } else {
            $contato = $this->model->get($id);
            if ($contato) {
                require_once 'view/editar.php';
            } else {
                echo "Contato não encontrado.";
            }
        }
    }


    public function deletar($id)
    {
        $this->model->delete($id);
        header('Location: index.php');
    }

    public function mostrar($id)
    {
        $contato = $this->model->get($id);
        require_once 'view/mostrar.php';
    }
}