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
                    <button onclick="window.location.href='/disciplina?action=create'">Cadastrar Disciplina</button>
                    <button onclick="window.location.href='/matricula?action=create'">Cadastrar Matricula</button>
                    <button onclick="window.location.href='/conteudo?action=create'">Cadastrar Conteudo</button>
                    <button onclick="window.location.href='/prova?action=create'">Cadastrar Prova</button>
                    <button onclick="window.location.href='/questoes-prova?action=create'">Cadastrar Questoes de prova</button>
                    <button onclick="window.location.href='/respostas?action=create'">Cadastrar Respostas</button>
                </div>
            </section>

            <section class="section">
                <h2>CONSULTAS</h2>
                <div class="button-grid">
                    <button onclick="window.location.href='index.php?controller=turma&action=list'">Consultar Turma</button>
                    <button onclick="window.location.href='/disciplina?action=list'">Consultar Disciplina</button>
                    <button onclick="window.location.href='/matricula?action=list'">Consultar Matricula</button>
                    <button onclick="window.location.href='/conteudo?action=list'">Consultar Conteudo</button>
                    <button onclick="window.location.href='/prova?action=list'">Consultar Prova</button>
                    <button onclick="window.location.href='/questoes-prova?action=list'">Consultar Questoes de prova</button>
                    <button onclick="window.location.href='/respostas?action=list'">Consultar Respostas</button>
                    <button onclick="window.location.href='/aluno?action=list'">Consultar Aluno</button>
                    <button onclick="window.location.href='/professor?action=list'">Consultar Professor</button>
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