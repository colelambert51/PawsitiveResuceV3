<?php
    session_start();
    error_reporting(0);

    include 'dbconnect.php';
    $ID= $_SESSION["id"];
    $username = $_SESSION["username"];
    $sql=mysqli_query($conn,"SELECT * FROM users where ID='$ID' and username='$username'");
    $row  = mysqli_fetch_array($sql);
    /*
    //For Debugging
    echo "Session ID: " . $_SESSION["id"] . "<br>";
    echo "Session Email: " . $_SESSION["email"] . "<br>";
    echo "Session Email: " . $_SESSION["username"] . "<br>";
    */
    ?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Non-Profit</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Kumbh+Sans:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>
    <nav class="navbar">
        <div class="navbar__container">
            <a href="index.html" id="navbar__logo"><i class="fa-solid fa-otter"></i>Pawsitive Rescue</a>
            <div class="navbar__toggle" id="mobile-menu">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </div>
            <ul class="navbar__menu">
                <li class="navbar__item">
                    <a href="index.html" class="navbar__links">
                        Home
                    </a>
                </li>
                <li class="navbar__item">
                    <a href="purpose.html" class="navbar__links">
                        Purpose
                    </a>
                </li>
                <li class="navbar__item">
                    <a href="gala.html" class="navbar__links">
                        Gala
                    </a>
                </li>
                <li class="navbar__btn">
                    <a href="settings.php" class="navbar__links">
                        Settings
                    </a>
                </li>
                <li class="navbar__btn">
                    <a href="register.html" class="button">
                        Register
                    </a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="main">
        <div class="main__container">
            <div class="main__content">
                <h1>Thank You!</h1>
                <h2>You are making a difference!</h2>
                <p>Click Below or Scroll to Continue</p>
                <button class="main__btn"><a href="#donate">Donate</a></button>

            </div>
            <div class="main_img--container">
                <img src="images/pic1.svg" alt="Woman and Her Dog" id="main__img" draggable="false">
            </div>
        </div>
    </div>

<?php
    if(isset($_SESSION['username'])){

    echo '<form>
        <h3 id="donate">Payment Info</h3>
        <table id="card__info">
            <tr>
                <td id="query">Name on Card:</td>
                <td><input type="text" required placeholder="John Orange Appleseed" name="fname"></td>
            </tr>
            <tr>
                <td id="query">Card Number:</td>
                <td><input type="number" required placeholder="1234-5678-9012-3456" name="cardNum"></td>
            </tr>
            <tr>
                <td id="query">Expiration Date:</td>
                <td><input  type="month" required></td>
            </tr>
            
        </table>
        <h4 id="donate">Billing Address</h4>
        <table id="billing__add">
            <tr>
                <td id="query">Full Name:</td>
                <td><input type="text" required name="fullname" placeholder="John O. Appleseed"></td>
            </tr>
            <tr>
                <td id="query">Email:</td>
                <td><input type="email" required placeholder="johnseed1@gmail.com"></td>
            </tr>
            <tr>
                <td id="query">Address</td>
                <td><input type="text" required placeholder="1234 Appleseed Way"></td>
            </tr>
            <tr>
                <td id="query">City:</td>
                <td><input type="text" required placeholder="New York"></td>
            </tr>
            <tr>
                <td id="query">Zip:</td>
                <td><input type="text" required minlength="5" maxlength="5" placeholder="10001"></td>
            </tr>
            <tr>
                <td id="query">State:</td>
                <td><input type="text" required minlength="2" maxlength="2" id="field" placeholder="NY"></td>
            </tr>
        </table>
        <table id="check">
            <tr>
                <td><input type="checkbox" name="shipping" id=""> Shipping address same as billing</td>
            </tr>
            </table>
            <table>
            <tr>
                <td>
                    <input type="submit" name="submit" id="sub" value="Submit">
                </td>
            </tr>
        </table>
    </form>';
    }else
    {
    echo'
    <div class="donate__container">
        <h1>Please create an account and login before attempting dontating!</h1>
    </div>';
    }
?>
    <div class="footer__container">
        <div class="footer__links">
            <div class="footer__link--wrapper">
                <div class="footer__link--items">
                    <h2>About Us</h2>
                    <a href="/">How We Operate</a>
                    <a href="/">Founders</a>
                    <a href="/">Find Us</a>
                    <a href="/">Programs</a>
                    <a href="/">History</a>
                </div>
                <div class="footer__link--items">
                    <h2>Contact Us</h2>
                    <a href="/">Give Us A Call</a>
                    <a href="/">Text Us</a>
                    <a href="/">DM Us On Instagram</a>
                    <a href="/">Tag Us On Twitter</a>
                    <a href="/">Send Us Something</a>
                </div>
            </div>
            <div class="footer__link--wrapper">
                <div class="footer__link--items">
                    <h2>Ways To Give</h2>
                    <a href="/">Donate Here</a>
                    <a href="/signup.html">Volunteer Here</a>
                </div>
                <div class="footer__link--items">
                    <h2>Abuse Facts</h2>
                    <a href="https://www.humanesociety.org/resources/animal-cruelty-facts-and-stats">Humane Society</a>
                    <a href="https://www.dosomething.org/us/facts/11-facts-about-animal-cruelty">DoSomething.org</a>
                    <a href="https://worldanimalfoundation.org/advocate/animal-cruelty-statistics/">World Animal Foundation</a>
                </div>
            </div>
        </div>
        <div class="social__media">
            <div class="social__media--wrap">
                <div class="footer__logo">
                    <a href="/" id="footer__logo"><i class="fas fa-otter"></i>Pawsitive Rescue</a>
                </div>
                <p class="website__right">Pawsitive Rescue 2024. All rights reserved.</p>
                <div class="social__icons">
                    <a href="/" class="social__icon--link" target="_blank">
                        <i class="fab fa-facebook"></i>
                    </a>
                    <a href="/" class="social__icon--link" target="_blank">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="/" class="social__icon--link" target="_blank">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="/" class="social__icon--link" target="_blank">
                        <i class="fab fa-youtube"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <script src="app.js"></script>
    <script src="https://kit.fontawesome.com/0974947d58.js" crossorigin="anonymous"></script>
    <script>
        window.embeddedChatbotConfig = {
        chatbotId: "1mBTOT3OgKa_-oiNoJkTq",
        domain: "www.chatbase.co"
        }
        </script>
        <script
        src="https://www.chatbase.co/embed.min.js"
        chatbotId="1mBTOT3OgKa_-oiNoJkTq"
        domain="www.chatbase.co"
        defer>
        </script>
</body>
</html>