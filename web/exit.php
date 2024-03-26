<?php
declare(strict_types=1);

session_start();

unset($_SESSION['login']);

header('location: ./index.php', true, 307);