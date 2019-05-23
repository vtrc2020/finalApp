<!doctype html>

<head>
    <title>TutTut</title>
        <link rel="icon" href="assets/pic/TT.png">
    <link rel="stylesheet" type="text/css" href="css/style.css" />
</head>

<!--<nav>
    <div class="topNav" id="navBar">
        <ul id="navIcon">
            <li><a href="profile.php"><img src="assets/img/profilePic.svg" height="150"></li>
            <li><a href="myFeed.php"><img src="assets/img/fire.svg" height="150" color:red></li>
            <li><a href="friendsFeed.php"><img src="assets/img/fire.svg" height="150" </li> <li><a href="logOut.php"><img src="assets/img/logOut1.svg" height="150"></li>
        </ul>
    </div>
</nav>
-->

<body>
    
        <div id="page-container">
        <div id="content-wrap">
        </div>
    </div>

    <button onclick="stop();gum('user')">Front</button>
    <button onclick="stop();gum('environment')">Back</button>

    
    <div id="div"></div><br>
    <video id="video" height="320" autoplay></video>
    <script src="https://webrtc.github.io/adapter/adapter-latest.js"></script>

    <!--Turns the LiveStream On
    //Use the code to create an On button-->

        <video autoplay></video>

        <script>
            const constraints = {
                video: true
            };

            const video = document.querySelector('video');

            navigator.mediaDevices.getUserMedia(constraints).
            then((stream) => {
                video.srcObject = stream
            }); 
            

        </script>
    
    
    
    
 
<!--
    <script>
    function stopStreamedVideo(videoElem) {
  let stream = videoElem.srcObject;
  let tracks = stream.getTracks();

  tracks.forEach(function(track) {
    track.stop();
  });

  videoElem.srcObject = null;
}
    </script>
-->
     <footer id="bottomBar">
        <ul id="iconBar">
           <li id="buy"><a href="buyCover.php"><img src="assets/pic/money.png" height="50"></a></li>
            <li id="offLive"><a href="offLive.php"><img src="assets/pic/liveOff.png" height="50"></a></li>
            <li id="share"><a href="shareStream.php"><img src="assets/pic/share.png" height="50"></a></li>
           <li id="profiles"><a href="index.php"><img src="assets/pic/profiles.png" height="50"></a></li>
        </ul>
    </footer>
</body>

</html>
