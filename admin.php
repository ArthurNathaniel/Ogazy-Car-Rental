<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $model = $_POST['model'];
    $transmission = $_POST['transmission'];
    $price = $_POST['price'];
    $color = $_POST['color'];

    $sql = "INSERT INTO cars (name, model, transmission, price, color) VALUES ('$name', '$model', '$transmission', $price, '$color')";
    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('New car added successfully');</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>


<!DOCTYPE html>
<html>

<head>
    <?php include 'meta.php'; ?>
    <title>Add A Car - Ogazy Car Rental</title>
    <?php include 'cdn.php'; ?>
    <link rel="stylesheet" href="../css/sidebar.css">
    <link rel="stylesheet" href="../css/admin.css">
</head>

<body>
    <?php include 'sidebar.php'; ?>
    <div class="admin_all">

        <form method="post" action="">
            <div class="forms">
                <h2>Add New Car</h2>
            </div>
            <div class="forms">
                <label>Car Name:</label>
                <input type="text" placeholder="Enter the car name" name="car_name" required>
            </div>
            <div class="forms">
                <label>Model: </label>
                <input type="text" placeholder="Enter the model" name="model" required>
            </div>

            <div class="forms">
                <label>Transmission:</label>
                <select name="transmission" required>
                    <option value="" disabled selected hidden>Select transmission type</option>

                    <option value="automatic">Automatic</option>
                    <option value="manual">Manual</option>
                </select>
            </div>
            <div class="forms">
                <label>Price: </label>
                <input type="text" placeholder="Enter the price per day" name="price" required>
            </div>

            <div class="forms">
                <label>Color:</label>
                <input type="text" placeholder="Enter the color of the car" name="color" required>
            </div>
            <div class="forms">
                <button type="submit">Add a car</button>
            </div>


        </form>
    </div>
    <script src="../js/sidebar.js"></script>
</body>

</html>