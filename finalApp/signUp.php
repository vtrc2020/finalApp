<?php
session_start();
?>

<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Cache-Control" content="no-store" />
    <title>TutTut</title>
    <link rel="icon" href="assets/pic/TT.png">
    <script src="js/jquery.min.js"></script>
<!--    <script src="js/ajax.js"></script>-->
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <style>
        * {
            font-family: sans-serif;
            box-sizing: border-box;
        }

        #profile {
            margin: 0px auto;
            text-align: center;
        }

        .person {
            width: 300px;
            padding: 5px 20px 20px 20px;
            display: inline-block;
            text-align: left;
            vertical-align: top;
            background-color: #000;
            color: #fff;
            border: 1px #333 solid;
            border-radius: 5px;
            margin: 10px;
            min-height: 400px;
        }

        .person .profileImage {
            text-align: center;
        }

        .person img {
            width: 200px;
            border-radius: 50%;
            border: 2px #fff solid;
        }

        .person h5 {
            margin: 10px 0px 0px 0px;
        }

        .person h5+p {
            margin: 0px;
        }

    </style>
</head>

<body>

    <h2>Sign Up</h2>

        <form action="ajaxprocess.php" method="post" enctype="multipart/form-data">
        <label>
            <input type="text" name="name" placeholder="Enter Your Name" required><br>
        </label>
        <br>
            <label>
            <input type="email" name="email" placeholder="Enter your email address" required><br>
        </label>
            <br>
            <label>
            <input type="password" name="password" placeholder="Enter Password" required><br>
        </label>
            <br>
        <label>
            <input type="text" name="username" placeholder="Choose a @username" required><br>
        </label>
            <br>
             <label>
            <input type="text" name="location" placeholder="Where do you live?" required><br>
        </label>
            <br>
        <label>Photo
            <input type="file" name="photo" required><br>
        </label>
      
        <br>
        <input type="submit" value="Submit request" />
<!--        <input onclick="window.location.href = 'myprofile.php';" type="submit" value="Submit request" />-->
    </form>
    
    <br>
    




</body>

</html>
