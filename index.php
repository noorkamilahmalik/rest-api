<?php

    include "conn.php";

    if ($_SERVER['REQUEST_METHOD'] == 'POST') { //jika method POST
    
        $namanya = $_POST['namanya'];
        echo $namanya;
    } else
    
    if ($_SERVER['REQUEST_METHOD'] == 'GET'){ //jika method GET
        $qu = "select * from mahasiswa";
        $ko = mysqli_query($conn, $qu);
        while ($data = mysqli_fetch_array($ko)) {
            $datanya[] = array(
                'npm' => $data['npm'],
                'nama' => $data['nama'],
                'jurusan' => $data['jurusan'],
                'kelas' => $data['kelas'],
                'gender' => $data['gender'],
                'alamat' => $data['alamat'],
            );
        }

        $respon[] = array(
            'status' => 'OK',
            'kode' => '999',
            'data' => $datanya
        );
        header("Content-type: application/json");
        echo json_encode($respon);
    }

?>