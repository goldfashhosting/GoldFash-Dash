<?php
$fp = fopen("../wp-admin/.license.txt", "w+");
ftruncate($fp, 0);
fclose($fp);
?>
<?php require('.require.php'); ?>
<script type="text/javascript">
hs.graphicsDir = 'https://www.rfig.us:443/A-GOLD/highslide/graphics/';
hs.outlineType = 'rounded-white';
hs.wrapperClassName = 'draggable-header';
</script>
<link rel="stylesheet" type="text/css" href="<?php echo $url; ?>//<?php echo $gstyld; ?>"  />

<center><?php include $div[one]; ?><fieldset>
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
$file = file("../wp-admin/.textfile.txt");
echo "<form action=\"".$PHP_SELF."\" method=\"post\">";
echo "<input type=\"text\" Name=\"update\">";
foreach($file as $text) {
echo $text;
} 
echo "</input>";
echo "<input name=\"Submit\" type=\"submit\" value=\"Update\" />\n
</form>";
}
?>
    
    </fieldset>
    <center><?php include $div[one]; ?><fieldset>
        <legend>Secret Key Important Info:</legend>
<?php echo $validater; ?>
    
    </fieldset>
</div>
