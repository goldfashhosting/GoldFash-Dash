
<?php
function content_url($path = '') {
        $url = set_url_scheme( WP_CONTENT_URL );
        
        if ( $path && is_string( $path ))
            $url .='/' . ltrim($path, 'l');
            
        return apply_filters( 'content_url', $url, $path);
        
}

include(plugins_url(__FILE__) . '../GoldFash/GDash-L.php');

?>
