<?php require_once 'view/layout/header.php'; ?>
    <h2>Lista de Contato</h2>
        <table>
            <thead>
                <th>Nome</th>
                <th>Telefone</th>
                <th>Email</th>
                <th> Ações</th>
            </thead>
            <tbody>
                <?php foreach ($contatos as $key => $contato) : ?>
                    <tr>
                        <td><?= $contato['nome'] ?> </td>
                        <td><?= $contato['telefone'] ?></td>
                        <td><?= $contato['email'] ?></td>
                        <td>
                            <div class="container">
                                <a href="index.php?acao=editar&id=<?= $contato['id'] ?>"><img src="view\icon\edit.ico" alt="" width="16" height="16"> </a>
                                <a href="index.php?acao=deletar&id=<?= $contato['id'] ?>" onclick="return confirm('Tem certeza que deseja deletar este contato?')"><img src="view\icon\trash.ico" alt="" width="16" height="16"> </a>
                            </div>
                        </td>
                    </tr>
                    <?php endforeach ?>
            </tbody>
        </table>


        <?php require_once 'view/layout/footer.php'; ?>