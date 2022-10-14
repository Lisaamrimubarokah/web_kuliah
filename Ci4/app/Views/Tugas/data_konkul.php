<?= $this->extend('Tugas/index');?>

<?= $this->section('content');?>
<div class="container">
    <div class="row">
        <div class="col">
            <a href="/Kuliah/create_konkul" class="btn btn-primary mt-5 ml-0">Tambah Data Kontrak Kuliah</a>
            <a href="/Kuliah/exportPDf"  class="btn btn-primary mt-5 ml-0">Export PDF</a>
            <h1 class="mt-3">Tabel Data Kontrak Kuliah</h1>
            <?php if(session()->getFlashdata('pesan')) : ?>
                <div class="alert alert-success" role="alert">
                    <?= session()->getFlashdata('pesan');?>
                </div>
            <?php endif;?>
            
            <table class="table">
            <thead>
                <tr>
                <th scope="col">NIM</th>
                <th scope="col">Nama</th>
                <th scope="col">ID Matkul</th>
                <th scope="col">Nama Matkul</th>
                <th scope="col">SKS</th>
                <th scope="col">ID Dosen</th>
                <th scope="col">Nama Dosen</th>
                <th scope="col">Hari</th>
                <th scope="col">Tempat</th>
                <th scope="col">semester</th>
                <th scope="col">jurusan</th>
                <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($Tugas as $k) : ?>
                    <tr>
                   
                    <td><?= $k['nim'];?></td>
                    <td><?= $k['nama_mhs'];?></td>
                    <td><?= $k['id_matkul'];?></td>
                    <td><?= $k['nama_matkul'];?></td>
                    <td><?= $k['sks'];?></td>
                    <td><?= $k['id'];?></td>
                    <td><?= $k['nama'];?></td>
                    <td><?= $k['hari'];?></td>
                    <td><?= $k['tempat'];?></td>
                    <td><?= $k['semester'];?></td>
                    <td><?= $k['jurusan'];?></td>
                    <td>
                    <a class="btn btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus data?')" href="/Kuliah/delete_konkul/<?= $k['id_kontrak'];?>">Hapus</a>
                    
                    <a href="/Kuliah/edit_konkul/<?= $k['id_kontrak'];?>" class="btn btn-info">Edit</a></td>

                    </tr>
                <?php endforeach; ?>
                
            </tbody>
            </table>

        </div>
    </div>
</div>
<?= $this->endSection();?>