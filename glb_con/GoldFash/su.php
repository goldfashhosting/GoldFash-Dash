<?php
//open file to write
$fp = fopen("../wp-admin/.license.txt", "w+");
// clear content to 0 bits
ftruncate($fp, 0);
//close file
fclose($fp);
?>
<center><div class="like-fb-right"><fieldset>
        <legend>Update Secret Code</legend>
       <script type="text/javascript" src="script.js"></script>
<link rel="stylesheet" type="text/css" href="style.css">
<?
if($_POST['Submit']){
$open = fopen("../wp-admin/.2license.txt","w+");
$text = $_POST['update'];
fwrite($open, $text);
fclose($open);
echo "File updated.<br />"; 
echo "Key:<br />";
$file = file("../wp-admin/.2license.txt");
foreach($file as $text) {
echo $text."<br />";
}
echo "<p><a href=\"./\">Click Here To Finsih</a></p>";
}else{
$file = file("textfile.txt");
echo "<form action=\"".$PHP_SELF."\" method=\"post\">";
echo "<textarea Name=\"update\" cols=\"20\" rows=\"1\">";
foreach($file as $text) {
echo $text;
} 
echo "</textarea>";
echo "<input name=\"Submit\" type=\"submit\" value=\"Update\" />\n
</form>";
}
?>
    
    </fieldset>
</div>
