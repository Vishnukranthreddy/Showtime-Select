<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <title>Contact Us</title>
    <link rel="icon" type="image/png" href="img\sslogo.jpg">
</head>

<body>
    <?php
    $link = mysqli_connect("localhost", "root", "", "cinema_db");
    ?>
    <header></header>
    <div class="contact-us-container">
        <div class="contact-us-section contact-us-section1">
            <h1>Contact</h1>
            <p>Feel Free to Contact Us </p>
            <form action="" method="POST">
                <input placeholder="First Name" name="fName" required><br>
                <input placeholder="Last Name" name="lName"><br>
                <input placeholder="E-mail Address" name="eMail" required><br>
                <textarea placeholder="Enter your message !" name="feedback" rows="10" cols="30" required></textarea><br>
                <button type="submit" name="submit" value="submit">Send your Message</button>
                <?php
                if (isset($_POST['submit'])) {
                    $insert_query = "INSERT INTO 
                        feedbackTable ( senderfName,
                                        senderlName,
                                        sendereMail,
                                        senderfeedback)
                        VALUES (        '" . $_POST["fName"] . "',
                                        '" . $_POST["lName"] . "',
                                        '" . $_POST["eMail"] . "',
                                        '" . $_POST["feedback"] . "')";
                    mysqli_query($link, $insert_query);
                }
                ?>
            </form>

        </div>
        <div class="contact-us-section contact-us-section2">
            <h1>Address & Info</h1>
            <h3>Phone Numbers</h3>
            <p><a href="tel:01011391148">+91 xxxxxxxxxx</a><br>
                <a href="tel:01011391148">+91 xxxxxxxxxx</a></p>
            <h3>Address</h3>
            <p>Acad Block, IIIT RAICHUR, Yermarus Camp</p>
            <h3>E-mail</h3>
            <p><a href="mailto:cinemareservation@bue.edu.eg">cs22b1058@iiitr.ac.in
            cs22b1022@iiitr.ac.in
            cs22b1059@iiitr.ac.in
                cs22b1034@iiitr.ac.in</a></p>
           
        </div>
    </div>
    <
    <footer></footer>
    <script src="scripts/jquery-3.3.1.min.js "></script>
    <script src="scripts/owl.carousel.min.js "></script>
    <script src="scripts/script.js "></script>
</body>

</html>