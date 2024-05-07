<?php
require_once __DIR__.'/data/conn.php';

// apro la sessione solo se la sessione non è gia aperta
if(session_status() === PHP_SESSION_NONE){
  session_start();
}

session_destroy();
header('Location: index.php');


require_once __DIR__ .'/views/layouts/head.php';
require_once __DIR__ .'/views/layouts/header.php';
// fine header



require_once __DIR__.'/views/pages/logoutPage.php';








// inizio footer
require_once __DIR__ .'/views/layouts/footer.php';
?>