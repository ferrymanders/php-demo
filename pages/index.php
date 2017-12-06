<?php
  $hostname = gethostname();
  $phpversion = phpversion();
?>
<html>
  <body>
    <center><h1>Welcome</h1></center><br>
    <center><h2>This is <?php echo $hostname; ?> running PHP <?php echo $phpversion; ?> </h2></center><br>
    <center><iframe src="info.php" width="100%" height="400"></iframe></center><br>
  </body>
</html>
