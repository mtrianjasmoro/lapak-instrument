<?php
/**
 * Handles free plugin user dashboard
 * 
 * @package Woocommerce_Product_Attachment
 * @since   2.2.0
 */

// If this file is called directly, abort.
if (!defined('WPINC')) {
    die;
}

require_once( plugin_dir_path( __FILE__ ) . 'header/plugin-header.php' );
?>
<div class="dotstore-upgrade-dashboard">
	<div class="premium-benefits-section">
		<h2><?php esc_html_e( 'Go Premium to Enhance Product Engagement', 'woocommerce-product-attachment' ); ?></h2>
		<p><?php esc_html_e( 'Three Benefits of Upgrading to Premium', 'woocommerce-product-attachment' ); ?></p>
		<div class="premium-features-boxes">
			<div class="feature-box">
				<span><?php esc_html_e('01', 'woocommerce-product-attachment'); ?></span>
				<h3><?php esc_html_e('Enhanced Customer Experience', 'woocommerce-product-attachment'); ?></h3>
				<p><?php esc_html_e('Boost customer satisfaction with downloadable attachment files on product pages, providing valuable resources like technical descriptions, user guides, and manuals.', 'woocommerce-product-attachment'); ?></p>
			</div>
			<div class="feature-box">
				<span><?php esc_html_e('02', 'woocommerce-product-attachment'); ?></span>
				<h3><?php esc_html_e('Increased Product Engagement', 'woocommerce-product-attachment'); ?></h3>
				<p><?php esc_html_e('Attachments like certificates, licenses, and additional information enhance product presentation, boosting engagement and confidence, and leading to higher conversions.', 'woocommerce-product-attachment'); ?></p>
			</div>
			<div class="feature-box">
				<span><?php esc_html_e('03', 'woocommerce-product-attachment'); ?></span>
				<h3><?php esc_html_e('Efficient Information Access', 'woocommerce-product-attachment'); ?></h3>
				<p><?php esc_html_e('Attachments on product pages save customer time and effort. Easy access to valuable info empowers informed choices and enhances shopping convenience.', 'woocommerce-product-attachment'); ?></p>
			</div>
		</div>
	</div>
	<div class="premium-benefits-section unlock-premium-features">
		<p><span><?php esc_html_e( 'Unlock Premium Features', 'woocommerce-product-attachment' ); ?></span></p>
		<div class="premium-features-boxes">
			<div class="feature-box">
				<h3><?php esc_html_e('Bulk Attachment', 'woocommerce-product-attachment'); ?></h3>
				<span><i class="fa fa-envelopes-bulk"></i></span>
				<p><?php esc_html_e('Easily attach various general information, such as instructions, certificates, and user guides, to your products with the flexibility to add multiple bulk attachments.', 'woocommerce-product-attachment'); ?></p>
				<div class="feature-explanation-popup-main">
					<div class="feature-explanation-popup-outer">
						<div class="feature-explanation-popup-inner">
							<div class="feature-explanation-popup">
								<span class="dashicons dashicons-no-alt popup-close-btn" title="<?php esc_attr_e('Close', 'woocommerce-product-attachment'); ?>"></span>
								<div class="popup-body-content">
									<div class="feature-image">
										<img src="<?php echo esc_url(WCPOA_PLUGIN_URL . 'admin/images/pro-features-img/feature-box-one-img.png'); ?>" alt="<?php echo esc_attr('Bulk Attachment', 'woocommerce-product-attachment'); ?>">
									</div>
									<div class="feature-content">
										<p><?php esc_html_e('Easily add general information to products with multiple bulk attachments, empowering customers with complete details for confident purchases.', 'woocommerce-product-attachment'); ?></p>
										<ul>
											<li><?php esc_html_e('Attach detailed user guides and manuals to help customers understand product features and functionalities.', 'woocommerce-product-attachment'); ?></li>
											<li><?php esc_html_e('Enhance product transparency by attaching relevant instructions and warranty details for informed purchases.', 'woocommerce-product-attachment'); ?></li>
										</ul>
									</div>
								</div>
							</div>		
						</div>
					</div>
				</div>
			</div>
			<div class="feature-box">
				<h3><?php esc_html_e('Attachment Import', 'woocommerce-product-attachment'); ?></h3>
				<span><i class="fa fa-file-import"></i></span>
				<p><?php esc_html_e('Easily import product attachments in bulk. It provides a convenient bulk product attachment importer based on the products\' SKUs.', 'woocommerce-product-attachment'); ?></p>
				<div class="feature-explanation-popup-main">
					<div class="feature-explanation-popup-outer">
						<div class="feature-explanation-popup-inner">
							<div class="feature-explanation-popup">
								<span class="dashicons dashicons-no-alt popup-close-btn" title="<?php esc_attr_e('Close', 'woocommerce-product-attachment'); ?>"></span>
								<div class="popup-body-content">
									<div class="feature-image">
										<img src="<?php echo esc_url(WCPOA_PLUGIN_URL . 'admin/images/pro-features-img/feature-box-two-img.png'); ?>" alt="<?php echo esc_attr('Attachment Import', 'woocommerce-product-attachment'); ?>">
									</div>
									<div class="feature-content">
										<p><?php esc_html_e('Effortlessly import product attachments in bulk using our convenient bulk product attachment importer, making it easy to manage attachments for multiple products at once.', 'woocommerce-product-attachment'); ?></p>
										<ul>
											<li><?php esc_html_e('Import return and exchange policies for products with related SKUs for efficient documentation management.', 'woocommerce-product-attachment'); ?></li>
											<li><?php esc_html_e('Attach product datasheets in bulk, ensuring customers can access detailed technical information for informed purchases.', 'woocommerce-product-attachment'); ?></li>
										</ul>
									</div>
								</div>
							</div>		
						</div>
					</div>
				</div>
			</div>
			<div class="feature-box">
				<h3><?php esc_html_e('Attach External URL', 'woocommerce-product-attachment'); ?></h3>
				<span><i class="fa fa-arrow-up-right-from-square"></i></span>
				<p><?php esc_html_e('Easily add external site URLs as attachments to your product pages. Attach references like PDF files, YouTube videos, and more for additional info.', 'woocommerce-product-attachment'); ?></p>
				<div class="feature-explanation-popup-main">
					<div class="feature-explanation-popup-outer">
						<div class="feature-explanation-popup-inner">
							<div class="feature-explanation-popup">
								<span class="dashicons dashicons-no-alt popup-close-btn" title="<?php esc_attr_e('Close', 'woocommerce-product-attachment'); ?>"></span>
								<div class="popup-body-content">
									<div class="feature-image">
										<img src="<?php echo esc_url(WCPOA_PLUGIN_URL . 'admin/images/pro-features-img/feature-box-three-img.png'); ?>" alt="<?php echo esc_attr('Attach External URL', 'woocommerce-product-attachment'); ?>">
									</div>
									<div class="feature-content">
										<p><?php esc_html_e('Enable the attachment of external site URLs to your product pages.', 'woocommerce-product-attachment'); ?></p>
										<p><?php esc_html_e('You can add references such as PDF files, YouTube videos, and other external content to provide additional information to your customers.', 'woocommerce-product-attachment'); ?></p>
										<ul>
											<li><?php esc_html_e('Include a YouTube video demonstration to showcase product features and benefits.', 'woocommerce-product-attachment'); ?></li>
											<li><?php esc_html_e('Attach the external site\'s PDF file to help customers understand product usage better.', 'woocommerce-product-attachment'); ?></li>
										</ul>
									</div>
								</div>
							</div>		
						</div>
					</div>
				</div>
			</div>
			<div class="feature-box">
				<h3><?php esc_html_e('Video Attachments', 'woocommerce-product-attachment'); ?></h3>
				<span><i class="fa fa-file-video"></i></span>
				<p><?php esc_html_e('Display YouTube video links as attachments in a new tab for a better user experience. Easily set all YouTube video links to open in a new tab.', 'woocommerce-product-attachment'); ?></p>
				<div class="feature-explanation-popup-main">
					<div class="feature-explanation-popup-outer">
						<div class="feature-explanation-popup-inner">
							<div class="feature-explanation-popup">
								<span class="dashicons dashicons-no-alt popup-close-btn" title="<?php esc_attr_e('Close', 'woocommerce-product-attachment'); ?>"></span>
								<div class="popup-body-content">
									<div class="feature-image">
										<img src="<?php echo esc_url(WCPOA_PLUGIN_URL . 'admin/images/pro-features-img/feature-box-four-img.png'); ?>" alt="<?php echo esc_attr('Video Attachments', 'woocommerce-product-attachment'); ?>">
									</div>
									<div class="feature-content">
										<p><?php esc_html_e('Improve the user experience by displaying YouTube video links as attachments in a new tab.', 'woocommerce-product-attachment'); ?></p>
										<p><?php esc_html_e('With this feature, all YouTube videos will open in new tabs, ensuring a seamless browsing experience for your customers.', 'woocommerce-product-attachment'); ?></p>
										<ul>
											<li><?php esc_html_e('Attach a helpful style tips and care instructions video for customers.', 'woocommerce-product-attachment'); ?></li>
											<li><?php esc_html_e('Add a promotional video to showcase the product\'s unique features in a separate tab.', 'woocommerce-product-attachment'); ?></li>
										</ul>
									</div>
								</div>
							</div>		
						</div>
					</div>
				</div>
			</div>
			<div class="feature-box">
				<h3><?php esc_html_e('Custom Icons', 'woocommerce-product-attachment'); ?></h3>
				<span><i class="fa fa-paperclip"></i></span>
				<p><?php esc_html_e('Add a touch of personalization to your attachments by choosing custom icons. Select from a range of default icons or upload your custom icons.', 'woocommerce-product-attachment'); ?></p>
				<div class="feature-explanation-popup-main">
					<div class="feature-explanation-popup-outer">
						<div class="feature-explanation-popup-inner">
							<div class="feature-explanation-popup">
								<span class="dashicons dashicons-no-alt popup-close-btn" title="<?php esc_attr_e('Close', 'woocommerce-product-attachment'); ?>"></span>
								<div class="popup-body-content">
									<div class="feature-image">
										<img src="<?php echo esc_url(WCPOA_PLUGIN_URL . 'admin/images/pro-features-img/feature-box-five-img.png'); ?>" alt="<?php echo esc_attr('Custom Icons', 'woocommerce-product-attachment'); ?>">
									</div>
									<div class="feature-content">
										<p><?php esc_html_e('Personalize your attachments with custom icons. Choose from a variety of default icons or upload your own to add a unique touch to your product pages.', 'woocommerce-product-attachment'); ?></p>
										<ul>
											<li><?php esc_html_e('Use a shopping bag icon for product manuals to indicate downloadable documents.', 'woocommerce-product-attachment'); ?></li>
											<li><?php esc_html_e('Upload your brand logo as a custom icon to add a professional touch to all attachments.', 'woocommerce-product-attachment'); ?></li>
										</ul>
									</div>
								</div>
							</div>		
						</div>
					</div>
				</div>
			</div>
			<div class="feature-box">
				<h3><?php esc_html_e('User Attachments', 'woocommerce-product-attachment'); ?></h3>
				<span><i class="fa fa-user"></i></span>
				<p><?php esc_html_e('Enable users to upload files during checkout, allowing them to add screenshots, pictures, or important documents like licenses or prescriptions.', 'woocommerce-product-attachment'); ?></p>
				<div class="feature-explanation-popup-main">
					<div class="feature-explanation-popup-outer">
						<div class="feature-explanation-popup-inner">
							<div class="feature-explanation-popup">
								<span class="dashicons dashicons-no-alt popup-close-btn" title="<?php esc_attr_e('Close', 'woocommerce-product-attachment'); ?>"></span>
								<div class="popup-body-content">
									<div class="feature-image">
										<img src="<?php echo esc_url(WCPOA_PLUGIN_URL . 'admin/images/pro-features-img/feature-box-six-img.png'); ?>" alt="<?php echo esc_attr('User Attachments', 'woocommerce-product-attachment'); ?>">
									</div>
									<div class="feature-content">
										<p><?php esc_html_e('Empower your customers to upload files during checkout, making it convenient for them to include screenshots, images, or essential documents such as licenses and prescriptions.', 'woocommerce-product-attachment'); ?></p>
										<ul>
											<li><?php esc_html_e('Allow customers to upload images of custom design preferences when ordering personalized products.', 'woocommerce-product-attachment'); ?></li>
											<li><?php esc_html_e('Allow customers to attach proof of eligibility for discounts or special offers during checkout.', 'woocommerce-product-attachment'); ?></li>
										</ul>
									</div>
								</div>
							</div>		
						</div>
					</div>
				</div>
			</div>
			<div class="feature-box">
				<h3><?php esc_html_e('Order Attachments', 'woocommerce-product-attachment'); ?></h3>
				<span><i class="fa fa-cart-shopping"></i></span>
				<p><?php esc_html_e('Admin can upload attachments visible to customers in order emails. You can include crucial documents or discount offers upon purchase completion.', 'woocommerce-product-attachment'); ?></p>
				<div class="feature-explanation-popup-main">
					<div class="feature-explanation-popup-outer">
						<div class="feature-explanation-popup-inner">
							<div class="feature-explanation-popup">
								<span class="dashicons dashicons-no-alt popup-close-btn" title="<?php esc_attr_e('Close', 'woocommerce-product-attachment'); ?>"></span>
								<div class="popup-body-content">
									<div class="feature-image">
										<img src="<?php echo esc_url(WCPOA_PLUGIN_URL . 'admin/images/pro-features-img/feature-box-seven-img.png'); ?>" alt="<?php echo esc_attr('Order Attachments', 'woocommerce-product-attachment'); ?>">
									</div>
									<div class="feature-content">
										<p><?php esc_html_e('Enhance order communication by attaching important documents or exclusive offers to order completion emails.', 'woocommerce-product-attachment'); ?></p>
										<p><?php esc_html_e('Admins can upload attachments that customers can access upon purchase completion.', 'woocommerce-product-attachment'); ?></p>
										<ul>
											<li><?php esc_html_e('Send a thank-you note and a discount coupon code as an attachment to encourage repeat purchases.', 'woocommerce-product-attachment'); ?></li>
											<li><?php esc_html_e('Include warranty information and product care instructions as attachments in order emails.', 'woocommerce-product-attachment'); ?></li>
										</ul>
									</div>
								</div>
							</div>		
						</div>
					</div>
				</div>
			</div>
			<div class="feature-box">
				<h3><?php esc_html_e('Customized Email Attachments', 'woocommerce-product-attachment'); ?></h3>
				<span><i class="fa fa-envelope-open-text"></i></span>
				<p><?php esc_html_e('Effortlessly attach files to specific status-based emails, providing customers with streamlined visibility and relevant information based on their order status.', 'woocommerce-product-attachment'); ?></p>
				<div class="feature-explanation-popup-main">
					<div class="feature-explanation-popup-outer">
						<div class="feature-explanation-popup-inner">
							<div class="feature-explanation-popup">
								<span class="dashicons dashicons-no-alt popup-close-btn" title="<?php esc_attr_e('Close', 'woocommerce-product-attachment'); ?>"></span>
								<div class="popup-body-content">
									<div class="feature-image">
										<img src="<?php echo esc_url(WCPOA_PLUGIN_URL . 'admin/images/pro-features-img/feature-box-eight-img.png'); ?>" alt="<?php echo esc_attr('Customized Email Attachments', 'woocommerce-product-attachment'); ?>">
									</div>
									<div class="feature-content">
										<p><?php esc_html_e('Enhance order transparency and simplify customer communication by providing relevant information, such as invoices or shipping details, based on their order status.', 'woocommerce-product-attachment'); ?></p>
										<ul>
											<li><?php esc_html_e('Attach order invoices to "Order Complete" emails, allowing customers to review and track their purchases conveniently.', 'woocommerce-product-attachment'); ?></li>
											<li><?php esc_html_e('Send order confirmation emails with attached product manuals to give customers essential information upon purchase.', 'woocommerce-product-attachment'); ?></li>
										</ul>
									</div>
								</div>
							</div>		
						</div>
					</div>
				</div>
			</div>
			<div class="feature-box">
				<h3><?php esc_html_e('Attachments As Tab', 'woocommerce-product-attachment'); ?></h3>
				<span><i class="fa fa-diagram-next"></i></span>
				<p><?php esc_html_e('Enable the display of attachments in the download tab of your customers\' store accounts, providing easy access for multiple viewings.', 'woocommerce-product-attachment'); ?></p>
				<div class="feature-explanation-popup-main">
					<div class="feature-explanation-popup-outer">
						<div class="feature-explanation-popup-inner">
							<div class="feature-explanation-popup">
								<span class="dashicons dashicons-no-alt popup-close-btn" title="<?php esc_attr_e('Close', 'woocommerce-product-attachment'); ?>"></span>
								<div class="popup-body-content">
									<div class="feature-image">
										<img src="<?php echo esc_url(WCPOA_PLUGIN_URL . 'admin/images/pro-features-img/feature-box-nine-img.png'); ?>" alt="<?php echo esc_attr('Attachments As Tab', 'woocommerce-product-attachment'); ?>">
									</div>
									<div class="feature-content">
										<p><?php esc_html_e('Enhance customer convenience by displaying attachments in the download tab of their store accounts.', 'woocommerce-product-attachment'); ?></p>
										<p><?php esc_html_e('Allow easy access to essential files, such as user manuals or product warranties.', 'woocommerce-product-attachment'); ?></p>
										<ul>
											<li><?php esc_html_e('Allow customers to access product user guides and warranties from the download tab for future reference.', 'woocommerce-product-attachment'); ?></li>
											<li><?php esc_html_e('Enable quick access to digital certificates and licenses for customers in the download tab.', 'woocommerce-product-attachment'); ?></li>
										</ul>
									</div>
								</div>
							</div>		
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="upgrade-to-premium-btn">
		<a href="<?php echo esc_url('https://bit.ly/3q8myEZ') ?>" target="_blank" class="button button-primary"><?php esc_html_e('Upgrade to Premium', 'woocommerce-product-attachment'); ?><svg id="Group_52548" data-name="Group 52548" xmlns="http://www.w3.org/2000/svg" width="22" height="20" viewBox="0 0 27.263 24.368"><path id="Path_199491" data-name="Path 199491" d="M333.833,428.628a1.091,1.091,0,0,1-1.092,1.092H316.758a1.092,1.092,0,1,1,0-2.183h15.984a1.091,1.091,0,0,1,1.091,1.092Z" transform="translate(-311.117 -405.352)" fill="#fff"></path><path id="Path_199492" data-name="Path 199492" d="M312.276,284.423h0a1.089,1.089,0,0,0-1.213-.056l-6.684,4.047-4.341-7.668a1.093,1.093,0,0,0-1.9,0l-4.341,7.668-6.684-4.047a1.091,1.091,0,0,0-1.623,1.2l3.366,13.365a1.091,1.091,0,0,0,1.058.825h18.349a1.09,1.09,0,0,0,1.058-.825l3.365-13.365A1.088,1.088,0,0,0,312.276,284.423Zm-4.864,13.151H290.764l-2.509-9.964,5.373,3.253a1.092,1.092,0,0,0,1.515-.4l3.944-6.969,3.945,6.968a1.092,1.092,0,0,0,1.515.4l5.373-3.253Z" transform="translate(-285.455 -280.192)" fill="#fff"></path></svg></a>
	</div>
</div>
<?php 
