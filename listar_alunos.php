<?php
require 'config.php';

$sql = "SELECT * FROM alunos";
$stmt = $pdo->prepare($sql);
$stmt->execute();
$alunos = $stmt->fetchAll();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Lista de Alunos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <style>
         body {
            background-image: url('https://static.vecteezy.com/ti/fotos-gratis/t1/41724052-ai-gerado-borrado-do-ginastica-academia-fundo-para-bandeira-apresentacao-foto.jpg'); /* imagem de fundo */
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
        }
    </style>
</head>
<body>
<div class="container mt-5">
    <h2>Lista de Alunos</h2>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Edição</th>
                
            </tr>
        </thead>
        <tbody>
            <?php foreach ($alunos as $aluno): ?>
                <tr>
                    <td><?php echo htmlspecialchars($aluno['id']); ?></td>
                    <td><?php echo htmlspecialchars($aluno['nome']); ?></td>
                    <td>
                        <!-- Link para editar o aluno com o id como parâmetro na URL -->
                        <a href="editar_aluno.php?id=<?php echo $aluno['id']; ?>" class="btn btn-primary">Editar</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<!-- Botão para voltar ao menu -->
<div class="text-center mt-3">
    <a href="index2.php" class="btn btn-primary btn-lg m-2">Voltar ao menu</a>
</div>

</body>
</html>

