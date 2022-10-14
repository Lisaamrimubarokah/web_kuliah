<?= $this->extend('Tugas/index');?>

<?= $this->section('content');?>
<div class="container">
    <div class="row">
        <div class="col">
            <a href="/Kuliah/create_matkul" class="btn btn-primary mt-5 ml-0">Tambah Data Matkul</a>
            <h1 class="mt-3">Tabel Data MataKuliah</h1>
            <?php if(session()->getFlashdata('pesan')) : ?>
                <div class="alert alert-success" role="alert">
                    <?= session()->getFlashdata('pesan');?>
                </div>
            <?php endif;?>
            
            <table class="table">
            <thead>
                <tr>
                <th scope="col">ID MataKuliah</th>
                <th scope="col">Nama MataKuliah</th>
                <th scope="col">ID Dosen</th>
                <th scope="col">Nama Dosen</th>
                <th scope="col">SKS</th>
                <th scope="col">Hari</th>
                <th scope="col">Waktu</th>
                <th scope="col">Tempat</th>
                <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($Tugas as $k) : ?>
                    <tr>
                    <th scope="row"><?= $k['id_matkul'];?></th>
                    <td><?= $k['nama_matkul'];?></td>
                    <td><?= $k['id'];?></td>
                    <td><?= $k['nama'];?></td>
                    <td><?= $k['sks'];?></td>
                    <td><?= $k['hari'];?></td>
                    <td><?= $k['waktu'];?></td>
                    <td><?= $k['tempat'];?></td>
                    <td>
                    <a class="btn btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus data?')" href="/Kuliah/delete_matkul/<?= $k['id_matkul'];?>">Hapus</a>
                    
                    <a href="/Kuliah/edit_matkul/<?= $k['id_matkul'];?>" class="btn btn-info">Edit</a></td>

                    </tr>
                <?php endforeach; ?>
                
            </tbody>
            </table>

        </div>
    </div>
</div>
<?= $this->endSection();?>