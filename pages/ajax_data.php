<?php
    include "../koneksi.php";
    $datas = $datas =[  
        ['Month' => 'Januari'],
        ['Month' => 'Februari'],
        ['Month' => 'Maret'],
        ['Month' => 'April'],
        ['Month' => 'Mei'],
        ['Month' => 'Juni'],
        ['Month' => 'Juli'],
        ['Month' => 'Agustus'],
        ['Month' => 'September'],
        ['Month' => 'Oktober'],
        ['Month' => 'November'],
        ['Month' => 'Desember'],
    ];
    $page = $_GET['page'];
    if($page=='nisn'){
    $nisn = $_POST['nisn'];
    $t_data = $conn->query("select siswa.id_spp, siswa.nama, kelas.nama_kelas, spp.nominal from siswa inner join kelas ON kelas.id_kelas = siswa.id_kelas inner join spp ON spp.id_spp=siswa.id_spp where siswa.nisn = '$nisn'")->fetch_array();
?>    
    <div class="form-group">
        <label for="exampleFormControlInput1">Nama</label>
        <input type="text" class="form-control" value="<?= $t_data['nama'] ?>" disabled>
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput1">Nama Kelas</label>
        <input type="text" class="form-control" value="<?= $t_data['nama_kelas'] ?>" disabled>
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput1">Bulan Dibayar</label>
        <select class="form-control" name="bulan_dibayar">
        <?php foreach ($datas as $data){
        ?>
                <option value="<?= $data['Month'] ?>"><?= $data['Month'] ?></option>
            <?php } ?>
        </select>
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput1">Tahun Dibayar</label>
            <select class="form-control" name="tahun_dibayar">
            <?php
                $tahun = date('Y');
                for ($i=$tahun-3; $i<=$tahun+3; $i++) {
            ?>
                <option value="<?php echo $i;?>"><?php echo $i;?></option>
            <?php
                }
            ?>
        </select>
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput1">Jumlah Bayar</label>
        <input type="text" class="form-control" value="<?= $t_data['nominal'] ?>">
        <input type="hidden" name="id_spp" value="<?php echo $t_data['id_spp'];?>">
    </div>
<?php } ?>