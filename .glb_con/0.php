<?PHP
// Enter a license key
$license='GFDPLY-d14c719214879c00a88a';
 
// NOTE: Set the licensing method to "Validate:" the "Server Hostname" at the following location in SPBAS:
//
// Settings -> Licensing -> Licensing Methods -> License Settings
//
// For desktop applications we recommend that you use the "Server Hostname", but instead of passing a server hostname in you would pass in maybe the Hard Drive Serial or MAC address.
 
// In your desktop application you grab the HDD Serial, MAC address, etc. We'll be sending the MAC address to the API as server_hostname. This is 100% ok to do.
$server_hostname=''; 
 
// This is the API endpoint. All you have to do is populate the $license variable and the $server_hostname variable. You will also need to enter the correct URL to the api/ directory of your SPBAS installation.
$api_endpoint="https://www.rfig.us/A-GOLD/plugin.stream/cx.VERF./GeT/e.X.5/api/index.php?mod=license&task=SPBAS_validate_license&license_key={$license}&server_hostname={$server_hostname}";
 
// Valid access detail parameters include:
// domain, ip, directory, server_hostname and server_ip
 
// NOTE: When you call the API endpoint you'll get either a long base64 encoded string or text starting with "Error:".
// NOTE2: The default response format is in base64 encoded serialized PHP. You can get a JSON response by adding "&format=json"
 
// You will want to save the result of the API call if it's the base64 encoded string. You can use it as a local cache to validate the license later or you can decode the string and use the values in your application.
$key_data=file_get_contents($api_endpoint);
 
// URL Decode the local license key
$url_decoded_key_data=urldecode($key_data);
 
// base64 Decode
$base64_decoded_key_data=base64_decode($url_decoded_key_data);
 
// Split it into parts
list($response, $valid_checksum) = explode('{spbas}', $base64_decoded_key_data);
 
// Validate the response.
//
// This is the secret key: 94f8b8024e134e36e3be778d9d490110
//
// You can find the secret key in the licensing settings menu link of the licensing method:
//
// Settings -> Licensing -> Licensing Methods -> License Settings -> Secret Key
if (md5('4088456cdeab44246a4a5dc53ea93c45'.$response)!=$valid_checksum) {
    die('Please Contact GoldFash Hostinig.');
}
 
// decode the response to a usable array
$key_data=unserialize($response);
 
// if you had &format=json set in the request, then you would instead decode the response like this:
// $key_data=json_decode($response);
 
// Expose the contents of the array:
echo '<pre>';
//print_r($key_data);
echo '</pre>';
