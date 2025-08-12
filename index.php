<?php
// Ativa a exibição de erros para depuração
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Resto do seu código PHP...
?>
<!DOCTYPE html>
<html lang="pt-br">
...

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Cadastro</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php
// Inclui o arquivo de conexão com o banco de dados
include 'conexao.php';

// Processa o formulário quando ele é enviado
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = $_POST['nome'];
    $email = $_POST['email'];

    // Usando prepared statements para evitar SQL Injection (boa prática de segurança)
    $stmt = $conn->prepare("INSERT INTO usuarios (nome, email) VALUES (?, ?)");
    $stmt->bind_param("ss", $nome, $email);

    if ($stmt->execute()) {
        echo "<p class='mensagem-sucesso'>Novo usuário cadastrado com sucesso!</p>";
    } else {
        echo "<p class='mensagem-erro'>Erro ao cadastrar: " . $stmt->error . "</p>";
    }

    $stmt->close();
}

// Opcional: Fechar a conexão
// $conn->close();
?>

<div class="container">
    <h1>Cadastro de Usuários</h1>

    <form action="index.php" method="POST">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required>

        <label for="email">E-mail:</label>
        <input type="email" id="email" name="email" required>

        <button type="submit">Cadastrar</button>
    </form>
    <hr>
<h2>Usuários Cadastrados</h2>
<table class="tabela-usuarios">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>E-mail</th>
        </tr>
    </thead>
    <tbody>
        <?php
        // Seleciona todos os usuários da tabela
        $sql = "SELECT id, nome, email FROM usuarios ORDER BY id DESC";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // Exibe os dados de cada linha
            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["id"] . "</td>";
                echo "<td>" . $row["nome"] . "</td>";
                echo "<td>" . $row["email"] . "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='3'>Nenhum usuário cadastrado.</td></tr>";
        }
        ?>
    </tbody>
</table>
</div>

</body>
</html>