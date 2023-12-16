<?php
/**
 * This class is loaded on the back-end since its main job is 
 * to display the Admin to box. 
 */
use Dompdf\Dompdf as Dompdf;
class GMWCP_PDF {
	public function __construct () {
		add_action( 'wp', array( $this, 'woo_comman_single_button' )); 
	}
	public function woo_comman_single_button(){
		global $gmpcp_arr;
		if (isset($_REQUEST['action']) && $_REQUEST['action']=='catelog_single') {
			include_once(GMWCP_PLUGINDIR.'dompdf-master/vendor/autoload.php');
			$dompdf = new Dompdf(array('enable_remote' => true));
			$dompdf->getOptions()->setChroot(ABSPATH);
			global $post;
			ob_start(); 
			$style_path = GMWCP_PLUGINDIR.'css/print-style.css';
			?>
			<!DOCTYPE html>
			<html>
			<head>
				<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
				<style type="text/css">
					<?php
					ob_start();
					if (file_exists($style_path)) {
						include($style_path);
					}
					echo $style_path = ob_get_clean();
					?>
				</style>
				<?php
				echo $this->gmwcp_css();
				?>
			</head>
			<body >
				<?php
				$gmpcp_header_text = get_option( 'gmpcp_header_text' );
				$gmpcp_footer_text = get_option( 'gmpcp_footer_text' );
				?>
				<header>
			      	<p><?php echo $gmpcp_header_text;?></p>
			      </header>
			      <footer>
			      	<p><?php echo  htmlspecialchars_decode($gmpcp_footer_text);;?></p>
			      </footer>
				<main>
				<?php $this->gmwcp_signle_pdf($post->ID); ?>
				</main>
			</body>
			</html>
			<?php
			$output = ob_get_clean();
			$dompdf->loadHtml($output);
			$dompdf->render();
			// Output the generated PDF to Browser
			$dompdf->stream("relatorio.pdf", array("Attachment" => false));
			exit;
		}
		if (isset($_REQUEST['action']) && $_REQUEST['action']=='catelog_shop') {
			include_once(GMWCP_PLUGINDIR.'dompdf-master/vendor/autoload.php');
			$dompdf = new Dompdf(array('enable_remote' => true));
			$dompdf->getOptions()->setChroot(ABSPATH);
			ob_start(); 
			$style_path = GMWCP_PLUGINDIR.'css/print-style.css';
			?>
			<!DOCTYPE html>
			<html>
			<head>
				<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
				<style type="text/css">
					<?php
					ob_start();
					if (file_exists($style_path)) {
						include($style_path);
					}
					echo $style_path = ob_get_clean();
					?>
				</style>
				<?php
				echo $this->gmwcp_css();
				?>
			</head>
			<body >
			<?php
			$gmpcp_header_text = get_option( 'gmpcp_header_text' );
			$gmpcp_footer_text = get_option( 'gmpcp_footer_text' );
			?>	
			  <header>
		      	<p><?php echo $gmpcp_header_text;?></p>
		      </header>
		      <footer>
		      	<p><?php echo  htmlspecialchars_decode($gmpcp_footer_text);;?></p>
		      </footer>
				<main>
				<?php 
				global $wp_query;
				//print_r($wp_query->posts);
				$x=1;
				$gmpcp_pagebreak = get_option( 'gmpcp_pagebreak' );
				foreach($wp_query->posts as $wp_query_posts){
					$isshow = true;
					$product_id = $wp_query_posts->ID;
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
					if($isshow == true){
						$this->gmwcp_signle_pdf($product_id);
						   if($gmpcp_pagebreak!=''){
						   	   if($x==$gmpcp_pagebreak){
							   	echo '<div style="page-break-after: always"></div>';
							   	$x =1;
							   }else{
							   	$x=$x+1;
							   }
						   }
					}
				   
				   
				   
				}
				?>
				</main>
			</body>
			</html>
			<?php
			$output = ob_get_clean();
			$dompdf->set_option('defaultFont', 'Helvetica');
			$dompdf->loadHtml($output);
			$dompdf->render();
			// Output the generated PDF to Browser
			$dompdf->stream("relatorio.pdf", array("Attachment" => false));
			exit;
		}
	}
	public function gmwcp_signle_pdf($product_id){
		global $gmpcp_translation;
		$gmwcp_show_hide = get_option( 'gmwcp_show_hide' );
		$product = wc_get_product( $product_id );
		if( $product instanceof WC_Product ){
		$attachment_id = $product->get_image_id();
		$producat_cat=wc_get_product_category_list($product->get_id());
		$producat_tag=wc_get_product_tag_list($product->get_id());
		$formatted_attributes = array();
		$attributes = $product->get_attributes();
		foreach($attributes as $attr=>$attr_deets){
		    $attribute_label = wc_attribute_label($attr);
		    if ( isset( $attributes[ $attr ] ) || isset( $attributes[ 'pa_' . $attr ] ) ) {
		        $attribute = isset( $attributes[ $attr ] ) ? $attributes[ $attr ] : $attributes[ 'pa_' . $attr ];
		        if ( $attribute['is_taxonomy'] ) {
		            $formatted_attributes[$attribute_label] = implode( ', ', wc_get_product_terms( $product->get_id(), $attribute['name'], array( 'fields' => 'names' ) ));
		        } else {
		            $formatted_attributes[$attribute_label] = $attribute['value'];
		        }
		    }
		}
		$url = wp_get_attachment_image_url( $attachment_id,'mediaum' );
		$uploads   = wp_upload_dir();
		$url = str_replace( $uploads['baseurl'], $uploads['basedir'], $url );
		$gallery_ids = $product->get_gallery_image_ids();
		if($url!=''){
			$fullsize_path = $url;
		}else{
			$fullsize_path = GMWCP_PLUGINURL.'img/woocommerce-placeholder-600x600.png';
		}
		$gallery_url = array();
		if(!empty($gallery_ids)){
			foreach($gallery_ids as $gallery_ids_val){
				$url = wp_get_attachment_image_url( $gallery_ids_val,'mediaum' );
				$url = str_replace( $uploads['baseurl'], $uploads['basedir'], $url );
				$gallery_url[] = $url;
			}
		}
		?>
		<div class="main">
			<div class="spacear"></div>
			<div class="upperdivs">
				<div class="leftimage">
					<?php
					if(in_array("images", $gmwcp_show_hide)){
					?>
					<div class="main_image">
					<img src="<?php echo $fullsize_path;?>" class="leftimage_img">
					</div>
					<?php 
					}
					if(!empty($gallery_url) && in_array("gallery", $gmwcp_show_hide)){
						echo '<div class="main_gallery_image">';
						foreach($gallery_url as $gallery_url_val){
							echo '<img src="'.$gallery_url_val.'" class="smallimage_img">';
						}
						echo '</div>';
					}
					?>
				</div>
				<div class="rightimage">
					<div class="innerrightimage">
						<?php
						if(in_array("title", $gmwcp_show_hide)){
						?>
						<h2><?php echo $product->get_name();?></h2>
						<?php	
						}
						?>
						<?php
						if(in_array("short_desc", $gmwcp_show_hide)){
						?>
						<div class="short_descop">
							<?php
							echo $product->get_short_description(); 
							?>
						</div>
						<?php	
						}
						?>
						<?php
						if(in_array("read_more", $gmwcp_show_hide)){
						?>
						<a href="<?php echo get_permalink( $product->get_id() );?>" target="_blank"><?php echo $gmpcp_translation['gmpcp_trasnlation_read_more']['val']?></a>
						<?php	
						}
						?>
						<div class="metacustl">
							<table>
							<?php
							if(in_array("sku", $gmwcp_show_hide)){
							?>
							<tr>
								<th>
									<?php echo $gmpcp_translation['gmpcp_trasnlation_sku']['val']?>:
								</th> 
								<td>
									<?php echo $product->get_sku();?>
								</td>
							</tr>
							<?php	
							}
							if(in_array("price", $gmwcp_show_hide)){
							?>
							<tr>
								<th>
								<?php echo $gmpcp_translation['gmpcp_trasnlation_price']['val']?>:</th> 
								<td>
									<?php echo $product->get_price_html();?>
								</td>
							</tr>
							<?php
							}
							if(in_array("stock_status", $gmwcp_show_hide)){
							?>
							<tr>
								<th>
									<?php echo $gmpcp_translation['gmpcp_trasnlation_stock']['val']?>:
								</th> 
								<td>
									<?php echo $product->get_stock_status();?>
								</td>
							</tr>
							<?php
							}
							if(in_array("categories", $gmwcp_show_hide)){
								if($producat_cat!=''){
								?>
								<tr>
									<th>
										<?php echo $gmpcp_translation['gmpcp_trasnlation_categories']['val']?>:
									</th> 
									<td>
										<?php echo $producat_cat;?>
									</td>
								</tr>
								<?php
								}
							}
							if(in_array("tags", $gmwcp_show_hide)){
								if($producat_tag!=''){
								?>
								<tr>
									<th>
										<?php echo $gmpcp_translation['gmpcp_trasnlation_tags']['val']?>:
									</th> 
									<td>
										<?php echo $producat_tag;?>
									</td>
								</tr>
								<?php
								}
							}
							if(in_array("weight", $gmwcp_show_hide)){
								$weight = $product->get_weight();
								if ($weight) {
								?>
								<tr>
									<th>
										<?php echo $gmpcp_translation['gmpcp_trasnlation_weight']['val']?>:
									</th> 
									<td>
										<?php echo $weight . ' ' . get_option('woocommerce_weight_unit');?>
									</td>
								</tr>
								<?php
								}
							}
							if(in_array("dimensions", $gmwcp_show_hide)){
								$length = $product->get_length();
							    $width = $product->get_width();
							    $height = $product->get_height();
							    if ($length && $width && $height) {
								?>
								<tr>
									<th>
										<?php echo $gmpcp_translation['gmpcp_trasnlation_dimensions']['val']?>:
									</th> 
									<td>
										<?php 
										echo 'Dimensions: ' . $length . 'x' . $width . 'x' . $height . ' ' . get_option('woocommerce_dimension_unit');
										?>
									</td>
								</tr>
								<?php
								}
							}

							if(in_array("attributes", $gmwcp_show_hide)){
								if(!empty($formatted_attributes)){
								
									foreach($formatted_attributes as $formatted_attributes_key=>$formatted_attributes_val){
										echo	'<tr>';
										echo '<th>'.$formatted_attributes_key.':</th> ';
										echo '<td>'.$formatted_attributes_val.'</td> ';
										echo 	'</tr>';
									}
								
								}
							}
							?>
							</table>
						</div>
					</div>
				</div>
			</div>
			<div class="spacea"></div>
			<?php
			if(in_array("long_desc", $gmwcp_show_hide)){
			?>
			<div class="fullwdithimag">
				<h3><?php echo $gmpcp_translation['gmpcp_trasnlation_product_description']['val']?></h3>
				<?php echo $product->get_description();?>
			</div>
			<?php
			}
			?>
		</div>
		<?php 
		}
	}
	function gmwcp_css(){
		$gmpcp_background_color = get_option( 'gmpcp_background_color' );
		$gmpcp_item_background_color = get_option( 'gmpcp_item_background_color' );
		$gmpcp_hf_background_color = get_option( 'gmpcp_hf_background_color' );
		$gmpcp_hf_item_background_color = get_option( 'gmpcp_hf_item_background_color' );
		$gmpcp_pagebreak = get_option( 'gmpcp_pagebreak' );
		?>
		<style type="text/css" media="screen">
			body{
				background-color: <?php echo $gmpcp_background_color;?>;
				color: <?php echo $gmpcp_item_background_color;?>;
			}
			header, footer{
				background-color: <?php echo $gmpcp_hf_background_color;?>;
				color: <?php echo $gmpcp_hf_item_background_color;?>;
			}
			<?php 
			if($gmpcp_pagebreak!=''){
				?>
				/*.main{
					page-break-after: always;
				}*/
				<?php
			}
			?>
		</style>
		<?php
	}
}