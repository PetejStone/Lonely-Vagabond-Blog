<?php
    mail('petejstoney@gmail.com', $_POST['name'], $_POST['email'], $_POST['message']);
?>
<script>
    alert("We got your message!")
    location.replace("http://www.thelonelyvagabond.com")
</script>
