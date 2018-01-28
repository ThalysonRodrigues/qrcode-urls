<?php
    define('BASE', 'http://localhost:8080/qrcode-urls');
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Gerar QRCode URL</title>
        <!-- Metadados -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Gerador de QRCode para URL">
        <meta name="keywords" content="QRCode,PHP,URL">
        <meta name="robots" content="index, follow">
        <meta name="author" content="Thalyson Alexandre Rodrigues de Sousa">

        <link rel="stylesheet" type="text/css" href="<?=BASE?>/assets/css/master-style.css">
        <script src="http://code.jquery.com/jquery-3.2.1.min.js"></script>
    </head>
    <body>
        <main>
            <form id="myform" class="container" action="<?=BASE?>/src/genqrcode.php" method="get">
                <input id="url" type="url" placeholder="Insira sua URL..." id="url" name="url">
                <input id="send" type="submit" value="Gerar QRCode">
            </form>
            <?php
            require_once("verify.php");
            ?>
            <section id="qrcode" class="container">
                <h1>Seu QRCode:</h1>
                <img id="yourqrcode" src="<?=BASE?>/src/temp/qrcode.png" title="QRCode da URL" alt="QRCode da URL">
                <script src="<?=BASE?>/assets/js/verifyimg.js"></script>
            </section>
        </main>
    </body>
</html>
