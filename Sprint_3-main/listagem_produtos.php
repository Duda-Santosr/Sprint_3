<?php
// Inicia a sessão para verificar se o usuário está autenticado.
session_start();

include("conexao.php");

if (isset($_GET['delete_id'])) {
    $delete_id = $_GET['delete_id'];

    // Verificação de conexão com o banco de dados
    if ($conn->connect_error) {
        die("Falha na conexão: " . $conn->connect_error);
    }

    // Exclui o produto
    $sql = "DELETE FROM produtos WHERE id='$delete_id'";
    if ($conn->query($sql) === TRUE) {
        $mensagem = "Produto excluído com sucesso!";
        header('Location: listagem_produtos.php'); // Redireciona para a página de listagem após a exclusão
        exit();
    } else {
        $mensagem = "Erro ao excluir produto: " . $conn->error;
    }
}

// Consulta para listar os produtos
$produtos = $conn->query("SELECT p.id, p.nome, p.descricao, p.preco, p.imagem, f.nome AS fornecedor_nome 
                          FROM produtos p 
                          JOIN fornecedores f ON p.fornecedor_id = f.id");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="reset.css">
    <!-- link de icones -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- link de favicon -->
    <link rel="shortcut icon" href="img/logo.jpg" type="icone">
    <title>União Quimica</title>
</head>
<body>
    <!-- Parte do cabeçalho -->
    <header>
        <div class="limitador">
            <a href="paginainicial.php"><img src="assets/senai.svg" alt="">
            <img src="img/GA-avatar-UniaoQuimica.jpg" alt="logoprincipal" class="logo_da_barra">
            </a>
            <nav>
                <ul class="menu">
                    <li><a href="sobre.php"><i class="fa fa-home"></i> Sobre nós</a></li>
                    <li><a href="login.php"><i class="fa fa-book"></i> Produtos</a></li>
                    <li><a href="contato.php"><i class="fa fa-phone"></i> Contato</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Parte principal-->
    <main class="destaqueFoto">
        <div class="destaqueTexto2">
            <section id="sessao-login">
                <h2><br><span>Listagem de Produtos</span></h2>

                <!-- Exibe a mensagem de sucesso ou erro -->
                <?php if (isset($mensagem)) echo "<p class='message " . ($conn->error ? "error" : "success") . "'>$mensagem</p>"; ?>

                <table borde="1" class="lista">
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Descrição</th>
                        <th>Preço</th>
                        <th>Fornecedor</th>
                        <th>Imagem</th>
                        <th>Ações</th>
                    </tr>

                    <?php while ($row = $produtos->fetch_assoc()): ?>
                    <tr>
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['nome']; ?></td>
                        <td><?php echo $row['descricao']; ?></td>
                        <td><?php echo $row['preco']; ?></td>
                        <td><?php echo $row['fornecedor_nome']; ?></td>
                        <td>
                            <?php if ($row['imagem']): ?>
                                <img src="<?php echo $row['imagem']; ?>" alt="Imagem do produto" style="max-width: 100px;">
                            <?php else: ?>
                                Sem imagem
                            <?php endif; ?>
                        </td>
                        <td>
                            <a href="cadastro_produto.php?edit_id=<?php echo $row['id']; ?>">Editar</a>
                            <a href="?delete_id=<?php echo $row['id']; ?>" onclick="return confirm('Tem certeza que deseja excluir?')">Excluir</a>
                        </td>
                    </tr>
                    <?php endwhile; ?>
                </table>

                <a href="index.php" style="margin-left: 700px" class="back-button">Voltar</a>
                <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
            </section>
        </div>
    </main>
</body>
</html>
