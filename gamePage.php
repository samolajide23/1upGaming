<?php
include_once("config.php");

include('includes/header.php');
include('commentsHandler.php');
date_default_timezone_set('Europe/Dublin');

$con = config::connect();

$gameTitle =  "<script>document.write(localStorage.getItem('gameTitle'))</script>";

?>


<!-- Play.iDevGames.co.uk Responsive Embed Code for Pancake Clicker -->

<script>
    window.onload = function() {
        var gameTitle = localStorage.getItem("gameTitle");
        document.getElementById("gamePlaceholder").value = "boing-";

        var gameTitle = localStorage.getItem("gameTitle");

        var thegamelink = "https://play.idevgames.co.uk/embed/" + gameTitle;
        var ref = document.referrer;
        var theurl = document.referrer;
        ref = ref.substring(ref.indexOf("://") + 3);
        ref = ref.split("/")[0];
        if (ref == "my-ga.me") {
            theurl = "true"
        } else {
            theurl = "false"
        }
        document.getElementById("embededGame").src = thegamelink + "/" + theurl + "?url=" + window.location.href;
    };

</script>

<!DOCTYPE html>

<html>

<body>
    <div id="gameContainer">
        <iframe id="embededGame">Browser not compatible.</iframe>
    </div>
    <div id="messageContainer">
        <?php
        echo
        "<form class='commentForm' method='POST' action='" . setComments($con) . "'>
        
    <input id='gamePlaceholder' type='hidden' name='gameName' value='placeholder'>
    <input type='hidden' name='userID' value='Anonymous'>
    <input type='hidden' name='commentDate' value='" . date('Y-m-d H:m:s') . "'>
    <textarea name='commentMessage' placeholder='Join the discussion...'></textarea><br>
    
    <button type='submit' name='submitCommment'>Comment</button>
        </form>";

        echo
        "<form class='replyForm' method='POST' action='" . getComments($con) . "'> 
       <input type='hidden' name='newName' value='pool'>
       
    <button type='submit' name='submitCommment'>Comment</button>
    </form>";
        include('includes/footer.php');
        ?>
    </div>
</body>

</html>