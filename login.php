<?php
require_once __DIR__.'/data/conn.php';

$email = $_POST['email'] ?? '';
$password = $_POST['password'] ?? '';
// cripto la password
$md5password = md5($password);

var_dump($email);
var_dump($password);
var_dump($md5password);

$stmt = $conn->prepare("SELECT * from `users` WHERE `email` = ? AND `password` = ? ");

$stmt->bind_param('ss', $email, $md5password);
$stmt->execute();
$result = $stmt->get_result();

$user = $result->fetch_object();

var_dump($user);


require_once __DIR__ .'/views/layouts/head.php';
require_once __DIR__ .'/views/layouts/header.php';
// fine header



require_once __DIR__.'/views/pages/loginPage.php';








// inizio footer
require_once __DIR__ .'/views/layouts/footer.php';
?>
