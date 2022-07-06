<?php

    header("Content-Type:application/json");
    $method = $_SERVER['REQUEST_METHOD'];
    //Variable Hasil
    $result = array();

    if($method=='PUT') {
 
        parse_str(file_get_contents("php://input"), $_PUT);

        //pengecekan parameter
        if(isset($_PUT['nim']) AND isset($_PUT['nama']) AND isset($_PUT['alamat']) AND isset($_PUT['id_mhs'])){

            $nim = $_PUT['nim'];
            $nama = $_PUT['nama'];
            $alamat = $_PUT['alamat'];
            $id_mhs = $_PUT['id_mhs'];
            
                    //Method yang digunakana sesuai
            $result['Status'] = [
                "code" => 200,
                "description" => 'data berhasil DIupdate'
            ];
            //Koneksi Kedalam Databases
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "Kemahasiswaan";
            //membuat Koneksi
            $conn = new mysqli($servername,$username,$password,$dbname);

            //buat Query database
            $sql = "UPDATE mahasiswa SET nim='$nim',nama='$nama',alamat='$alamat' WHERE id_mhs = '$id_mhs'";

            //eksekusi Query
            $conn->query($sql);

            $result['result'] = [
                "nim" => $nim,
                "nama" => $nama,
                "alamat" => $alamat
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