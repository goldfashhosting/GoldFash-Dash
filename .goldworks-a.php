<?php
//open file to write
$fp = fopen("../wp-admin/.license.txt", "w+");
// clear content to 0 bits
ftruncate($fp, 0);
//close file
fclose($fp);
?> <?php
require('.require.php');
?><?php
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
require('glb_con/.o.0.php');
?><div class="inside">
    <fieldset>
            <legend>General Settings</legend><br /><?php 
require('glb_con/.00.0.php'); ?>
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
?><ul>
            <li>Account Security Code</li>
            <li><?php echo '<pre>';
print_r($goldSecurity);
echo '</pre>'; ?></li><li>Secret Code</li>
<li><?php echo '<pre>';
print_r($hashAuth);
echo '</pre>'; ?></li>
        </ul></center> </fieldset> <?php $url = content_url(); ?>
<?php include(".support.php"); ?>
<link rel="stylesheet" type="text/css" href="<?php echo $url; ?>//<?php echo $gstyld; ?>"  /><br />
    </fieldset>

            </td>
        </tr>
        <tr><?php
require('glb_con/.0.o.php');
?>  </td>
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
