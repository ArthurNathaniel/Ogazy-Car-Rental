<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'meta.php'; ?>
    <title>Print Invoice</title>
    <?php include 'cdn.php'; ?>
    <link rel="stylesheet" href="./css/invoice.css">

    <link rel="stylesheet" href="base.css">
    <style>

    </style>
</head>

<body>
    <div class="invoice_navbar">
        <div class="logo_invoice"></div>
        <div class="invoice_nav">

            <h1>INVOICE</h1>
        </div>
    </div>
    <?php
    include 'db.php';
    // // Establish database connection
    // $servername = "localhost";
    // $username = "root";
    // $password = "";
    // $dbname = "car_rental";

    // $conn = new mysqli($servername, $username, $password, $dbname);

    // // Check connection
    // if ($conn->connect_error) {
    //     die("Connection failed: " . $conn->connect_error);
    // }

    // Retrieve invoice ID from URL parameter
    $invoice_id = $_GET['id'];

    // Retrieve invoice details from database
    $sql = "SELECT * FROM invoices WHERE id = $invoice_id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        echo "<div class='whole_invoice'>";
        echo "<h2>Invoice ID: " . $row["id"] . "</h2>";
        echo "<p>Billed to: " . $row["billed_to"] . "</p>";
        echo "<p>Contact Number: " . $row["contact_number"] . "</p>";
        echo "<p>Date: " . date('Y-m-d') . "</p>";

        echo "<br> <br>";

        // Retrieve service details for this invoice
        $sql_details = "SELECT * FROM invoice_details WHERE invoice_id = $invoice_id";
        $result_details = $conn->query($sql_details);

        if ($result_details->num_rows > 0) {
            echo "<table>";
            echo "<tr><th>Service</th><th>Day</th><th>Price</th><th>Amount</th></tr>";
            while ($row_details = $result_details->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row_details["service"] . "</td>";
                echo "<td>" . $row_details["day"] . "</td>";
                echo "<td>" . $row_details["price"] . "</td>";
                echo "<td>" . $row_details["amount"] . "</td>";
                echo "</tr>";
            }
            echo "<tr><td colspan='3' align='right'><strong>Subtotal:</strong></td><td><p> " . $row["sub_total"] . "</p></td></tr>";
            echo "<tr><td colspan='3' align='right'><strong>Total:</strong></td><td><h1> GHC " . number_format($row["total"], 2) . "</h1></td></tr>";

            echo "</table>";
        } else {
            echo "No service details found for this invoice";
        }

        echo "</div>";
    } else {
        echo "Invoice not found";
    }
    $conn->close();
    ?>

    <div class="last_footer">
        <div class="payment_info">
            <h2>PAYMENT INFO:</h2>
            <p><strong>Momo Mobile Number:</strong> +233 24 910 3331</p>
            <p><strong>Momo Account Name:</strong> o Ogazy G. Car Rentals</p>
        </div>
        <div class="location">
            <h2>FIND US:</h2>
            <p> <i class="fa-solid fa-phone"></i> +233 24 910 3331 </p>
            <p> <i class="fa-solid fa-location"></i> Kumasi Airport Roundabout near DVLA Office</p>
        </div>
    </div>
    <br>
    <br>
    <div class="invoice_navbar">
        <div class="logo_invoice"></div>
        <div class="invoice_nav">

            <h1>TERMS</h1>
        </div>
    </div>
    <div class="about_aall">
        <h1>Ogazy G. Car Rental Terms and Conditions</h1>
        <p>
            Welcome to Ogazy G. Car Rentals! Prior to confirming your reservation, please take a moment to familiarize yourself with our terms and conditions outlined below. These guidelines are designed to ensure a seamless and pleasant rental experience for all our valued customers. Should you have any inquiries or require assistance, our dedicated team is readily available to assist you. Thank you for selecting Ogazy G. Car Rentals for your travel needs.
        </p>
        <ol>
            <li>Reservations subject to availability, made online or via phone.</li>
            <li>Valid driver's license and payment required at pickup.</li>
            <li>Security deposit may apply.</li>
            <li>Cancellation policy enforced.</li>
            <li>Basic insurance included; additional options available.</li>
            <li>Vehicle return as agreed; late returns may incur fees.</li>
            <li>No smoking or pets allowed.</li>
            <li>Prompt reporting of damages or issues required.</li>
            <li>Ogazy not liable for personal belongings.</li>
            <li>Additional terms may apply.</li>
        </ol>



    </div>


    <div class="last_footer">
        <div class="payment_info">
            <h2>PAYMENT INFO:</h2>
            <p><strong>Momo Mobile Number:</strong> +233 24 910 3331</p>
            <p><strong>Momo Account Name:</strong> o Ogazy G. Car Rentals</p>
        </div>
        <div class="location">
            <h2>FIND US:</h2>
            <p> <i class="fa-solid fa-phone"></i> +233 24 910 3331 </p>
            <p> <i class="fa-solid fa-location"></i> Kumasi Airport Roundabout near DVLA Office</p>
        </div>
    </div>
    <button onclick="window.print()">Print Invoice</button>

</body>

</html>