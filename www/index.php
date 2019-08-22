<!DOCTYPE HTML>
<html>

<head>
<h1> World Timezone Converter </h1>
</head>

<body>
<p> <?php $time = file_get_contents('http://192.168.2.13?timezone=nzt');?> </p>
<p id="test"></p>

<p>Current New Zealand time: <?php echo "$time"; ?></p>

<?php $time = file_get_contents('http://192.168.2.13?timezone=est');?>

<p> Temp below, needs to be changed for when the button works </p>
<p>Current Eastern Standard time: <?php echo "$time"; ?></p>

<p> Convert from NZT to:
<select>
  <option value="EST">EST</option>
  <option value="JST">JST</option>
  <option value="OMST">OMST</option>
  <option value="BST">BST</option>
  <option value="AWST">AWST</option>
  <option value="GMT">GMT</option>
</select>
</p>

<button id="myBtn" type="button">Convert</button>
<script>
  document.getElementById("myBtn").addEventListener("click", function(){
  	document.getElementById("test").innerHTML = <?php echo "test1"; ?>;
 });
</script>

<?php
/* should have no errors connecting if setup right */
$db_host = '192.168.2.12';
$db_name = 'timezones';
$db_user = 'webuser';
$db_passwd = 'Quack1nce4^';

?>

</body>
</html>
