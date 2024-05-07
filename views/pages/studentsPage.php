<div class="container">

<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">name</th>
      <th scope="col">cognome</th>
      <th scope="col">enrolment-date</th>
      <th scope="col">action</th>

    </tr>
  </thead>
  <tbody>
    <?php if($result && $result->num_rows >0){
      while($row =$result->fetch_object()){?>
      <tr>
        <th scope="row"><?php echo $row->id ?></th>
        <td><?php echo $row->name ?></td>
        <td><?php echo $row->surname ?></td>
        <td><?php echo $row->enrolment_date ?></td>
        <td><a href="<?php getHref('PHP/php-mysqli/student.php') ?>" class="btn btn-outline-primary ">vai</a></td>

   
      </tr>
     <?php } } ?>
  </tbody>
</table>

</div>