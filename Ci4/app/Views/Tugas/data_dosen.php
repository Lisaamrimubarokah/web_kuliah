<?= $this->extend('Tugas/index');?>

<?= $this->section('content');?>
<div class="container">
    <div class="row">
        <div class="col">
            <a href="/Kuliah/create" class="btn btn-primary mt-5 ml-0">Tambah Data Dosen</a>
            <h1 class="mt-3">Tabel Data Dosen</h1>
            <?php if(session()->getFlashdata('pesan')) : ?>
                <div class="alert alert-success" role="alert">
                    <?= session()->getFlashdata('pesan');?>
                </div>
            <?php endif;?>
            
            <table class="table">
            <thead>
                <tr>
                <th scope="col">ID</th>
                <th scope="col">Nama</th>
                <th scope="col">No HP</th>
                <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($Tugas as $k) : ?>
                    <tr>
                    <th scope="row"><?= $k['id'];?></th>
                    <td><?= $k['nama'];?></td>
                    <td><?= $k['nohp'];?></td>
                    <td>
                    <a class="btn btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus data?')" href="/Kuliah/delete/<?= $k['id'];?>">Hapus</a>
                    
                    <a href="/Kuliah/edit/<?= $k['id'];?>" class="btn btn-info">Edit</a></td>

                    </tr>
                <?php endforeach; ?>
                
            </tbody>
            </table>

        </div>
    </div>
</div>
<?= $this->endSection();?>