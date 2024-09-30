<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
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
        <h1>Sign Up</h1>
        <form action="#" method="get">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="u1" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>
            <input type="submit" value="Sign Up" name="S1" id="s1"> 
        </form>
        <p class="message">Already have an account? <a href="http://localhost/signup-signin/log_in_page.php">Sign In</a></p>
    </div>
</body>
</html> 
<?php
$server="localhost";
$user="root";
$password="";
$db="user";
$con=mysqli_connect($server,$user,$password,$db);
if(isset($_GET['S1'])){
    $un=$_GET['u1'];
    $em=$_GET['email'];
    $pw=$_GET['password'];
    $sql = "INSERT INTO signup (username,email,pasword)
VALUES ('$un', '$em', '$pw')";
if ($con->query($sql) === TRUE) {
    echo "<script>alert('New record created successfully');</script>";
} else {
    echo "<script>alert('Error: " . $con->error . "');</script>";
}
}
?>