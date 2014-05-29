<!DOCTYPE HTML> 
<html>
<head>
<title>w3test</title>
</head>
<body>  


<?php
// define variables and set to empty values
$menu = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

   $menu = test_input($_POST["menu"]);

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
   Menu: <textarea name="menu" rows="5" cols="40"></textarea>
   <br><br>
   <input type="submit" name="submit" value="Submit"> 
</form>

<?php
echo "<h2>Your Input:</h2>";
echo $menu;
echo "<br>";

$myfile = fopen("menub.txt", "w") or die("Unable to open file!");
//$txt = $menu;
fopen("anotherfile.txt", "w");
fwrite($myfile, $menu);
fclose($myfile);

?>

</body>
</html>