<?php
/* Template Name: Gallery */
get_header();
?>
<?php get_template_part( '/template-parts/breadcumb' ) ?>

    <section class="gallery-area pt-100 pb-100">
        <div class="container">
            <div class="row">
				<?php
				$args  = array(
					'post_type'      => 'halim-gallery',
					'posts_per_page' => 9,
					'post_status'    => 'publish'
				);
				$query = new WP_Query( $args );
				while ( $query->have_posts() ) {
					$query->the_post();
					?>
                    <div class="col-xl-4">
                        <div class="single-gallery">
                            <img src="<?php echo esc_url( get_the_post_thumbnail_url() ) ?>" alt="">
                            <div class="gallery-hover">
                                <div class="gallery-content">
                                    <h3><a href="<?php echo esc_url( get_the_post_thumbnail_url() ) ?>" class="gallery"><i
                                                    class="fa fa-plus"></i><?php the_title() ?></a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
				<?php } ?>
            </div>
        </div>
    </section>

<?php
get_footer();