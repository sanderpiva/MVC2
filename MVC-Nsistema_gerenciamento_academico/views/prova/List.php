<?php
// views/prova/List.php

// The controller should pass $provas to this view.
// Messages from successful operations can be passed via GET parameters and displayed here.
$message = isset($_GET['message']) ? htmlspecialchars($_GET['message']) : '';
$error = isset($_GET['erros']) ? htmlspecialchars($_GET['erros']) : '';
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Lista de Provas</title>
    <link rel="stylesheet" href="public/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
             integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg=="
             crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body class="servicos_forms">
    <h2>Lista de Provas</h2>

    <?php if ($message): ?>
        <p style="color: green;"><?= $message ?></p>
    <?php endif; ?>
    <?php if ($error): ?>
        <p style="color: red;"><?= $error ?></p>
    <?php endif; ?>

    <table border="1" cellpadding="5" cellspacing="0">
        <thead>
            <tr>
                <th>Código de prova</th>
                <th>Tipo</th>
                <th>Disciplina</th>        <th>Conteúdo</th>
                <th>Data</th>
                <th>Professor</th>         <th>Código da Disciplina</th> <th>Registro do Professor</th> <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php if (empty($provas)): ?>
                <tr>
                    <td colspan="9">Nenhuma prova encontrada.</td>
                </tr>
            <?php else: ?>
                <?php foreach ($provas as $prova): ?>
                    <tr>
                        <td><?= htmlspecialchars($prova['codigoProva']) ?></td>
                        <td><?= htmlspecialchars($prova['tipo_prova']) ?></td>
                        <td><?= htmlspecialchars($prova['nome_disciplina'] ?? 'N/A') ?></td>
                        <td><?= htmlspecialchars($prova['conteudo']) ?></td>
                        <td><?= htmlspecialchars($prova['data_prova']) ?></td>
                        <td><?= htmlspecialchars($prova['nome_professor'] ?? 'N/A') ?></td>
                        <td><?= htmlspecialchars($prova['codigo_disciplina'] ?? 'N/A') ?></td>
                        <td><?= htmlspecialchars($prova['registro_professor'] ?? 'N/A') ?></td>
                        <td id='buttons-wrapper'>
                            <a href="index.php?controller=prova&action=showEditForm&id=<?= htmlspecialchars($prova['id_prova']) ?>">
                                <i class='fa-solid fa-pen'></i> Atualizar
                            </a>
                            <a href="index.php?controller=prova&action=delete&id=<?= htmlspecialchars($prova['id_prova']) ?>"
                               onclick="return confirm('Tem certeza que deseja excluir a prova com ID: <?= htmlspecialchars($prova['id_prova']) ?>?');">
                                <i class='fa-solid fa-trash'></i> Excluir
                            </a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php endif; ?>
        </tbody>
    </table>

    <br>
    <a href="index.php?controller=professor&action=showServicesPage">Voltar aos Serviços</a>
    <hr>
    <a href="index.php?controller=auth&action=logout" style="margin-left:20px;">Logout →</a>

</body>
<footer>
    <p>Desenvolvido por Juliana e Sander</p>
</footer>
</html>