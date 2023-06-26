<style>
        body {
            background-color: #f1f1f1; 
        }
    </style>
<form method="POST" action="datapasien.php">
    <input type="hidden" name="act" value="store">
    <div class="form-floating mb-3">
        <input type="text" name="txNAMA" class="form-control" id="floatingInput" placeholder="nama">
        <label for="floatingInput">Nama Lengkap</label>
    </div>
    <div class="form-floating mb-3">
        <input type="text" name="txALAMAT" class="form-control" id="floatingInput" placeholder="Alamat">
        <label for="floatingInput">Alamat</label>
    </div>
    <div class="form-floating mb-3">
        <input type="date" name="txTGLLAHIR" class="form-control" id="floatingInput" placeholder="tgllahir">
        <label for="floatingInput">Tanggal Lahir</label>
    </div>
    <div class="form-floating mb-3">
        <input type="text" name="txJENISKELAMIN" class="form-control" id="floatingInput" placeholder="jeniskelamin">
        <label for="floatingInput">Jenis Kelamin</label>
    </div>
    <div class="form-floating mb-3">
        <input type="text" name="txSTATUS" class="form-control" id="floatingInput" placeholder="status">
        <label for="floatingInput">Status Menikah</label>
    </div>
    <div class="form-floating mb-3">
        <input type="text" name="txTELFON" class="form-control" id="floatingInput" placeholder="telfon">
        <label for="floatingInput">No Telfon</label>
    </div>
    <div class="form-floating mb-3">
        <input type="date" name="txTGLKUNJUNGAN" class="form-control" id="floatingInput" placeholder="tglkunjungan">
        <label for="floatingInput">Tanggal Kunjungan</label>
    </div>
    <div class="form-floating mb-3">
        &nbsp;
    </div>
    <button type="submit" class="btn btn-primary"> Tambah Data Pasien </button>
    <a href="datapasien.php" class="btn btn-secondary"> Batal </a>
</form>