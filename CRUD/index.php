<?php include('inc/header.php'); ?>
<?php include('inc/db.php'); ?>
<?php include('core/sessions.php'); ?>
<?php
session_start();
$sql = "SELECT * FROM `users`";
$result = mysqli_query($conn, $sql);



?>


<h1 class="text-center col-12 bg-primary py-3 text-white my-2">Home Page</h1>
<div class="row">
    <div class="col-sm-12">
        <?php
        $successMessage = getSession('Updatedsuccess');
        if ($successMessage): ?>
            <h5 class="alert alert-success text-center">
            <?php
            if (is_array($successMessage)) {
                // Handle the array, maybe iterate through its elements
                foreach ($successMessage as $message) {
                    echo $message ;
                }
            } else {
                echo $successMessage ;

            }
        endif;

        ?>
        </h5>
        <?php removeSession('Updatedsuccess'); ?>
        <?php
        $successdelete = getSession('successDelete');
        if ($successdelete): ?>
            <h5 class="alert alert-success text-center">
            <?php
            if (is_array($successdelete)) {
                // Handle the array, maybe iterate through its elements
                foreach ($successdelete as $message) {
                    echo $message ;
                }
            } else {
                echo $successdelete ;

            }
        endif;

        ?>
        </h5>
        <?php removeSession('successDelete'); ?>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php if (mysqli_num_rows($result) > 0): ?>
                    <?php while ($row = mysqli_fetch_assoc($result)): ?>
                        <tr>
                            <th>
                                <?php echo $row['User_ID']; ?>
                            </th>
                            <td>
                                <?php echo $row['User_name']; ?>
                            </td>
                            <td>
                                <?php echo $row['User_Email']; ?>
                            </td>
                            <td>
                                <a class="btn btn-info" href="edit.php?id=<?php echo $row['User_ID']; ?>"> <i
                                        class="fa fa-edit"></i> </a>
                            </td>
                            <td>
                                <a class="btn btn-danger" href="delete.php?id=<?php echo $row['User_ID']; ?>"> <i
                                        class="fa fa-close"></i> </a>
                            </td>
                        </tr>
                    <?php endwhile; ?>
                <?php endif; ?>
            </tbody>
            </tbody>
        </table>
    </div>
</div>

<?php include('inc/footer.php'); ?>