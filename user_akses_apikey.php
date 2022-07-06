<?php

    $key = $_GET['key'];

    //koneksi db
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "Kemahasiswaan";
      
    $conn = new mysqli($servername,$username,$password,$dbname);
      
    $sql = "SELECT * FROM user WHERE key_token = '$key'";
    $result = $conn->query($sql);
      
    if ($result->num_rows > 0 ){
        echo "Key / Token Valid";
    }else{
        echo "Key / Token Invalid";
    }

?>