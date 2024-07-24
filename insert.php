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

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $bio = $_POST['bio'];
    $email = $_POST['email'];
    $avatar = $_POST['avatar'];
    $password = $_POST['password'];

    $sql = "INSERT INTO users (username, bio, email, avatar, password) VALUES ('$username', '$bio', '$email', '$avatar', '$password')";

    if ($conn->query($sql) === TRUE) {
        echo "<div class='alert alert-success' role='alert'>New record created successfully</div>";
    } else {
        echo "<div class='alert alert-danger' role='alert'>Error: " . $sql . "<br>" . $conn->error . "</div>";
    }

    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Guest</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }

        .container {
            max-width: 600px;
            margin-top: 50px;
        }

        .form-control {
            border-radius: 10px;
        }

        .btn-primary {
            border-radius: 20px;
        }

        .alert {
            border-radius: 10px;
            margin-top: 20px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="text-center mb-4">
            <h1>Add a New Guest</h1>
        </div>

        <form action="insert.php" method="POST" class="border p-4 bg-white shadow rounded">
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" class="form-control" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="bio">Bio:</label>
                <input type="text" class="form-control" id="bio" name="bio" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="avatar">Avatar URL:</label>
                <input type="text" class="form-control" id="avatar" name="avatar" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <button type="submit" class="btn btn-primary btn-block">Add Guest</button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>