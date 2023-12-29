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
<h1 class="text-center col-12 bg-danger py-3 text-white my-2">Delete User</h1>
<form action="Handlers/HandleDelete.php" method="POST">
    <input type="hidden" value="<?php echo $id ?>" name="id">
    <button type="submit" class="btn btn-danger btn-lg active" role="button" aria-pressed="true">Delete</button>
    <a href="index.php" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Cancel</a>
</form>
<?php include('inc/footer.php'); ?>