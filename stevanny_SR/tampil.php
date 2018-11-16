<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
    <script type="text/javascript" src="assets/js/jquery.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.js"></script>

</head>
<body>
    <h3>Profil Ahli Gizi</h3>
    <table border="1" class="table">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>No HP</th>
            <th>Alamat</th>
            <th>Email</th>
            <th>Password</th>
            <th>Tempat Lahir</th>
            <th>Tanggal Lahir</th>
            <th>Status</th>
            <th>Agama</th>
            <th>Tinggi badan</th>  
            <th>Berat Badan</th>
            <th>Jenis Kelamin</th>
            <th>No Identitas</th>
            <th>Alamat Praktek</th>
            <th>Jam Praktek</th>
            <th>Tarif</th>
            <th>Aksi</th>      
        </tr>
        <?php 
        include "koneksi/koneksi.php";
        $query_mysql = mysql_query("SELECT * FROM User")or die(mysql_error());
        $nomor = 1;
        while($data = mysql_fetch_array($query_mysql)){
        ?>
        <tr>
            <td><?php echo $nomor++; ?></td>
            <td><?php echo $data['nama']; ?></td>
            <td><?php echo $data['no_hp']; ?></td>
            <td><?php echo $data['alamat']; ?></td>
            <td><?php echo $data['email']; ?></td>
            <td><?php echo $data['password']; ?></td>
            <td><?php echo $data['tempat_lahir']; ?></td>
            <td><?php echo $data['tanggal_lahir']; ?></td>
            <td><?php echo $data['status']; ?></td>
            <td><?php echo $data['agama']; ?></td>
            <td><?php echo $data['tinggi_badan']; ?></td>
            <td><?php echo $data['berat_badan']; ?></td>
            <td><?php echo $data['jenis_kelamin']; ?></td>
            <td><?php echo $data['no_identitas']; ?></td>
            <td><?php echo $data['alamat_praktek']; ?></td>
            <td><?php echo $data['jam_praktek']; ?></td>
            <td><?php echo $data['tarif']; ?></td>

            <td>
                <a class="hapus" href="hapus.php?id=<?php echo $data['id']; ?>">Hapus</a>
                             
            </td>
            
        </tr>
        <?php } ?>
    </table>
</body>
</html>

</body>
</html> 