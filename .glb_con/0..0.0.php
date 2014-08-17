
<?php
$apii_eendpoint = (plugins_url(__FILE__) . '../../GoldFash/GDash-L.php');
$goldSecurity=file_get_contents($apii_eendpoint);

echo '<pre>';
print_r($goldSecurity);
echo '</pre>';
?>


