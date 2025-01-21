<?php
// Get the current date and time
$currentDateTime = date('Y-m-d H:i:s');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Form</title>
    <style>
        body {
            background-color: #121212;
            color: #E0E0E0;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 100%;
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            background-color: #333;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }
        h2 {
            text-align: center;
        }
        label {
            display: block;
            margin-bottom: 5px;
        }
        input[type="text"], input[type="email"], input[type="date"], input[type="time"] {
            width: 96%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #666;
            border-radius: 4px;
            background-color: #444;
            color: #E0E0E0;
        }
        input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #6A0DAD;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #580B91;
        }
        input[type="text"]:focus, input[type="email"]:focus, input[type="date"]:focus, input[type="time"]:focus {
            border-color: #6A0DAD;
            outline: none;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Appointment Booking</h2>
    <form method="POST" action="index.php">
        <div>
            <label for="firstname">First Name</label>
            <input type="text" id="firstname" name="firstname" required>
        </div>
        <div>
            <label for="lastname">Last Name</label>
            <input type="text" id="lastname" name="lastname" required>
        </div>
        <div>
            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div>
            <label for="appointment_date">Preferred Appointment Date</label>
            <input type="date" id="appointment_date" name="appointment_date" required>
        </div>
        <div>
            <label for="appointment_time">Preferred Appointment Time</label>
            <input type="time" id="appointment_time" name="appointment_time" required>
        </div>
        <input type="submit" value="Book Appointment">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $appointmentDate = $_POST['appointment_date'];
        $appointmentTime = $_POST['appointment_time'];
    }
    ?>
</div>

</body>
</html>
