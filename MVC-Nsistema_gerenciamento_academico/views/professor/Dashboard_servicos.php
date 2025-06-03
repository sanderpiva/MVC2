<!DOCTYPE html>
<html>
<head>
    <title>Dashboard do Professor</title>
    <meta charset="utf=8">
    <link rel="stylesheet" href="public/css/style.css">
    
</head>

<body class="servicos_forms">
    <div class="container">
        <div class="sections-wrapper">
            <section class="section">
                <h2>CADASTROS</h2>
                <div class="button-grid">
                    <button onclick="window.location.href='index.php?controller=turma&action=showCreateForm'">Cadastrar Turma</button>
                    <button onclick="window.location.href='index.php?controller=disciplina&action=showCreateForm'">Cadastrar Disciplina</button>
                    <button onclick="window.location.href='index.php?controller=matricula&action=showCreateForm'">Cadastrar Matricula</button>
                    <button onclick="window.location.href='index.php?controller=conteudo&action=showCreateForm'">Cadastrar Conteudo</button>
                    <button onclick="window.location.href='index.php?controller=prova&action=showCreateForm'">Cadastrar Prova</button>
                    <button onclick="window.location.href='index.php?controller=questoes&action=showCreateForm'">Cadastrar Questoes de prova</button>
                    <button onclick="window.location.href='index.php?controller=respostas&action=showCreateForm'">Cadastrar Respostas</button>
                </div>
            </section>

            <section class="section">
                <h2>CONSULTAS</h2>
                <div class="button-grid">
                    <button onclick="window.location.href='index.php?controller=turma&action=list'">Consultar Turma</button>
                    <button onclick="window.location.href='index.php?controller=disciplina&action=list'">Consultar Disciplina</button>
                    <button onclick="window.location.href='index.php?controller=matricula&action=list'">Consultar Matricula</button>
                    <button onclick="window.location.href='index.php?controller=conteudo&action=list'">Consultar Conteudo</button>
                    <button onclick="window.location.href='index.php?controller=prova&action=list'">Consultar Prova</button>
                    <button onclick="window.location.href='index.php?controller=questoes&action=list'">Consultar Questoes de prova</button>
                    <button onclick="window.location.href='index.php?controller=respostas&action=list'">Consultar Respostas</button>
                    <button onclick="window.location.href='index.php?controller=aluno&action=list'">Consultar Aluno</button>
                    <button onclick="window.location.href='index.php?controller=professor&action=list'">Consultar Professor</button>
                </div>
            </section>
        </div>
        <div class="home-link">
            <a href="?logout=true">Logout -> HomePage</a>
        </div>
    </div><hr><hr>

    <footer class="servicos">
        <p>Desenvolvido por Juliana e Sander</p>
    </footer>
</body>
</html>