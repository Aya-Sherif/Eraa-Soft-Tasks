
<?php 
require_once 'Core/sessions.php';
require_once 'C:\xampp\htdocs\G-391\Task6\Core\functions.php';
require_once 'inc/header.php';
if (!IsDefined('auth')) {
Redirect('login.php');
die();
}

require_once 'inc/nav.php';

?>

<body>


    <div class="container">
        <div class="row">
            <div class="col-8 mx-auto bg-light my-5 border border-dark border-3">
                <h1 class=" p-2 mt-3"> Profile </h1>
                <div class="mb-5">
                </div>

                <h2>Name :
                    <?php echo getSession('auth')[0] ?? ''; ?>
                </h2>
                <h2>Email :
                    <?php echo getSession('auth')[1] ?? ''; ?>
                </h2>


                </form>
            </div>
        </div>
    </div>


<?php include 'inc/footer.php';?>
</body>

</html>