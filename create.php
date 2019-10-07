<?php
require 'db.php';
$message = '';
if (isset ($_POST['name'])  && isset($_POST['email']) ) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $sql = 'INSERT INTO people(name, email) VALUES(:name, :email)';
  $statement = $connection->prepare($sql);
  if ($statement->execute([':name' => $name, ':email' => $email])) {
    $message = 'data inserted successfully';
  }



}


 ?>
<?php require 'header.php'; ?>

<div class="container">
  <div class="card mt-5">
    <div class="card-header">
      <h2>Register Project Topic</h2>
    </div>
    <div class="card-body">
      <?php if(!empty($message)): ?>
        <div class="alert alert-success">
          <?= $message; ?>
        </div>
      <?php endif; ?>
      <form name="reg" method="post">
        <div class="form-group">
          <input type="hidden"><font color="red"><div id="mydiv"></div></font>
          <label for="name">Name</label>
          <input type="text" name="name" id="name" onkeyup="check(this.value);" class="form-control">
        </div>
        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" name="email" id="email" class="form-control">
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-info">Register Project</button>
        </div>
      </form>
    </div>
  </div>
</div>
<?php require 'footer.php'; ?>
