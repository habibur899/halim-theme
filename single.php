<?php get_header() ?>
<?php get_template_part( '/template-parts/breadcumb' ) ?>

    <section class="blog-single pt-100 pb-100">
        <div class="container">
            <div class="row">
				<?php
				while ( have_posts() ) {
					the_post();

					?>
                    <div class="col-xl-<?php echo is_active_sidebar( 'blog-sidebar' ) ? '8' : '12'; ?>">
                        <h2><?php esc_html( the_title() ) ?></h2>
						<?php the_post_thumbnail(); ?>
                        <p><?php the_content(); ?></p>
                        <div class="tags">
                            <li><?php the_tags( __( 'Tags: ', 'halim' ), ' ', null ); ?></li>
                        </div>
						<?php if ( comments_open() ) {
							comments_template();
						} ?>
                    </div>
					<?php
				}
				?>

				<?php
				if ( is_active_sidebar( 'blog-sidebar' ) ) {
					echo '<div class="col-xl-4">';
					dynamic_sidebar( 'blog-sidebar' );
					echo '</div>';
				}
				?>

            </div>
        </div>
    </section>


<?php get_footer() ?>