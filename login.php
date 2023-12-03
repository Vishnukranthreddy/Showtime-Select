<!DOCTYPE html>
<html lang="en">
  
   
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="log.css">
    <link  rel="icon" href="img\sslogo.jpg" >  
    <style>
        *{
            margin: 0;
            padding: 0;
        }
        .container{
            width: 100%;
            height: 100vh;
            font-family: sans-serif;
            background: rgb(187,187,245);
            color: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .card{
            width: 350px;
            height: 500px;
            box-shadow: 0 0 40px 20px rgba(0,0,0,0.26);
            perspective: 1000px;
        }
        .inner-box{
            position: relative;
            width: 100%;
            height: 100%;
            transform-style: preserve-3d;
            transition: transform 1s;
        }
        .card-front, .card-back{
            position: absolute;
            width: 100%;
            height: 100%;
            background-position: center;
            background-size: cover;
            background-image: linear-gradient(rgb(235, 59, 82,0.7),rgb(235, 59, 82,0.7)), url(https://th.bing.com/th/id/OIP.hTqVjZ27HD5yPcO1lN9u1AHaHa?w=184&h=184&c=7&o=5&dpr=1.25&pid=1.7);
            padding: 55px;
            box-sizing: border-box;
            backface-visibility:hidden;
        }
        .card-back{
            transform: rotateY(180deg);
        }
        .card h2{
            font-weight: normal;
            font-size: 24px;
            text-align: center;
            margin-bottom: 20px;
        }
        .input-box{
            width: 100%;
            background: transparent;
            border: 1px solid #fff;
            margin: 6px 0;
            height: 32px;
            border-radius: 20px;
            padding: 0 10px;
            box-sizing: border-box;
            outline: none;
            text-align: center;
            color: #fff;
        }
        ::placeholder{
            color: #fff;
            font-size: 12px;
        }
        button{
            width: 100%;
            background: transparent;
            border: 1px solid #fff;
            margin: 35px 0 10px;
            height: 32px;
            color: #fff;
            border-radius: 20px;
            cursor: pointer;
            outline: none;
            font-size: 12px;
            padding: 0 10px;
            box-sizing: border-box;
            outline: none;
            cursor: pointer;
        }
        .btn-submit{
            position: relative;
        }
        .btn-submit::after{
            content: '\27a4';
            color: #333;
            line-height: 32px;
            height: 32px;
            font-size: 17px;
            width: 32px;
            border-radius: 50%;
            background: #fff;
            position: absolute;
            top: -1px;
            right: -1px;
        }
        span{
            font-size: 13px;
            margin-left: 10px;
        }
        .btn{
            margin-top: 70px;
        }
        .card a{
            text-decoration: none;
            color: #fff;
            display: block;
            text-align: center;
            font-size: 13px;
            margin-top: 8px;
        }
    </style>  
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="inner-box" id="card">
                
                <div class="card-front">
                    <h2>Log In</h2>
                    <form action="Home.html">
                        <input type="username" class="input-box" placeholder="username" required>
                        <input type="password" class="input-box" placeholder="Password" required>
                        <button type="submit" class="btn-submit">Submit</button>
                        <input type="checkbox"><span>Remember Me</span>
                    </form>
                    <button type="button" class="btn" onclick="openRegister()">Sign Up</button>
                    <a href="#">Forgot Password</a>
                </div>
                <div class="card-back">
                    <h2>Register</h2>
                    <form action="Home.html">
                        <input type="text" class="input-box" placeholder="Name" required>
                        <input type="email" class="input-box" placeholder="Email Id" required>
                        <input type="password" class="input-box" placeholder="Password" required>
                        <button type="submit" class="btn-submit">Sign Up</button>
                        <input type="checkbox"><span>Remember Me</span>
                    </form>
                    <button type="button" class="btn" onclick="openLogin()">Already have an account</button>
                    <a href="#">Forgot Password</a>
                </div>
            </div>
        </div>
    </div>

    <script>
        var card = document.getElementById("card");

        function openRegister(){
            card.style.transform = "rotateY(-180deg)";
        }
        function openLogin(){
            card.style.transform = "rotateY(0deg)";
        }
    </script>
</body>
</html>
<?php
session_start(); // Start the session

$host = "localhost";
$username = "root";
$password = "";
$database = "cinema_db";

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["login"])) {
        $username = $_POST["username"];
        $password = $_POST["password"];

        // Use prepared statements to prevent SQL injection
        $query = $conn->prepare("SELECT * FROM users WHERE username = ? LIMIT 1");
        $query->bind_param("s", $username);
        $query->execute();
        $result = $query->get_result();
        $_SESSION['username'] = $username;
        if ($result->num_rows > 0) {
            $user = $result->fetch_assoc();
            // Verify the password using password_verify()
            if (password_verify($password, $user['password'])) {
                
                header("Location: contact-us.php");
                exit();
            } else {
                echo "Invalid username or password";
            }
        } else {
            echo "Invalid username or password";
        }
        $query->close();
    } elseif (isset($_POST["register"])) {
        $name = $_POST["name"];
        $email = $_POST["email"];
        $password = password_hash($_POST["password"], PASSWORD_DEFAULT); // Hash the password

        $insertQuery = $conn->prepare("INSERT INTO users (username, name, password) VALUES (?, ?, ?)");
        $insertQuery->bind_param("sss", $email, $name, $password);
        
        if ($insertQuery->execute()) {
            header("Location: contact-us.php");
            exit();
        } else {
            echo "Registration failed";
        }
        $insertQuery->close();
    }
}

$conn->close();
?>
