<?php

// untuk ambil file koneksi
 	include 'koneksi.php';
// untuk deklarasi
	$response = array();
	$sql      = "SELECT * FROM tb_mobil";

 	if ($result = $conn->query($sql)) {
    $json_response["tb_mobil"] = array();

  	while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
      $data                       = array();
      $data["id_mobil"]           = $row["id_mobil"];
      $data["mb_nama"]            = $row["mb_nama"];
      $data["mb_alamat"]          = $row["mb_alamat"];
      $data["mb_merk"]            = $row["mb_merk"];
      $data["mb_tglpeminjaman"]   = $row["mb_tglpeminjaman"];
      $data["mb_tglpengembalian"] = $row["mb_tglpengembalian"];
      array_push($json_response["tb_mobil"], $data);
  	}

		$json_response ["pesan"]  = "Semua data mobil";
		$json_response ["sukses"] = true;
		echo json_encode($json_response);

 	} else{

		$json_response ["pesan"]  = "Gagal mengambil data";
		$json_response ["sukses"] = false;
 		echo json_encode($json_response);
 	}

 ?>
