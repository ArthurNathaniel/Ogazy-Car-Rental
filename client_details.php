<?php


// if (!isset($_SESSION['username'])) {
//     header("Location: login.php");
//     exit;
// }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'meta.php'; ?>
    <title>Client Details</title>
    <?php include 'cdn.php'; ?>
    <link rel="stylesheet" href="./css/sidebar.css">
    <link rel="stylesheet" href="./css/invoice.css">
</head>

<body>
    <?php include 'sidebar.php'; ?>
    <div class="admin_all">
        <div class="clients_all_title">
            <h1>Client Details</h1>
        </div>
        <form id="reservationForm" action="insert_data.php" method="post">

            <div class="clients_grid">
                <div class="clients_forms">
                    <label>Client Name:</label>
                    <input type="text" placeholder="Enter your client name" name="recipient_name">
                </div>

                <div class="clients_forms">
                    <label>Date:</label>
                    <input type="date" placeholder="Enter the date" name="date">
                </div>

                <div class="clients_forms">
                    <label>Driving License Number:</label>
                    <input type="text" placeholder="Enter your driving license number" name="driving_license_number">
                </div>

                <div class="clients_forms">
                    <label>Contact Number:</label>
                    <input type="number" placeholder="Enter your contact number" name="contact_number">
                </div>

                <div class="clients_forms">
                    <label>Durations (Days):</label>
                    <input type="number" placeholder="Enter your duration" name="duration">
                </div>

                <div class="clients_forms">
                    <label>Ghana Card ID:</label>
                    <input type="text" placeholder="Enter your Ghana card ID" name="ghana_card_id">
                </div>

                <div class="clients_forms">
                    <label>Destination:</label>
                    <input type="text" placeholder="Enter your destination" name="destination">
                </div>

                <div class="clients_forms">
                    <label>Car Registration:</label>
                    <input type="text" placeholder="Enter your car registration" name="car_registration">
                </div>

                <div class="clients_forms">
                    <label>Amount:</label>
                    <input type="text" placeholder="Enter the amount" name="amount">
                </div>
            </div>
            <div class="clients_grid">
                <div class="clients_forms">
                    <h1>Guarantor Details</h1>
                </div>
            </div>
            <div class="clients_grid">

                <div class="clients_forms">
                    <label>Guarantor:</label>
                    <input type="text" placeholder="Enter the guarantor" name="guarantor">
                </div>

                <div class="clients_forms">
                    <label>Location (Guarantor):</label>
                    <input type="text" placeholder="Enter the location" name="location_guarantor">
                </div>

                <div class="clients_forms">
                    <label>Ghana Card No(Guarantor):</label>
                    <input type="text" placeholder="Enter the location" name="ghana_card_id_guarantor">
                </div>
                <div class="clients_forms">
                    <label>Contact(Guarantor):</label>
                    <input type="text" placeholder="Enter the location" name="contact_guarantor">
                </div>
            </div>
            <div class="clients_grid">
                <div class="clients_forms">
                    <button type="submit" id="submitButton" >Submit</button>
                </div>
            </div>
        </form>
    </div>
    <script src="../js/sidebar.js"></script>
    <script>
        document.getElementById("reservationForm").addEventListener("submit", function() {
            var submitButton = document.getElementById("submitButton");
            submitButton.innerText = "Please Wait...";
            submitButton.disabled = true; // disable the button to prevent multiple submissions
        });
    </script>
</body>

</html>