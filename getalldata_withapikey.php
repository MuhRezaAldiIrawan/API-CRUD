<?php

    //Header Hasil dalam bentuk Json
    header("Content-Type:application/json");

    $header = apache_request_headers();

    $key = $header['key'];

    //Tangkap Methode
    $method = $_SERVER['REQUEST_METHOD'];

    //Variable Hasil
    $result = array();

    //Koneksi Kedalam Databases
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "Kemahasiswaan";
    
    //membuat Koneksi
    $conn = new mysqli($servername,$username,$password,$dbname);

    $sql = "SELECT * FROM user WHERE key_token = '$key'";
    $user = $conn->query($sql);
      
    if ($user->num_rows > 0 ){
        
        if($method=='GET') {

            //Method yang digunakana sesuai
            $result['Status'] = [
                "code" => 200,
                "description" => 'Request Valid'
            ];

            //buat Query database
            $sql = "SELECT * FROM mahasiswa";

            //eksekusi Query
            $hasil_query = $conn->query($sql);

            $result['result'] = $hasil_query->fetch_all(MYSQLI_ASSOC);     
        }else{
            //Method yang di gunakana tidak sesuai
           $result['Status'] = [
                "code" => 400,
                "description" => 'Request Tidak Valid'
            ];
        }
    }else{
        $result['Status'] = [
            "code" => 400,
            "description" => 'API Key / Token tidak valid Tidak Valid'
        ];
    }    
    
    //Tampilkan data dalam bentuk Json
    echo json_encode($result);
?>

