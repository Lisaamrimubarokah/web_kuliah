<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>Halaman Login</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/sign-in/">

    <!-- Bootstrap core CSS -->
    <link href="https://getbootstrap.com/docs/4.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="https://getbootstrap.com/docs/4.0/examples/sign-in/signin.css" rel="stylesheet">
  </head>

<body class="text-center">

    <main class="form-signin">
        <?php if (!empty(session()->getFlashdata('error'))) : ?>
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <?php echo session()->getFlashdata('error'); ?>
            </div>
        <?php endif; ?>
        <form method="post" action="<?= base_url(); ?>/Kuliah/process">
            <?= csrf_field(); ?>
            <h1 class="h3 mb-3 fw-normal">Login</h1>
            <input type="text" name="username" id="username" placeholder="Username" class="form-control" required autofocus>
            <input type="password" name="password" id="password" placeholder="Password" class="form-control" required>
            <button type="submit" class="w-100 btn btn-lg btn-primary">Login</button>
            <a href="<?= base_url();?>/register">Register</a>
            <p class="mt-5 mb-3 text-muted">&copy; 2021</p>
        </form>
    </main>
</body>

</html>