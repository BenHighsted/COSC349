<!DOCTYPE HTML>
<html>

  <head>
    <h1> World Timezone Converter </h1>
  </head> 

<body>
<p> <?php $time = file_get_contents("http://192.168.2.13?timezone=nzt");?> </p>
<p id="test"></p>

<p>Current New Zealand time: <?php echo "$time"; ?></p>

<form action="index.php" method="post">
<p> Convert from NZT to:
<select name="timezone">
  <option value="EST">Eastern Standard Time</option>
  <option value="JST">Japan Standard Time</option>
  <option value="MSK">Moscow Time</option>
  <option value="SGT">Singapore Time</option>
  <option value="AEST">Australian Eastern Standard Time</option>
  <option value="CLST">Antarctica (Palmer Station) Time</option>
</select>
</p>


<input type="submit" name="Convert" value="Convert"></input>
</form>

<?php
  if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['Convert'])){
    func();
  }
  function func(){

  $timezone = $_POST['timezone'];

  if($timezone == "EST"){
  $est = file_get_contents("http://192.168.2.13?timezone=est");
  echo "<p> Eastern Standard Time: $est </p>";
  } else if($timezone == "JST"){
  $jst = file_get_contents("http://192.168.2.13?timezone=jst");
  echo "<p> Japan Standard Time: $jst </p>";
  } else if($timezone == "MSK"){
  $msk = file_get_contents("http://192.168.2.13?timezone=msk");
  echo "<p> Moscow Time: $msk </p>";
  } else if($timezone == "SGT"){
  $sgt = file_get_contents("http://192.168.2.13?timezone=sgt");
  echo "<p> Singapore Time: $sgt </p>";
  } else if($timezone == "AEST"){
  $aest = file_get_contents("http://192.168.2.13?timezone=aest");
  echo "<p> Australian Eastern Standard Time: $aest </p>";
  } else if($timezone == "CLST"){
  $clst = file_get_contents("http://192.168.2.13?timezone=clst");
  echo "<p> Antarctica (Palmer Station) Time: $clst </p>";
  }

  }
  
  ?>

</body>
</html>
