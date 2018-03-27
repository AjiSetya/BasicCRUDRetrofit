<?php
	include 'koneksi.php';

	$id              = $_POST['txtid'];
	$nama            = $_POST['txtnama'];
	$alamat          = $_POST['txtalamat'];
	$merk            = $_POST['txtmerk'];
	$tglpeminjaman   = $_POST['txttglpeminjaman'];
	$tglpengembalian = $_POST['txttglpengembalian'];

	$sql = "INSERT INTO tb_mobil(id_mobil, mb_nama, mb_alamat, mb_merk, mb_tglpeminjaman, mb_tglpengembalian) VALUES('$id', '$nama', '$alamat', '$merk', '$tglpeminjaman', '$tglpengembalian')";

  if ($result = $conn->query($sql)) {
		$json_response            = array();
		$json_response ["pesan"]  = "Data tersimpan";
		$json_response ["sukses"] = true;
		echo json_encode($json_response);

 	} else{

		$json_response ["pesan"]  = "Gagal menyimpan data";
		$json_response ["sukses"] = false;
 		echo json_encode($json_response);
 	}
?>
