<?php session_start(); ?>
<?php require_once "../../../db/mysql.php"; ?>
<?php require_once "../../helper/catalogs-helper.php"; ?>
<?php
   if (isset($_GET["id"])) {
   $id = $_GET["id"];
   $sql = "select * from users where id = $id";
   $result = $conn->query($sql);
   if ($result->num_rows > 0) {
   $row = $result->fetch_assoc();
   $name = $row["name"];
   $description = $row["description"];
   }
   }
   ?>
<!DOCTYPE html>
<html>
   <head>
      <title>tao users</title>
      <link rel="stylesheet" type="text/css" href="../../../public/css/bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href="../../../public/css/custom.css">
   </head>
   <body>
      <div class="wrapper">
         <form method="post" action="update.php">
            <div class="row">
               <i class="flash"><?php if(isset($_SESSION["flash"])) echo $_SESSION["flash"]; ?></i>
            </div>
            <div>
               <h1>Chinh sua chuyen muc</h1>
            </div>
            <input type="hidden" name="id" value="<?php echo $id; ?>" class="form-control">
            <div class="row">
               <label>Ten chuyen muc:</label>
               <input type="text" name="name" value="<?php echo $name; ?>" class="form-control">
            </div>
            <div class="row">
               <label>Mo ta:</label>
               <input type="text" name="description" value="<?php echo $description; ?>" class="form-control">
            </div>
            <br>
            <div class="row">
               <button class="btn ntm =primary">Submit</button>
            </div>
         </form>
      </div>
   </body>
</html>
<?php unset($_SESSION["flash"]); ?>

