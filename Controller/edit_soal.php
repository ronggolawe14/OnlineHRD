<?php 
include 'configdb.php';
require_once '../core/sessionadmin.php';

if (isset($_POST['submit'])) {
$no = (string)$nomor = $_POST['nomor'];
$soal = $_POST['soal'];
$jawaban = $_POST['jawaban'];

//$edit = mysqli_query($conn, "UPDATE t_soal SET soal = '$soal', system_answer = '$jawaban' WHERE no = $no");
$edit = $conn->query("UPDATE t_soal SET soal = '$soal', system_answer = '$jawaban' WHERE no = $no");

if ($edit) {
		echo '<script>alert("Edit sukses!")</script>';
		header("Location: ../admin/manage_soal.php");
	} else {
		echo '<script>alert("Edit gagal!")</script>';
	}
}
?>