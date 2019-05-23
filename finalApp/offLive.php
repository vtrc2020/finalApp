<!doctype html>

<head>
    <title>TutTut</title>
        <link rel="icon" href="assets/pic/TT.png">
        <script src="https:ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <style>
        #result {
            position: absolute;
            width: 100%;
            max-width:870px;
            cursor: pointer;
            overflow-y: auto;
            max-height: 400px;
            box-sizing: border-box;
            z-index: 1001;
        }
        .link-class:hover{
            background-color:#f1f1f1;
        }
    </style>
    <link rel="stylesheet" type="text/css" href="css/style.css" />
</head>


    <div class="topNav" id="navBar">
        <ul id="navIcon">
            <li id="buy"><a href="buyCover.php"><img src="assets/pic/money.png" height="50"></a></li>
            <li id="goLive"><a href="golive.php"><img src="assets/pic/goLive.png" height="50"></a></li>
            <li id="share"><a href="shareStream.php"><img src="assets/pic/share.png" height="50"></a></li>
            <li id="profiles"><a href="index.php"><img src="assets/pic/profiles.png" height="50"></a></li>
        </ul>
    </div>
</nav>


<body>
    <br><br>
    <div class="container" style="width:900px;">
    <h2 align="center">Find Users</h2>
        <br><br>
        <div align="center"></div>
        <input type="text" name="search" id="search" placeholder="Search" class="form-control"/>
    </div>
    <ul class="list-group" id="result"></ul>
    <br>
    </div>


     <footer id="bottomBar">
        <ul id="iconBar">
            <li id="buy"><a href="buyCover.php"><img src="assets/pic/money.png" height="50"></a></li>
            <li id="goLive"><a href="golive.php"><img src="assets/pic/goLive.png" height="50"></a></li>
            <li id="share"><a href="shareStream.php"><img src="assets/pic/share.png" height="50"></a></li>
            <li id="profiles"><a href="index.php"><img src="assets/pic/profiles.png" height="50"></a></li>
        </ul>
    </footer>
</body>

</html>

<script>
$(document).ready(function(){
    $('#search').keyup(function(){
        $('#result').html('');
        var searchField = $('#search').val();
        var expression = new RegExp(searchField, "i");
        $.getJSON('ppl.json', function(data){
            $.each(data, function(key, value){
                if(value.username.search(expression) != -1 || value.location.search(expression) != -1)
                {
                    $('#result').append('<li class="list-group-item"><img src=""'+value.image+' height="40" width="40" class="img-thumbnail" /> '+value.username+' | <span class="text-muted">'+value.location+'</span> </li>')
                }
            })
        })
    });
    
});
    
</script>
