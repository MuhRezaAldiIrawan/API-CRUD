<?php

    header("Content-Type:application/json");
    
    $method = $_SERVER['REQUEST_METHOD'];
    //Variable Hasil
    $result = array();

    if($method=='DELETE') {
 
        parse_str(file_get_contents("php://input"), $_DELETE);

        //pengecekan parameter
        if(isset($_DELETE['id_mhs'])){

            $id_mhs = $_DELETE['id_mhs'];
            
           //Method yang digunakana sesuai
            $result['Status'] = [
                "code" => 200,
                "description" => 'data berhasil di delete'
            ];
            //Koneksi Kedalam Databases
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "Kemahasiswaan";
            //membuat Koneksi
            $conn = new mysqli($servername,$username,$password,$dbname);

            //buat Query database
            $sql = "DELETE FROM mahasiswa WHERE id_mhs = '$id_mhs'";

            //eksekusi Query
            $conn->query($sql);

            $result['result'] = [
                "id_mhs" => $id_mhs,
 
            ];

        }else{
             //Method yang digunakana sesuai
            $result['Status'] = [
            "code" => 400,
            "description" => 'Method not valid'
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