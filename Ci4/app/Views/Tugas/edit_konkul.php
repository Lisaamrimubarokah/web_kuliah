<?= $this->extend('Tugas/index');?>

<?= $this->section('content');?>
<div class="container">
    <div class="row">
        <div class="col-8">
            <h2 class="my-3">Form Ubah Data MataKuliah</h2>
            
            <form action="/Kuliah/update_konkul/<?= $Tugas['id_kontrak'];?>" method="POST">
                <?= csrf_field() ?>
                <div class="form-group row">
                    <label for="nama" class="col-sm-2 col-form-label">NIM</label>
                    <div class="col-sm-10">
                    <select class="form-select" aria-label="Default select example" name="nim">
                        <?php foreach($nim as $k){?>
                        <option <?php if ($k ['nim'] == $Tugas['nim']) {echo "selected"; } ?>
                        value="<?= $k['nim'];?>"><?= $k['nim'];?></option>
                        <?php } ?>
                    </select>
                    </div>
                </div>
                
                <br/>
                <div class="form-group row">
                    <label for="nama" class="col-sm-2 col-form-label">ID MataKuliah</label>
                    <div class="col-sm-10">
                    <select class="form-select" aria-label="Default select example" name="id_matkul">
                        <?php foreach($id_matkul as $k){?>
                        <option <?php if ($k ['id_matkul'] == $Tugas['id_matkul']) {echo "selected"; } ?>
                        value="<?= $k['id_matkul'];?>"><?= $k['id_matkul'];?></option>
                        <?php } ?>
                    </select>
                    </div>
                </div>
                
                <br/>
                <div class="form-group row">
                    <label for="nama" class="col-sm-2 col-form-label">ID Dosen</label>
                    <div class="col-sm-10">
                    <select class="form-select" aria-label="Default select example" name="id">
                        <?php foreach($id as $k){?>
                        <option <?php if ($k ['id'] == $Tugas['id']) {echo "selected"; } ?>
                        value="<?= $k['id'];?>"><?= $k['id'];?></option>
                        <?php } ?>
                    </select>
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