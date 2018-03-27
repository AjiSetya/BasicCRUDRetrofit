<?php
	include 'koneksi.php';

	$id              = $_POST['txtid'];
	$nama            = $_POST['txtnama'];
	$alamat          = $_POST['txtalamat'];
	$merk            = $_POST['txtmerk'];
	$tglpeminjaman   = $_POST['txttglpeminjaman'];
	$tglpengembalian = $_POST['txttglpengembalian'];

	$sql = "UPDATE tb_motor SET 
	mt_nama              = '$nama'
	, mt_alamat          = '$alamat'
	, mt_merk            = '$merk'
	, mt_tglpeminjaman   = '$tglpeminjaman'
	, mt_tglpengembalian = '$tglpengembalian' 
	WHERE id_motor       = '$id'";

  if ($result = $conn->query($sql)) {
		$json_response            = array();
		$json_response ["pesan"]  = "Data diperbarui";
		$json_response ["sukses"] = true;
		echo json_encode($json_response);

 	} else{

		$json_response ["pesan"]  = "Gagal memperbarui";
		$json_response ["sukses"] = false;
 		echo json_encode($json_response);
 	}
?>
