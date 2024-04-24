<?php
$say = "Hello " . htmlspecialchars($_GET['name']);
?>

<!-- Url -->
<!-- host:port/get.php?name=Tyn%20Christian -->

<html>
    <body>
        <h1>
            <?= $say ?>
        </h1>
    </body>
</html>