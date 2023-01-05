<?php
/* Template Name: Home */
get_header();
?>
    <section class="slider-area" id="home">
        <div class="slider owl-carousel">

			<?php
			$args  = array(
				'post_type'      => 'slider',
				'post_status'    => 'publish',
				'posts_per_page' => 3
			);
			$query = new WP_Query( $args );
			while ( $query->have_posts() ) {
				$query->the_post();

				?>

                <div class="single-slide"
                     style="background-image:url('<?php the_post_thumbnail_url() ?>')">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="slide-table">
                                    <div class="slide-tablecell">
                                        <h4><?php esc_html( the_field( 'subtitle' ) ) ?></h4>
                                        <h2><?php esc_html( the_title() ) ?></h2>
                                        <p><?php the_content() ?></p>

										<?php
										$link = get_field( 'button_url' );
										if ( $link ): ?>
                                            <a href="<?php echo esc_url( $link ); ?>"
                                               class="box-btn"><?php esc_html( the_field( 'button_text' ) ) ?>
                                                <i
                                                        class="fa fa-angle-double-right"></i></a>
										<?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
				<?php
			}
			wp_reset_query();
			?>

        </div>
    </section>
    <!-- Slider Area Start -->
    <!-- About Area Start -->
    <section class="about-area pt-100 pb-100" id="about">
        <div class="container">
            <div class="row section-title">
                <div class="col-md-6 text-right">
					<?php
					$about_title = get_field( 'about_title', 'option' );

					?>
                    <h3>
                        <span><?php echo esc_html( $about_title['heading'] ) ?></span><?php echo esc_html( $about_title['sub_heading'] ) ?>
                    </h3>
                </div>
                <div class="col-md-6">
                    <p><?php echo esc_html( $about_title['description'] ) ?></p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-7">
                    <div class="about">
                        <div class="page-title">
							<?php
							$about_content = get_field( 'about_content', 'option' );
							?>
                            <h4><?php echo esc_html__( $about_content['title'], 'halim' ) ?></h4>
                        </div>
                        <p><?php echo esc_html__( $about_content['content'], 'halim' ) ?></p>
                        <a href="<?php echo esc_url( $about_content['link'], 'halim' ) ?>"
                           class="box-btn"><?php echo esc_html__( $about_content['button_text'], 'halim' ) ?><i
                                    class="fa fa-angle-double-right"></i></a>
                    </div>
                </div>
                <div class="col-md-5">

					<?php
					$about_features = get_field( 'about_features', 'option' );
					foreach ( $about_features as $about_feature ) {
						?>
                        <div class="single_about">
                            <i class="fa <?php echo esc_attr( $about_feature['icon'] ); ?>"></i>
                            <h4><?php echo esc_html__( $about_feature['title'], 'halim'); ?></h4>
                            <p><?php echo esc_html__( $about_feature['description'],'halim' ); ?></p>
                        </div>
					<?php } ?>

                </div>
            </div>
        </div>
    </section>
    <!-- About Area End -->
    <!-- Choose Area End -->
    <section class="choose">
        <div class="container">
            <div class="row pt-100 pb-100">
                <div class="col-md-6">
                    <div class="faq">
                        <div class="page-title">
							<?php
							$faq_title = get_field( 'faq_title', 'option' );
							?>
                            <h4><?php echo esc_html( $faq_title ) ?></h4>
                        </div>
                        <div class="accordion" id="accordionExample">

							<?php
							$faqs = get_field( 'faq', 'option' );
							$i    = 0;
							foreach ( $faqs as $faq ) {
								$i ++;

								?>
                                <div class="card">
                                    <div class="card-header" id="heading<?php echo esc_attr( $i ) ?>">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link " type="button" data-toggle="collapse"
                                                    data-target="#collapse<?php echo esc_attr( $i ) ?>"
                                                    aria-expanded="true"
                                                    aria-controls="collapse<?php echo esc_attr( $i ) ?>">
												<?php echo esc_html( $faq['title'] ) ?>
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="collapse<?php echo esc_attr( $i ) ?>"
                                         class="collapse <?php if ( $i == 1 ) {
										     echo esc_attr( 'show' );
									     } ?>" aria-labelledby="heading<?php echo esc_attr( $i ) ?>"
                                         data-parent="#accordionExample">
                                        <div class="card-body"><?php echo esc_html( $faq['description'] ) ?></div>
                                    </div>
                                </div>
							<?php } ?>

                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="skills">
                        <div class="page-title">
							<?php
							$skill_title = get_field( 'skill_title', 'option' );
							?>
                            <h4><?php echo esc_html( $skill_title ) ?></h4>
                        </div>

						<?php
						$single_skills = get_field( 'skill_options', 'option' );
						foreach ( $single_skills as $single_skill ) {
							?>
                            <div class="single-skill">
                                <h4><?php echo esc_html( $single_skill['title'] ) ?></h4>
                                <div class="progress-bar" role="progressbar"
                                     style="width: <?php echo esc_attr( $single_skill['percentage'] ) ?>%;"
                                     aria-valuenow="85"
                                     aria-valuemin="0"
                                     aria-valuemax="100"><?php echo esc_html( $single_skill['percentage'] ) ?>
                                    %
                                </div>
                            </div>
						<?php } ?>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Choose Area End -->
    <!-- Services Area Start -->
    <section class="services-area pt-100 pb-50" id="services">
        <div class="container">
            <div class="row section-title">
                <div class="col-md-6 text-right">
					<?php
					$service_title = get_field( 'service_title', 'option' );

					?>
                    <h3>
                        <span><?php echo esc_html( $service_title['heading'] ) ?></span><?php echo esc_html( $service_title['sub_heading'] ) ?>
                    </h3>
                </div>
                <div class="col-md-6">
                    <p><?php echo esc_html( $service_title['description'] ) ?></p>
                </div>
            </div>

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
                            <i class="<?php the_field( 'icon' ); ?>"></i>
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

    <!-- Counter Area End -->
    <section class="counter-area">
        <div class="container-fluid">
            <div class="row">
				<?php
				$counter_args  = array(
					'post_type'      => 'counter',
					'post_status'    => 'publish',
					'posts_per_page' => 4
				);
				$counter_query = new WP_Query( $counter_args );
				while ( $counter_query->have_posts() ) {
					$counter_query->the_post();
					?>
                    <div class="col-md-3">
                        <div class="single-counter">
                            <h4><i class="<?php the_field( 'icon' ); ?>"></i><span
                                        class="counter"><?php esc_html( the_field( 'number' ) ); ?></span><?php esc_html( the_title() ) ?>
                            </h4>
                        </div>
                    </div>

					<?php
				}
				wp_reset_query();
				?>

            </div>
        </div>
    </section>
    <!-- Counter Area End -->
    <!-- Team Area Start -->
    <section class="team-area pb-100 pt-100" id="team">
        <div class="container">
            <div class="row section-title">
                <div class="col-md-6 text-right">
					<?php
					$team_title = get_field( 'team_title', 'option' );

					?>
                    <h3>
                        <span><?php echo esc_html( $team_title['heading'] ) ?></span><?php echo esc_html( $team_title['sub_heading'] ) ?>
                    </h3>
                </div>
                <div class="col-md-6">
                    <p><?php echo esc_html( $team_title['description'] ) ?></p>
                </div>
            </div>
            <div class="row">
				<?php
				$team_args  = array(
					'post_type'      => 'team',
					'post_status'    => 'publish',
					'posts_per_page' => 3
				);
				$team_query = new WP_Query( $team_args );
				while ( $team_query->have_posts() ) {
					$team_query->the_post();

					?>
                    <div class="col-md-4">
                        <div class="single-team">
							<?php the_post_thumbnail(); ?>
                            <div class="team-hover">
                                <div class="team-content">
                                    <h4><?php esc_html( the_field( 'name' ) ) ?>
                                        <span><?php esc_html( the_field( 'designation' ) ) ?></span>
                                    </h4>
                                    <ul>
										<?php
										if ( get_field( 'facebook_url' ) ) {
											?>
                                            <li><a href="<?php echo esc_url( get_field( 'facebook_url' ) ); ?>"><i
                                                            class="fab fa-facebook-f"></i></a></li>
											<?php
										}
										?>

										<?php
										if ( get_field( 'twitter_url' ) ) {
											?>
                                            <li><a href="<?php echo esc_url( get_field( 'twitter_url' ) ); ?>"><i
                                                            class="fab fa-twitter"></i></a></li>
											<?php
										}
										?>

										<?php
										if ( get_field( 'linkedin_url' ) ) {
											?>
                                            <li><a href="<?php echo esc_url( get_field( 'linkedin_url' ) ); ?>"><i
                                                            class="fab fa-linkedin-in"></i></a></li>
											<?php
										}
										?>

										<?php
										if ( get_field( 'instagram_url' ) ) {
											?>
                                            <li><a href="<?php echo esc_url( get_field( 'instagram_url' ) ); ?>"><i
                                                            class="fab fa-instagram"></i></a></li>
											<?php
										}
										?>


                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
					<?php
				}
				wp_reset_query();
				?>

            </div>
        </div>
    </section>
    <!-- Team Area End -->

    <!-- Testimonials Area Start -->
    <section class="testimonial-area pb-100 pt-100" id="testimonials">
        <div class="container">
            <div class="row section-title white-section">
                <div class="col-md-6 text-right">
					<?php
					$client_title = get_field( 'client_title', 'option' );

					?>
                    <h3>
                        <span><?php echo esc_html( $client_title['heading'] ) ?></span><?php echo esc_html( $client_title['sub_heading'] ) ?>
                    </h3>
                </div>
                <div class="col-md-6">
                    <p><?php echo esc_html( $client_title['description'] ) ?></p>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="testimonials owl-carousel">

						<?php
						$client_args  = array(
							'post_type'      => 'client',
							'post_status'    => 'publish',
							'posts_per_page' => 5
						);
						$client_query = new WP_Query( $client_args );
						while ( $client_query->have_posts() ) {
							$client_query->the_post();

							?>
                            <div class="single-testimonial">
                                <div class="testi-img">
									<?php the_post_thumbnail(); ?>
                                </div>
                                <p><?php the_content(); ?></p>
                                <h4><?php esc_html( the_title() ) ?>
                                    <span><?php esc_html( the_field( 'designation' ) ); ?></span></h4>
                            </div>

							<?php
						}
						wp_reset_query();
						?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Testimonilas Area End -->
    <!-- Latest News Area Start -->
    <section class="blog-area pb-100 pt-100" id="blog">
        <div class="container">
            <div class="row section-title">
                <div class="col-md-6 text-right">
					<?php
					$blog_title = get_field( 'blog', 'option' );

					?>
                    <h3>
                        <span><?php echo esc_html( $blog_title['heading'] ) ?></span><?php echo esc_html( $blog_title['sub_heading'] ) ?>
                    </h3>
                </div>
                <div class="col-md-6">
                    <p><?php echo esc_html( $blog_title['description'] ) ?></p>
                </div>
            </div>
            <div class="row">
				<?php
				$post_que  = array(
					'post_type'      => 'post',
					'post_status'    => 'publish',
					'posts_per_page' => 3
				);
				$post_grid = new WP_Query( $post_que );
				while ( $post_grid->have_posts() ) {
					$post_grid->the_post();
					?>
                    <div class="col-md-4">
                        <div class="single-blog">
							<?php the_post_thumbnail(); ?>
                            <div class="post-content">
                                <div class="post-title">
                                    <h4>
                                        <a href="<?php esc_url( the_permalink() ) ?>"><?php esc_html( the_title() ) ?></a>
                                    </h4>
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
                                <p><?php echo wp_kses_post( wp_trim_words( get_the_content(), 30, ' ' ) ) ?></p>
                                <a href="<?php esc_url( the_permalink() ); ?>"
                                   class="box-btn"><?php echo esc_html__( 'read more', 'halim' ) ?> <i
                                            class="fa fa-angle-double-right"></i></a>
                            </div>
                        </div>
                    </div>
					<?php

				}
				wp_reset_query();
				?>
            </div>
        </div>
    </section>
    <!-- Latest News Area End -->

<?php
get_footer();
