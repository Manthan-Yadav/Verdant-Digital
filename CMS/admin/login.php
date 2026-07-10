<?php
session_start();
require '../db.php';

$error = "";

if (isset($_POST['login'])) {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    $sql = "SELECT * FROM admin WHERE username='$username' AND password='$password'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $_SESSION['admin'] = $username;
        header("Location: dashboard.php");
        exit();
    } else {
        $error = "Invalid Username or Password!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Admin Login</title>

    <link rel="stylesheet" href="css/style.css">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

</head>

<body>

    <div class="login-container">

        <div class="login-box">

            <h2>Company CMS</h2>

            <p>Admin Panel Login</p>

            <?php
            if ($error != "") {
                echo "<div class='error'>$error</div>";
            }
            ?>

            <form method="POST">

                <div class="input-group">

                    <i class="fa-solid fa-user"></i>

                    <input type="text" name="username" placeholder="Username" required>

                </div>

                <div class="input-group">

                    <i class="fa-solid fa-lock"></i>

                    <input type="password" id="password" name="password" placeholder="Password" required>

                    <span class="toggle-password">

                        <i class="fa-solid fa-eye" onclick="togglePassword()"></i>

                    </span>

                </div>

                <button type="submit" name="login">

                    Login

                </button>

            </form>

        </div>

    </div>

    <script>

        function togglePassword() {

            var x = document.getElementById("password");

            if (x.type === "password") {
                x.type = "text";
            }
            else {
                x.type = "password";
            }

        }

    </script>

</body>

</html>