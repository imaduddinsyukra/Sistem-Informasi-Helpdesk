<?php
include "config/koneksi.php";//sambung ke mysql

//mengambil nilai dari form
$id_user=$_POST['id_user'];
$nama=$_POST['nama']; 
$username=$_POST['username']; 
$password= md5($_POST['password']); 


$update = mysql_query("UPDATE user SET id_user = '$id_user', nama = '$nama' , username='$username', password='$password' WHERE id_user = '$id_user'");

if ($update){
//echo "sukses update data";
?> <?php echo "<script language='javascript'> 
            alert('Proses Simpan Data Sukses, Silahkan Login Ulang Untuk Melanjutkan'); 
            window.open('../index.php?p=home','_top') 
         </script>"; ?>
		 <?php
}else{
echo "gagal : ".mysql_error();
}
?>