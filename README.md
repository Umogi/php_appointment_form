# Appointment Booking System

This project is a simple appointment booking system built using PHP and HTML, designed to store appointment details in a MySQL database. The system allows users to book appointments by submitting a form, which saves their details in a database.

## Features

- Form submission for booking appointments
- Database creation and connection
- Table creation for storing appointments
- Simple and user-friendly interface

## Requirements

- PHP 7.4 or higher
- MySQL 5.6 or higher
- A web server (e.g., Apache or Nginx)

## Installation

1. Clone this repository to your local machine:
    ```bash
    git clone https://github.com/yourusername/appointment-booking-system.git
    ```

2. Navigate to the project directory:
    ```bash
    cd appointment-booking-system
    ```

3. Set up your database:
    - Create a MySQL database named `appointment_db` using the provided `create_database.php` file:
      ```php
      <?php
          $servername = "localhost";
          $username = "root";
          $password = "";

          $conn = mysqli_connect($servername, $username, $password);
          if (!$conn) {
              die("Connection Failed: " . mysqli_connect_error());
          }
          echo "Connection Successful";

          $sql = "CREATE DATABASE appointment_db";
          $conn->query($sql);
      ?>
      ```

    - Create the `appointments` table using the provided `create_table.php` file:
      ```php
      <?php
          $servername = "localhost";
          $username = "root";
          $password = "";
          $dbname = "appointment_db";

          $conn = mysqli_connect($servername, $username, $password, $dbname);
          if (!$conn) {
              die("Connection Failed: " . mysqli_connect_error());
          }
          echo "Connection Successful";

          $sql = "CREATE TABLE appointments (
              id INT AUTO_INCREMENT PRIMARY KEY,
              first_name VARCHAR(30) NOT NULL,
              last_name VARCHAR(30) NOT NULL,
              email VARCHAR(30) NOT NULL,
              date DATE NOT NULL,
              time TIME NOT NULL
          )";
          $conn->query($sql);
      ?>
      ```

4. Update the database connection details in `index.php` to match your local setup.

5. Start your web server and navigate to the project directory to test the form submission.

## Usage

1. Access the form via your web browser by navigating to the appropriate URL (e.g., `http://localhost/appointment-booking-system`).
2. Fill out the form with the required details and click on "Book Appointment".
3. The appointment details will be saved in the `appointments` table in the `appointment_db` database.

## Contributing

Feel free to submit issues or pull requests. For major changes, please open an issue first to discuss what you would like to change.

## License

This project is licensed under the MIT License. See the `LICENSE` file for more information.

