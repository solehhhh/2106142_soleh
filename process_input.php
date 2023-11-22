<?php
$db = mysqli_connect("localhost", "root", "", "2106142_soleh");
if (!$db) {
    echo "<script>
                alert('database tidak terhubung')    
    </script>";
};


$nama = $_POST['nama'];
$email = $_POST['email'];
$tempat_tanggal_lahir = $_POST['tempat_tanggal_lahir'];
$alamat = $_POST['alamat'];
$no_hp = $_POST['no_hp'];


$query = "INSERT INTO karyawan VALUES (NUll,'$nama','$email','$tempat_tanggal_lahir','$alamat','$no_hp')";
mysqli_query($db, $query);
echo "<script>alert('Karyawan new add')</script>";
echo "<script> window.location='./index.php'</script>";
?>