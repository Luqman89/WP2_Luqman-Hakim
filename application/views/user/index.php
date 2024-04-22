<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-6 justify-content-x"> 
            <?= $this->session->flashdata('pesan', 'Pofile berhasil diubah'); ?> 
        </div>
    </div>
    <div class="card mb-3" style="max-width: 540px;">
        <div class="row no-gutters">
            <div class="col-md-4">
                 <img src="<?= base_url('assets/img/profile/') . $user['image']; ?>" class="card-img"
                    alt="..."> </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title"><?= $user['nama']; ?></h5>
                    <p class="card-text"><?= $user['email']; ?></p>
                    <p class="card-text">
                        <small class="text-muted">
                            Jadi member sejak:
                            <br>
                            <b><?= date('d F Y', $user['tanggal_input']); ?></b>
                        </small>
                    </p>
                </div>
                <div class="btn btn-info ml-3 my-3"> 
                    <a href="<?= base_url('user/ubahprofil'); ?>" class="text text-white">
                        <i class="fas fa-user-edit"></i> 
                        Ubah Profil</a> 
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->
</div>
<!-- End of Main Content -->

<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-9"> <?= form_open_multipart('user/ubahprofil'); ?>
            <div class="form-group row"> 
                <label for="email" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10"> <input type="text" class="form-control" id="email" name="email"
                        value="<?= $user['email']; ?>" readonly>
                </div>
            </div>
            <div class="form-group row"> 
                <label for="nama" class="col-sm-2 col-form-label">Nama Lengkap</label>
                <div class="col-sm-10"> 
                    <input type="text" class="form-control" id="nama" name="nama" value="<?= $user['nama']; ?>">
                    <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?> 
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-2">Gambar</div>
                <div class="col-sm-10">
                    <div class="row">
                        <div class="col-sm-3">
                            <img src="<?= base_url('assets/img/profile/') . $user['image']; ?>" class="img-thumbnail" alt="">
                        </div>
                        <div class="col-sm-9">
                            <div class="custom-file"> 
                                <input type="file" class="custom-file-input" id="image" name="image"> 
                                <label class="custom-file-label" for="image">Pilih file</label> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-group row justify-content-end">
                <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">Ubah</button> 
                        <button class="btn btn-dark" onclick="window.history.go(-1)"> Kembali</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- /.container-fluid --> 
</div> 
<!-- End of Main Content -->