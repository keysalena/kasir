<?php
include "../../conf/conn.php";

if($_POST){
$id     = $_POST['id_order'];
$no   = $_POST['no_meja'];


$query = ("UPDATE `order` SET no_meja='$no'WHERE id_order ='$id'");
if(!mysqli_query($koneksi,"$query")){
die(mysqli_error);
}else{
echo '<script>alert("Data Berhasil Diubah !!!");
window.location.href="../../index.php?page=data_order"</script>';
}
}
