<!DOCTYPE HTML>
<html>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>


<head>
<h1> World Timezone Converter </h1>
</head>

<body>

<p id="output"></p>

<script>
$.ajax({
  url: 'https://api.myjson.com/bins/bq6eu',
  success: function(response){
    document.getElementById("output").innerHTML = response.string;
  },
  error: function(response){
  console.log('server error');
  }
});
</script> 


<form>
<p>Convert From:
<select>
  <option value="NZT">NZT</option>
  <option value="EST">EST</option>
  <option value="JST">JST</option>
  <option value="OMST">OMST</option>
  <option value="BST">BST</option>
  <option value="AWST">AWST</option>
  <option value="GMT">GMT</option>
</select>
</p>
  Time to convert:
  <input type="text">
</form>

<p> Convert to:
<select>
  <option value="NZT">NZT</option>
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
  document.getElementById("demo").innerHTML = "Hello World"; });
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
