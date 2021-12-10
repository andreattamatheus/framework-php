<?php

use Source\Core\Session;

require __DIR__ . "/source/autoload.php";


$session = new Session();
$session->regenerate();

var_dump(
    $_SESSION
);