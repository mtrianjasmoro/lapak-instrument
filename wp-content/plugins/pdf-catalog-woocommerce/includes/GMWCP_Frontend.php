<?php
/**
 * This class is loaded on the back-end since its main job is 
 * to display the Admin to box.
 */

class GMWCP_Frontend {
	
	public function __construct () {
		$gmwcp_enable_single_product = get_option( 'gmwcp_enable_single_product' );
		$gmwcp_single_display_location = get_option( 'gmwcp_single_display_location' );
		if($gmwcp_enable_single_product == 'yes'){
			if($gmwcp_single_display_location == 'before'){
				add_action( 'woocommerce_product_meta_start', array( $this, 'woo_comman_single_button' ), 10, 0 ); 
			}
			if($gmwcp_single_display_location == 'after'){
				add_action( 'woocommerce_single_product_summary', array( $this, 'woo_comman_single_button' ), 15 );
			}
			 
		}
		$gmwcp_shop_enable_product = get_option( 'gmwcp_shop_enable_product' );
		$gmwcp_shop_display_location = get_option( 'gmwcp_shop_display_location' );
		if($gmwcp_shop_enable_product == 'yes'){
			if($gmwcp_shop_display_location == 'before'){
				add_action( 'woocommerce_before_shop_loop', array( $this, 'woo_comman_shop_button' ), 10, 2 ); 
			}
			if($gmwcp_shop_display_location == 'after'){
				add_action( 'woocommerce_after_shop_loop', array( $this, 'woo_comman_shop_button' ), 10, 2 ); 
			}
		}
		add_shortcode('gmwcp_single_product', array( $this, 'gmwcp_single_product_shortcode' ));
	}

	function gmwcp_single_product_shortcode($atts){
		ob_start();
		global $post,$gmpcp_arr;

		if (isset($atts['id']) && $atts['id']!='') {
			$url_custom = get_permalink($atts['id']);
			$product_id = $atts['id'];
		}else{
			$url_custom = get_permalink($post->ID);
			$product_id = $post->ID;
		}
		$isshow = true;
		$product_categories = wp_get_post_terms($product_id, 'product_cat', array('fields' => 'ids'));
		$common_elements = array_intersect($product_categories, $gmpcp_arr['gmpcp_exclude_category']);
		if (!empty($common_elements)) {
			$isshow = false;
		}
		if (metadata_exists( 'post', $product_id, '_gmwcp_exclude_product_single' ) ) {
			$isshow = false;
		}
		if ( is_user_logged_in() ) {
			$current_user = wp_get_current_user();
			$user_roles = $current_user->roles;
			$common_elements = array_intersect($user_roles, $gmpcp_arr['gmpcp_exclude_role']);
			if (!empty($common_elements)) {
				$isshow = false;
			}
		}
		if ($isshow==true) {
			$url_custom = add_query_arg( 'action', 'catelog_single', $url_custom );
			?>
			<div class="gmwcp_button">
					<a href="<?php echo $url_custom;?>" class="button"><?php echo get_option( 'gmpcp_trasnlation_single' ); ?></a>
			</div>
			<?php
		}
		$output = ob_get_contents();
		ob_end_clean();
		return $output;
	}

	
	function woo_comman_single_button(){
		global $post,$gmpcp_arr;
		$isshow = true;
		$product_categories = wp_get_post_terms($post->ID, 'product_cat', array('fields' => 'ids'));
		$common_elements = array_intersect($product_categories, $gmpcp_arr['gmpcp_exclude_category']);
		if (!empty($common_elements)) {
			$isshow = false;
		}
		if (metadata_exists( 'post', $post->ID, '_gmwcp_exclude_product_single' ) ) {
			$isshow = false;
		}
		if ( is_user_logged_in() ) {
			$current_user = wp_get_current_user();
			$user_roles = $current_user->roles;
			$common_elements = array_intersect($user_roles, $gmpcp_arr['gmpcp_exclude_role']);
			if (!empty($common_elements)) {
				$isshow = false;
			}
		}
		if($isshow==true){
			$url_custom = get_permalink($post->ID);
			$url_custom = add_query_arg( 'action', 'catelog_single', $url_custom );
		?>
				<div class="gmwcp_button">
					<a href="<?php echo $url_custom;?>" class="button"><?php echo get_option( 'gmpcp_trasnlation_single' ); ?></a>
				</div>
		<?php
		}

	}

	function woo_comman_shop_button(){
		global $wp,$wp_query,$gmpcp_arr;
		
		
		
		$current_url = $this->getcurrneturl();
		$updated_url = add_query_arg( 'action', 'catelog_shop', $current_url );
		$label = get_option( 'gmpcp_trasnlation_category' );
		$gmwcp_shop_enable_all = get_option( 'gmwcp_shop_enable_all' );
		if($gmwcp_shop_enable_all=='yes'){
			$updated_url = add_query_arg( 'enable_all', 'yes', $updated_url );
		}
		$isshow = true;
		if (is_product_category()) {
			$current_category_id = get_queried_object_id();
			if (in_array($current_category_id, $gmpcp_arr['gmpcp_exclude_category'])) {
				$isshow = false;
			}
		}
		if ( is_user_logged_in() ) {
			$current_user = wp_get_current_user();
			$user_roles = $current_user->roles;
			$common_elements = array_intersect($user_roles, $gmpcp_arr['gmpcp_exclude_role']);
			if (!empty($common_elements)) {
				$isshow = false;
			}
		}
		if($isshow==true){
		?>
		<div class="gmwcp_button">
			<a href="<?php echo $updated_url;?>" class="button"><?php echo $label; ?></a>
		</div>
		<?php
		}
	}
	function getcurrneturl(){
		$actual_link = (empty($_SERVER['HTTPS']) ? 'http' : 'https') . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
		return $actual_link;
	}
	
	
	
}

add_filter( 'pre_get_posts', function( \WP_Query $q ) {
	if ($q->is_main_query()) {

	   	if (isset($_REQUEST['enable_all']) && $_REQUEST['enable_all']=='yes') {
	   		//exit;
		    $q->set( 'posts_per_page', -1);
		}
	}
  
} );
