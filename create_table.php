<html>
    <body>
        <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "appointment_db";

            $conn = mysqli_connect($servername, $username, $password, $dbname);
            if(!$conn){
                die("Connection Failed: " .mysqli_connect_error());
            }
            echo "Connection Succesfull";

            $sql = "CREATE TABLE appointments (
                id INT AUTO_INCREMENT PRIMARY KEY,
                first_name VARCHAR(30) NOT NULL, 
                last_name VARCHAR(30) NOT NULL,
                email VARCHAR(30) NOT NULL,
                date DATE NOT NULL,
                time TIME NOT NULL)";
            $conn -> query($sql);
        ?>
    </body>
</html>