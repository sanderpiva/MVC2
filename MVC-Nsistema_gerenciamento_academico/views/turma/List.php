<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Lista de Turmas</title>
    <link rel="stylesheet" href="public/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
          integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg=="
          crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body class="servicos_forms">
<h2>Lista de Turmas</h2>

<table border="1" cellpadding="5" cellspacing="0">
    <thead>
        <tr>
            <th>Código</th>
            <th>Nome</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($turmas as $turma): ?>
            <tr>
                <td><?= htmlspecialchars($turma['codigoTurma']) ?></td>
                <td><?= htmlspecialchars($turma['nomeTurma']) ?></td>
                <td>
                    <a href="index.php?controller=turma&action=showEditForm&id=<?= $turma['id_turma'] ?>">Editar</a>
                    
                    <a href="index.php?controller=turma&action=deleteTurma&id=<?= $turma['id_turma'] ?>" onclick="return confirm('Tem certeza ? id = ' + '<?= $turma['id_turma'] ?>');">Excluir</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<br>
<a href="index.php?controller=professor&action=showServicesPage">Servicos</a>
</body>
</html>
