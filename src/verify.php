<?php
session_start();

if (isset($_SESSION["qrcode"]) && !empty($_SESSION["qrcode"])) {

    if (isset($_SESSION["qrcode"]["ok"]) && $_SESSION["qrcode"]["ok"]) {
        echo "<div class='msg sucess'>{$_SESSION['qrcode']['msg']}</div>";
    } else {
        echo "<div class='msg failed'>{$_SESSION['qrcode']['msg']}</div>";
    }

    echo "<script>$('.msg').slideDown();</script>";

    unset($_SESSION["qrcode"]);
}
