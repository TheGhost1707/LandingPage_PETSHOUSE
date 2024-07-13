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

if(isset($_GET['op'])){
    $op =  $_GET['op'];
}else{
    $op = "";
}

if($op == 'delete'){
    $id     = $_GET['id'];
    $sql1   = "DELETE FROM makanan_ikan WHERE id = '$id' ";
    $qry1   = mysqli_query($koneksi,$sql1);

if($qry1){
    $sukses = "Data menu berhasil dihapus";
}else{
    $error = "Data menu gagal dihapus";
}
}

if($op == 'edit'){
    $id     = $_GET['id'];
    $sql1   = "SELECT * FROM makanan_ikan WHERE id = '$id' ";
    $qry1   = mysqli_query($koneksi,$sql1);
    $r1   = mysqli_fetch_array($qry1);

    $merk_makanan   = $r1['merk_makanan'];
    $nama_makanan   = $r1['nama_makanan'];
    $jenis_makanan   = $r1['jenis_makanan'];
    $harga  = $r1['harga'];

if($merk_makanan == ''){
    $error = "Data tidak ditemukan";
}
}
if(isset($_POST['submit'])){ // Fungsi untuk membuat data baru
    $merk_makanan   = $_POST['merk_makanan'];
    $nama_makanan   = $_POST['nama_makanan'];
    $jenis_makanan   = $_POST['jenis_makanan'];
    $harga  = $_POST['harga'];
if($merk_makanan && $nama_makanan && $jenis_makanan && $harga){
    if($op == 'edit'){ // Fungsi untuk mengedit data
        $sql1 = "Update makanan_ikan set merk_makanan = '$merk_makanan', nama_makanan = '$nama_makanan', jenis_makanan = '$jenis_makanan', harga = '$harga'  where id = '$id'";
        $qry1 = mysqli_query($koneksi,$sql1);
        if($qry1){
            $sukses = "Data Berhasil Di Ubah";
        }else{
            $error = "Data Gagal Di Ubah";
        }
    }else{
        $sql1 = "INSERT INTO makanan_ikan(merk_makanan,nama_makanan,jenis_makanan,harga) values('$merk_makanan', '$nama_makanan', '$jenis_makanan','$harga')";
        $qry1 = mysqli_query($koneksi,$sql1);
    if($qry1){
        $sukses = "Data Menu Berhasil Di Tambahkan";
    }else{
        $error = "Data Menu Gagal Di Tambahkan";
    }
    }
}else{
    $error = "Silahkan Masukkan Semua Data";
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="img/icon/icon-title.png">
    <title>Makanan Ikan</title>
</head>
<body>
    <div class="nav">
        <img src="img/icon/paws.png" class="icon-nav">
        <label class="judul-nav">Pets<br>House</label>
    <div class="menu-nav">
        <a href="Dashboard-admin.php"><p>Dashboard</p></a>
    </div>
    </div>
    <div class="header-3">
        <h1 class="Makanan-ikan">Makanan Ikan</h1>
        <img src="img/icon/icon-food-1.png" class="icon-food-1">
        <div class="box-1">
        <form action="" method = "POST">
            <pre>
                <label for="merk_makanan" class="label-desc">Merk Makanan</label>
                <input type="text" class="form-control" id="merk_makanan" name="merk_makanan" value="<?php echo $merk_makanan ?>">
                <label for="nama_makanan" class="label-desc">Nama Makanan</label>
                <input type="text" class="form-control" id="nama_makanan" name="nama_makanan" value="<?php echo $nama_makanan ?>">
                <label for="jenis_makanan" class="label-desc">Jenis Makanan</label>
                <input type="text" class="form-control" id="jenis_makanan" name="jenis_makanan" value="<?php echo $jenis_makanan ?>">
                <label for="harga" class="label-desc">harga</label>
                <input type="text" class="form-control" id="harga" name="harga" value="<?php echo $harga ?>">
                <input type = "submit" name = "submit" value = "Simpan" class = "btn-button">
            </pre>
        </form>
        <table class = "table-ikan">
                <tr>
                    <td>No</td>
                    <td>Merk Makanan</td>
                    <td>Nama Makanan</td>
                    <td>Jenis Makanan</td>
                    <td>Harga</td>
                    <td>Aksi</td>
                </tr>
                <tbody>
                    <?php
                        $sql2 = "SELECT * FROM makanan_ikan order by id desc";
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
                            <td>
                            <a href = "makanan-ikan-admin.php?op=edit&id=<?php echo $id?>"><button type ="button" class = "">Edit</button></a>
                            <a href = "makanan-ikan-admin.php?op=delete&id=<?php echo $id?>" onclick="return confirm('Apakah anda yakin ingin menghapus data menu yang anda pilih ?')"><button type ="button" class = "">Delete</button></a>
                            <td>
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