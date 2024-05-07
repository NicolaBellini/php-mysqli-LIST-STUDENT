<div class="container">

<h1><?php echo $student->name  ?> <?php echo $student->surname  ?></h1>

<ul>
  <li><?php echo $student->registration_number ?></li>
  <li><?php echo $student->fiscal_code ?></li>
  <li><?php echo $student->date_of_birth ?></li>
</ul>


<a class="btn btn btn-outline-primary " href="<?php getHref('PHP/php-mysqli/students.php') ?>">torna</a>

</div>