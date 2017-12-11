<?php session_start(); ?>
<?php require_once "../../db/mysql.php"; ?>
<?php
  if (isset($_POST["Email"]) && isset($_POST["Password"])) {
    $email = $_POST["Email"];
    $password = $_POST["Password"];
    $sql = "select * from users where email ='$email' and password='$password'";
    $result = $conn->query($sql);
    if($result->num_rows > 0)
    {
      $row = $result->fetch_assoc();
      $_SESSION["login"] = true;
      $_SESSION["userid"] = $row["id"];
      $_SESSION["nameuser"]=$row["name"];
      $_SESSION["Chucvu"]=$row["role"];
    }
    else {
      $_SESSION["flash"] = "Đăng nhập thất bại";
    }

    header("location: ../index.php");
  }
?>
