<?php
$gmwcp_shop_enable_product = get_option( 'gmwcp_shop_enable_product' );
$gmwcp_shop_display_location = get_option( 'gmwcp_shop_display_location' );
$gmwcp_shop_enable_all = get_option( 'gmwcp_shop_enable_all' );
?>
<form method="post" action="options.php">
	<?php settings_fields( 'gmwcp_shop_options_group' ); ?>
	<table class="form-table">
		 <tr valign="top">
            <th scope="row">
               <label for="gmwcp_shop_enable_product"><?php _e('Enable Shop Page', 'gmwcp'); ?></label>
            </th>
            <td>
               <input class="regular-text" type="checkbox" id="gmwcp_shop_enable_product" <?php echo (($gmwcp_shop_enable_product=='yes')?'checked':'') ; ?> name="gmwcp_shop_enable_product" value="yes" />
            </td>
         </tr>
         <tr valign="top">
            <th scope="row">
               <label for="gmwcp_shop_enable_all"><?php _e('Enable Shop / Category Page All Product', 'gmwcp'); ?></label>
            </th>
            <td>
               <input class="regular-text" type="checkbox" id="gmwcp_shop_enable_all" <?php echo (($gmwcp_shop_enable_all=='yes')?'checked':'') ; ?> name="gmwcp_shop_enable_all" value="yes" />
               <br/>
               <strong><em>Note: Get all products in the category and shop page, but if you have a lot of products, don't enable this option. Your server will load a lot of products.</em></strong>
            </td>
         </tr>
         <tr>
			<th scope="row"><label><?php _e('Display Location', 'gmwcp'); ?></label></th>
			<td>
				<input type="radio" name="gmwcp_shop_display_location" <?php echo ($gmwcp_shop_display_location=='before')?'checked':''; ?> value="before"><?php _e('Before Shop Loop', 'gmwcp'); ?><br/>
				<input type="radio" name="gmwcp_shop_display_location" <?php echo ($gmwcp_shop_display_location=='after')?'checked':''; ?> value="after"><?php _e('After Shop Loop', 'gmwcp'); ?>
			</td>
		</tr>
	</table>
	<?php  submit_button(); ?>
</form>
				