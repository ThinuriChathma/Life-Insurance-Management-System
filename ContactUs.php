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
            $fname = $_POST['fname'];
            $lname = $_POST['lname'];
            $mail = $_POST['mail'];
            $phone = $_POST['phone'];
            $question = $_POST['question'];

            $sql = "INSERT INTO bro (fname, lname, mail, phone, question) VALUES ('$fname', '$lname', '$mail', '$phone', '$question')";

            
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