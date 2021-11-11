<?= $this->extend('Layout/Template'); ?>

<?= $this->section('content'); ?>

<div class="container-fluid bodylogin">
    <div class="row">
        <div class="col-lg-3 col-md-2"></div>
        <div class="col-lg-6 col-md-8 login-box">
            <div class="col-lg-12 login-key">
                <i class="fa fa-key" aria-hidden="true"></i>
            </div>
            <div class="col-lg-12 login-title">
                ADMIN PANEL
            </div>

            <div class="col-lg-12 login-form">
                <?php if (!empty(session()->getFlashdata('error'))) : ?>
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <?php echo session()->getFlashdata('error'); ?>
                    </div>
                <?php endif; ?>
                <form method="post" action="<?= base_url(); ?>/Login/process">
                    <?= csrf_field(); ?>
                    <div class="form-group">
                        <label class="form-control-label">USERNAME</label>
                        <input type="text" name="username" id="username" placeholder="Username" class="form-control" required autofocus>
                    </div>
                    <div class="form-group">
                        <label class="form-control-label">PASSWORD</label>
                        <input type="password" name="password" id="password" placeholder="Password" class="form-control" required>
                    </div>
                    <div class="col-lg-12 loginbttm">
                        <div class="col-lg-6 login-btm login-text">
                            <!-- Error Message -->
                        </div>
                        <div class="col-lg-6 login-btm login-button">
                            <button type="submit" class="btn btn-outline-primary">LOGIN</button>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>

<?= $this->endSection(); ?>>