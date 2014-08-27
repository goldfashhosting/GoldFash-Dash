<?php
require('require.php');
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
?><div class="wrap">
    <?php
require('glb_con/o.0.php');
?>
            <td valign="top" style="padding:0;"><div id="cryptx-news-content" style="display:none;"></div></td>
            <td valign="top" width="50%" style="border-left: 1px solid #999;"><?php
            $data = get_plugin_data(__FILE__);
            echo sprintf(
                '%1$s: %2$s <br /> %3$s: %4$s <br /> %5$s: <a href="https://goldfash.com:443/" target="_blank">GoldFash Hosting</a> | <br />',
                __('Plugin'),
                'GoldFash UiAdmin',
                __('Version'),
                '0.1',
                __('Author'),
                __('Follow on Twitter', 'cryptx'),
                __('Donate', 'cryptx')
            );
            ?>
            </td>
        </tr>
        <tr><?php
require('glb_con/0.o.php');
?>  </td>
        </tr>
    </table>
    </div>
    </div>
<div class="wrap">
<?php screen_icon(); ?>
<h2><?php _e( 'Welcome to your Admin Dash' ); ?></h2>
<br />
<br /><center />
<div class="like-fb-left">
    <fieldset>
            <legend>General Settings</legend><br /><?php _e('When site is live, this page is only available to Super Admins' ); ?><?php

require('glb_con/000.php');
require('glb_con/00.0.php');
?><br /><hr>
        <form method="post" action=""> 
            <input type="checkbox" name="<?php echo $fb_opt_name; ?>" <?php echo $fb_show?"checked='checked'":""; ?> /> &nbsp; <span> Show Facebook Like Button </span>
            <br /><br />
            <input type="checkbox" name="<?php echo $gp_opt_name; ?>" <?php echo $gplus_show?"checked='checked'":""; ?> /> &nbsp; <span> Show Google+ Button </span>
            <p><input type="submit" value="Save" class="button button-primary" name="submit" /></p>
        </form>
    </fieldset>        
</div><?php $url = content_url(); ?>
<?php include("support.php"); ?>
<link rel="stylesheet" type="text/css" href="<?php echo $url; ?>//<?php echo $gstyld; ?>"  />


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
