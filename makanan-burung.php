<?php 
$koneksi = mysqli_connect("localhost","root","","db_petshouse");
 
// Check connection
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}
$merk_makanan   = "";
$nama_makanan  = "";
$jenis_makanan = "";
$harga  = "";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="img/icon/icon-title.png">
    <title>Makanan Burung</title>
</head>
<body>
    <div class="nav">
        <img src="img/icon/paws.png" class="icon-nav">
        <label class="judul-nav">Pets<br>House</label>
    <div class="menu-nav">
        <a href="index.html"><p>Dashboard</p></a>
        <a href="layanan.html"><p>Layanan</p></a>
        <a href="tentang.html"><p>Tentang</p></a>
        <a href="kontak.html"><p>Kontak</p></a>
    </div>
        <a href="Profile.html"><img src="img/icon/icon-nav.png" class="icon-nav2"></a>
        <a href="profile.html"><input type="button" value="Profile Kami" class="button-profile"></a>
    </div>
    <div class="header-3">
        <h1 class="Makanan">Makanan Burung</h1>
        <img src="img/icon/icon-food-1.png" class="icon-food-1">
        <div class="box-1">
        <table class = "table">
                <tr>
                    <td>No</td>
                    <td>Merk Makanan</td>
                    <td>Nama Makanan</td>
                    <td>Jenis Makanan</td>
                    <td>Harga</td>
                </tr>
                <tbody>
                    <?php
                        $sql2 = "SELECT * FROM makanan_burung order by id desc";
                        $qry2  = mysqli_query($koneksi,$sql2);
                        $no = 1;
                        while($r2 = mysqli_fetch_array($qry2)){
                            $id     = $r2['id'];
                            $merk_makanan   = $r2['merk_makanan'];
                            $nama_makanan  = $r2['nama_makanan'];
                            $jenis_makanan  = $r2['jenis_makanan'];
                            $harga = $r2['harga'];
                        ?>
                        <tr>
                            <td><?php echo $no++ ?></td>
                            <td><?php echo $merk_makanan ?></td>
                            <td><?php echo $nama_makanan ?></td>
                            <td><?php echo $jenis_makanan ?></td>
                            <td><?php echo $harga ?></td>
                        </tr>
                        <?php
                        }
                        ?>
                </tbody>
            </table>
    </div>
    <div class="footer">
        <img src="img/icon/paw-foot.png" class="icon-foot">
        <Label class="label-footer">Pets<br>House</Label>
        <label class="sosmed">Sosial Media</label>
        <a href="#"><img src="img/icon/fb-icon.png" class="fb-icon"></a>
        <a href="#"><img src="img/icon/ig-icon.png" class="ig-icon"></a>
        <a href="#"><img src="img/icon/tele-icon.png" class="tele-icon"></a>
        <label class="Menu">Halaman Menu</label>
            <a href="index.html"><p class="Menu-1">Dashboard</p></a>
            <a href="layanan.html"><p class="Menu-2">Layanan</p></a>
            <a href="tentang.html"><p class="Menu-3">Tentang</p></a>
            <a href="kontak.html"><p class="Menu-4">Kontak</p></a>
        <label class="anggota">Anggota Kelompok</label>
            <label class="anggota-1">Akbar</label>
            <label class="anggota-2">Diah</label>
            <label class="anggota-3">Zaki</label>
            <label class="anggota-4">Cahya</label>
        <label class="kontak-kami">Hubungi Kami</label>
            <label class="email">PetsHouse_Admin@gmail.com</label>
            <label class="no-wa">WA   : 082816950180</label>
    </div>
</body>
</html>