<?php
    $idpasien = $_GET["p1"];
    $sql = "SELECT * FROM tb_pasien WHERE idpasien='$idpasien';";
    $hasil = mysqli_query($cnn, $sql);
    if(mysqli_num_rows($hasil) > 0){
        $h = mysqli_fetch_assoc($hasil);
?>
<form method="POST" action="datapasien.php">
    <input type="hidden" name="act" value="destroy">
    <input type="hidden" name="idpasien" value="<?=$idpasien?>">
    <div class="form-floating mb-3">
        <input type="text" name="txNAMA" class="form-control" id="floatingInput" placeholder="nama" disabled value="<?=$h["nama"]?>">
        <label for="floatingInput">Nama Lengkap</label>
    </div>
    <div class="form-floating mb-3">
        <input type="text" name="txALAMAT" class="form-control" id="floatingInput" placeholder="Alamat" disabled value="<?=$h["alamat"]?>">
        <label for="floatingInput">Alamat</label>
    </div>
    <div class="form-floating mb-3">
        <input type="text" name="txTGLLAHIR" class="form-control" id="floatingInput" placeholder="tgllahir" disabled value="<?=$h["tgllahir"]?>">
        <label for="floatingInput">Tanggal Lahir</label>
    </div>
    <div class="form-floating mb-3">
        <input type="text" name="txJENISKELAMIN" class="form-control" id="floatingInput" placeholder="jeniskelamin" disabled value="<?=$h["jk"]?>">
        <label for="floatingInput">Jenis Kelamin</label>
    </div>
    <div class="form-floating mb-3">
        <input type="text" name="txSTATUS" class="form-control" id="floatingInput" placeholder="status" disabled value="<?=$h["status"]?>">
        <label for="floatingInput">Status Menikah</label>
    </div>
    <div class="form-floating mb-3">
        <input type="text" name="txTELFON" class="form-control" id="floatingInput" placeholder="telfon" disabled value="<?=$h["tlfn"]?>">
        <label for="floatingInput">No Telfon</label>
    </div>
    <div class="form-floating mb-3">
        <input type="text" name="txTGLKUNJUNGAN" class="form-control" id="floatingInput" placeholder="tglkunjungan" disabled value="<?=$h["tglkunjungan"]?>">
        <label for="floatingInput">Tanggal Kunjungan</label>
    </div>
    <div class="form-floating mb-3">
        &nbsp;
    </div>
    <button type="submit" class="btn btn-danger"> Hapus Data Pasien </button>
    <a href="datapasien.php" class="btn btn-secondary"> Batal </a>
</form>
<?php
    } else {
        echo "<script>window.location.href='datapasien.php';</script>";
    }
?>