<?php
require_once __DIR__.'/data/conn.php';
require_once __DIR__.'/data/midlleware.php';

// apro la sessione solo se la sessione non è gia aperta
if(session_status() === PHP_SESSION_NONE){
  session_start();
}

// funzione middleware
checkLoggedIn();

if(isset($_GET['id'])){
  $studentid = $_GET['id'];
  
$stmt = $conn->prepare("SELECT * from `students` WHERE `id` = ? ");
$stmt->bind_param('i', $studentid);
$stmt->execute();
$result = $stmt->get_result();

$student= $result->fetch_object();


var_dump($student);
}else{
  header('Location: index.php');
}



require_once __DIR__ .'/views/layouts/head.php';
require_once __DIR__ .'/views/layouts/header.php';
// fine header



require_once __DIR__.'/views/pages/studentPage.php';








// inizio footer
require_once __DIR__ .'/views/layouts/footer.php';
?>