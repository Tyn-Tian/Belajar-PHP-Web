<?php

if (isset($_GET['key']) && $_GET['key'] == "rahasia") {
    header('Content-Disposition: attachment; filename="logo bidang riset dan inovasi.png"');
    header('Content-Type: image/png'); // Harus nya image/jpeg, karena tidak support image/png
    readfile(__DIR__ . '/file/logo bidang riset dan inovasi.png');
    exit();
} else {
    echo "Invalid Key";
}