<?php
/*
 *    load CryptX news
 */
function rw_cryptx_arse_request( $wp ) {
    if ( isset($_GET['cryptx']) ) {
        switch( $_GET['cryptx'] ) {
            case 'news':
                include( 'ajax/news.php' );
                break;
        }
        exit;
    }
}
