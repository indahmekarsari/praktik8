<?php 
include 'koneksidb.php';
    if (isset($_POST['submit'])) {
        $namaibu = $_POST['namaibu'];
        $tlibu = $_POST['tlibu'];
        $pendibu = $_POST['pendibu'];
        $pekeribu = $_POST['pekeribu'];
        $salaryibu = $_POST['salaryibu'];
        $bekerbibu = $_POST['bekerbibu'];

      // Menyimpan ke database
      $sql = mysqli_query($conn, "INSERT INTO dataibu (namaibu, tlibu, pendibu, pekeribu, salaryibu, bekerbibu) VALUES ('$namaibu', '$tlibu', '$pendibu', '$pekeribu', '$salaryibu', '$berkebibu')");
      if ($sql) {
          // pesan jika data tersimpan
          echo "<script>alert('Data Keseluruhan Berhasil Disimpan!'); window.location.href='formregist.php'</script>"; 
        } else {
          // pesan jika data gagal disimpan
            echo "alert('Data Ibu Kandung Gagal Ditambahkan!!');";
        }
      }
?>