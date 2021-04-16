
<head>
    <link rel="stylesheet"  href="css/mystyle.css">
    
    <link rel="shortcut icon" href="images/animeFavicon.png" type="image/x-icon">
    <script src="JS/script.js"></script>
    <script src="JS/validation.js"></script>
</head>
<body>
    <footer background-color="red"> 
        <button class="open-button" onclick="openForm()">Leave a message</button>

        <div class="chat-popup" id="myForm">
            <form action="thankyou.html" class="form-container">
                <h1>Chat</h1>

                <label for="msg"><strong>Message</strong></label>
                <textarea placeholder="Type message.." name="msg" required></textarea>

                <button type="submit" class="btn">Send</button>
                <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
            </form>
        </div>
    </footer>
</body>