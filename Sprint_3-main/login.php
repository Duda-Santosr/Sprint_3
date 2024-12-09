<?php
session_start();
include('conexao.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $usuario = $_POST['usuario'];
    $senha = md5($_POST['senha']); // Se for necessário mudar para password_hash(), faça isso posteriormente.

    $sql = "SELECT * FROM usuarios WHERE usuario='$usuario' AND senha='$senha'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $_SESSION['usuario'] = $usuario;
        header('Location: index.php'); // Redireciona após o login bem-sucedido
        exit;
    } else {
        $error = "Usuário ou senha inválidos.";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="reset.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="shortcut icon" href="img/logo.jpg" type="icone">
    <title>União Quimica</title>
</head>
<body>
    <header>
        <div class="limitador">
            <a href="paginainicial.php"><img src="assets/senai.svg" alt="">
            <img src="img/GA-avatar-UniaoQuimica.jpg" alt="logoprincipal" class="logo_da_barra">
            </a>
             <nav>
                <ul class="menu">
                    <li><a href="sobre.php"><i class="fa fa-home"></i> Sobre nós</a></li>
                    <li><a href="listagem_produtos.php"><i class="fa fa-book"></i> Produtos</a></li>
                    <li><a href="contato.php"><i class="fa fa-phone"></i> Contato</a></li>
                </ul>
             </nav>
        </div>
    </header>

    <main class="destaque">
        <img src="img/FUNDO.jpeg" alt="destaque de fundo" class="fundopri">
        <div class="destaqueTexto2">
            <section id="sessao-login">
                <form method="post" action="" class="formus">
                    <h2>Login</h2>
                    <label for="usuario">Usuário:</label>
                    <input type="text" name="usuario" required>
                    
                    <label for="senha">Senha:</label>
                    <input type="password" name="senha" required>
                    
                    <!-- Botão para submeter o formulário -->
                    <button type="submit" style="display: inline-block; margin-bottom: 30px; padding: 10px 20px; background-color: #be0c0c; color: white; border-radius: 5px; text-align: center;">Entrar</button>
                    
                    <!-- Link de Voltar -->
                    <a href="paginainicial.php" style="display: inline-block; margin-bottom: 30px; padding: 10px 20px; background-color: #be0c0c; color: white; text-decoration: none; border-radius: 5px; text-align: center;">Voltar</a>

                    <!-- Mensagem de erro se houver -->
                    <?php if (isset($error)) echo "<p class='message error'>$error</p>"; ?>
                </form>
            </section>
        </div>
    </main>
</body>
</html>
