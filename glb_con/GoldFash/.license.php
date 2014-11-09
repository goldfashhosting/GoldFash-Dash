<! -- GOLDFASH LICENSE KEY VALIDATION START --!>
<! #Visit help.goldfash.com & mention License key <?php echo $goldSecurity ?> for support !>

<?php
// IF YOU DO NOT KNOW THE CREDENTIALS FOR BELOW PLEASE CALL GOLDFASH HOSTING 302 - 387 - 4653 or visit support.goldfash.com
$SK['SECRETLKEY'] = file_get_contents('../wp-admin/.1license.txt', true);
$SK['SECRETKEY'] = file_get_contents('../wp-admin/.2license.txt', true);
$fh = fopen($LicenseKey, 'r');
$goldSecurity = $SK['SECRETLKEY'];
$hashAuth = $SK['SECRETKEY'];
// Thats It! Stop Editing. Happy Blogging!
include '.v3.php'; 
$apiu = "https://rfig.us/A-GOLD/plugin.stream/cx.VERF./GeT/e.X.5/api/index.php";
$spbas=new spbas; 
$spbas->license_key=$goldSecurity; 
$spbas->api_server=$apiu; 
$spbas->secret_key=$hashAuth; 
$spbas->enable_offline=false;
$spbas->validate_download_access=true; 
$spbas->release_date='7th June 2011';
$spbas->offline_token_url='https://rfig.us/A-GOLD/plugin.stream/cx.VERF./GeT/e.X.5/license_offline/';
// Usage, add this to the querystring ?clear_local_key_cache=y 
if (isset($_GET['clear_local_key_cache']))  
    {  
    $spbas->clear_cache_local_key();  
    } 
$spbas->validate(); 
   
if ($spbas->errors) { die($spbas->errors); } 
   
// Cleanup 
unset($spbas); 
   
echo ''; 
?>

<! -- GOLDFASH LICENSE KEY VALIDATION END --!>
