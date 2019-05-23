<?php
session_start();
?>

<!doctype html>
<html>

<head>
    <title>TutTut</title>
    <script src="https:ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <style>
        #result {
            position: absolute;
            width: 100%;
            max-width: 870px;
            cursor: pointer;
            overflow-y: auto;
            max-height: 400px;
            box-sizing: border-box;
            z-index: 1001;
        }

        .link-class:hover {
            background-color: #f1f1f1;
        }

    </style>
</head>

<body>
    <br><br>
    <div class="container" style="width:900px;">
        <h2 align="center">Find Users</h2>
        <br><br>
        <div align="center"></div>
        <input type="text" name="search" id="search" placeholder="Find Users" class="form-control" />
    </div>
    <ul class="list-group" id="result"></ul>
    <br>
    </div>

    <!--Started from here-->




    <!--
    <canvas id="canvas"></canvas>
        <video id="video"></video>
        <button id="startCamera">Start camera</button>
        <button id="snap">Take snapshot</button>
    <script>
        window.addEventListener("DOMContentLoaded", function() {
            // Grab elements, create settings, etc.
            var canvas = document.getElementById("canvas"),
                context = canvas.getContext("2d"),
                video = document.getElementById("video"),
                videoObj = { "video": true },
                errBack = function(error) {
                    console.log("Video capture error: ", error.code);
                };

            // Put video listeners into place
            function startCamera() {
                if(navigator.mediaDevices.getUserMedia) { // Standard
                    navigator.mediaDevices.getUserMedia(videoObj, function(stream) {
                        video.src = stream;
                        video.play();
                    }, errBack);
                } else if(navigator.mediaDevices.webkitGetUserMedia) { // WebKit-prefixed
                    navigator.mediaDevices.webkitGetUserMedia(videoObj, function(stream){
                        video.src = window.webkitURL.createObjectURL(stream);
                        video.play();
                    }, errBack);
                }
            }

            // Trigger photo take
            document.getElementById("snap").addEventListener("click", function() {
                context.drawImage(video, 0, 0, 487, 365);
            });
            // Trigger starting the camera
            document.getElementById("startCamera").addEventListener("click", function() {
                startCamera();
            });
        }, false);
    </script>
    -->

    <!--
    <div id="profile">
        <h2>Profiles</h2>
    </div>
-->


    <div id="page-container">
        <div id="content-wrap">
        </div>
    </div>

    <button onclick="stop();gum('user')">Front</button>
    <button onclick="stop();gum('environment')">Back</button>
    <button id="button">Click For Stream</button>

    <div id="div"></div><br>

    <video id="Video" height="320" autoplay></video>
    <script src="https://webrtc.github.io/adapter/adapter-latest.js"></script>


    <video autoplay></video>


    <script>
        const constraints = {
            video: true
        };

        const video = document.querySelector('Video');

        navigator.mediaDevices.getUserMedia(constraints).
        then((stream) => {
            video.srcObject = stream
        });

    </script>

    -->

    <!-- Idea to upload a profile picture to the page

    <div id="heroFoto">
    <form action="upload.php" method="post" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload Image" name="submit">
</form>
    </div>
-->

    <footer id="bottomBar">
        <ul id="iconBar">
            <li id="buy"><a href="buyCover.php"><img src="assets/pic/money.png" height="50"></a></li>
            <li id="offLive"><a href="offLive.php"><img src="assets/pic/liveOff.png" height="50"></a></li>
            <li id="share"><a href="shareStream.php"><img src="assets/pic/share.png" height="50"></a></li>
            <li id="profiles"><a href="profiles.php"><img src="assets/pic/profiles.png" height="50"></a></li>
        </ul>
    </footer>
</body>


</html>

<script>
    $(document).ready(function() {
        $('#search').keyup(function() {
            $('#result').html('');
            var searchField = $('#search').val();
            var expression = new RegExp(searchField, "i");
            $.getJSON('ppl.json', function(data) {
                $.each(data, function(key, value) {
                    if (value.username.search(expression) != -1 || value.location.search(expression) != -1) {
                        $('#result').append('<li class="list-group-item"><img src=""' + value.id + ' height="40" width="40" class="img-thumbnail" /> ' + value.username + ' | <span class="text-muted">' + value.location + '</span> </li>')
                    }
                })
            })
        });

    });

</script>
