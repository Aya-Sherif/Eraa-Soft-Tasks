<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Product Data</title>
    <!-- Add Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
            margin-top: 20px;
        }

        th,
        td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>

<body>
    <div class="container mt-5">
        <h1 class="mb-4">Product Data</h1>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = $_POST["name"];
            $description = $_POST["description"];
            $price = $_POST["price"];
            $discount = $_POST["discount"];

            // Upload image
            $Image = $_FILES['image'];

            $f_name = $Image['name'];
            $f_tmp_name=$Image['tmp_name'];
            $f_error = $Image['error'];
            if ($f_error === 0) {

                $image_path = "uploads/" . $f_name;
                move_uploaded_file($f_tmp_name, $image_path);

            }

            ?>
            <table class="table">
                <tr>
                    <th>Field</th>
                    <th>Value</th>
                </tr>
                <tr>
                    <td>Product Name</td>
                    <td>
                        <?php echo $name; ?>
                    </td>
                </tr>
                <tr>
                    <td>Product Description</td>
                    <td>
                        <?php echo $description; ?>
                    </td>
                </tr>
                <tr>
                    <td>Price</td>
                    <td>
                        <?php echo $price; ?>
                    </td>
                </tr>
                <tr>
                    <td>Discount</td>
                    <td>
                        <?php echo $discount; ?>
                    </td>
                </tr>
                <tr>
                    <td>Product Image</td>
                    <td><img src="<?php echo $image_path; ?>" alt="Product Image" class="img-fluid"
                            style="max-width: 200px;"></td>
                </tr>
            </table>
            <?php
        } else {
            echo "<p>No data submitted.</p>";
        }
        ?>
    </div>

    <!-- Add Bootstrap JS and Popper.js -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>

</html>