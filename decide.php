<?php include 'connect.php' ?>
<?php session_start();
$phone = $_POST['phone'];
$pwd = $_POST['pwd'];
$servernamedb = "localhost";
$usernamedb = "root";
$passworddb = "";
$databasedb = "cedhosting";
$con = mysqli_connect($servernamedb, $usernamedb, $passworddb, $databasedb);
if ($con->connect_error) {
  die("Connection failed: " . $con->connect_error);
} else {
  $sql = ("select * from tbl_user where password='$pwd' and email='$phone' or mobile='$phone' ");
  $result = mysqli_query($con, $sql);
  if (mysqli_num_rows($result) > 0) {
    $check = mysqli_fetch_array($result);
    if ($check['is_admin'] == 1) {
      $_SESSION['admin'] = $check;
      header("location:admin/index.php");
    } else {
      if ($check['is_admin'] == 0) {
        if ($check['active'] == 1) {
          echo    $_SESSION['user'] = $check['id'];
          header("location:./index.php");
        } else {

          echo '<script language="javascript">';
          echo 'confirm("You are block")';
          echo '</script>';
          echo "<script>window.location='login.php';</script>";
          // header("location:login.php");
        }
      }
    }
  } else {
    echo "<script>window.location='account.php';</script>";
  }
}
