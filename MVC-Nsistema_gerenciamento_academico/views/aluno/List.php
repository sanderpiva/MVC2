<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Consulta Aluno</title>
    <link rel="stylesheet" href="public/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
          integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg=="
          crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body class="servicos_forms">

    <h2>Consulta Aluno</h2>

    <?php if (isset($_GET['message'])): ?>
        <p style="color: green;"><?= htmlspecialchars($_GET['message']) ?></p>
    <?php endif; ?>

    <?php if (isset($_GET['error'])): ?>
        <p style="color: red;"><?= htmlspecialchars($_GET['error']) ?></p>
    <?php endif; ?>

    <table border="1" cellpadding="5" cellspacing="0">
        <thead>
            <tr>
                <th>Matrícula</th>
                <th>Nome</th>
                <th>CPF</th>
                <th>Email</th>
                <th>Data Nascimento</th>
                <th>Endereço</th>
                <th>Cidade</th>
                <th>Telefone</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php if (isset($alunos) && !empty($alunos)): ?>
                <?php foreach ($alunos as $aluno): ?>
                    <tr>
                        <td><?= htmlspecialchars($aluno['matricula']) ?></td>
                        <td><?= htmlspecialchars($aluno['nome']) ?></td>
                        <td><?= htmlspecialchars($aluno['cpf']) ?></td>
                        <td><?= htmlspecialchars($aluno['email']) ?></td>
                        <td><?= htmlspecialchars($aluno['data_nascimento']) ?></td>
                        <td><?= htmlspecialchars($aluno['endereco']) ?></td>
                        <td><?= htmlspecialchars($aluno['cidade']) ?></td>
                        <td><?= htmlspecialchars($aluno['telefone']) ?></td>
                        <td id='buttons-wrapper'>
                            <a href="index.php?controller=aluno&action=showEditForm&id=<?= htmlspecialchars($aluno['id_aluno']) ?>" class="button-link edit-button"><i class='fa-solid fa-pen'></i> Atualizar</a>
                            <a href="index.php?controller=aluno&action=delete&id=<?= htmlspecialchars($aluno['id_aluno']) ?>" class="button-link delete-button" onclick="return confirm('Tem certeza que deseja excluir o aluno <?= htmlspecialchars($aluno['nome']) ?> (Matrícula: <?= htmlspecialchars($aluno['matricula']) ?>)?');"><i class='fa-solid fa-trash'></i> Excluir</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan='10'>Nenhum aluno encontrado.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>

    <br>
    <a href="index.php?controller=professor&action=showServicesPage">← Voltar aos Serviços</a>
    <hr>
    <a href="index.php?controller=auth&action=logout" style="margin-left:20px;">Logout →</a>

</body>
<footer>
    <p>Desenvolvido por Juliana e Sander</p>
</footer>
</html>
