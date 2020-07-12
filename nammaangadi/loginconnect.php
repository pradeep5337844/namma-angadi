<!doctype html>
<html lang="en">

<head>

    <link href="assets/dist/css/bootstrap.css" rel="stylesheet">
</head>

<body>
    <?php
    $username = filter_input(INPUT_POST, 'email');
    $password = filter_input(INPUT_POST, 'password');

    $host = "localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "login";
    // Create connection
    $conn = new mysqli($host, $dbusername, $dbpassword, $dbname);


    if (mysqli_connect_error()) {
        die('Connect Error (' . mysqli_connect_errno() . ') '
            . mysqli_connect_error());
    } else {
        $sql = "Select name,username,password from users where username='$username'";

        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_array()) {
                if ($row['password'] == $password) {
                    setcookie("username", $row['name'], time() + 30 * 24 * 60 * 60);
                    setcookie("email", $row['username'], time() + 30 * 24 * 60 * 60);
                    
                    header("Location: ./");
                } else {
                    echo
                        '<script>alert("Wrong Username/Password")</script>';
                    echo '<div class="alert alert-danger" role="alert">
  Wrong Username/password <a href="./login.php" class="alert-link">Retry</a>
</div>';
                }
            }
        } else {
            echo
                '<script>alert("Wrong Username")</script>';
            echo '<div class="alert alert-danger" role="alert">
Wrong Username <a href="./login.php" class="alert-link">Retry</a>
</div>';
        }


        $conn->close();
    }
    ?>

</body>

</html>