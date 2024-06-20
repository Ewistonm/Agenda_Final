<?php 
require_once 'view/layout/header.php';

// Certifique-se de que a variável $contato está disponível e contém os dados do contato a ser editado
?>

<h2>Editar Contato</h2>

<form method="POST" action="">
    <table>
        <tbody>
            <tr>
                <td>Nome</td>
                <td><input type="text" name="nome" value="<?= $contato['nome'] ?? '' ?>"></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="text" name="email" value="<?= $contato['email'] ?? '' ?>"></td>
            </tr>
            <tr>
                <td>Telefone</td>
                <td><input type="text" name="telefone" value="<?= $contato['telefone'] ?? '' ?>"></td>
            </tr>
            <tr>
                <td colspan="2">
                    <button type="submit">Salvar</button>
                </td>
            </tr>
        </tbody>
    </table>
</form>

<?php 
require_once 'view/layout/footer.php';
?>
