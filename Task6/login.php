<?php include "inc\header.php";

require_once 'Core\sessions.php';
require_once 'Core\functions.php';
if (IsDefined('auth')) {
Redirect('index.php');
die();
}
include 'inc\nav.php'; ?>

<body>

    <div class="container">
        <div class="row">
            <div class="col-8 mx-auto bg-light my-5 border border-dark border-3">
                <h1 class=" p-2 mt-3"> Login </h1>
                <?php foreach (getSession('errors') as $error): ?>
                    <div class="alert alert-danger p-1">
                        <?php echo $error; ?>
                    </div>
                <?php endforeach; ?>
                <?php removeSession('errors'); ?>
                <form action="Handlers/handleLogin.php" method="POST">

                    <div class="mb-3">
                        <label for="email">Email</label>
                        <input type="text" name="email" id="email" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" class="form-control">
                    </div>

                    <div class="mb-3">
                        <input type="submit" name="" class="form-control btn btn-success">
                    </div>

                </form>
            </div>
        </div>
    </div>

    <?php include "inc/footer.php" ?>
</body>

</html>