<?php
$ok = 0;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;


try {

    if (isset($_POST["email"])) {
        //só entra aqui se prencher o form e clicar no butão

        require 'vendor/phpmailer/Exception.php';
        require 'vendor/phpmailer/PHPMailer.php';
        require 'vendor/phpmailer/SMTP.php';


        //Create an instance; passing `true` enables exceptions
        $mail = new PHPMailer(true);

        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $telefone = $_POST["telefone"];
        $motivo = $_POST["motivo"];
        $mensagem = $_POST["mensagem"];
        $assunto = "E-mail do site XYZ Code";

        //mostra as carc da var
        // var_dump(value: $nome);
        // var_dump(value: $email);
        // var_dump(value: $telefone);
        // var_dump(value: $motivo);
        // var_dump(value: $mensagem);

        // //Server settings
        // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'tipi05.360criativo.com.br';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'contato@tipi05.360criativo.com.br';                     //SMTP username
        $mail->Password   = 'TIPI05**2025';                               //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
        $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

        //Recipients
        $mail->setFrom('contato@tipi05.360criativo.com.br');
        $mail->addAddress('correiaguto7@gmail.com');     //Add a recipient
        // $mail->addAddress('ellen@example.com');               //Name is optional
        // $mail->addReplyTo('info@example.com', 'Information');
        // $mail->addCC('cc@example.com');
        // $mail->addBCC('bcc@example.com');

        //Attachments
        // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
        // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = $assunto;
        $mail->Body    = "
        Nome: $nome <br>
        E-mail: $email <br>
        Telefone: $telefone <br>
        Motivo: $motivo <br>
        Mensagem: $mensagem <br>
        
        ";

        $mail->AltBody = "
        Nome: $nome /n
        E-mail: $email /n
        Telefone: $telefone /n
        Motivo: $motivo /n
        Mensagem: $mensagem
        ";

        $mail->send();
        // echo 'SUa mensagem foi um sucesso';
        $ok = 1;
    } //fim do if

}catch (Exception $e) {
    echo $nome . ", Não foi possivel o envio do e-mail: {$mail->ErrorInfo}";
    $ok = 2;
}

?>



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

        <!-- inicio :mapa-->
        <section class="mapa">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3659.025328309543!2d-46.434437024671894!3d-23.49559717884505!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce63dda7be6fb9%3A0xa74e7d5a53104311!2sSenac%20S%C3%A3o%20Miguel%20Paulista!5e0!3m2!1spt-BR!2sbr!4v1761654201145!5m2!1spt-BR!2sbr" width="100%" height="860px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </section>

        <!-- inicio :area -->
        <?php require_once("conteudo/area.php") ?>

        <!-- inicio :contato-->
        <section></section>


        <!-- inicio :form-->
        <section class="formContato">
            <div class="container">
                <div>
                    <h2>CONTATO</h2>
                    <h3>Dúvidas, Sugestões, Elogios ou Reclamações</h3>
                </div>
                <form action="#" method="post">
                    <div class="form-esquerda">
                        <input type="text" name="nome" placeholder="Informe seu nome:" required>
                        <input type="email" name="email" placeholder="Informe seu email:" required>
                        <input type="tel" name="telefone" placeholder="Informe seu telefone:">
                        <select name="motivo" required>
                            <option value disabled selected hidden>Selecione o serviço desejado</option>
                            <option value="websites">Desenvolvimento Web Sites</option>
                            <option value="sistemas">Desenvolvimento Sistemas Web</option>
                            <option value="mobile">Desenvolvimento Aplicativo Mobile</option>
                            <option value="marketing">Marketing Digital</option>
                        </select>
                        <h3>
                            <?php 
                            if($ok ==1){
                                echo $nome . ",sua mensagem foi envieada com sucesso.";                                
                            } elseif($ok == 2){
                                echo $nome . ",não foi possivel enviar sua mensagem. Tente mais tarde";
                            }
                            ?>
                        </h3>
                    </div>
                    <div class="form-direita">
                        <textarea name="mensagem" placeholder="Digite sua mensagem:" required></textarea>
                        <div class="botoes">
                            <button type="submit" class="enviar">ENVIAR</button>
                            <button type="reset" class="limpar">LIMPAR</button>
                        </div>
                    </div>
                </form>
            </div>
        </section>

        <!-- começo: Linguagens -->
        <?php require_once("conteudo/linguagens.php") ?>

        <!-- começo: pqescolher -->
        <?php require_once("conteudo/pq-escolher.php") ?>

        <!-- começo: footer -->
        <?php require_once("conteudo/footer.php") ?>

    </main>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.7.1.min.js"></script>


    <script src="js/slick.js"></script>
    <script src="js/lity.min.js"></script>

    <script src="js/animacao.js"></script>

</body>

</html>