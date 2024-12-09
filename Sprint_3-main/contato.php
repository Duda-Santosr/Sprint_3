

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="reset.css">
    <!-- link de icones -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="shortcut icon" href="img/logo.jpg" type="icone">
    <title>União Química</title>
</head>
<body>
    <header>
        <div class="limitador">
            <a href="paginainicial.php"><img src="assets/senai.svg" alt="">
            <img src="img/GA-avatar-UniaoQuimica.jpg" alt="logoprincipal" class="logo_da_barra"></a>
            <nav>
                <ul class="menu">
                    <li><a href="sobre.php"><i class="fa fa-home"></i> Sobre nós</a></li>
                    <li><a href="listagem_produtos.php"><i class="fa fa-book"></i> Produtos</a></li>
                </ul>
            </nav>
        </div>
    </header>
    
    <div class="container">
        <h1>Contato</h1>
        <p>Entre em contato para esclarecer dúvidas ou solicitar informações.</p>
        <form action="#" method="POST">
       
            <input type="text" name="name" placeholder="Nome" required>
            <input type="email" name="email" placeholder="E-mail" required>
            <input type="tel" name="telefone" placeholder="Telefone (DDD + número)" required>
            <input type="date" name="data_nascimento" placeholder="Data de Nascimento">
            <input type="text" name="endereco" placeholder="Endereço">
            <input type="text" name="cpf_cnpj" placeholder="CPF ou CNPJ">
            <input type="text" name="cep" placeholder="CEP">
            <input type="text" name="idade" placeholder="Idade">
            <input type="text" name="dúvida" placeholder="Escreva sua dúvida">
            <a href="paginainicial.php" style="display: inline-block; margin-bottom: 30px; padding: 10px 20px; background-color: #be0c0c; color: white; text-decoration: none; border-radius: 5px; text-align: center;">Enviar</a>
        </form>
       
    </div>
</body>
</html>
