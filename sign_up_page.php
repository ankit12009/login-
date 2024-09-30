<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
    <link rel="stylesheet" href="styles.css">
</head>
<style>
    body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

.container {
    background-color: #fff;
    padding: 30px;
    border-radius: 8px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    width: 350px;
}

h1 {
    text-align: center;
    margin-bottom: 20px;
}

.form-group {
    margin-bottom: 15px;
}

label {
    display: block;
    margin-bottom: 5px;
}

input {
    width: 100%;
    padding: 10px;
    border: 1px solid #ddd;
    border-radius: 4px;
}

#s1 {
    width: 100%;
    padding: 10px;
    background-color: #5cb85c;
    border: none;
    color: white;
    border-radius: 4px;
    cursor: pointer;
}

#s1:hover {
    background-color: #4cae4c;
}

.message {
    text-align: center;
    margin-top: 15px;
}
</style>
<body>
    <div class="container">
        <h1>Sign In</h1>
        <form action="#" method="post">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>
            <input type="submit" value="Sign In" id="s1">
        </form>
        <p class="message">Don't have an account? <a href="http://localhost/login-/sign_in_page.php">Sign Up</a></p>
    </div>
    </body>
    </html>
    <?php
    $server = "localhost";
    $user = "root";
    $password = "";
    $db = "user";
    $con = mysqli_connect($server, $user, $password, $db);

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $sql = "SELECT * FROM signup WHERE username='$username' AND pasword='$password'";
        $result = $con->query($sql);
        if ($result->num_rows > 0) {
            $admin="Admin";
            $apass="AshaAnkit@1209";
            if ($username === $admin && $password === $apass) {
                echo "<script>alert('Hello Admin sir');</script>";
                exit();
            }
             else{
                echo "<script>alert('Login successful!');</script>";
             }
        }
         else {
            echo "<script>alert('Invalid username or password');</script>";
        }
    }
    ?>