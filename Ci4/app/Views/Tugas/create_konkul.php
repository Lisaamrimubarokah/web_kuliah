<?= $this->extend('Tugas/index');?>

<?= $this->section('content');?>
<div class="container">
    <div class="row">
        <div class="col-8">
            <h3 class="my-5">Form Tambah Data Kontrak Kuliah</h3>
            <fieldset>
            
            <form action="/Kuliah/save_konkul" method="POST">
                <?= csrf_field() ?>
                <div class="form-group row">
                    <label for="nama" class="col-sm-2 col-form-label">NIM</label>
                    <div class="col-sm-10">
                    <select class="form-select" aria-label="Default select example" name="nim">
                        <option selected>Pilih NIM</option>
                        <?php foreach($nim as $k){?>
                        <option value="<?php echo $k['nim']; ?>"><?php echo $k['nim'];?></option>
                        <?php } ?>
                    </select>
                    </div>
                </div>
                <br/>
                <div class="form-group row">
                    <label for="nama" class="col-sm-2 col-form-label">ID MataKuliah</label>
                    <div class="col-sm-10">
                    <select class="form-select" aria-label="Default select example" name="id_matkul">
                        <option selected>Pilih ID MataKuliah</option>
                        <?php foreach($id_matkul as $k){?>
                        <option value="<?php echo $k['id_matkul']; ?>"><?php echo $k['id_matkul'];?></option>
                        <?php } ?>
                    </select>
                    </div>
                </div>
                <br/>
                <div class="form-group row">
                    <label for="nama" class="col-sm-2 col-form-label">ID Dosen</label>
                    <div class="col-sm-10">
                    <select class="form-select" aria-label="Default select example" name="id">
                        <option selected>Pilih ID Dosen</option>
                        <?php foreach($id as $k){?>
                        <option value="<?php echo $k['id']; ?>"><?php echo $k['id'];?></option>
                        <?php } ?>
                    </select>
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