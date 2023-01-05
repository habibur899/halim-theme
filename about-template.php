<?php
/* Template Name: About */
get_header();
?>
<?php get_template_part( '/template-parts/breadcumb' ) ?>


    <section class="about-area pt-100 pb-100" id="about">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div class="about">
                        <div class="page-title">
                            <h4><?php esc_html( the_field( 'about_title' ) ) ?></h4>
                        </div>
                        <p><?php the_content(); ?></p>
                    </div>
                </div>
                <div class="col-md-5">
					<?php
					$about_fearures = get_field( 'about_features' );
					foreach ( $about_fearures as $about_fearure ) {
						?>
                        <div class="single_about">
                            <i class="fa <?php echo esc_attr( $about_fearure['icon'] ) ?>"></i>
                            <h4><?php echo esc_html__( $about_fearure['title'], 'halim' ) ?></h4>
                            <p><?php echo esc_html__( $about_fearure['description'], 'halim' ) ?></p>
                        </div>
					<?php } ?>

                </div>
            </div>
        </div>
    </section>


<?php
get_footer();