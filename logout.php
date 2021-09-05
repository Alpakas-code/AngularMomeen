<?php
Session_start();
Session_unset();
Session_destroy();
echo'
<script>
document.location.href="login.html";
</script>

';

?>