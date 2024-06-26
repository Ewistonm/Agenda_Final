<?php 
require_once 'view/layout/header.php'; ?>
    <h2>Buscar Contato</h2>
            <form method="POST" action="">
            <table>
                <tbody>
                    <tr>
                        <td>Nome</td>
                        <td><input type="text" name="nome" value="<?= $contato['nome'] ?? '' ?>"></td>
                    </tr>
                    
                    <tr>
                        <td colspan="2">
                            <button type="submit">Buscar</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </form>

<?php
require_once 'view/layout/footer.php';