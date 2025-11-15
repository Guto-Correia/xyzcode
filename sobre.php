<!DOCTYPE html>
<!-- XYZ CODE,MEU SITE -->
<html lang="pt-br">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>XYZ Code - Coordenamos ideais,codificamos soluções</title>

    <!-- descrição de site(seo e compartilhamento) -->
    <meta name="description"
        content="XYZCode é a agência/estúdio onde cada pixel e cada linha de código são posicionados com precisão, como pontos em um espaço 3D. Criamos soluções digitais completas — do front ao back — com a mesma exatidão de um sistema de coordenadas.">


    <!-- Palavras chaves -->
    <meta name="keywords"
        content="Agênica fornt-end,back-end,app,banco de dados,desensovivemento de sites,site barato,pwa">


    <!-- autor do site -->
    <meta name="author" content="Equipe XYZ Code">


    <!-- open grafich(quando tiver um compartilhamento com whats,face,linkedin) -->
    <meta property="og:title" content="XYZ Code - Coordenamos ideais,codificamos soluções">
    <meta property="og:description"
        content="XYZCode é a agência/estúdio onde cada pixel e cada linha de código são posicionados com precisão, como pontos em um espaço 3D. Criamos soluções digitais completas — do front ao back — com a mesma exatidão de um sistema de coordenadas.">
    <meta property="og:image" content="https://">
    <meta property="og:type" content="website">

    <!-- Icon favicon e app  -->
    <link rel="apple-touch-icon" sizes="57x57" href="img/icon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="img/icon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="img/icon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="img/icon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="img/icon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="img/icon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="img/icon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="img/icon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="img/icon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="img/icon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/icon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="img/icon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/icon/favicon-16x16.png">
    <link rel="manifest" href="img/icon/manifest.json">
    <meta name="msapplication-TileColor" content="#00c2ff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#00c2ff">

    <!-- o style de reset tem que vir primeiro pois o navegador limpa a página primeiro,depois aplica a estilização -->
    <link rel="stylesheet" href="css/reset.css">

    <link rel="stylesheet" type="text/css" href="css/slick.css" />
    <link rel="stylesheet" type="text/css" href="css/slick-theme.css" />

    <link rel="stylesheet" href="css/lity.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

    <link rel="stylesheet" href="css/style.css">

</head>

<body>

    <!-- incio: header -->
    <?php require_once("conteudo/header.php") ?>

    <main>

        <!-- inicio :banner -->
        <?php require_once("conteudo/banner.php") ?>

        <!-- inicio :sobre -->
        <?php require_once("conteudo/sobre.php") ?>

        <!-- inicio :missao -->
        <section class="missao">
            <div class="container">
                <img src="img/missao.png" alt="imagem representativa da palavra missão">
                <p>Oferecer soluções digitais inovadoras que transformem ideias em projetos funcionais, aproximando empresas de seus clientes por meio de sites, sistemas e aplicativos modernos, com foco em qualidade, tecnologia e resultados reais.</p>
            </div>
        </section>

        <!-- inicio :visao -->
        <section class="visao">
            <div class="container">
                <p>Ser reconhecida como uma agência referência em São Miguel Paulista e em toda a região, destacando-se pela criatividade, inovação e excelência na entrega de soluções digitais que geram impacto positivo nos negócios de nossos clientes.</p>
                <img src="img/visao.png" alt="imagem representativa da palavra visão">
            </div>
        </section>

        <!-- inicio :valores-->
        <section class="valores">
            <div class="container">
                <img src="img/valores.png" alt="imagem representativa da palavra valores">
                <div>
                    <p><span>Compromisso</span>  –  Entregar projetos dentro dos prazos com responsabilidade e dedicação.</p>
                    <p><span>Inovação</span>  –  Buscar constantemente novas tecnologias e tendências para oferecer soluções atuais e eficientes.</p>
                    <p><span>Qualidade</span>  –  Garantir alto padrão em cada etapa,   do planejamento ao suporte.</p>
                    <p><span>Transparência</span>  –  Trabalhar de forma clara e honesta, construindo relações de confiança com nossos clientes.</p>
                    <p><span>Colaboração</span>  –  Valorizar o trabalho em equipe, unindo criatividade e técnica para alcançar os melhores resultados.</p>
                </div>
            </div>
        </section>

        <!-- começo: pqescolher -->
        <?php require_once("conteudo/pq-escolher.php") ?>

        <!-- inicio :area -->
        <?php require_once("conteudo/area.php") ?>

        <!-- começo: depoimentos -->
        <?php require_once("conteudo/depo.php") ?>

        <!-- começo: footer -->
        <?php require_once("conteudo/footer.php") ?>

    </main>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.7.1.min.js"></script>


    <script src="js/slick.js"></script>
    <script src="js/lity.min.js"></script>

    <script src="js/animacao.js"></script>

</body>

</html>