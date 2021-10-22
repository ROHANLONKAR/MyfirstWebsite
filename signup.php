<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign-UP</title>
    <style>
        body {
            background-color: rgba(244, 91, 105, 1);
            font-family: 'Asap', sans-serif;
        }

        .signup {
            overflow: hidden;
            background-color: white;
            padding: 40px 30px 30px 30px;
            margin: 10% 0% 0% 30%;
            border-radius: 10px;
            width: 400px;
            box-shadow: 5px 10px 10px rgba(rgba(2, 128, 144, 1), 0.2);
        }

        input {
            font-family: 'Asap', sans-serif;
            display: block;
            border-radius: 5px;
            font-size: 16px;
            background: white;
            width: 100%;
            border: 0;
            padding: 10px 10px;
            margin: 15px -10px;
        }

        button {
            font-family: 'Asap', sans-serif;
            cursor: pointer;
            color: #fff;
            font-size: 16px;
            width: 80px;
            border: 0;
            padding: 10px 0;
            margin-top: 10px;
            margin-left: -5px;
            border-radius: 5px;
            background-color: rgba(244, 91, 105, 1);
        }

        button:hover {
            background-color: rgb(241, 67, 81);
        }

        a {
            text-decoration: none;
            color: rgba(white, 0.6);
            position: absolute;
            right: 10px;
            bottom: 10px;
            font-size: 12px;
        }

        .cent {
            text-align: center;
        }
    </style>
</head>

<body>

    <form class="signup" action="signupdata.php" method="POST">
        <input type="text" placeholder="Full Name" name="fullname">
        <input type="email" placeholder="Email" name="email">
        <input type="tel" placeholder="Mobile Number" name="mobileno">
        <input type="password" placeholder="Password" name="password">
        <div class="cent">
            <button type="submit" name="signup">Sign-up</button>
            <br>
        </div>
    </form>
</body>

</html>