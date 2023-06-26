<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nama Lengkap</th>
      <th scope="col">Alamat</th>
      <th scope="col">Tanggal Lahir</th>
      <th scope="col">Jenis Kelamin</th>
      <th scope="col">Status Menikah</th>
      <th scope="col">Nomor Telfon</th>
      <th scope="col">Tanggal Kunjungan</th>
      <th scope="col"><a href="datapasien.php?aksi=new" class="btn btn-primary"><i class="fa-solid fa-user-plus"></i>&nbsp;Tambah</a></th>
    </tr>
  </thead>
  <tbody>
    <?php
    $sql = "SELECT * FROM tb_pasien ORDER BY tb_pasien.idpasien;";
    $hasil = mysqli_query($cnn, $sql);
    $cx = 0;
    while($h = mysqli_fetch_assoc($hasil)){
        $cx++;
    ?>    
    <tr>
        <th scope="row"><?=$cx?></th>
        <td><?=$h["nama"]?></td>
        <td><?=$h["alamat"]?></td>
        <td><?=$h["tgllahir"]?></td>
        <td><?=$h["jk"]?></td>
        <td><?=$h["status"]?></td>
        <td><?=$h["tlfn"]?></td>
        <td><?=$h["tglkunjungan"]?></td>
        <td>
            <a href="datapasien.php?aksi=edit&p1=<?=$h["idpasien"]?>" class="btn btn-warning"><i class="fa-solid fa-user-pen"></i>&nbsp;Edit</a> 
            <a href="datapasien.php?aksi=del&p1=<?=$h["idpasien"]?>" class="btn btn-danger"><i class="fa-solid fa-user-xmark"></i>&nbsp;Delete</a>
        </td>
    </tr>
    <?php
    }
    ?>
  </tbody>
</table>