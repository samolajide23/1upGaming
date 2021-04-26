<?php
include('includes/header.php');
include('includes/footer.php');
?>
<body>
    <div id="contact-form-container">
        <h1>Submit Game Request</h1>
        <form class="contact-form" action="contact-form-handler.php" method="post">
            <label for="quickMessage"><strong>First name</strong></label>
            <input type="text" name="name" placeholder="Full Name">
            <label for="quickMessage"><strong>First name</strong></label>
            <input type="text" name="mail" placeholder="Your email">
            <label for="quickMessage"><strong>First name</strong></label>
            <input type="text" name="subject" placeholder="Subject">
            <textarea name="message" placeholder="Message"></textarea>
            <button type="submitContactForm" name="submit">SEND</button>
        </form>
    </div>
</body>