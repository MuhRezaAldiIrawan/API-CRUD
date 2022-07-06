<?php

    //Header Hasil dalam bentuk Json
    header("Content-Type:application/json");

    //Tangkap Methode
    $method = $_SERVER['REQUEST_METHOD'];

    //Variable Hasil
    $result = array();

    if($method=='GET') {

        //Method yang digunakana sesuai
        $result['Status'] = [
            "code" => 200,
            "description" => 'Request Valid'
        ];
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

