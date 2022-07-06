<?php
    session_start();

    if(isset($_POST['submit'])){

      $uname = $_POST['uname'];
      $pwd = $_POST['pwd'];
  
      //koneksi db
      $servername = "localhost";
      $username = "root";
      $password = "";
      $dbname = "Kemahasiswaan";
  
      $conn = new mysqli($servername,$username,$password,$dbname);
  
      $sql = "SELECT * FROM user WHERE username='$uname' AND password='$pwd'";
      $result = $conn->query($sql);
  
      if ($result->num_rows > 0 ){
          $_SESSION['uname']=$uname;
          $_SESSION['pwd']=$pwd;
      }else{
          echo "login gagal";
      }

    }

?>
<!DOCTYPE html>
<html>
  <head>
    <title>Generate API Key / Token</title>
  </head>
  <body>

    Selamat Datang <?php echo $_SESSION['uname']; ?>
    <form action="user_generate_key.php" method="POST">
        <input type="hidden" name="uname" value="<?php echo $_SESSION['uname']; ?>">
        <input type="hidden" name="pwd" value="<?php echo $_SESSION['pwd']; ?>">
        <input type="submit" name="submit" value="Generate Key / Token">
    </form>
  </body>
</html>