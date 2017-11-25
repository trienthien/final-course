<?php session_start(); ?>
<?php require_once "../../../db/mysql.php"; ?>
<?php require_once "../../helper/user-helper.php"; ?>
<?php
  if (isset($_POST["name"]) && isset($_POST["catalog_id"]) && isset($_POST["image"]) && isset($_POST["description"]) && isset($_POST["qty"]) && isset($_POST["price"])) {

    $name = $_POST["name"];
    $image = $_POST["image"];
    $description = $_POST["description"];
    $qty = $_POST["qty"];
    $price = $_POST["price"];
    $user_id = 1;
    $catalog_id = $_POST["catalog_id"];

    if (is_empty($name,"name is not empty"))
      redirect("new.php");
    if (is_empty($image,"image is not empty"))
      redirect("new.php");
    if (is_empty($description,"desc is not empty"))
      redirect("new.php");
    if (is_empty($qty,"qty is not empty"))
      redirect("new.php");
    if (is_empty($price,"price is not empty"))
      redirect("new.php");
    if (is_empty($catalog_id,"catalog_id is not empty"))
      redirect("new.php");
{
      $sql = "insert into products(name, image, description, qty,price, catalog_id,user_id) values('$name', '$image', '$description', '$qty', '$price','$catalog_id','$user_id' )";
      $result = $conn->query($sql);
      if ($result) {
        $_SESSION["flash"] = "new record added sucess";

      }else{
        $_SESSION["flash"] = "Error:".$sql."<br>".$conn->error;
      }
}
    redirect("new.php");
  }
?>
