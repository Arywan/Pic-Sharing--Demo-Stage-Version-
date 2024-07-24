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
    $id = $_POST['id'];
    $username = $_POST['username'];
    $bio = $_POST['bio'];
    $email = $_POST['email'];
    $avatar = $_POST['avatar'];
    $password = $_POST['password'];

    $sql = "UPDATE users SET username='$username', bio='$bio', email='$email', avatar='$avatar', password='$password' WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $conn->error;
    }

    $conn->close();
    header("Location: index.php");
} else {
    $id = $_GET['id'];
    $sql = "SELECT * FROM users WHERE id=$id";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Update Guest</title>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    </head>

    <body>
        <div class="container mt-5">
            <div class="text-center">
                <h1>Update Guest</h1>
            </div>
            <form action="update.php" method="POST" class="my-4">
                <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                <div class="form-group">
                    <label for="username">Username:</label>
                    <input type="text" class="form-control" id="username" name="username" value="<?php echo $row['username']; ?>" required>
                </div>
                <div class="form-group">
                    <label for="bio">Bio:</label>
                    <input type="text" class="form-control" id="bio" name="bio" value="<?php echo $row['bio']; ?>" required>
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" id="email" name="email" value="<?php echo $row['email']; ?>" required>
                </div>
                <div class="form-group">
                    <label for="avatar">Avatar URL:</label>
                    <input type="text" class="form-control" id="avatar" name="avatar" value="<?php echo $row['avatar']; ?>" required>
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" class="form-control" id="password" name="password" value="<?php echo $row['password']; ?>" required>
                </div>
                <button type="submit" class="btn btn-primary">Update Guest</button>
            </form>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </body>

    </html>
<?php
}
$conn->close();
?>