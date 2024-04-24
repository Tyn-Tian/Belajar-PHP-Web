<?php
$numbers = $_GET['numbers'];
$total = 0;

foreach ($numbers as $number) {
    $total += $number;
}
?>

<!-- Url -->
<!-- host:port/get-array.php?numbers[]=10&numbers[]=5 -->

<html>
    <body>
        <h1>
            Total = <?= $total ?>
        </h1>
    </body>
</html>