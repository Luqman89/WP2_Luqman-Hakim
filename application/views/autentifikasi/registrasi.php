<div class="container">

    <!-- Outer Row -->
    <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            
            <div class="row">
                <div class="col-lg">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Daftar Menjadi Member!</h1>
                        </div>
                        <form class="user" method="post" action="<?= base_url("autentifikasi/registrasi"); ?>">
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user"
                                    value="<?= set_value('nama'); ?>" id="nama" name="nama" placeholder="Nama Lengkap">
                                <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user"
                                    value="<?= set_value('email'); ?>" id="email" name="email" placeholder="Alamat Email">
                                <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control form-control-user"
                                     id="password1" name="password1" placeholder="password">
                                <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control form-control-user" id="password2"
                                    name="password2" placeholder="Ulangi Password">
                                <?= form_error('password2', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <button type="submit" class="btn btn-primary btn-user btn-block">
                                Daftar Member
                            </button>
                        </form>
                        <hr>
                        <div class="text-center">
                            <a class="small" href="<?= base_url('autentifikasi/lupaPassword'); ?>">Forgot Password?</a>
                        </div>
                        <div class="text-center">
                            Sudah Menjadi Member?
                            <a class="small" href="<?= base_url('autentifikasi'); ?>">Login!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>





</div>