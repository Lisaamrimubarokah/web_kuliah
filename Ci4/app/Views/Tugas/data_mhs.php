<?= $this->extend('Tugas/index');?>

<?= $this->section('content');?>
<div class="container">
    <div class="row">
        <div class="col">
            <a href="/Kuliah/create_mhs" class="btn btn-primary mt-5 ml-0">Tambah Data Mahasiswa</a>
            <h1 class="mt-3">Tabel Data Mahasiswa</h1>
            <?php if(session()->getFlashdata('pesan')) : ?>
                <div class="alert alert-success" role="alert">
                    <?= session()->getFlashdata('pesan');?>
                </div>
            <?php endif;?>
            
            <table class="table">
            <thead>
                <tr>
                <th scope="col">NIM</th>
                <th scope="col">Nama Mahasiswa</th>
                <th scope="col">Jurusan</th>
                <th scope="col">Semester</th>
                <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($Tugas as $k) : ?>
                    <tr>
                    <th scope="row"><?= $k['nim'];?></th>
                    <td><?= $k['nama_mhs'];?></td>
                    <td><?= $k['jurusan'];?></td>
                    <td><?= $k['semester'];?></td>
                    <td>
                    <a class="btn btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus data?')" href="/Kuliah/delete_mhs/<?= $k['nim'];?>">Hapus</a>
                    
                    <a href="/Kuliah/edit_mhs/<?= $k['nim'];?>" class="btn btn-info">Edit</a></td>

                    </tr>
                <?php endforeach; ?>
                
            </tbody>
            </table>

        </div>
    </div>
</div>
<?= $this->endSection();?>