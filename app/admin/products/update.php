<?php session_start(); ?>
<?php require_once "../../../db/mysql.php"; ?>
<?php require_once "../../helper/products-helper.php"; ?>
<?php
  if(isset($_POST["id"]) && isset($_POST["catalog_id"]) && isset($_POST["name"])
    && isset($_POST["description"]) && isset($_POST["image"]) && isset($_POST["qty"])
    && isset($_POST["price"])){
    $id = $_POST["id"];
    $catalog_id = $_POST["catalog_id"];
    $name = $_POST["name"];
    $description = $_POST["description"];
    $image = $_POST["image"];
    $qty = $_POST["qty"];
    $price = $_POST["price"];

    $sql = "update products set catalog_id= $catalog_id,name='$name',description ='$description', image = '$image', qty = $qty, price = $price where id=$id";
    $result = $conn->query($sql);
    if($result){
      $_SESSION["flash"] = "Updated success";
    }else{
      $_SESSION["flash"] = "Error: ".$sql."<br>".$conn->error;
    }

    header("location: index.php");
  }
?>
