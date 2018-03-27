<?php
	include 'koneksi.php';

	$id = $_POST['txtid'];
	$sql = "DELETE FROM tb_motor WHERE id_motor ='$id'";

  if ($result = $conn->query($sql)) {
		$json_response            = array();
		$json_response ["pesan"]  = "Data terhapus";
		$json_response ["sukses"] = true;
		echo json_encode($json_response);

 	} else{

		$json_response ["pesan"]  = "Gagal menghapus data";
		$json_response ["sukses"] = false;
 		echo json_encode($json_response);
 	}
?>
