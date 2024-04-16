<div class="row">
    <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
    <div class="col-lg-6">
        <div class="p-5">
            <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
            </div>

            <?php if (isset($_SESSION['error'])) : ?>
                <div class="alert alert-danger">
                    <?= $_SESSION['error'] ?>
                </div>
                <?php unset($_SESSION['error']); ?>
            <?php endif; ?>

            <form action="" method="POST" class="user">
                <div class="form-group">
                    <input type="email" class="form-control form-control-user" name="email" placeholder="Enter Email Address...">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control form-control-user" name="password" placeholder="Password">
                </div>
                <button type="submit" class="btn btn-primary btn-user btn-block">Login</a>
            </form>
        </div>
    </div>
</div>

<a href="<?= BASE_URL ?>?act=themtk">Login with Google</a>