<html>
    <body> 
        <?php
            $servername = "localhost";
            $username = "root";
            $password = "";

            $conn = mysqli_connect($servername, $username, $password);
            if(!$conn){
                die("Connection Failed: " .mysqli_connect_error());
            }
            echo "Connection Succesfull";

            $sql = "CREATE DATABASE appointment_db";
            $conn -> query($sql);
        ?>    
    </body> 
</html>

