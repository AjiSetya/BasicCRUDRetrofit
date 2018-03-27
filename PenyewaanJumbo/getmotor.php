<?php

// untuk ambil file koneksi
 	include 'koneksi.php';
// untuk deklarasi
	$response = array();
	$sql      = "SELECT * FROM tb_motor";

 	if ($result = $conn->query($sql)) {
    $json_response["tb_motor"] = array();

  	while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
      $data                       = array();
      $data["id_motor"]           = $row["id_motor"];
      $data["mt_nama"]            = $row["mt_nama"];
      $data["mt_alamat"]          = $row["mt_alamat"];
      $data["mt_merk"]            = $row["mt_merk"];
      $data["mt_tglpeminjaman"]   = $row["mt_tglpeminjaman"];
      $data["mt_tglpengembalian"] = $row["mt_tglpengembalian"];
      array_push($json_response["tb_motor"], $data);
  	}

		$json_response ["pesan"]  = "Semua data motor";
		$json_response ["sukses"] = true;
		echo json_encode($json_response);

 	} else{

		$json_response ["pesan"]  = "Gagal mengambil data";
		$json_response ["sukses"] = false;
 		echo json_encode($json_response);
 	}

 ?>
