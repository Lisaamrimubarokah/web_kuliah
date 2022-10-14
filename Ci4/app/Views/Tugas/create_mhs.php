<?= $this->extend('Tugas/index');?>

<?= $this->section('content');?>
<div class="container">
    <div class="row">
        <div class="col-8">
            <h3 class="my-5 ">Form Tambah Data Mahasiswa</h3>
            <fieldset>
            
            <form action="/Kuliah/save_mhs" method="POST">
                <?= csrf_field() ?>
                <div class="form-group row">
                    <label for="id" class="col-sm-2 col-form-label">NIM</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control <?= ($validation->hasError('nim')) ? 'is-invalid' : '';?>" name="nim" placeholder="NIM" autofocus value="<?= old('nim');?>">
                    <div class="invalid-feedback">
                        <?= $validation->getError('nim');?>
                    </div>
                    </div>
                </div>
                <br/>
                <div class="form-group row">
                    <label for="nama" class="col-sm-2 col-form-label">Nama Mahasiswa</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control <?= ($validation->hasError('nama_mhs')) ? 'is-invalid' : '';?>" name="nama_mhs" placeholder="Nama Mahasiswa" value="<?= old('nama_mhs');?>">
                    <div class="invalid-feedback">
                       <?= $validation->getError('nama_mhs');?>
                    </div>
                    </div>
                </div>
                <br/>
                <div class="form-group row">
                    <label for="matkul" class="col-sm-2 col-form-label">Jurusan</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control  <?= ($validation->hasError('jurusan')) ? 'is-invalid' : '';?>" name="jurusan" placeholder="Jurusan" value="<?= old('jurusan');?>">
                    <div class="invalid-feedback">
                       <?= $validation->getError('jurusan');?>
                    </div>
                    </div>
                </div>
                <br/>
                <div class="form-group row">
                    <label for="nohp" class="col-sm-2 col-form-label">Semester</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control  <?= ($validation->hasError('semester')) ? 'is-invalid' : '';?>" name="semester"placeholder="Semester" value="<?= old('semester');?>">
                    <div class="invalid-feedback">
                       <?= $validation->getError('semester');?>
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