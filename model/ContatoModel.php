<?php

require_once 'Database.php';

class ContatoModel extends Database
{
    public $nome;
    public $telefone;
    public $email;

    function __construct()
    {
        parent::__construct();
    }

    public function update($id, $model)
    {
        $sql = "UPDATE contatos SET nome='{$model->nome}', telefone='{$model->telefone}', email='{$model->email}' WHERE id={$id}";
        return $this->query($sql);
    }

    public function delete($id)
    {
        $sql = "DELETE FROM contatos WHERE id={$id}";
        return $this->query($sql);
    }

    public function get($id)
    {
        $sql = "SELECT * FROM contatos WHERE id={$id}";
        $query = $this->query($sql);
        return mysqli_fetch_assoc($query);
    }
}
