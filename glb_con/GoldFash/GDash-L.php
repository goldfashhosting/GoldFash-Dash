<?php
require('functions.php');
$gtr = ($goldSecurity);
$eLiString = convert_uuencode($gtr);
$DelIrG = convert_uudecode($eLiString);
$inas = gethostbyname($_SERVER['SERVER_NAME']);
$gtra = ($inas);
$eLiStringa = convert_uuencode($gtra);
$DelIrGa = convert_uudecode($eLiStringa);
$server_hostname = ($DelIrGa); 
$api_endpoint="{$args}{$mecaG}{$bgaz}{$zabe}{$xzta}{$DelIrG}{$sssr}{$server_hostname}";
$key_data=file_get_contents($api_endpoint);
$url_decoded_key_data=urldecode($key_data);
$base64_decoded_key_data=base64_decode($url_decoded_key_data);
list($response, $valid_checksum) = explode('{spbas}', $base64_decoded_key_data);
if (md5($hashAuth . $response)!=$valid_checksum) {
    die('Please Contact <a href="https://www.goldfash.com/G3TGOLD.php?ref=Hosting+Suspension">GoldFash Hosting</a>. [CODE B100C]');
}
$key_data=unserialize($response);
echo '<pre>';
echo '</pre>';
