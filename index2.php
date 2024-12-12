<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Inicial - Sistema de Gestão</title>
    <link rel="stylesheet" href="styles.css"> 
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-image: url('https://static.vecteezy.com/ti/fotos-gratis/t1/41724052-ai-gerado-borrado-do-ginastica-academia-fundo-para-bandeira-apresentacao-foto.jpg'); /* imagem de fundo */
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
        }
        .main-content {
            background: rgba(255, 255, 255, 0.8); /* Fundo branco semi-transparente para melhor legibilidade */
            padding: 20px;
            border-radius: 10px;
        }
        .menu {
            background: white; /* Fundo branco */
            color: blue; /* Texto branco para contraste */
            padding: 20px;
            border-radius: 10px;
        }
        .menu a {
            color: blue; /* Links com texto branco */
        }
        .menu a:hover {
            color: #FFD700; /* Texto amarelo dourado ao passar o mouse */
        }
    </style>
</head>
<body>

<!-- Conteúdo Principal -->
<div class="main-content">
    <!-- Nome da Academia -->
    <h1 class="text-center" id="academia-name">SISTEMA BLUE GYM</h1>

    <!-- Frase Motivadora -->
    <p class="text-center" id="motivational-quote">"Sua jornada para a saúde começa aqui!"</p>
    
    <!-- Foto da Academia -->
    <div class="text-center">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSdBuQkkHuyK49GSsqksZ1R03W8hIyqNaOXnA&s" alt="Foto da Academia" class="logo-img">
    </div>
</div>

<!-- Menu -->
<div class="menu">
    <h2>Menu</h2>

    <!-- Listar -->
    <div>
        <button class="btn btn-secondary" data-toggle="collapse" data-target="#listarMenu">Listar</button>
        <div id="listarMenu" class="collapse">
            <a href="listar_alunos.php" class="btn btn-light">Lista de Alunos</a>
            <a href="listar_professor.php" class="btn btn-light">Lista de Professores</a>
            <a href="listar_aula.php" class="btn btn-light">Lista de Aulas</a>
            <a href="exibir_detalhado.php" class="btn btn-light">Listar Informações Relacionadas</a>
        </div>
    </div>

    <!-- Cadastrar -->
    <div>
        <button class="btn btn-secondary" data-toggle="collapse" data-target="#cadastrarMenu">Cadastrar</button>
        <div id="cadastrarMenu" class="collapse">
            <a href="cadastro_alunos.php" class="btn btn-light">Cadastro de Alunos</a>
            <a href="cadastro_professor.php" class="btn btn-light">Cadastro de Professores</a>
            <a href="cadastro_aulas.php" class="btn btn-light">Cadastro de Aulas</a>
        </div>
    </div>

    <!-- Editar -->
    <div>
        <button class="btn btn-secondary" data-toggle="collapse" data-target="#editarMenu">Editar</button>
        <div id="editarMenu" class="collapse">
            <a href="editar_aluno.php" class="btn btn-light">Edição de Alunos</a>
            <a href="editar_professor.php" class="btn btn-light">Edição de Professores</a>
            <a href="editar_aula.php" class="btn btn-light">Edição de Aulas</a>
        </div>
    </div>

    <!-- Excluir -->
    <div>
        <button class="btn btn-secondary" data-toggle="collapse" data-target="#excluirMenu">Excluir</button>
        <div id="excluirMenu" class="collapse">
            <a href="excluir_aluno.php" class="btn btn-light">Exclusão de Alunos</a>
            <a href="excluir_professor.php" class="btn btn-light">Exclusão de Professores</a>
            <a href="excluir_aula.php" class="btn btn-light">Exclusão de Aulas</a>
        </div>
    </div>
</div>

<!-- Link do Bootstrap JS e dependências -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
