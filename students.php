<?php
require_once __DIR__.'/data/conn.php';
require_once __DIR__.'/data/midlleware.php';

// apro la sessione solo se la sessione non è gia aperta
if(session_status() === PHP_SESSION_NONE){
  session_start();
}

// funzione middleware
checkLoggedIn();

$limit = 20;

$stmt = $conn->prepare("SELECT * from `students` LIMIT  ? ");
$stmt->bind_param('i', $limit);
$stmt->execute();
$result = $stmt->get_result();




require_once __DIR__ .'/views/layouts/head.php';
require_once __DIR__ .'/views/layouts/header.php';
// fine header



require_once __DIR__.'/views/pages/studentsPage.php';








// inizio footer
require_once __DIR__ .'/views/layouts/footer.php';
?>