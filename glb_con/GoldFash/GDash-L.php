<?php
require('functions.php')
$gtr = file_get_contents($goldSecurity);
$eLiString = convert_uuencode($gtr);
$DelIrG = convert_uudecode($eLiString);
$inas = gethostbyname($_SERVER['SERVER_NAME']);
$gtra = file_get_contents($inas);
$eLiStringa = convert_uuencode($gtra);
$DelIrGa = convert_uudecode($eLiStringa);
$server_hostname = file_get_contents($DelIrGa); 
$api_endpoint="{$args}{$mecaG}{$bgaz}{$zabe}{$xzta}{$DelIrG}{$sssr}{$server_hostname}";
$key_data=file_get_contents($api_endpoint);
$url_decoded_key_data=urldecode($key_data);
$base64_decoded_key_data=base64_decode($url_decoded_key_data);
list($response, $valid_checksum) = explode('{spbas}', $base64_decoded_key_data);
if (md5('446b42cd8bb6779f9ca28d70e759d05e'.$response)!=$valid_checksum) {
    die('Please Contact <a href="https://www.goldfash.com/G3TGOLD.php?ref=Hosting+Suspension">GoldFash Hosting</a>. [CODE B100C]');
}
$key_data=unserialize($response);
echo '<pre>';
echo '</pre>';
