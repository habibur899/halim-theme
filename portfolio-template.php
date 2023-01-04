<?php
/* Template Name: Portfolio */
get_header();
?>
<?php get_template_part( '/template-parts/breadcumb' ) ?>

    <!-- projectss Area Start -->
    <section class="projects-area pb-100 pt-100" id="projects">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="portfolio-menu mb-40 text-center">
                        <button class="active" data-filter="*"><?php echo esc_html__( 'ALL', 'halim' ) ?></button>
						<?php
						$all_cats = get_terms( 'halim-portfolio-cat' );
						foreach ( $all_cats as $all_cat ) {
							?>
                            <button data-filter=".<?php echo esc_attr( $all_cat->slug ) ?>"
                                    class=""><?php echo esc_html__( $all_cat->name, 'halim' ) ?></button>
							<?php

						}
						?>
                    </div>
                </div>
            </div>
            <div class="row grid no-gutters">

				<?php
				$portfolios_args = array(
					'post_type'      => 'halim-portfolio',
					'posts_per_page' => 6,
					'post_status'    => 'publish'
				);
				$all_portfolio   = new WP_Query( $portfolios_args );
				while ( $all_portfolio->have_posts() ) {
					$all_portfolio->the_post();

					?>
                    <div class="col-md-4 grid-item <?php
					$link_cats = get_the_terms( get_the_ID(), 'halim-portfolio-cat' );
					foreach ( $link_cats as $link_cat ) {
						echo $link_cat->slug . ' ';
					}
					?>">
                        <div class="single-portfolio">
							<?php the_post_thumbnail(); ?>
                            <div class="portfolio-hover">
                                <div class="portfolio-content">
                                    <h3><a href="<?php esc_url( the_permalink() ) ?>" class=""><i
                                                    class="fa fa-link"></i><?php the_title() ?>
                                            <span><?php the_field( 'designation' ) ?></span></a>
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>

				<?php } ?>
            </div>
        </div>
    </section>
    <!-- projectss Area End -->

<?php
get_footer();