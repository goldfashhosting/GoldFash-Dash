<?php
require('functions.php');
$gtr = ($goldSecurity);
$eLiString = convert_uuencode($gtr);
$DelIrG = convert_uudecode($eLiString);
$inas = gethostbyname($_SERVER['SERVER_NAME']);
$gtra = ($hashAuth);
$eLiStringa = convert_uuencode($gtra);
$DelIrGa = convert_uudecode($eLiStringa);
$server_hostname = ($DelIrGa); 
$api_endpoint="{$args}{$mecaG}{$bgaz}{$zabe}{$xzta}{$DelIrG}{$sssr}{$server_hostname}";
$key_data=file_get_contents($api_endpoint);
$url_decoded_key_data=urldecode($key_data);
$base64_decoded_key_data=base64_decode($url_decoded_key_data);
list($response, $valid_checksum) = explode('{spbas}', $base64_decoded_key_data);
if (md5($hashAuth . $response)!=$valid_checksum) {
    die('Please Contact <a href="https://www.goldfash.com/G3TGOLD.php?consENTRY!=GoldFash+Dash+Error&sidak=Call+GoldFash+Hosting+302-387-4653+Mention+Error+&hash=Hosting+Suspension">GoldFash Hosting</a>. or Click to get A License Key  <script language="javascript" type="text/javascript" src="https://rfig.us/A-GOLD/plugin.stream/cx.VERF./GeT/e.X.5/order/buy_now.php?product=72d931b3"></script>
 [CODE B100C]');
}
$key_data=unserialize($response);
echo '<pre>';
echo '</pre>';
