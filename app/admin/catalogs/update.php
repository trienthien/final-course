<?php session_start(); ?>
<?php require_once "../../../db/mysql.php"; ?>
<?php require_once "../../helper/user-helper.php"; ?>
<?php
  if (isset($_POST["name"]) && isset($_POST["email"]) && isset($_POST["password"])
    && isset($_POST["role"]) && isset($_POST["id"])) {

    $name = $_POST["name"];
    $description = $_POST["description"];
    $id = $_POST["id"];

    if (is_empty($name,"name is not empty"))
      redirect("new.php");
    if (is_empty($description,"description is not empty"))
      redirect("new.php");

    if (!is_exist_email($description)) {
      $sql = "update users set name='$name', description = '$description' where id=$id";
      $result = $conn->query($sql);
      if ($result) {
        $_SESSION["flash"] = "new record added sucess";
       }else{
        $_SESSION["flash"] = "Error:".$sql."<br>".$conn->error;
      }
    }
    redirect("index.php");
  }
?>
