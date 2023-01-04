<?php get_header() ?>
<?php get_template_part( '/template-parts/breadcumb' ) ?>

    <section class="portfolio-single pt-100 pb-100">
        <div class="container">
            <div class="row">
                <div class="col-xl-8">
                    <h2><?php the_title() ?></h2>
					<?php the_post_thumbnail(); ?>
                    <p><?php the_content(); ?></p>
                    <div class="row">
                        <div class="col-xl-12">
                            <h4><?php esc_html__( the_field( 'project_gallery_title' ), 'halim' ) ?></h4>
                        </div>
						<?php
						$images = get_field( 'project_gallery' );
						foreach ( $images as $image ) {
							?>
                            <div class="col-xl-4">
                                <div class="project-gallery">
                                    <img src="<?php echo esc_url( $image ) ?>"
                                         alt="">
                                </div>
                            </div>
						<?php } ?>

                    </div>
                    <br><br>
                    <div class="row">
                        <div class="col-xl-12">
                            <h4><?php esc_html__( the_field( 'project_overview_title' ), 'halim' ) ?></h4>
							<?php the_field( 'project_video' ); ?>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="portfolio-sidebar">
                        <h4><?php esc_html__( the_field( 'technology_used_title' ), 'halim' ) ?></h4>
                        <ul>
							<?php
							$tecns = get_field( 'technology_list' );
							foreach ( $tecns as $tecno ) {
								?>
                                <li>
                                    <i class="fa fa-arrow-right"></i> <?php echo esc_html__( $tecno['technology'], 'halim' ) ?>
                                </li>
								<?php
							}
							?>
                        </ul>
                    </div>
                    <div class="portfolio-sidebar">
                        <h4><?php esc_html__( the_field( 'project_features_title' ), 'halim' ) ?></h4>
                        <ul>
							<?php
							$features = get_field( 'features_list' );
							foreach ( $features as $feature ) {
								?>
                                <li>
                                    <i class="fa fa-arrow-right"></i> <?php echo esc_html__( $feature['features'], 'halim' ) ?>
                                </li>
							<?php } ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php get_footer() ?>