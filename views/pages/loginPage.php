

<div class="container">

<h1>login</h1>
<form action="<?php echo getHref('PHP/php-mysqli/login.php') ?>" method="POST">

  <div class="mb-3 row">
    <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
      <input name="email" type="text" class="form-control" id="staticEmail" >
    </div>
  </div>
  <div class="mb-3 row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
    <div class="col-sm-10">
      <input name="password" type="password" class="form-control" id="inputPassword">
    </div>
  </div>

  <button class="btn btn-primary ">invia</button>
</form>


</div>