<?php include("valida_sessao.php"); ?>
<?php include("conexao.php"); ?>

<?php
if (isset($_GET['delete_id'])) {
    $delete_id = $_GET['delete_id'];
    $sql = "DELETE FROM produtos WHERE id='$delete_id'";
    if ($conn->query($sql) === TRUE) {
        $mensagem = "Produto excluído com sucesso!";
    } else {
        $mensagem = "Erro ao excluir produto: " . $conn->error;
    }
}

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
    <body>
        <!-- Parte do cabeçalho -->
        <header>
        <div class="limitador">
            <a href="#"><img src="assets/senai.svg" alt=""></a>
            <img src="img/GA-avatar-UniaoQuimica.jpg" alt="logoprincipal" class="logo_da_barra">
             <nav>
                <ul class="menu">
                    <li><a href="#"><i class="fa fa-home"></i>Sobre nós</a></li>
                    <li><a href="#"><i class="fa fa-book"></i>Produtos</a></li>
                    <li><a href="#"><i class="fa fa-phone"></i>Contato</a></li>
                </ul>
             </nav>
        </div>
    </header>
    
        <!-- Parte principal-->
        <main class="destaqueFoto">
            <!-- <img src="img/ULTIMA.jpeg" alt="destaque de fundo" class="fundopri"> -->

            <div class="destaqueTexto2">
             <section id="sessao-login">
                <h2><span>Listagem de Produtos</span></h2>
                <?php if (isset($mensagem)) echo "<p class='message " . ($conn->error ? "error" : "success") . "'>$mensagem</p>"; ?>

                <table border="1" class="lista">
                   <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Descriçao</th>
                        <th>Preço</th>
                        <th>Fornecedor</th>
                        <th>Imagem</th>
                        <th>Açoes</th>
                   </tr>
                   <tr>
                   <?php while ($row = $produtos->fetch_assoc()): ?>
                    <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['nome']; ?></td>
                    <td><?php echo $row['preco']; ?></td>
                    <td><?php echo $row['descricao']; ?></td>
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
                        <a href="delete.php?delete_id=<?php echo $row['id']; ?>" onclick="return confirm('Tem certeza que deseja excluir?')">Excluir</a>
                    </td>
                    </tr>
                 <?php endwhile; ?>
                </table>

                <a href="index.php" class="back-button">Voltar</a>
            </div>
        </main>
     </body>   
   
</html>