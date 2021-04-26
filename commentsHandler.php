<?php

include_once("config.php");

function setComments($con)
{
    if (isset($_POST['submitCommment'])) {
        $userID = $_POST['userID'];
        $commentDate = $_POST['commentDate'];
        $commentMessage = $_POST['commentMessage'];
        $gameTitleHandler =  $_POST['gameName'];
        echo $gameTitleHandler;

        $query =  "INSERT INTO comments (userID, referenceTitle, date, message) 
        VALUES ('$userID', '$gameTitleHandler', '$commentDate', '$commentMessage' )";
        $result = $con->query($query);
    }
}

function getComments($con)
{    
    $query = "SELECT * FROM comments WHERE referenceTitle = 'boing-'";
    $statement = $con->prepare($query);
    $statement->execute();
    while (
        $row = $statement->fetch(PDO::FETCH_ASSOC)
    ) {
        echo "<div class='commentBox'><p>";
        echo $row['userID'] . "<br>";
        echo $row['date'] . "<br>";
        echo nl2br($row['message']);
        echo "<p></div>";
    }
}
