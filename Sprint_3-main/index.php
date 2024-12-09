<?php
// Inicia a sessão para verificar se o usuário está autenticado.
session_start();
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
    <link rel="shortcut icon" href="img/logo.jpg" type="image/x-icon">
    <title>União Quimica</title>
</head>
<body>
    <!-- Parte do cabeçalho -->
    <header>
        <div class="limitador">
        <a href="paginainicial.php">
            <img src="assets/senai.svg" alt="">
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
    
    <!-- Parte principal-->
    <main class="destaque">
        <img src="img/FUNDO.jpeg" alt="destaque de fundo" class="fundopri">
        <div class="destaqueTexto2">
            <section id="sessao-login">
                <form method="POST" action="">
                    <h2><span id="sis-cadastro">Sistema de cadastro</span><br>
                    <span>Bem vindo, <?php echo isset($_SESSION['usuario']) ? $_SESSION['usuario'] : 'Usuário'; ?>!</span></h2>
                    <br><br>

                    <ul class="links">
                        <li><a href="cadastro_fornecedor.php">Cadastro de fornecedores</a></li>
                        <li><a href="cadastro_produto.php">Cadastro de produtos</a></li>
                        <li><a href="listagem_produtos.php">Listagem de produtos</a></li>
                        <li class="sair"><a href="paginainicial.php">Sair</a></li>
                    </ul>
                </form>
            </section>
        </div>
    </main>

</body>
</html>
