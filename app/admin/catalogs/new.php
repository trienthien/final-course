<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
  <title>Catalogs</title>
  <link rel="stylesheet" type="text/css" href="../../../public/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../../../public/css/custom.css">
</head>
<body>
<div class="wpapper">
  <form method="post" action="create.php">
    <div>
      <i class="flash"><?php if (isset($_SESSION["flash"])) echo $_SESSION["flash"]; ?></i>
    </div>
    <div>
      <h1>Tao moi chuyen muc</h1>
    </div>
    <div class="row">
      <label>Ten chuyen muc: </label> <br>
      <input class="form-control" type="text" name="name">
    </div>
    <div class="row">
      <label>Mo ta: </label> <br>
      <input class="form-control" type="text" name="description">
    </div>
    <div class="row">
    <button class="btn btn-primary">Submit</button>
    </div>
  </form>
</div>
</body>
</html>
<?php unset($_SESSION["flash"]); ?>
