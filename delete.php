<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$id = $_GET['id'];

$sql = "DELETE FROM users WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    $message = "Record deleted successfully";
    $alert_class = "alert-success";
} else {
    $message = "Error deleting record: " . $conn->error;
    $alert_class = "alert-danger";
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Guest</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }

        .container {
            max-width: 600px;
            margin-top: 50px;
        }

        .alert {
            border-radius: 10px;
        }

        .btn {
            border-radius: 20px;
        }

        .text-center {
            margin-bottom: 20px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="text-center">
            <h1>Delete Guest</h1>
        </div>

        <div class="alert <?php echo $alert_class; ?>" role="alert">
            <?php echo $message; ?>
        </div>

        <div class="text-center">
            <a href="index.php" class="btn btn-primary">Back to Home</a>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>