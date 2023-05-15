<!DOCTYPE html>
<html>
<head>
	<title>Data Pendaftaran</title>
</head>
<body>
	<h1>Data Pendaftaran Peserta Didik</h1>
	<h4>Data Registrasi</h4>

	<?php
		include 'koneksidb.php';
		$registrasi = mysqli_query($conn, "SELECT * from registrasi");
	?>

	<?php foreach ($registrasi as $data): ?>
		<ul>
			<li>Jenis Pendaftaran : <?= $data['jenispend'] ?></li>
			<li>Tanggal Masuk Sekolah : <?= $data['tglmsksklh'] ?></li>
			<li>NIS : <?= $data['nis'] ?></li>
			<li>Nomor Peserta Ujian : <?= $data['nopesujian'] ?></li>
			<li>Apakah Pernah PAUD? : <?= $data['appaud'] ?></li>
			<li>Apakah Pernah TK? : <?= $data['aptk'] ?></li>
			<li>No. Seri SKHUN Sebelumnya : <?= $data['noserskhun'] ?></li>
			<li>No. Seri Ijazah Sebelumnya : <?= $data['noserijazah'] ?></li>
			<li>Hobi : <?= $data['hobi'] ?></li>
			<li>Cita-cita : <?= $data['citacita'] ?></li>
		</ul>
	<?php endforeach; ?>

    <h4>Data Pribadi</h4>

    <?php
    include 'koneksidb.php';
    $datapribadi = mysqli_query($conn, "SELECT * from datapribadi");
    ?>

    <?php foreach ($datapribadi as $data): ?>
    <ul>
        <li>Nama Lengkap : <?= $data['namaleng'] ?></li>
        <li>Jenis Kelamin : <?= $data['jkelamin'] ?></li>
        <li>NISN : <?= $data['nisn'] ?></li>
        <li>NIK : <?= $data['nik'] ?></li>
        <li>Tempat Lahir : <?= $data['tlahir'] ?></li>
        <li>Tanggal Lahir : <?= $data['tglahir'] ?></li>
        <li>Agama : <?= $data['agama'] ?></li>
        <li>Berkebutuhan Khusus : <?= $data['berkebkhusus'] ?></li>
        <li>Alamat Jalan : <?= $data['alamat'] ?></li>
        <li>RT : <?= $data['rt'] ?></li>
        <li>RW : <?= $data['rw'] ?></li>
        <li>Nama Dusun : <?= $data['namadusun'] ?></li>
        <li>Nama Kelurahan/Desa : <?= $data['namakel'] ?></li>
        <li>Kecamatan : <?= $data['kec'] ?></li>
        <li>Kode Pos : <?= $data['kodepos'] ?></li>
        <li>Tempat Tinggal : <?= $data['ttinggal'] ?></li>
        <li>Moda Transportasi : <?= $data['transport'] ?></li>
        <li>Nomor HP : <?= $data['nohp'] ?></li>
        <li>Nomor Telepon : <?= $data['notelp'] ?></li>
        <li>Email Pribadi : <?= $data['email'] ?></li>
        <li>Penerima KPS/PKH/KIP : <?= $data['kpspkh'] ?></li>
        <li>No. KPS/KKS/PKH/KIP : <?= $data['nokpspkh'] ?></li>
        <li>Kewarganegaraan : <?= $data['kwn'] ?></li>
        <li>Nama Negara : <?= $data['namaneg'] ?></li>

    </ul>
    <?php endforeach; ?>

    <h4>Data Ayah Kandung</h4>

    <?php
    include 'koneksidb.php';
    $dataayah1 = mysqli_query($conn, "SELECT * from dataayah1");
    ?>

    <?php foreach ($dataayah1 as $data): ?>
    <ul>
        <li>Nama Ayah Kandung : <?= $data['namaayah'] ?></li>
        <li>Tahun Lahir : <?= $data['tlayah'] ?></li>
        <li>Pendidikan : <?= $data['pendayah'] ?></li>
        <li>Pekerjaan : <?= $data['pekerayah'] ?></li>
        <li>Penghasilan Bulanan : <?= $data['salaryayah'] ?></li>
        <li>Berkebutuhan Khusus : <?= $data['bekerayah'] ?></li>
        
    </ul>
    <?php endforeach; ?>

    <h4>Data Ibu Kandung</h4>

    <?php
    include 'koneksidb.php';
    $dataibu = mysqli_query($conn, "SELECT * from dataibu");
    ?>

    <?php foreach ($dataibu as $data): ?>
    <ul>
        <li>Nama Ibu Kandung : <?= $data['namaibu'] ?></li>
        <li>Tahun Lahir : <?= $data['tlibu'] ?></li>
        <li>Pendidikan : <?= $data['pendibu'] ?></li>
        <li>Pekerjaan : <?= $data['pekeribu'] ?></li>
        <li>Penghasilan Bulanan : <?= $data['salaryibu'] ?></li>
        <li>Berkebutuhan Khusus : <?= $data['bekerbibu'] ?></li>
    
    </ul>
    <?php endforeach; ?>

</body>
</html>