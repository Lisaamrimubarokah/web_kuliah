<?= $this->extend('Tugas/index');?>

<?= $this->section('content');?>
<div class="container">
    <div class="row">
        <div class="col-8">
            <h2 class="my-3">Form Ubah Data MataKuliah</h2>
            
            <form action="/Kuliah/update_matkul/<?= $Tugas['id_matkul'];?>" method="POST">
                <?= csrf_field() ?>
                <div class="form-group row">
                    <label for="id" class="col-sm-2 col-form-label">ID MataKuliah</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control <?= ($validation->hasError('id_matkul')) ? 'is-invalid' : '';?>" name="id_matkul"  value="<?= $Tugas['id_matkul'];?>" disabled>
                    <div class="invalid-feedback">
                        <?= $validation->getError('id_matkul');?>
                    </div>
                    </div>
                </div>
                <br/>
                <div class="form-group row">
                    <label for="nama" class="col-sm-2 col-form-label">Nama MataKuliah</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control <?= ($validation->hasError('nama_matkul')) ? 'is-invalid' : '';?>" name="nama_matkul"  value="<?= $Tugas['nama_matkul'];?>" autofocus >
                    <div class="invalid-feedback">
                       <?= $validation->getError('nama_matkul');?>
                    </div>
                    </div>
                </div>
                <br/>
                <div class="form-group row">
                    <label for="id" class="col-sm-2 col-form-label">ID Dosen</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control <?= ($validation->hasError('id')) ? 'is-invalid' : '';?>" name="id"  value="<?= $Tugas['id'];?>">
                    <div class="invalid-feedback">
                        <?= $validation->getError('id');?>
                    </div>
                    </div>
                </div>
                <br/>
                <div class="form-group row">
                    <label for="matkul" class="col-sm-2 col-form-label">SKS</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control  <?= ($validation->hasError('sks')) ? 'is-invalid' : '';?>" name="sks"  value="<?= $Tugas['sks'];?>">
                    <div class="invalid-feedback">
                       <?= $validation->getError('sks');?>
                    </div>
                    </div>
                </div>
                <br/>
                <div class="form-group row">
                    <label for="matkul" class="col-sm-2 col-form-label">Hari</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control  <?= ($validation->hasError('hari')) ? 'is-invalid' : '';?>" name="hari"  value="<?= $Tugas['hari'];?>">
                    <div class="invalid-feedback">
                       <?= $validation->getError('hari');?>
                    </div>
                    </div>
                </div>
                <br/>
                <div class="form-group row">
                    <label for="matkul" class="col-sm-2 col-form-label">Waktu</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control  <?= ($validation->hasError('waktu')) ? 'is-invalid' : '';?>" name="waktu"  value="<?= $Tugas['waktu'];?>">
                    <div class="invalid-feedback">
                       <?= $validation->getError('waktu');?>
                    </div>
                    </div>
                </div>
                <br/>
                <div class="form-group row">
                    <label for="matkul" class="col-sm-2 col-form-label">Tempat</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control  <?= ($validation->hasError('tempat')) ? 'is-invalid' : '';?>" name="tempat"  value="<?= $Tugas['tempat'];?>">
                    <div class="invalid-feedback">
                       <?= $validation->getError('tempat');?>
                    </div>
                    </div>
                </div>
                <br/>
                
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