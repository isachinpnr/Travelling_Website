<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/49e1b371d4.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./css/style.css">
    <title>Trevel Website | contect</title>
</head>

<body>
    <nav class="navbar bg-dark">
        <div class="container">
            <h1 class="logo lg-heading text-red text-light">WT</h1>
            <ul class="navitems">
                <li class="nav-items"><a href="./index.html">Home</a></li>
                <li class="nav-items"><a href="./about.html">About</a></li>
                <li class="nav-items"><a href="./contact.php">Contact</a></li>
        </div>
        </ul>
    </nav>

    <section class="contact-form">
        <div class="container">
            <div class="form-wrapper">
                <div class="company-address">
                    <div class="address-group">
                        <i class="fas fa-map-marker-alt fa-3x text-red"></i>
                        <h2 class="text-grey md-heading">Location</h2>
                        <p>Dehradun,Uttarakhand.</p>
                    </div>
                    <div class="address-group">
                        <i class="far fa-envelope fa-3x text-red"></i>
                        <h2 class="text-grey md-heading">Email</h2>
                        <p>sciecestation555@gmail.com , shnraftaar@gmail.com</p>
                    </div>
                    <div class="address-group">
                        <i class="fas fa-phone-square-alt fa-3x text-red"></i>
                        <h2 class="text-grey md-heading">Call</h2>
                        <p>8126474905, 8979149495.</p>
                    </div>
                    <img src="./image/company-img.jpg" alt="company-imgage">
                </div>
                <form action="" class="form" method="POST">
                    <h1 class="lg-heading text-black">Contact-Us</h1>
                    <p class="text-gray">let us know your question and concern by filling out the your suggestions</p>
                    <div class="form-group">
                        <label for="username">Username</label>
                       <input type="text" id="username" name="username" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" required>
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone</label>
                        <input type="number" name="number" id="number" required>
                    </div>
                    <div class="form-group">
                        <label for="messages">Messages</label>
                        <textarea name="message" id="message"></textarea>
                    </div>
                    <button type="submit" class="form-btn" name="submit" value="Registered" >submit</button>

                </form>
            </div>
        </div>
    </section>


    <footer class="footer">
        <div class="social-media-links">
            <i class="fab fa-facebook fa-4x"></i>
            <i class="fab fa-youtube fa-4x"></i>
            <i class="fab fa-instagram fa-4x"></i>
        </div>
        <p>World Trevel &copy; 2021, All Rghts Reserved</p>
    </footer>

</body>

</html>


<?php
       include 'connection.php';

       if(isset($_POST['submit'])){

       $username = $_POST['username'];
       $email = $_POST['email'];
       $number = $_POST['number'];
       $massage = $_POST['message'];
        

       $insertquery = "insert into yatri(username,email,number,message) values('$username','$email','$number','$message') ";

       $res = mysqli_query($con,$insertquery);

       if($res){
       ?>
       <script>
           alert("data insert properly");
       </script>
       <?php
        }else{
            ?>
            <script>
                alert("data not insert properly");
            </script>
            <?php
        }
}
