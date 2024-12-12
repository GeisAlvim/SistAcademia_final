<?php
require 'config.php';

$erro = ''; // Mensagem de erro

if (isset($_GET['id'])) {
    // Exclusão individual
    $id = intval($_GET['id']);
    $sql = "DELETE FROM aulas WHERE id = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':id', $id);
    $stmt->execute();
    header('Location: listar_aula.php');
    exit;
} elseif (isset($_POST['excluir'])) {
    // Exclusão múltipla
    if (!empty($_POST['aulas'])) {
        $ids = implode(',', $_POST['aulas']);
        $sql = "DELETE FROM aulas WHERE id IN ($ids)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        header('Location: listar_aulas.php');
        exit;
    } else {
        $erro = "Nenhuma aula foi selecionada para exclusão.";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Excluir Aulas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-image: url('https://static.vecteezy.com/ti/fotos-gratis/t1/41724052-ai-gerado-borrado-do-ginastica-academia-fundo-para-bandeira-apresentacao-foto.jpg'); /* imagem de fundo */
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
        }
        .container {
            background: rgba(255, 255, 255, 0.8); /* Fundo branco semi-transparente para melhor legibilidade */
            padding: 20px;
            border-radius: 10px;
        }
    </style>
</head>
<body>
<div class="container mt-5">
    <h2>Excluir Aula(s)</h2>

    <?php if (isset($erro) && $erro): ?>
        <div class="alert alert-danger"><?php echo $erro; ?></div>
    <?php endif; ?>

    <form method="POST">
        <table class="table">
            <thead>
                <tr>
                    <th><input type="checkbox" id="check_all"></th>
                    <th>ID</th>
                    <th>Nome da Aula</th>
                    <th>Ação</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Exibe as aulas
                $sql = "SELECT * FROM aulas";
                $stmt = $pdo->prepare($sql);
                $stmt->execute();
                $aulas = $stmt->fetchAll();
                foreach ($aulas as $aula) {
                    echo "<tr>";
                    echo "<td><input type='checkbox' name='aulas[]' value='" . $aula['id'] . "'></td>";
                    echo "<td>" . $aula['id'] . "</td>";
                    echo "<td>" . $aula['nome_aula'] . "</td>";
                    echo "<td><a href='excluir_aula.php?id=" . $aula['id'] . "' class='btn btn-danger'>Excluir</a></td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>

        <button type="submit" name="excluir" class="btn btn-danger">Excluir Selecionados</button>
    </form>

    <script>
        // Selecionar/deselecionar todos os checkboxes
        document.getElementById('check_all').addEventListener('click', function () {
            const checkboxes = document.querySelectorAll('input[type="checkbox"]');
            checkboxes.forEach(checkbox => checkbox.checked = this.checked);
        });
    </script>
</div>

<div class="text-center mt-3">
    <a href="index2.php" class="btn btn-primary btn-lg m-2">Voltar ao menu</a>
</div>

</body>
</html>