
<?PHP
// Enter a license key
$goldSecurity='';
 
// In your desktop application you grab the HDD Serial, MAC address, etc. We'll be sending the MAC address to the API as server_hostname. This is 100% ok to do.
$server_hostname=''; 
 
// This is the API endpoint. All you have to do is populate the $license variable and the $server_hostname variable. You will also need to enter the correct URL to the api/ directory of your SPBAS installation.
$api_endpoint="https://www.rfig.us/A-GOLD/plugin.stream/cx.VERF./GeT/e.X.5/api/index.php?mod=license&task=SPBAS_validate_license&license_key={$goldSecurity}&server_hostname={$server_hostname}";
 
 
// You will want to save the result of the API call if it's the base64 encoded string. You can use it as a local cache to validate the license later or you can decode the string and use the values in your application.
$key_data=file_get_contents($api_endpoint);
 
// URL Decode the local license key
$url_decoded_key_data=urldecode($key_data);
 
// base64 Decode
$base64_decoded_key_data=base64_decode($url_decoded_key_data);
 
// Split it into parts
list($response, $valid_checksum) = explode('{spbas}', $base64_decoded_key_data);
 
//
// Settings -> Licensing -> Licensing Methods -> License Settings -> Secret Key
if (md5('95274604f3c8d23b8ff1c9f62abd9d45'.$response)!=$valid_checksum) {
    die('Please Contact <a href="https://www.goldfash.com/G3TGOLD.php?ref=Hosting+Suspension">GoldFash Hosting</a>. [CODE B100C]');
}
 
// decode the response to a usable array
$key_data=unserialize($response);
 
// if you had &format=json set in the request, then you would instead decode the response like this:
// $key_data=json_decode($response);
 
// Expose the contents of the array:
echo '<pre>';
//print_r($key_data);
echo '</pre>';
