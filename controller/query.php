<?php
include 'connection.php';
switch ($_GET['i']) {
  case 'contact':
    $nama=$_POST['nama'];
    $email=$_POST['email'];
    $pesan=$_POST['pesan'];
    //mysqli_query($con,"insert into t_contact (nama,email,pesan) values ('$nama' , '$email' , '$pesan' )");
    echo "<script>
          alert('Terima Kasih Untuk Pesan , Saya akan menjawab secepatnya');
          </script>";

    header("Location: ".$_SERVER['HTTP_REFERER']);
    break;

  default:
    # code...
    break;
}
?>
