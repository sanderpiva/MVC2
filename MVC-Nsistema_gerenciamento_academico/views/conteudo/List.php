<?php
// views/conteudo/List.php

// The controller should pass $conteudos to this view.
// Messages from successful operations can be passed via GET parameters and displayed here.
$message = isset($_GET['message']) ? htmlspecialchars($_GET['message']) : '';
$error = isset($_GET['erros']) ? htmlspecialchars($_GET['erros']) : '';
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Lista de Conteúdos</title>
    <link rel="stylesheet" href="public/css/style.css"> <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
             integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg=="
             crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body class="servicos_forms">
    <h2>Lista de Conteúdos</h2>

    <?php if ($message): ?>
        <p style="color: green;"><?= $message ?></p>
    <?php endif; ?>
    <?php if ($error): ?>
        <p style="color: red;"><?= $error ?></p>
    <?php endif; ?>

    <table border="1" cellpadding="5" cellspacing="0">
        <thead>
            <tr>
                <th>Código</th>
                <th>Título</th>
                <th>Descrição</th>
                <th>Data</th>
                <th>Professor</th>         <th>Disciplina</th>        <th>Tipo</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php if (empty($conteudos)): ?>
                <tr>
                    <td colspan="7">Nenhum conteúdo encontrado.</td> </tr>
            <?php else: ?>
                <?php foreach ($conteudos as $conteudo): ?>
                    <tr>
                        <td><?= htmlspecialchars($conteudo['codigoConteudo']) ?></td>
                        <td><?= htmlspecialchars($conteudo['titulo']) ?></td>
                        <td><?= htmlspecialchars($conteudo['descricao']) ?></td>
                        <td><?= htmlspecialchars($conteudo['data_postagem']) ?></td>
                        <td><?= htmlspecialchars($conteudo['professor'] ?? 'N/A') ?></td>   <td><?= htmlspecialchars($conteudo['nome_disciplina'] ?? 'N/A') ?></td> <td><?= htmlspecialchars($conteudo['tipo_conteudo']) ?></td>
                        <td id='buttons-wrapper'>
                            <a href="index.php?controller=conteudo&action=showEditForm&id=<?= htmlspecialchars($conteudo['id_conteudo']) ?>">
                                <i class='fa-solid fa-pen'></i> Atualizar
                            </a>
                            <a href="index.php?controller=conteudo&action=delete&id=<?= htmlspecialchars($conteudo['id_conteudo']) ?>"
                               onclick="return confirm('Tem certeza que deseja excluir o conteúdo com ID: <?= htmlspecialchars($conteudo['id_conteudo']) ?>?');">
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
    <a href="?logout=true" style="margin-left:20px;">Logout →</a>

    <script>
        function atualizarConteudo(id_conteudo) {
            window.location.href = "index.php?controller=conteudo&action=showEditForm&id=" + id_conteudo;
        }

        function excluirConteudo(id_conteudo) {
            const confirmar = confirm("Tem certeza que deseja excluir o conteúdo: " + id_conteudo + "?");
            if (confirmar) {
                window.location.href = "index.php?controller=conteudo&action=delete&id=" + id_conteudo;
            }
        }
    </script>
</body>
<footer>
    <p>Desenvolvido por Juliana e Sander</p>
</footer>
</html>