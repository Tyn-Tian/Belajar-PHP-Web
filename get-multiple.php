<?php
$say = "Hello " . $_GET['first_name'] . " " . $_GET['last_name'];
?>
<!-- Url -->
<!-- host:port/get-multiple.php?first_name=Chris&last_name=Tian -->

<html>
    <body>
        <h1>
            <?= $say ?>
        </h1>
    </body>
</html>