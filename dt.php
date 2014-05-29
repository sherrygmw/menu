<!DOCTYPE HTML> 
<html>
<head>
<title>w3test</title>
</head>
<body>  


<?php
// define variables and set to empty values
$breakfast = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

   $breakfast= test_input($_POST["breakfast"]);

}

function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}
?>

<h2>PHP Form Validation Example</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
   Breakfast: <textarea name="breakfast" rows="5" cols="40"></textarea>
   <br><br>
   <input type="submit" name="submit" value="Submit"> 
</form>

<?php
//echo date('l jS \of F Y h:i:s A');
echo date("Y-m-d");

//$datename = date('l jS \of F Y h:i:s A');
$datename = date("Y-m-d" + "breakfast");
echo "<h2>Today's breakfast:</h2>";
echo $breakfast;
echo "<br>";

$myfile = fopen($datename, "w") or die("Unable to open file!");
fwrite($myfile, $breakfast);
fclose($myfile);

?>

<br>
<br>

<?php
// define variables and set to empty values
$lunch = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

   $lunch= test_input($_POST["lunch"]);

}

?>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
   Lunch: <textarea name="lunch" rows="5" cols="40"></textarea>
   <br><br>
   <input type="submit" name="submit" value="Submit"> 
</form>

<?php
echo date('l jS \of F Y h:i:s A');
$datename = date('l jS \of F Y h:i:s A');
echo "<h2>Today's lunch:</h2>";
echo $lunch;
echo "<br>";

$myfile = fopen($datename, "w") or die("Unable to open file!");
//$txt = $menu;
//fopen("anotherfile.txt", "w");
fwrite($myfile, $lunch);
fclose($myfile);

?>

</body>
</html>