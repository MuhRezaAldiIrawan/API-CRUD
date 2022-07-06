<?php

    if(isset($_FILES['foto'])){
        
        //data biasa
        $nim = $_POST['nim'];
        $nama = $_POST['nama'];
        $alamat = $_POST['alamat'];

        //data gambar
        $file_name = $_FILES['foto']['name'];
        $file_tmp = $_FILES['foto']['tmp_name'];

        //inisialisasi data gambar
        $data_gambar = file_get_contents($file_tmp);
        $data_parts = pathinfo($file_name);
        $data_extention = $data_parts['ekstension'];

        //ubha gambar menjadi string
        $gambar_base64 = base64_encode($data_gambar);

        $inputPost = array(
            'nim' => $nim,
            'nama' => $nama,
            'alamat' => $alamat,
            'stringfoto' => $gambar_base64,
            'extfoto' => $data_extention

        );

        $response = curl_exec($curl);
        $err  = curl_error($curl);
    
        curl_close($curl);

        if($err){
            echo $err;
        }else{
            echo $response;
        }

    };

?>