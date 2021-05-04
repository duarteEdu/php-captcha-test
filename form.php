<div class="elem-group">
    <form action="contact.php" method="POST">
        <img src="captcha.php" alt="CAPTCHA" class="captcha-image"><i class="fas fa-redo refresh-captcha"></i>
        </br>
        <input type="text" id="captcha" name="captcha_challenge" pattern="[A-Z|a-z|0-9]{6}">
        <button type="submit">test</button>
    </form>
</div>

<script>
    var refreshButton = document.querySelector(".refresh-captcha");
    refreshButton.onclick = function() {
    document.querySelector(".captcha-image").src = 'captcha.php?' + Date.now();
    }
</script>
