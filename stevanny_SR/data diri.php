<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
    <script type="text/javascript" src="assets/js/jquery.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.js"></script>

</head>
<body>
<section class="konten">
        <div class="container">
            <div class=" panel panel-default">
            <h1>Data Diri Ahli Gizi</h1>
            <form method="POST" action="proses_data.php">
                <div class="form-grup">
                    <label>Id User</label>
                    <input type="text" name="id" class="form-control">
                </div>
                <div class="form-grup">
                    <label>Nama</label>
                    <input type="text" name="nama" class="form-control">
                </div>
                <div class="form-grup">
                    <label>No. HP</label>
                    <input type="text" name="no_hp" class="form-control">
                </div>
                <div class="form-grup">
                    <label>Alamat</label>
                    <input type="text" name="alamat" class="form-control">
                </div>
                <div class="form-grup">
                    <label>Email</label>
                    <input type="text" name="email" class="form-control">
                </div>
                <div class="form-grup">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control">
                </div>
                <div class="form-grup">
                    <label>Tempat Lahir</label>
                    <input type="text" name="tempat_lahir" class="form-control">
                </div>
                <div class="form-grup">
                    <label>Tanggal Lahir</label>
                    <input type="date" name="tanggal_lahir" class="form-control">
                </div>
                <div class="form-grup">
                    <label>Status</label>
                    <input type="text" name="status" class="form-control">
                </div>
                <div class="form-grup">
                    <label>Agama</label>
                    <input type="text" name="agama" class="form-control">
                </div>
                <div class="form-grup">
                    <label>Tinggi Badan</label>
                    <input type="text" name="tinggi_badan" class="form-control">
                </div>
                <div class="form-grup">
                    <label>Berat Badan</label>
                    <input type="text" name="berat_badan" class="form-control">
                </div>
                <div class="form-grup">
                    <label>Jenis Kelamin</label>
                    <input type="text" name="jenis_kelamin" class="form-control">
                </div>
                <div class="form-grup">
                    <label>No. Identitas</label>
                    <input type="text" name="no_identitas" class="form-control">
                </div>
                <div class="form-grup">
                    <label>Alamat Praktek</label>
                    <input type="tel" name="alamat_praktek" class="form-control">
                </div>
                <div class="form-grup">
                    <label>Jam Praktek</label>
                    <input type="text" name="jam_praktek" class="form-control">
                </div>
                <div class="form-grup">
                    <label>Tarif</label>
                    <input type="text" name="tarif" class="form-control">
                </div>
                <br/>
                <div class="form-grup">
                    <button name="submit" class="btn btn-info">Submit</button>
                </div>
            </form>
        </div>
        </div>
    </section>

</body>
</html> 