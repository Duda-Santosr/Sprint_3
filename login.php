<?php
session_start();
include('conexao.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $usuario = $_POST['usuario'];
    $senha = md5($_POST['senha']);

    $sql = "SELECT * FROM usuarios WHERE usuario='$usuario' AND senha='$senha'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $_SESSION['usuario'] = $usuario;
        header('Location: index.php');
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
            <button type="submit" style="margin-bottom: 30px;">Entrar</button>
            <a href="paginainicial.php">
                <button type="submit" style="margin-bottom: 30px;">Voltar</button>
            </a>
            <?php if (isset($error)) echo "<p class='message error'>$error</p>"; ?>
        </form>
            </section>
        </div>
    </main>
</body>
</html>