<?php
if (!isset($_SESSION)) {
    session_start();
}

if (isset($_GET['logout'])) { 
    session_destroy(); 
    unset($_SESSION['username']); 
    header("location: login.php"); 
} 
?>
<!-- the head section -->

<head>
    <title>1up Gaming</title>

    <link rel="stylesheet" type="text/css" href="css/mystyle.css">
    
    <link rel="shortcut icon" href="images/animeFavicon.png" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.gstatic.com">

</head>

<!-- the body section -->

<body>
    <header>
           <div class="nav-container">
               <nav class="navbar">
                   <h1 id="navbar-logo"><a href="index.php">1up Gaming</a></h1>
                   
                   <ul class="nav-menu">
                       <li><a href="contact-form.php">Contact</a><li>
                       <li><a href="index.php" class="nav-links nav-links-btn">Sign Out</a></li>

                   </ul>
               </nav>
           </div>
       </header>

</body>