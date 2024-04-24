<?php

header('Application: Belajar PHP Web');
header('Author: Christian');

$client = $_SERVER['HTTP_CLIENT_NAME'];

echo "Hello $client";
