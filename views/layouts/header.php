<?php

require_once __DIR__.'/../../data/conn.php';



// apro la sessione solo se la sessione non è gia aperta
if(session_status() === PHP_SESSION_NONE){
  session_start();
}


$logged=false;

if(isset($_SESSION['userID'])){
  $logged = true;
}

function getHref($uri){
  $scheme = $_SERVER['REQUEST_SCHEME'];
  $host = $_SERVER['HTTP_HOST'];
  
  echo "$scheme://$host/$uri";
}


?>


<body>
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">LIST</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
      
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="<?php getHref('PHP/php-mysqli/') ?>">Home</a>
          </li>
          <?php if($logged): ?>
          <li class="nav-item">
            <a class="nav-link" href="<?php getHref('PHP/php-mysqli/students.php') ?>">elenco studenti</a>
          </li>
          <?php endif; ?>
          <?php if(!$logged): ?>
          <li class="nav-item">
            <a class="nav-link" href="<?php getHref('PHP/php-mysqli/login.php') ?>">login</a>
          </li>
          <?php endif; ?>
          <?php if($logged): ?>
          <li class="nav-item">
            <a class="nav-link" href="<?php getHref('PHP/php-mysqli/logout.php') ?>">logout</a>
          </li>
          <?php endif; ?>
         
        </ul>
      </div>
    </div>
  </nav>