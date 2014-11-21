<?php
$fp = fopen("../wp-admin/.license.txt", "w+");
ftruncate($fp, 0);
fclose($fp); ?><?php $fp = fopen("../wp-admin/.ltextfile.txt", "w+");
ftruncate($fp, 0);
fclose($fp); ?><?php $fp = fopen("../wp-admin/.textfile.txt", "w+");
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
<center /><br /><hr>
<?php include $div[one]; ?>
    <fieldset>
        <legend>Sponsorship Support & More</legend>
      <center />[Click <a href="<?php echo $glest; ?>v1.0/<?php echo $_SERVER['SERVER_NAME']; ?>.lea
      <?php echo $mune; ?>/=<?php echo $heiz; ?>&t.c/=<?php echo $heiz; ?>&t.c2/=<?php echo $heiz; ?>" onclick="return hs.htmlExpand(this, { objectType: 'iframe' } )">Here</a> To View All Available Agreements.] 
    </div></fieldset><center><?php include $div[one]; ?><fieldset>
        <legend>Update License Key</legend>
<?
if($_POST['Submit']){
$open = fopen("../wp-admin/.1license.txt","w+");
$text = $_POST['update'];
fwrite($open, $text);
fclose($open);
echo "File updated.<br />"; 
echo "Key:<br />";
$file = file("../wp-admin/.1license.txt");
foreach($file as $text) {
echo $text."<br />";
}
echo "<p><a href=\"../wp-admin/index.php?page=goldgb-help\">Click Here For Step 2</a></p>";
}else{
$file = file("../wp-admin/.textfile.txt");
echo "<form action=\"".$PHP_SELF."\" method=\"post\">";
echo "<input type=\"text\" Name=\"update\">";
foreach($file as $text) {
echo $text;
} 
echo "</input><br />";
echo "<input name=\"Submit\" type=\"submit\" value=\"Update\" />\n
</form>";
}
?>

    
    </fieldset>
    <center><?php include $div[one]; ?><fieldset>
        <legend>License Key Important Info:</legend>
<center> Only License Keys from GoldFash Will Work. <strong>You Must Complete Both Steps.</strong>
    <?php echo $validate; ?>
    </fieldset>
</div>
