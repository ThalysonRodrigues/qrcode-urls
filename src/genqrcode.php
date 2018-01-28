<?php

require_once("../vendor/autoload.php");

$url = isset($_GET['url'])? filter_var($_GET['url'], FILTER_SANITIZE_URL): null;

$url = filter_var(FILTER_VALIDATE_URL)? $url: null;

session_start();

if ($url != null) {
    \PHPQRCode\QRcode::png($url, "temp/qrcode.png", 'L', 12, 1);
    $_SESSION["qrcode"] = ["ok" => true, "msg" => "QRCode gerado com sucesso! :)"];
} else
    $_SESSION["qrcode"] = ["ok" => false, "msg" => "Falhou :( Insira uma URL válida!"];

header("Location: ../public/");
die();
