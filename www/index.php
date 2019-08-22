<!DOCTYPE HTML>
<html>

  <head>
    <h1> World Timezone Converter </h1>

    <?php
    function getSession($val){
      if(isset($_SESSION[$val])){
        $output = $_SESSION[$val];
        echo "value='$output'";
      }
    }

      function getSelectSession($val, $val2)
      {
        if ($_SESSION[$val] == $val2) {
           echo "selected";
        }
      }
    ?>
    
  </head> 

<body>
<p> <?php $time = file_get_contents("http://192.168.2.13?timezone=nzt");?> </p>
<p id="test"></p>

<p>Current New Zealand time: <?php echo "$time"; ?></p>

<form action="index.php" method="post">
<p> Convert from NZT to:
<select name="timezone">
  <option value="EST" <?php getSelectSession("time", "EST"); ?>>Eastern Standard Time</option>
  <option value="JST" <?php getSelectSession("time", "JST"); ?>>Japan Standard Time</option>
  <option value="MSK" <?php getSelectSession("time", "MSK"); ?>>Moscow Time</option>
  <option value="SGT" <?php getSelectSession("time", "SGT"); ?>>Singapore Time</option>
  <option value="AEST"<?php getSelectSession("time", "AEST"); ?>>Australian Eastern Standard Time</option>
  <option value="CLST"<?php getSelectSession("time", "CLST"); ?>>Antarctica (Palmer Station) Time</option>
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
  echo "<p> $timezone </p>";
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
