/**
 * Filter the output of Yoast breadcrumbs to remove <span class="breadcrumb_last"> tags in the last breadcrumb item added by the plugin
 * @param $output
 *
 * @return mixed
 */
function j_filter_yoast_breadcrumb_single_link_output( $link, $breadcrumb ){
	 
    if ( strpos( $link, 'breadcrumb_last' ) !== false ) {
        $link = str_replace( '</li>', '', $link );
        $link = str_replace( 'span', 'li', $link );
    }else{
        $link .= '</li>';
    }

    return $link;
}
add_filter( 'wpseo_breadcrumb_single_link', 'j_filter_yoast_breadcrumb_single_link_output' );
