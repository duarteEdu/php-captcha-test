<?php
 
session_start();
 
if($_POST) {
    if(isset($_POST['captcha_challenge']) && $_POST['captcha_challenge'] == $_SESSION['captcha_text']) {
        echo '<p>correct</p>';
    } else {
        echo '<p>You entered an incorrect Captcha.</p>';
    }
} else {
    echo '<p>Something went wrong</p>';
}
 
?>