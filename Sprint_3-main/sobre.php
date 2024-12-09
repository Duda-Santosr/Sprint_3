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
            <a href="paginainicial.php">
                <img src="assets/senai.svg" alt="">
                <img src="img/GA-avatar-UniaoQuimica.jpg" alt="logoprincipal" class="logo_da_barra">
            </a>
            <nav>
                <ul class="menu">
                    <li><a href="listagem_produtos.php"><i class="fa fa-book"></i> Produtos</a></li>
                    <li><a href="contato.php"><i class="fa fa-phone"></i> Contato</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Conteúdo principal -->
    <div class="container">
        <h1>Sobre Nós</h1>
        <p>A União Química é uma empresa dedicada à excelência no setor químico, com mais de 20 anos de experiência. Nossa missão é fornecer produtos de qualidade, com foco no desenvolvimento sustentável e no atendimento personalizado aos nossos clientes.</p>
        
        <h2>Nossa Missão</h2>
        <p>Proporcionar soluções químicas inovadoras que atendam às necessidades do mercado e contribuam para um futuro mais sustentável. Trabalhamos com os mais altos padrões de qualidade e inovação para garantir que nossos produtos sejam sempre eficientes e seguros.</p>

        <h2>Nossos Valores</h2>
        <ul>
            <li>Compromisso com a qualidade.</li>
            <li>Responsabilidade socioambiental.</li>
            <li>Inovação constante.</li>
            <li>Respeito aos nossos colaboradores e clientes.</li>
        </ul>

        <a href="paginainicial.php" style="display: inline-block; margin-bottom: 30px; padding: 10px 20px; background-color: #be0c0c; color: white; text-decoration: none; border-radius: 5px; text-align: center;">Voltar</a>
    </div>

    <style>
        /* Estilo global */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            width: 90%;
            max-width: 800px;
            margin: 40px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: #333;
            margin-bottom: 10px;
        }

        h2 {
            color: #333;
            margin-top: 20px;
        }

        p {
            text-align: justify;
            color: #666;
            margin-bottom: 20px;
        }

        ul {
            list-style-type: disc;
            margin-left: 20px;
            color: #666;
        }

        ul li {
            margin-bottom: 10px;
        }

        /* Garantir que a página seja responsiva */
        @media (max-width: 1200px) {
            .container {
                width: 90%;
            }

            h1 {
                font-size: 28px;
            }

            h2 {
                font-size: 22px;
            }

            p, ul {
                font-size: 16px;
            }
        }

        @media (max-width: 768px) {
            .container {
                width: 95%;
                padding: 15px;
            }

            h1 {
                font-size: 26px;
            }

            h2 {
                font-size: 20px;
            }

            p, ul {
                font-size: 15px;
            }

            .menu {
                flex-direction: column;
                align-items: center;
                padding: 0;
            }

            .menu li {
                margin-bottom: 10px;
            }

            .logo_da_barra {
                width: 180px;
            }
        }

        @media (max-width: 600px) {
            .container {
                padding: 15px; /* Menos espaçamento em telas menores */
            }

            h1 {
                font-size: 24px;
            }

            h2 {
                font-size: 20px;
            }

            p, ul {
                font-size: 14px;
            }

            .logo_da_barra {
                width: 150px;
            }

            .menu li {
                font-size: 14px;
            }
        }
    </style>
</body>
</html>
