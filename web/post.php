<?php
declare(strict_types=1);

session_start();

if(isset($_POST['name'])) {
    $_SESSION['login'] = $_POST['name'];
    
    header('location: ./index.php', true, 307);
}

$_POST['name'];