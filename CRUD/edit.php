<?php include('inc/header.php');
include('inc/db.php');
require_once "core/functions.php";
include('core/sessions.php');
session_start();
?>
<?php
if (!isset($_GET['id']) or !is_numeric($_GET['id'])) {
    Redirect('index.php');
}
$id = $_GET['id'];
$sql = "SELECT* FROM `users` 
WHERE `User_ID`='$id' LIMIT 1";
$result = mysqli_query($conn, $sql);
if (!$result) {
    Redirect('index.php');

}
$row = mysqli_fetch_assoc($result);
?>
<h1 class="text-center col-12 bg-primary py-3 text-white my-2">Edit Info About User</h1>
<div class="col-md-6 offset-md-3">
    <?php
    if (getSession('Updatederror')): ?>
        <?php
        foreach (getSession('Updatederror') as $error): ?>
            <div class="alert alert-danger p-1">
                <?php echo $error; ?>
            </div>
        <?php endforeach; ?>
    <?php endif; ?>
    <?php removeSession('Updatederror'); ?>
    <form class="my-2 p-3 border" method="POST" action="Handlers/HandleUpdate.php">
        <div class="form-group">
            <label for="exampleInputName1">Full Name</label>
            <input type="text" name="name" value="<?php echo $row['User_name'] ?>" class="form-control"
                id="exampleInputName1"> 
                <input type="hidden" value="<?php echo $id ?>" name="id">
        </div>
        <div class="form-group">
            <label for="exampleInputName1">Email address</label>
            <input type="email" name="email" value="<?php echo $row['User_Email'] ?>" class="form-control"
                id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" name="password" class="form-control" id="exampleInputPassword1">
        </div>

        <button type="submit" class="btn btn-primary" name='submit'>Submit</button>
    </form>
</div>

<?php include('inc/footer.php'); ?>