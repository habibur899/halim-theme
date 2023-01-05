<?php
/* Template Name: Services */
get_header();
?>
<?php get_template_part( '/template-parts/breadcumb' ) ?>

    <!-- Services Area Start -->
    <section class="services-area pt-100 pb-50" id="services">
        <div class="container">
            <div class="row">
				<?php
				$service_args  = array(
					'post_type'      => 'service',
					'post_status'    => 'publish',
					'posts_per_page' => 6
				);
				$service_query = new WP_Query( $service_args );
				while ( $service_query->have_posts() ) {
					$service_query->the_post();

					?>
                    <div class="col-lg-4 col-md-6">
                        <!-- Single Service -->
                        <div class="single-service">
                            <i class="<?php esc_attr( the_field( 'icon' ) ) ?>"></i>
                            <h4><?php esc_html( the_title() ) ?></h4>
                            <p><?php the_content(); ?></p>
                        </div>
                    </div>
					<?php
				}
				wp_reset_query();
				?>

            </div>
        </div>
    </section>
    <!-- Services Area End -->

<?php
get_footer();