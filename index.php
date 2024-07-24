<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show All Guests</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <div class="text-center">
            <h1>Welcome to Admin Page</h1>
        </div>

        <form action="insert.php" method="POST" class="my-4">
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
            <button type="submit" class="btn btn-primary">Add Guest</button>
        </form>

        <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "mydb";

        // Create connection
        $conn = mysqli_connect($servername, $username, $password, $dbname);
        // Check connection
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        $sql = "SELECT * FROM users";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
        ?>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Username</th>
                        <th>Bio</th>
                        <th>Email</th>
                        <th>Avatar</th>
                        <th>Password</th>
                        <th>Update</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr><td>" .
                            $row["id"] . "</td><td>"
                            . $row["username"] . "</td><td>"
                            . $row["bio"] . "</td><td>"
                            . $row["email"] . "</td><td>"
                            . $row["avatar"] . "</td><td>"
                            . $row["password"] .
                            "</td><td><a href='update.php?id=" . $row["id"] . "' class='btn btn-warning'>Update</a></td>
                            <td><a href='delete.php?id=" . $row["id"] . "' class='btn btn-danger'>Delete</a></td></tr>";
                    }
                    ?>
                </tbody>
            </table>
        <?php
        } else {
            echo "<div class='alert alert-warning'>No results found</div>";
        }
        mysqli_close($conn);
        ?>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>