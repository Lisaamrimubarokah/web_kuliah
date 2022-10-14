<?= $this->extend('Tugas/index');?>

<?= $this->section('content');?>
<div class="container">
    <div class="row">
        <div class="col-8">
            <h3 class="my-5">Form Tambah Data Matkul</h3>
            <fieldset>
            
            <form action="/Kuliah/save_matkul" method="POST">
                <?= csrf_field() ?>
                <div class="form-group row">
                    <label for="id" class="col-sm-2 col-form-label">ID MataKuliah</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control <?= ($validation->hasError('id_matkul')) ? 'is-invalid' : '';?>" name="id_matkul" placeholder="ID MataKuliah" autofocus value="<?= old('id_matkul');?>">
                    <div class="invalid-feedback">
                        <?= $validation->getError('id_matkul');?>
                    </div>
                    </div>
                </div>
                <br/>
                <div class="form-group row">
                    <label for="nama" class="col-sm-2 col-form-label">Nama MataKuliah</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control <?= ($validation->hasError('nama_matkul')) ? 'is-invalid' : '';?>" name="nama_matkul" placeholder="Nama MataKuliah" value="<?= old('nama_matkul');?>">
                    <div class="invalid-feedback">
                       <?= $validation->getError('nama_matkul');?>
                    </div>
                    </div>
                </div>
                <br/>
                <div class="form-group row">
                    <label for="nama" class="col-sm-2 col-form-label">ID Dosen</label>
                    <div class="col-sm-10">
                    <select class="form-select" aria-label="Default select example" name="id">
                        <option selected>Pilih ID Dosen</option>
                        <?php foreach($dosen as $k){?>
                        <option value="<?php echo $k['id']; ?>"><?php echo $k['id'];?></option>
                        <?php } ?>
                    </select>
                    </div>
                </div>
                
                
                <br/>
                <div class="form-group row">
                    <label for="matkul" class="col-sm-2 col-form-label">SKS</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control  <?= ($validation->hasError('sks')) ? 'is-invalid' : '';?>" name="sks" placeholder="SKS" value="<?= old('sks');?>">
                    <div class="invalid-feedback">
                       <?= $validation->getError('sks');?>
                    </div>
                    </div>
                </div>
                <br/>
                <div class="form-group row">
                    <label for="matkul" class="col-sm-2 col-form-label">Hari</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control  <?= ($validation->hasError('hari')) ? 'is-invalid' : '';?>" name="hari" placeholder="Hari" value="<?= old('hari');?>">
                    <div class="invalid-feedback">
                       <?= $validation->getError('hari');?>
                    </div>
                    </div>
                </div>
                <br/>
                <div class="form-group row">
                    <label for="matkul" class="col-sm-2 col-form-label">Waktu</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control  <?= ($validation->hasError('waktu')) ? 'is-invalid' : '';?>" name="waktu" placeholder="Waktu" value="<?= old('waktu');?>">
                    <div class="invalid-feedback">
                       <?= $validation->getError('waktu');?>
                    </div>
                    </div>
                </div>
                <br/>
                <div class="form-group row">
                    <label for="matkul" class="col-sm-2 col-form-label">Tempat</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control  <?= ($validation->hasError('tempat')) ? 'is-invalid' : '';?>" name="tempat" placeholder="tempat" value="<?= old('tempat');?>">
                    <div class="invalid-feedback">
                       <?= $validation->getError('tempat');?>
                    </div>
                    </div>
                </div>
                <br/>
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