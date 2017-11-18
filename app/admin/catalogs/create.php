<?php require_once "../../../db/mysql.php" ;?>
<?php require_once "../../helper/catalogs-helper.php" ;?>
<?php session_start(); ?>
<?php
  if(isset($_POST["name"]) && isset($_POST["description"])){
    $name = $_POST["name"];
    $description = $_POST["description"];

    if (is_empty($name,"Name is not empty"))
      redirect("new.php");
    if (is_empty($description,"Description is not empty"))
      redirect("new.php");

    if(!is_exist_name($name)){
      $sql = "insert into catalogs(name,description) values('$name','$description')";
      $result = $conn->query($sql);
      if ($result) {
        $_SESSION["flash"] = "new record add success";
      }else{
        $_SESSION["flash"] = "error : ".sql."<br>".$conn->error;
      }
    }
     header("location: new.php");
  }
?>
