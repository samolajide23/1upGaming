<footer>
  <button class="open-button" onclick="openForm()">Leave a message</button>

  <div class="chat-popup" id="myForm">
    <form method="POST" class="formContainer" name="quickContactForm" action="quick-contact-form-handler.php">
      <h1>Chat</h1>

      <label for="quickMessage"><strong>Message</strong></label>
      <textarea placeholder="Type message.." name="quickMessage" required></textarea>

      <button type="submit" class="btn">Send</button>
      <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
    </form>
  </div>
</footer>

<script>
  function openForm() {
    document.getElementById("myForm").style.display = "block";
  }

  function closeForm() {
    document.getElementById("myForm").style.display = "none";
  }
</script>