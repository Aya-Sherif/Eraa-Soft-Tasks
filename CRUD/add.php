<?php include('inc/header.php');
include 'core\functions.php';
include "core\sessions.php";
session_start();

?>

<h1 class="text-center col-12 bg-info py-3 text-white my-2">Add New User</h1>
<div class="col-md-6 offset-md-3">
    <?php
    foreach (getSession('errors') as $error): ?>
        <div class="alert alert-danger p-1">
            <?php echo $error; ?>
        </div>
    <?php endforeach; ?>
    <?php removeSession('errors'); ?>
        <?php
        $successMessage = getSession('Success');

        if (is_array($successMessage)) {
            // Handle the array, maybe iterate through its elements
            foreach ($successMessage as $message) {
                echo $message . '<br>';
            }
        } else {
            echo $successMessage . '<br>';
    
        }
        ?>
    
    <?php removeSession('Success'); ?>

    <form class="my-2 p-3 border" action="Handlers/Handelrequest.php" method="POST">
        <div class="form-group">
            <label for="exampleInputName1">Full Name</label>
            <input type="text" name="name" class="form-control" id="exampleInputName1">
        </div>
        <div class="form-group">
            <label for="exampleInputName1">Email address</label>
            <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" name="password" class="form-control" id="exampleInputPassword1">
        </div>

        <button type="submit" class="btn btn-primary" name="supmit">Submit</button>
    </form>
</div>

<?php include('inc/footer.php'); ?>