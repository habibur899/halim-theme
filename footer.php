<!-- Footer Area End -->
<footer class="footer-area pt-50 pb-50">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="single-footer footer-logo">
					<?php
					if ( is_active_sidebar( 'footer-1' ) ) {
						dynamic_sidebar( 'footer-1' );
					}
					?>
                </div>
            </div>
            <div class="col-lg-2 col-md-6">
                <div class="single-footer">
					<?php
					if ( is_active_sidebar( 'footer-2' ) ) {
						dynamic_sidebar( 'footer-2' );
					}
					?>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-footer">

					<?php
					if ( is_active_sidebar( 'footer-3' ) ) {
						dynamic_sidebar( 'footer-3' );
					}
					?>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="single-footer contact-box">
					<?php
					$footer_contact_title = get_field( 'footer_contact_title', 'option' );
					?>
                    <h4><?php echo esc_html__( $footer_contact_title, 'halim' ) ?></h4>
                    <ul>
						<?php
						$all_contacts = get_field( 'footer_contact', 'option' );
						foreach ( $all_contacts as $all_contact ) {
							?>
                            <li>
                                <i class="fa <?php echo esc_attr( $all_contact['icon'] ) ?>"></i><?php echo esc_html__( $all_contact['label'], 'halim' ) ?>
                            </li>
							<?php
						}
						?>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row copyright">
            <div class="col-md-6">
                <p><?php echo esc_html__( get_field( 'copyright', 'option' ), 'halim' ) ?></p>
            </div>
            <div class="col-md-6 text-right">
                <ul>
					<?php
					$social_icons = get_field( 'social', 'option' );
					foreach ( $social_icons as $social_icon ) {
						?>
                        <li><a href="<?php echo esc_url( $social_icon['link'] ) ?>"><i
                                        class="<?php echo esc_attr( $social_icon['icon'] ); ?>"></i></a></li>
						<?php
					}
					?>
                </ul>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>