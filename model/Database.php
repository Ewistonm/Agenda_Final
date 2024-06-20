<?php

class Database
{
    public $db_name;
    public $host;
    public $usuario;
    public $senha;
    public $port;
    public $conn;
    public $num_rows;

    public function __construct()
    {
        require_once 'config/database.php';
    
        $this->db_name = $db_name;
        $this->host = $host;
        $this->usuario = $usuario;
        $this->senha = $senha;
        $this->port = $port;

        $this->connect();
    }

    public function connect()
    {
        $this->conn = new mysqli($this->host, $this->usuario, $this->senha, $this->db_name, $this->port);
        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }

    public function query($sql)
    {
        return $this->conn->query($sql);
    }

    public function insert($model)
    {
        $sql = "INSERT INTO contatos (nome, telefone, email) VALUES (
            '{$model->nome}',
            '{$model->telefone}',
            '{$model->email}'
        )";
        return $this->query($sql);
    }

    public function list()
    {
        $sql = "select * from contatos";
        $query = $this->query($sql);
        $this->num_rows = $query->num_rows;
        return mysqli_fetch_all($query, MYSQLI_ASSOC);
    }

    public function get($id)
    {
    $id = (int) $id;  // Converte o id para um inteiro para evitar injeção de SQL
    $sql = "SELECT * FROM contatos WHERE id={$id}";
    $query = $this->query($sql);
    return mysqli_fetch_assoc($query);
    }


}