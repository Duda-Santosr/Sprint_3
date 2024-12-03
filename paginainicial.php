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

    <!-- Parte principal -->
    <main class="destaque">
        <!-- Video ajustado para preencher a tela -->
        <video class="video" autoplay loop muted>
            <source src="img/vdo.mp4" type="video/mp4">
            <source src="img/vdo.avi" type="video/avi">
            <source src="img/vdo.ogv" type="video/ogv">
            <source src="img/vdo.webm" type="video/webm">
            Seu navegador não suporta o elemento de vídeo.
        </video>

        <div class="destaqueTexto">
            <img src="img/Marca-Uniao_original.png" alt="Marca União Química" class="logoprincipal">
            <a href="login.php">
                <button type="submit" style="margin-bottom: 30px;">Login</button>
            </a>

            <div class="sociais">
                <a href="#"><i class="fa fa-facebook" id="sociais"></i></a>
                <a href="#"><i class="fa fa-instagram" id="sociais"></i></a>
                <a href="#"><i class="fa fa-youtube" id="sociais"></i></a>
            </div>
        </div>
    </main>
</body>
</html>

