<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practical-32</title>
    <script defer src="https://pro.fontawesome.com/releases/v5.10.0/js/all.js"
        integrity="sha384-G/ZR3ntz68JZrH4pfPJyRbjW+c0+ojii5f+GYiYwldYU69A+Ejat6yIfLSxljXxD"
        crossorigin="anonymous"></script>
    <style>
        body {
            margin: 0;
            padding: 0;
            line-height: 1.5;
            font-family: "Poppins", sans-serif;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-size: 50px;
            margin: 10px 0;
        }

        p {
            text-align: left;
            font-size: 20px;
        }

        hr {
            width: 50px;
            border: 5px solid red;
            border-radius: 4px;
            margin: 20px 0;
        }

        header {
            color: #f44336;
            width: 50%;
            border: 1px;
        }

        label {
            font-size: larger;
        }

        /* sidebar navigation */

        .side-nav {
            height: 100%;
            width: 19%;
            color: #fff;
            background-color: #f44336;
            position: fixed;
            padding: 3% 1% 0% 2%;
            top: 0;
        }

        .com-name {
            padding: 5% 5% 5% 7%;
            font-size: 30px;
        }

        .navigations {
            margin-top: 10%;
        }

        .nav-options {
            padding: 5% 5% 5% 7%;
            text-decoration: none;
            color: #fff;
            font-size: x-large;
            display: block;
        }

        .nav-options:hover {
            background-color: #fff;
            color: black;
        }

        /* main content box */

        .main-content {
            padding: 0.01em 16px;
            margin: 8% 0% 0% 25%;
        }

        .header {
            color: black;
            font-size: xx-large;
        }

        /* showcase section */

        .images-container {
            display: table;
        }

        .left-side {
            width: 49%;
            float: left;
            padding: 0 3px;
        }

        .right-side {
            width: 49%;
            float: right;
            padding: 0 3px;
        }

        .image-size {
            width: 100%;
            opacity: 0.8;
        }

        .image-size:hover {
            opacity: 1;
        }

        /* services section */

        .Services-section {
            padding-top: 50px;
        }

        /* designers section */

        .Designers-section {
            padding-top: 50px;
            display: table;
        }

        .designers-details {
            padding: 0 8px;
        }

        .details h3 {
            font-size: 24px;
        }

        .details {
            padding-left: 10px;
        }

        .info1 {
            padding: 0 8px;
            width: 30%;
            float: left;
        }

        .info {
            background-color: #f1f1f1;
            font-size: 6px;
        }

        .light {
            opacity: 0.60;
        }

        .designer-image {
            width: 100%;
            color: #000
        }

        /* Packages section */

        .Packages-section {
            padding-top: 75px;
            display: table;
        }

        .package-box {
            padding: 0 8px;
            font-size: x-large;
        }

        .left-box {
            width: 48%;
            ;
            float: left;
            text-align: center;
            list-style: none;
            background-color: #f1f1f1;
            margin: 0;
            padding: 0 8px;
        }

        .right-box {
            background-color: #f1f1f1;
            width: 48%;
            margin: 0;
            padding: 0 8px;
            float: left;
            text-align: center;
            list-style: none;
        }

        .head-box-left {
            color: #fff;
            border-bottom: 1px solid #ddd;
            background-color: #616161;
            padding-top: 32px;
            padding-bottom: 32px;
        }

        .head-box-right {
            padding: 20px 20px;
            border-bottom: 1px solid #ddd;
            background-color: #f44336;
            padding-top: 32px;
            color: #fff;
            padding-bottom: 32px;
        }

        .boxes {
            padding-top: 16px;
            padding-bottom: 16px;
            border-bottom: 1px solid #ddd;
        }

        .boxes_last {
            padding-top: 24px;
            padding-bottom: 24px;
            border-bottom: 1px solid #ddd;
        }

        .sign-up_left_btn {
            color: #000;
            background-color: #fff;
            padding: 12px 24px;
            border: none;
            font-size: inherit;
        }

        .light-color {
            opacity: 0.60;
        }

        .sign-up_right_btn {
            color: #fff;
            font-size: inherit;
            border: none;
            background-color: #f44336;
            padding: 12px 24px;
        }

        .signup_btn_hover:hover {
            color: #fff;
            background-color: #000;
        }

        /* contact section */
        .Contact-section {
            padding-top: 80px;
        }

        .form_input {
            border: 1px solid #ccc;
            width: 98%;
            padding: 10px;
            display: block;
        }

        .form_box {
            margin-top: 16px;
            margin-bottom: 16px;
        }

        .sendmessage_btn {
            width: 98%;
            font-size: large;
            color: #fff;
            background-color: #f44336;
            padding: 12px 24px;
            border: none;
            display: block;
        }

        .sendmessage_btn:hover {
            color: #000;
            background-color: #ccc;
        }

        /* footer section */
        footer {
            margin-top: 80px;
            text-align: center;
            padding: 5% 0% 2% 20%;
            background-color: #f1f1f1;
        }

        .login {
            position: fixed;
            left: -1px;
            background-color: #f44336;
            /* width: 282px; */
            width: 22%;
            text-align: center;
            text-decoration: solid;
            z-index: 4;
            top:0px;
            border-bottom:1px solid;
            color: #ccc;
        }
        .loginhover:hover{
            background-color: rgb(228, 103, 94);
            color: white;
        }
        .padd{
            padding-left:0px ;
        }   
        .logout{
            position: fixed;
            left: -1px;
            background-color: #f44336;
            width: 282px;
            text-align: center;
            text-decoration: solid;
            z-index: 4;
            bottom:0px;
            border-bottom:1px solid;
            color: #ccc;
        }
        .un::after {
            content: '';
            width: 0px;
            height: 4px;
            border-radius: 200px;
            display: block;
            background: #012443;
            transition: 300ms;
        }

        .un:hover::after {
            width: 50%;
        }
    </style>
</head>

<body>
    <div class="login">
        <a class="nav-options loginhover padd un" href="login.php"><?php if(isset($_GET['fullname']))echo $_GET['fullname']; else echo "Login" ?></a>
    </div>
    <nav class=side-nav>
        <div class="com-name">
            <h2 class="un">RoH-Lon <br> </h2>
            <h2 class="un">Interiors   </h2>
        </div>
        <div class="navigations">
            <a class="nav-options" href="#"><span class="un">Home</span></a>
            <a class="nav-options" href="#Showcase"><span class="un">Showcase</span></a>
            <a class="nav-options" href="#Services"><span class="un">Services</span></a>
            <a class="nav-options" href="#Designers"><span class="un">Designers</a>
            <a class="nav-options" href="#Packages"><span class="un">Packages</span></a>
            <a class="nav-options" href="#Contact"><span class="un">Contact</span></a>
        </div>
    </nav>

    <?php
    if(isset($_GET['fullname']))
    {
        echo "<div class='logout'>
        <a href='login.php' class='loginhover nav-options padd '><span class='un'>Logout</span></a>
        </div>";
    }
    ?>

    <section class="main-content">
        <header class=header>
            <h1  class="un"> Interior Design </h1>
        </header>

        <!-- Showcase-section -->

        <div class="Showcase-section" id="Showcase">
            <header>
                <h2  class="un">Showcase.</h2>
                <hr>
            </header>
            <br>
            <div class="images-container">
                <div class="left-side">
                    <img src="1.jpg" alt="" class="image-size">
                    <img src="3.jpg" alt="" class="image-size">
                    <img src="5.jpg" alt="" class="image-size">
                </div>
                <div class="right-side">
                    <img src="2.jpg" alt="" class="image-size">
                    <img src="4.jpg" alt="" class="image-size">
                    <img src="6.jpg" alt="" class="image-size">
                </div>
            </div>
        </div>

        <!-- Services-section -->

        <div class="Services-section" id="Services">
            <header>
                <h2  class="un">Services.</h2>
                <hr>
            </header>
            <p> We are a interior design service that focus on what's best for your home and what's best for you!
            </p>
            <p> Some text about our services - what we do and what we offer. We are lorem ipsum consectetur
                adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
                irure
                dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur
                sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum
                consectetur adipiscing elit, sed do eiusmod tempor
                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                ullamco laboris nisi ut aliquip ex ea commodo consequat.
            </p>
        </div>

        <!-- Designers-section -->

        <div class="Designers-section" id="Designers">
            <header>
                <h2  class="un">Designers.</h2>
                <hr>
            </header>
            <p>The best team in the world.</p>
            <p>We are lorem ipsum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                commodo consequat. Duis aute irure
                dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint
                occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum
                consectetur adipiscing elit, sed do eiusmod tempor
                incididunt ut labore et quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat.
            </p>
            <p> <b> Our designers are thoughtfully chosen</b></p>
            <div class="designer-detail">
                <div class="info1">
                    <div class="info">
                        <img src="D-1.jpg" alt="" class="designer-image">
                        <div class="details">
                            <h3  class="un">John Doe</h3>
                            <p class="light">CEO & Founder</p>
                            <p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque
                                elementum.</p>
                        </div>
                    </div>
                </div>
                <div class="info1">
                    <div class="info">
                        <img src="D-2.jpg" alt="" class="designer-image">
                        <div class="details">
                            <h3  class="un">Jana Doe</h3>
                            <p class="light">Designer</p>
                            <p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque
                                elementum.</p>
                        </div>
                    </div>
                </div>
                <div class="info1">
                    <div class="info">
                        <img src="D-3.jpg" alt="" class="designer-image">
                        <div class="details">
                            <h3  class="un">Mike Ross</h3>
                            <p class="light"> Architect</p>
                            <p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque
                                elementum.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="Packages-section" id="Packages">
            <header>
                <h2  class="un">Pakages.</h2>
                <hr>
            </header>
            <p>
                Some text our prices. Lorem ipsum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
                ut aliquip ex ea commodo consequat. Duis aute irure
            </p>
            <!-- Pakages section -->
            <div class="package-box">

                <ul class="left-box">
                    <li class="head-box-left"> Basic</li>
                    <li class="boxes">Floorplanning</li>
                    <li class="boxes">10 Hours Support </li>
                    <li class="boxes"> Photography</li>
                    <li class="boxes"> 20% Durniture Discount</li>
                    <li class="boxes"> Good Deals</li>
                    <li class="boxes">
                        <h2>$ 199</h2>
                        <span class="light-color"> per room</span>
                    </li>
                    <li class="boxes_last"> <button class="sign-up_left_btn signup_btn_hover">Sign up </button> </li>
                </ul>

                <ul class="right-box">
                    <li class="head-box-right"> Basic</li>
                    <li class="boxes">Floorplanning</li>
                    <li class="boxes">50 Hours Support </li>
                    <li class="boxes"> Photography</li>
                    <li class="boxes"> 50% Durniture Discount</li>
                    <li class="boxes"> Great Deals</li>
                    <li class="boxes">
                        <h2>$ 249</h2>
                        <span class="light-color"> per room</span>
                    </li>
                    <li class="boxes_last"> <button class="sign-up_right_btn signup_btn_hover">Sign up</button> </li>
                </ul>
            </div>
        </div>

        <!-- contact section -->

        <div class="Contact-section" id="Contact">
            <header>
                <h2  class="un">Contact.</h2>
                <hr>
            </header>
            <p>Do you want us to style your home? Fill out the form and fill me in with the details :) We love meeting
                new people!</p>
            <form action="check.php" method="POST">
                <div class="form_box">
                    <label>Name</label>
                    <input type="text" class="form_input" name="name">
                </div>
                <div class="form_box">
                    <label>Email</label>
                    <input type="text" class="form_input" name="email">
                </div>
                <div class="form_box">
                    <label>Message</label>
                    <input type="text" class="form_input" name="message">
                </div>
                <button class="sendmessage_btn" name="contact">Send Message</button>
            </form>
                <?php if(isset($_GET['message'])) echo "Message Submit."; ?>
        </div>

    </section>
    <footer>
        <b > <i class="far fa-copyright"></i>  Copyright 2021 </b>
    </footer>
</body>

</html>