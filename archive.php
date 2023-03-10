<?php get_header() ?>
    <section class="breadcumb-area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="breadcumb">

                        <h4><?php the_archive_title(); ?></h4>
                        <ul>
                            <li>
                                <a href="<?php echo esc_url( site_url() ) ?>"></a><?php echo esc_html__( 'Home', 'halim' ) ?>
                            </li>
                            /
                            <li><?php the_archive_title(); ?></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="blog-area pb-100 pt-100" id="blog">
        <div class="container">
            <div class="row">

				<?php
				if ( have_posts() ) {
					while ( have_posts() ) {
						the_post();

						?>
                        <div class="col-md-4">
                            <div class="single-blog">
								<?php the_post_thumbnail(); ?>
                                <div class="post-content">
                                    <div class="post-title">
                                        <h4><a href="<?php esc_url( the_permalink() ) ?>"><?php the_title() ?></a></h4>
                                    </div>
                                    <div class="pots-meta">
                                        <ul>
                                            <li>
												<?php echo get_the_date( 'j F Y' ) ?>
                                            </li>
                                            <li>
												<?php the_category( ', ' ); ?>
                                            </li>
                                            <li>
												<?php the_author_posts_link(); ?>
                                            </li>
                                        </ul>
                                    </div>
                                    <p><?php echo wp_kses_post( wp_trim_words( get_the_content(), 30, null ) ) ?></p>
                                    <a href="<?php esc_url( the_permalink() ) ?>"
                                       class="box-btn"><?php echo esc_html__( 'read more ', 'halim' ) ?><i
                                                class="fa fa-angle-double-right"></i></a>
                                </div>
                            </div>
                        </div>
						<?php
					}
				}

				?>

            </div>
        </div>
    </section>
    <!-- Latest News Area End -->

<?php get_footer() ?>