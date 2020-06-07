<?php 

$link = 'mysql:host=bqrdko7ot8za3uc8u3l6-mysql.services.clever-cloud.com;dbname=bqrdko7ot8za3uc8u3l6';
$user = 'uxqaja5cxlfg4xdk';
$password = 'oBf0d9IvYLgVCOV4YL2h';

try {
    $pdo = new PDO($link, $user, $password);
} catch (PDOException $e) {
    print '!Error: ' + $e->getMessage(); + '<br>';
    die();
}

?>