<?php
require_once __DIR__.'/data/conn.php';

// apro la sessione solo se la sessione non è gia aperta
if(session_status() === PHP_SESSION_NONE){
  session_start();
}

$email = $_POST['email'] ?? '';
$password = $_POST['password'] ?? '';
// cripto la password
$md5password = md5($password);



$stmt = $conn->prepare("SELECT * from `users` WHERE `email` = ? AND `password` = ? ");

$stmt->bind_param('ss', $email, $md5password);
$stmt->execute();
$result = $stmt->get_result();

$user = $result->fetch_object();


if($user){
  $_SESSION['userID'] = $user->id;
  $_SESSION['userEmail'] = $user->email;
  header('Location: index.php');
}
var_dump($user);


require_once __DIR__ .'/views/layouts/head.php';
require_once __DIR__ .'/views/layouts/header.php';
// fine header



require_once __DIR__.'/views/pages/loginPage.php';








// inizio footer
require_once __DIR__ .'/views/layouts/footer.php';

$conn->close();
?>
