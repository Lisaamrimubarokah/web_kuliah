<?= $this->extend('Tugas/index');?>

<?= $this->section('content');?>
<div class="container">
    <div class="row">
        <div class="col-8">
            <h3 class="my-5">Form Tambah Data Dosen</h3>
            <fieldset>
            
            <form action="/Kuliah/save" method="POST">
                <?= csrf_field() ?>
                <div class="form-group row">
                    <label for="id" class="col-sm-2 col-form-label">ID Dosen</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control <?= ($validation->hasError('id')) ? 'is-invalid' : '';?>" name="id" placeholder="ID Dosen" autofocus value="<?= old('id');?>">
                    <div class="invalid-feedback">
                        <?= $validation->getError('id');?>
                    </div>
                    </div>
                </div>
                <br/>
                <div class="form-group row">
                    <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control <?= ($validation->hasError('nama')) ? 'is-invalid' : '';?>" name="nama" placeholder="Nama" value="<?= old('nama');?>">
                    <div class="invalid-feedback">
                       <?= $validation->getError('nama');?>
                    </div>
                    </div>
                </div>
                <br/>
                <div class="form-group row">
                    <label for="nohp" class="col-sm-2 col-form-label">No HP</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control  <?= ($validation->hasError('nohp')) ? 'is-invalid' : '';?>" name="nohp"placeholder="No Hp" value="<?= old('nohp');?>">
                    <div class="invalid-feedback">
                       <?= $validation->getError('nohp');?>
                    </div>
                    </div>
                </div>
                
                <div class="form-group row">
                    <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Tambah</button>
                    </div>
                </div>
            </form>
            </fieldset>

        </div>
    </div>
</div>
<?= $this->endSection();?>