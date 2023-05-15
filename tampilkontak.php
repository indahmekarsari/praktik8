<h2>Tampil Kontak</h2>
<table border="1">
    <tr>
        <th>ID</th>
        <th>Nama</th>
        <th>Jenis Kelamin</th>
        <th>Email</th>
        <th></th>
    </tr>
    <?php
    include 'koneksi.php';
    $mahasiswa = mysqli_query($koneksi, "SELECT * from kontak");
    $no=1;
    foreach ($mahasiswa as $row){
        $jenis_kelamin = $row['jenis_kelamin']=='L'?'Laki Laki':'Perempuan';
        echo "<tr>
            <td>$no</td>
            <td>".$row['Id']."</td>
            <td>".$row['Nama']."</td>
            <td>".$row['Jkel']."</td>
            <td>".$row['Email']."</td>
            <td>".$row['Alamat']."</td>
            <td>".$row['Kota']."</td>
            <td>".$row['Pesan']."</td>
                </tr>";
            $no++;
    }
    ?>
</table>