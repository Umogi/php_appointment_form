<html>
    <body> 
        <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "appointment_db";

			$conn = mysqli_connect($servername, $username, $password, $dbname);
            if(!$conn){
                die("Connection Failed: " . mysqli_connect_error());
            }

			$firstname = $_POST["firstname"];
			$lastname = $_POST["lastname"];
			$email = $_POST["email"];
			$appointment_date = $_POST["appointment_date"];
			$appointment_time = $_POST["appointment_time"];
			
			echo $firstname;

			$sql = "INSERT INTO appointments (first_name, last_name, email, date, time) 
					VALUES ('$firstname', '$lastname', '$email', '$appointment_date', '$appointment_time')";
			$conn -> query($sql);
        ?>    
    </body> 
</html>