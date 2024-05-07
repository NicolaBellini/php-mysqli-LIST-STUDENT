<?php





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
          <li class="nav-item">
            <a class="nav-link" href="<?php getHref('PHP/php-mysqli/students.php') ?>">elenco studenti</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php getHref('PHP/php-mysqli/login.php') ?>">login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php getHref('PHP/php-mysqli/logout.php') ?>">logout</a>
          </li>
         
        </ul>
      </div>
    </div>
  </nav>