<html>
<body>

<?php

if(strcmp($_GET['timezone'], "nzt") == 0){
  $datetime = new DateTime();
  $nz_time = new DateTimeZone('Pacific/Auckland');
  $datetime->setTimezone($nz_time);
  echo $datetime->format('H:i:s'); 
}
if(strcmp($_GET['timezone'], "est") == 0){
$datetime = new DateTime();
$est_time = new DateTimeZone('America/New_York');
$datetime->setTimezone($est_time);
echo $datetime->format('H:i:s'); 
}

?>

</body>
</html>
