<?php

    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL, "http://localhost/crudapi/getalldata.php");

    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);

    $output = curl_exec($ch);

    curl_close($ch);

    $data = json_decode($output);
    echo "<pre>"; print_r($data); echo "</pre>";



?>