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
                     style="background-image:url('<?php echo get_template_directory_uri() ?>/assets/img/slider/slide-2.jpg')">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="slide-table">
                                    <div class="slide-tablecell">
                                        <h4><?php the_field( 'subtitle' ); ?></h4>
                                        <h2><?php the_title() ?></h2>
                                        <p><?php the_content(); ?></p>

										<?php
										$link = get_field( 'button_url' );
										if ( $link ): ?>
                                            <a href="<?php echo esc_url( $link ); ?>"
                                               class="box-btn"><?php the_field( 'button_text' ); ?><i
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
                    <h3><span>who we are?</span> about us</h3>
                </div>
                <div class="col-md-6">
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry typesetting
                        industry.d </p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-7">
                    <div class="about">
                        <div class="page-title">
                            <h4>welcome to halim</h4>
                        </div>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry typesetting
                            industry </p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda distinctio maxime laborum
                            delectus aliquam ipsum itaque voluptatem non reiciendis aliquid totam facere, tempora iure
                            iusto
                            adipisci doloremque in, amet, alias nostrum. Explicabo reprehenderit.</p>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry typesetting
                            industry </p>
                        <a href="#" class="box-btn">read more <i class="fa fa-angle-double-right"></i></a>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="single_about">
                        <i class="fa fa-laptop"></i>
                        <h4>our mission</h4>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry typesetting
                            industry </p>
                    </div>
                    <div class="single_about">
                        <i class="fa fa-user"></i>
                        <h4>our vission</h4>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry typesetting
                            industry </p>
                    </div>
                    <div class="single_about">
                        <i class="fa fa-pencil"></i>
                        <h4>our history</h4>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry typesetting
                            industry </p>
                    </div>
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
                            <h4>faq</h4>
                        </div>
                        <div class="accordion" id="accordionExample">
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link" type="button" data-toggle="collapse"
                                                data-target="#collapseOne" aria-expanded="true"
                                                aria-controls="collapseOne">
                                            Lorem Ipsum is simply
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                     data-parent="#accordionExample">
                                    <div class="card-body">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                        richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor
                                        brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor,
                                        sunt
                                        aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch
                                        et.
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingTwo">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                                data-target="#collapseTwo" aria-expanded="false"
                                                aria-controls="collapseTwo">
                                            Lorem Ipsum is simply
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                     data-parent="#accordionExample">
                                    <div class="card-body">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                        richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor
                                        brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor,
                                        sunt
                                        aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch
                                        et.
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingThree">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                                data-target="#collapseThree" aria-expanded="false"
                                                aria-controls="collapseThree">
                                            Lorem Ipsum is simply
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                     data-parent="#accordionExample">
                                    <div class="card-body">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                        richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor
                                        brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor,
                                        sunt
                                        aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch
                                        et.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="skills">
                        <div class="page-title">
                            <h4>our skills</h4>
                        </div>
                        <div class="single-skill">
                            <h4>html</h4>
                            <div class="progress-bar" role="progressbar" style="width: 90%;" aria-valuenow="25"
                                 aria-valuemin="0" aria-valuemax="100">90%
                            </div>
                        </div>
                        <div class="single-skill">
                            <h4>css</h4>
                            <div class="progress-bar" role="progressbar" style="width: 74%;" aria-valuenow="25"
                                 aria-valuemin="0" aria-valuemax="100">74%
                            </div>
                        </div>
                        <div class="single-skill">
                            <h4>photoshop</h4>
                            <div class="progress-bar" role="progressbar" style="width: 94%;" aria-valuenow="25"
                                 aria-valuemin="0" aria-valuemax="100">94%
                            </div>
                        </div>
                        <div class="single-skill">
                            <h4>wordpress</h4>
                            <div class="progress-bar" role="progressbar" style="width: 85%;" aria-valuenow="85"
                                 aria-valuemin="0" aria-valuemax="100">85%
                            </div>
                        </div>
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
                    <h3><span>who we are?</span> our services</h3>
                </div>
                <div class="col-md-6">
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry typesetting
                        industry.d </p>
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
                            <h4><?php the_title() ?></h4>
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
                                        class="counter"><?php the_field( 'number' ); ?></span><?php the_title() ?></h4>
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
                    <h3><span>who we are?</span> creative team</h3>
                </div>
                <div class="col-md-6">
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry typesetting
                        industry.d </p>
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
                                    <h4><?php the_field( 'name' ); ?><span><?php the_field( 'designation' ); ?></span>
                                    </h4>
                                    <ul>
										<?php
										if ( get_field( 'facebook_url' ) ) {
											?>
                                            <li><a href="<?php echo esc_url( get_field( 'facebook_url' ) ); ?>"><i
                                                            class="fa fa-facebook"></i></a></li>
											<?php
										}
										?>

										<?php
										if ( get_field( 'twitter_url' ) ) {
											?>
                                            <li><a href="<?php echo esc_url( get_field( 'twitter_url' ) ); ?>"><i
                                                            class="fa fa-twitter"></i></a></li>
											<?php
										}
										?>

										<?php
										if ( get_field( 'linkedin_url' ) ) {
											?>
                                            <li><a href="<?php echo esc_url( get_field( 'linkedin_url' ) ); ?>"><i
                                                            class="fa fa-linkedin"></i></a></li>
											<?php
										}
										?>

										<?php
										if ( get_field( 'instagram_url' ) ) {
											?>
                                            <li><a href="<?php echo esc_url( get_field( 'instagram_url' ) ); ?>"><i
                                                            class="fa fa-instagram"></i></a></li>
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
                    <h3><span>who we are?</span> what client say</h3>
                </div>
                <div class="col-md-6">
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry typesetting
                        industry.d </p>
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
                                <h4><?php the_title() ?><span><?php the_field( 'designation' ); ?></span></h4>
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
                    <h3><span>who we are?</span> latest news</h3>
                </div>
                <div class="col-md-6">
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry typesetting
                        industry.d </p>
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
                                    <h4><a href="<?php the_permalink(); ?>"><?php the_title() ?></a></h4>
                                </div>
                                <div class="pots-meta">
                                    <ul>
                                        <li><?php echo get_the_date('j F Y')?></li>
                                        <li><a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>"><?php the_author()?></a></li>
                                    </ul>
                                </div>
                                <p><?php the_content(); ?></p>
                                <a href="<?php the_permalink(); ?>"
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

    <!-- CTA Area Start -->
    <section class="cta">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h4>best solution for your business <span>the can be used on larger scale projectss as well as small scale projectss</span>
                    </h4>
                </div>
                <div class="col-md-6 text-center">
                    <a href="#" class="box-btn">contact us <i class="fa fa-angle-double-right"></i></a>
                </div>
            </div>
        </div>
    </section>
<?php
get_footer();
