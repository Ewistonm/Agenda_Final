<?php
require_once './controller/ContatosController.php';
$contatosController = new ContatosController();

$acao = $_GET['acao'] ?? 'listar';

switch ($acao) {
    case 'adicionar':
        $contatosController->adicionar();
        break;
    case 'editar':
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $contatosController->editar($id);
        } else {
            // Lida com o caso onde o id não é fornecido
            echo "ID não fornecido.";
        }
        break;
    case 'mostrar':{
        //if (isset($_GET['id'])) {
        //    $id = $_GET['id'];
        //    $contatosController->mostrar($id);
        //} else {
        //    // Lida com o caso onde o id não é fornecido
        //    echo "Página em Contrução";
            require_once 'view/mostrar.php';
        }
        break;
    case 'deletar':
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $contatosController->deletar($id);
        } else {
            // Lida com o caso onde o id não é fornecido
            echo "ID não fornecido.";
            
        }
        break;
    default:
        $contatosController->listar();
        break;
}
