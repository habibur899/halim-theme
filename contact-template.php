<?php
/* Template Name: Contact */
get_header();
?>
<?php get_template_part( '/template-parts/breadcumb' ) ?>

    <!-- Contact Us Area End -->
    <section class="contact-area pb-100 pt-100" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-10 mx-auto">
                    <div class="row text-center">
						<?php
						$conatacts = get_field( 'contact_info', 'option' );
						if ( $conatacts ) {
							foreach ( $conatacts as $contact ) {
								?>
                                <div class="col-md-4">
                                    <div class="contact-address">
                                        <i class="fa <?php echo esc_attr( $contact['icon'] ); ?>"></i>
                                        <h4><?php echo esc_html__( $contact['title'], 'halim' ) ?>
                                            <span><?php echo esc_html__( $contact['sub_title'], 'halim' ) ?></span></h4>
                                    </div>
                                </div>
							<?php }
						} ?>
                    </div>
                    <div class="row">
                        <div class="col-md-7">
                            <div class="contact-form">
								<?php
								$contact = get_field( 'contact_form_shortcode', 'option' );
								if ( $contact ) {
									echo do_shortcode( $contact );
								}
								?>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="google-map">
								<?php
								$map = get_field( 'location', 'option' );
								if ( $map ) {
									echo $map;
								}
								?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Us Area End -->

<?php
get_footer();