<!-- 
<?php
/*
// Check if the user is logged in
if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    // If the user is not logged in, redirect them to the login page
    header('Location: login.php');
    exit;
}*/
// Execute SQL query and retrieve results
include 'connect.php';
$sql = "SELECT * FROM cart";
$result = mysqli_query($conn, $sql);
$data = mysqli_fetch_all($result, MYSQLI_ASSOC);

?>
 -->

<?php

// If the user is logged in, display the page content
echo 'Welcome! You are logged in.';

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Cart</title>

    <style>
        .grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            grid-gap: 10px;
        }

        .item {
            background-color: lightblue;
            padding: 20px;
            text-align: center;
        }
    </style>

    <link rel="stylesheet" type="text/css" href="../css/cart.css">
</head>

<body>
    <header>
        <h1 style="color: white;">Cart Page</h1>

    </header>

    <div class="grid">
        <?php foreach ($data as $row) : ?>
            <div class="item">
                {{ row.name }}
            </div>
        <?php endforeach; ?>
    </div>



    <footer style="color: white;">
        <p>Your Footer Here</p>
    </footer>
</body>

</html>