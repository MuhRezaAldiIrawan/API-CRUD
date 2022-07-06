<?php

    //Header Hasil dalam bentuk Json
    header("Content-Type:application/json");

    //Tangkap Methode
    $method = $_SERVER['REQUEST_METHOD'];

    //Variable Hasil
    $result = array();

    if($method=='POST') {

        //pengecekan parameter
        if(isset($_POST['nim']) AND isset($_POST['nama']) AND isset($_POST['alamat'])){

            $nim = $_POST['nim'];
            $nama = $_POST['nama'];
            $alamat = $_POST['alamat'];

            //tangkap foto
            $stringfoto = $_POST['stringfoto'];
            $extfoto = $_POST['extfoto'];

            //decode foto string 
            $foto = base64_decode($stringfoto);

            //pindahkan dari tmp ke lokasi permanen
            file_put_contents('foto/'.$nim.'.'.$extfoto,$foto);
            //membuat foto nama foto
            $nama_foto = $nim.'.'.$extfoto;
           
            $result['Status'] = [
                "code" => 200,
                "description" => 'data berhasil dimasukan'
            ];
            //Koneksi Kedalam Databases
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "Kemahasiswaan";

            //membuat Koneksi
            $conn = new mysqli($servername,$username,$password,$dbname);

            //buat Query database
            $sql = "INSERT INTO mahasiswa (nim, nama, alamat,foto) VALUES ('$nim', '$nama','$alamat','$nama_foto')";

            //eksekusi Query
            $conn->query($sql);

            $result['result'] = [
                "nim" => $nim,
                "nama" => $nama,
                "alamat" => $alamat,
                "foto" => $nama_foto
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

