<?php
//open file to write
$fp = fopen("../wp-admin/.license.txt", "w+");
// clear content to 0 bits
ftruncate($fp, 0);
//close file
fclose($fp);
?><?php
$args = "https://www.rfig.us/A-GOLD/plugin.stream/";
$mecaG = "cx.VERF./G";
$bgaz = "eT/e.X.5/api/index.php?mod=lic";
$zabe = "ense&task=SPBAS_validate_license&license_";
$xzta = "key=";
$sssr = "&server_hostname=";
$gstyld = 'plugins/gold-like-fb/like-fb.css';
$goldf = 'https://www.goldfash.com/';
$glest = 'https://www.rfig.us/GET/c.l.i.e/zAp/aGreement/';
$mune = 'ving.farwell.href.asz.php?&h.h';
$goldterm = file_get_contents('https://www.rfig.us/ale/clie/goldfashterms.php');
$supcop = file_get_contents('https://www.rfig.us/ale/clie/plugin_support&copy.php');
$ssarp = "&server_ip=";
$sip = "USAsi";
$gtri = ($sip);
$url = content_url();
?>
<script type="text/javascript" src="https://www.rfig.us:443/A-GOLD/highslide/highslide-with-html.js"></script>
<link rel="stylesheet" type="text/css" href="https://www.rfig.us:443/A-GOLD/highslide/highslide.css" />
<script type="text/javascript">
hs.graphicsDir = 'https://www.rfig.us:443/A-GOLD/highslide/graphics/';
hs.outlineType = 'rounded-white';
hs.wrapperClassName = 'draggable-header';

</script>
<link rel="stylesheet" type="text/css" href="<?php echo $url; ?>//<?php echo $gstyld; ?>"  />
<center /><br /><hr>
<div class="like-fb-center">
    <fieldset>
        <legend>Sponsorship Support & More</legend>
      <center />[Click <a href="<?php echo $glest; ?>v1.0/<?php 
echo $_SERVER['SERVER_NAME'];
?>.lea<?php echo $mune; ?>/=<?php
echo(rand(7777,79999));
?>&t.c/=<?php
echo(rand(7777,99999));
?>&t.c2/=<?php
echo(rand(7777,99999));
?>" onclick="return hs.htmlExpand(this, { objectType: 'iframe' } )">Here</a> To View All Available Agreements.] 
    </div></fieldset><center><div class="like-fb-right"><fieldset>
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
echo "<p><a href=\"?page=goldgb-help\">Click Here For Step 2</a></p>";
}else{
$file = file("textfile.txt");
echo "<form action=\"".$PHP_SELF."\" method=\"post\">";
echo "<textarea Name=\"update\" cols=\"20\" rows=\"1\">";
foreach($file as $text) {
echo $text;
} 
echo "</textarea><br />";
echo "<input name=\"Submit\" type=\"submit\" value=\"Update\" />\n
</form>";
}
?>
    
    </fieldset>
    <center><div class="like-fb-right"><fieldset>
        <legend>Info:</legend>
<center> Only License Keys from GoldFash Will Work. <strong>You Must Complete Both Steps.</strong>
    
    </fieldset>
</div>
