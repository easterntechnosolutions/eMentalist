<?php
add_shortcode('email_template_header', 'email_template_header_function');
function email_template_header_function($atts)
{
    ob_start(); ?>
    <html <?php language_attributes(); ?>>
    <head>
			<meta http-equiv="Content-Type" content="text/html; charset=<?php bloginfo( 'charset' ); ?>" />
			<title><?php echo get_bloginfo( 'name', 'display' ); ?></title>
		</head>
		<body <?php echo is_rtl() ? 'rightmargin' : 'leftmargin'; ?>="0" marginwidth="0" topmargin="0" marginheight="0" offset="0">
			<div id="wrapper" dir="<?php echo is_rtl() ? 'rtl' : 'ltr'; ?>" style="background-color:#f7f7f7;margin:0;width:100%;padding:40px 0 0;-webkit-text-size-adjust:none;">
				<table border="0" cellpadding="0" cellspacing="0" height="100%" .="100%" style="margin: 0 auto;">
					<tr>
						<td align="center" valign="top">
							<div id="template_header_image" style="background-color: #fff;margin: 0 auto;width: 700px;padding: 20px 0;border-radius: 13px 13px 0 0;border-bottom: 2px solid #fe2424;">
								<?php $image = site_url(). "/wp-content/uploads/2024/08/logo_1e4aee1d095d211654f124d3d8bae72e_1x.png";  ?>
								<?php
									echo '<p style="margin-top:0; margin-bottom:0;"><img src="' . esc_url( $image  ) .' "' . get_bloginfo( 'name', 'display' ) . '" style="width: 25%;" /></p>';
								?>
							</div>
							<table border="0" cellpadding="0" cellspacing="0" width="600" id="template_container" style="background-color:#fff;box-shadow:0 1px 4px rgba(0,0,0,.1);border-radius:3px; font-size:1.24em;">
								<tr>
									<td align="center" valign="top">
										<!-- Body -->
										<table border="0" cellpadding="0" cellspacing="0" width="700" id="template_body">
											<tr>
												<td valign="top" id="body_content" >
													<!-- Content -->
													<table border="0" cellpadding="20" cellspacing="0" width="100%">
														<tr>
															<td valign="top">
																<div id="body_content_inner"><?php
																return ob_get_clean();
															}
															/* Email Templates - Exclude Woocommerce emails */
															add_shortcode( 'email_template_footer', 'email_template_footer_function' );
															function email_template_footer_function() {
																ob_start(); ?>
																</div>
															</td>
														</tr>
													</table>
													<!-- End Content -->
												</td>
											</tr>
										</table>
										<!-- End Body -->
									</td>
								</tr>
							</table>
						</td>
					</tr>
					<tr>
						<td align="center" valign="top" style="width: 100%;">
							<!-- Footer -->
							<table border="0" cellpadding="10" cellspacing="0" width="700" id="template_footer" style="background-color: #fe2424; width:100%; color: #FFF; margin-bottom: 40px; border-radius: 0 0 12px 12px; min-width: 500px;">
								<tr>
									<td valign="top">
										<table border="0" align="center" cellpadding="10" cellspacing="0" width="100%" style="text-align: center;">
											<tr align="center">
												<td valign="middle" id="credit" align="center" style="padding-bottom: 8px; display: block; text-align: center; ">
													<a target="_blank" href="<?php echo site_url(); ?>" style="font-weight:400;text-decoration:blink;color:#fff;font-size: 20px; text-align: center; ">eMentalist</a>
												</td>
											</tr>
										</table>
									</td>
								</tr>
							</table>
							<!-- End Footer -->
						</td>
					</tr>
				</table>
			</div>
		</body>
    </html>
    <?php
    return ob_get_clean();
}

