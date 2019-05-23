<?php
session_start();
?>

<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta http-equiv="Cache-Control" content="no-store" />
	<title>Tut Tut</title>
    <link rel="icon" href="assets/pic/TT.png">
	<script src="js/jquery.min.js"></script>
	<script src="js/ajax.js"></script>
     <link rel="stylesheet" type="text/css" href="css/style.css"/>
	<style>
		*{
			font-family: sans-serif;
			box-sizing: border-box;
		}

		#profile{
			margin: 0px auto;
			text-align: center;
		}

		.person{
			width:300px;
			padding:5px 20px 20px 20px;
			display: inline-block;
			text-align: left;
			vertical-align: top;
			background-color: #000;
			color:#fff;
			border:1px #333 solid;
			border-radius:5px;
			margin:10px;
			min-height:400px;
		}

		.person .profileImage{
			text-align: center;
		}

		.person img{
			width: 200px;
			border-radius:50%;
			border:2px #fff solid;
		}

		.person h5{
			margin:10px 0px 0px 0px;
		}

		.person h5+p{
			margin:0px;
		}
        #nav ul{
            width: 100%;
            display: inline-block;
            text-align: center;
        }
	</style>
</head>
<body>
<header>
    <nav>
        <ul id="navBar">
          <li id="buy"><a href="buyCover.php"><img src="assets/pic/money.png" height="75"></a></li>
            <li id="goLive"><a href="golive.php"><img src="assets/pic/goLive.png" height="75"></a></li>
            <li id="share"><a href="shareStream.php"><img src="assets/pic/share.png" height="75"></a></li>
           <li id="profiles"><a href="index.php"><img src="assets/pic/profiles.png" height="75"></a></li>
        </ul>
    </nav>
    </header>
    
      <div id="profile">
        <h2>Profiles</h2>
    </div>

    </body>
</html>
