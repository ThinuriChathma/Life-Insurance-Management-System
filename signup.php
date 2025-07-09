<!DOCTYPE html>
<html>
    <head>
        <title>Safeguard Insurance</title>
    </head>

    <body>
        <?php
        require_once 'config.php';

        if($_SERVER["REQUEST_METHOD"] == "POST")
        {
            $firstName = $_POST['firstName'];
            $lastName = $_POST['lastName'];
            $phoneNumber = $_POST['phoneNumber'];
            $emailAddress = $_POST['emailAddress'];
            $password = $_POST['password'];
            $confirmPassword = $_POST['confirmPassword'];

            $sql = "INSERT INTO signup (firstName, lastName, phoneNumber, emailAddress, password, confirmPassword) VALUES ('$firstName', '$lastName', '$phoneNumber', '$emailAddress', '$password', '$confirmPassword')";

            
            if ($conn->query($sql) === TRUE)
            {
                echo "Request Submitted.!";
            }

            else
            {
                echo "Error: " . $sql . "<br>" . $conn->error; 
            }
        }

        $conn->close();
        ?>
        </div>
    </body>
    </html>