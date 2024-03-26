<?php
declare(strict_types=1);

session_start();

if(!isset($_SESSION['login'])) {
    include './index.html';
} else {
    echo "Здравствуйте, {$_SESSION['login']}";
    echo PHP_EOL;
    echo "<a href='./exit.php'>Clear session</a>";
}

// session_destroy();