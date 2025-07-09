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
            $email = $_POST['email'];
            $address = $_POST['address'];
            $city = $_POST['city'];
            $state = $_POST['state'];
            $zip = $_POST['zip'];
            $ctype = $_POST['ctype'];
            $nameOnCard = $_POST['nameOnCard'];
            $cNumber = $_POST['cNumber'];
            $expMonth = $_POST['expMonth'];
            $expYear = $_POST['expYear'];
            $CVV = $_POST['CVV'];

            $sql = "INSERT INTO payment (fname, email, address, city, state, zip, ctype, nameOnCard, cNumber, expMonth, expYear, CVV) 
            VALUES ('$fname','$email','$address','$city','$state','$zip', '$ctype', '$nameOnCard', '$cNumber', '$expMonth', '$expYear', '$CVV')";

            
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