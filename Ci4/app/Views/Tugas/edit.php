<?= $this->extend('Tugas/index');?>

<?= $this->section('content');?>
<div class="container">
    <div class="row">
        <div class="col-8">
            <h2 class="my-3">Form Ubah Data Dosen</h2>
            
            <form action="/Kuliah/update/<?= $Tugas['id'];?>" method="POST">
                <?= csrf_field() ?>
                <div class="form-group row">
                    <label for="id" class="col-sm-2 col-form-label">ID Dosen</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control <?= ($validation->hasError('id')) ? 'is-invalid' : '';?>" name="id" placeholder="ID Dosen" value="<?= $Tugas['id'];?>" disabled>
                    <div class="invalid-feedback">
                        <?= $validation->getError('id');?>
                    </div>
                    </div>
                </div>
                <br/>
                <div class="form-group row">
                    <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control <?= ($validation->hasError('nama')) ? 'is-invalid' : '';?>" name="nama" placeholder="Nama" value="<?= $Tugas['nama'];?>" autofocus >
                    <div class="invalid-feedback">
                       <?= $validation->getError('nama');?>
                    </div>
                    </div>
                </div>
                <br/>
                <div class="form-group row">
                    <label for="nohp" class="col-sm-2 col-form-label">No HP</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control  <?= ($validation->hasError('nohp')) ? 'is-invalid' : '';?>" name="nohp"placeholder="No Hp" value="<?= $Tugas['nohp'];?>">
                    <div class="invalid-feedback">
                       <?= $validation->getError('nohp');?>
                    </div>
                    </div>
                </div>
                
                <div class="form-group row">
                    <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Ubah</button>
                    </div>
                </div>
            </form>

        </div>
    </div>
</div>
<?= $this->endSection();?>