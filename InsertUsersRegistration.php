<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "electives2";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if(!$conn){
        die("Could Not Connect:".mysqli_connect_error());
    }
    else{
        $firstName=test_input($_POST['firstName']);
        $lastName=test_input($_POST['lastName']);
        $age=test_input($_POST['age']);
        $gender=test_input($_POST['gender']);
        $homeAddress=test_input($_POST['homeAddress']);
        $email=test_input($_POST['email']);
        $contactNumber=test_input($_POST['contactNumber']);
        $userName=test_input($_POST['userName']);
        $password=test_input($_POST['password']);

        $query = "insert into users (firstName, lastName, age, gender, homeAddress, email, contactNumber, userName, password) 
		values ('$firstName','$lastName', '$age','$gender','$homeAddress','$email','$contactNumber','$userName','$password')";

        if(mysqli_query($conn, $query)){
            $query = "select * from users order by id asc";
            $result = mysqli_query($conn, $query);

            echo "<table>";
            echo "<thead>";
            echo "<tr>";
            echo " <th>ID</th>";
            echo "<th>NAME</th>";
            echo "<th>AGE</th>";
            echo "</tr>";
            echo "</thead>";
            echo "<tbody>";
                        
            while($user_data = mysqli_fetch_assoc($result)){

                echo "<tr>";
                echo "<td>".$user_data['id']."</td>";
                echo "<td>".$user_data['firstName'], ' ', $user_data['lastName']."</td>";
                echo "<td>".$user_data['age']."</td>";
                echo "</tr>";
            }
            
            echo "</tbody>";
            echo "</table>";
        }
        else{
            // No data in database
        }
        mysqli_close($conn);
    }
    function test_input($data){
        $data=trim($data);
        $data=stripslashes($data);
        $data=htmlspecialchars($data);
        return $data;
    }
?>