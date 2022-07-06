<?php

    //Header Hasil dalam bentuk Json
    header("Content-Type:application/json");

    //Tangkap Methode
    $method = $_SERVER['REQUEST_METHOD'];

    //Variable Hasil
    $result = array();

    if($method=='GET') {

        //pengecekan parameter
        if(isset($_GET['nim'])){
            $nim = $_GET['nim'];
            
                    //Method yang digunakana sesuai
            $result['Status'] = [
                "code" => 200,
                "description" => 'Request Valid'
            ];
            //Koneksi Kedalam Databases
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "Kemahasiswaan";

            //membuat Koneksi
            $conn = new mysqli($servername,$username,$password,$dbname);

            //buat Query database
            $sql = "SELECT * FROM mahasiswa WHERE nim = $nim";

            //eksekusi Query
            $hasil_query = $conn->query($sql);

            $result['result'] = $hasil_query->fetch_all(MYSQLI_ASSOC);

        }else{
             //Method yang digunakana sesuai
            $result['Status'] = [
            "code" => 400,
            "description" => 'Paramater inv alid'
        ];
        }        
    }else{

        //Method yang di gunakana tidak sesuai
        $result['Status'] = [
            "code" => 400,
            "description" => 'Request Tidak Valid'
        ];
    }

    //Tampilkan data dalam bentuk Json
    echo json_encode($result);
    

?>

