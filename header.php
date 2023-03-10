<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<section class="header-top">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <div class="header-left">
					<?php if ( get_field( 'email', 'option' ) ) { ?>
                        <a href="mailto:<?php the_field( 'email', 'option' ); ?>"><i
                                    class="fa fa-envelope"></i> <?php the_field( 'email', 'option' ); ?></a>
					<?php } ?>
					<?php if ( get_field( 'phone', 'option' ) ) { ?>
                        <a href="tel:<?php the_field( 'phone', 'option' ); ?>"><i
                                    class="fa fa-phone"></i> <?php the_field( 'phone', 'option' ); ?></a>
					<?php } ?>
                </div>
            </div>
            <div class="col-md-6 col-sm-12 text-right">
                <div class="header-social">
					<?php
					$social_icons = get_field( 'header_social', 'option' );

					foreach ( $social_icons as $social_icon ) {
						?>
                        <a href="<?php echo esc_url( $social_icon['link'] ) ?>"><i
                                    class="<?php echo esc_attr( $social_icon['icon'] ); ?>"></i></a>
						<?php
					}
					?>
                </div>

            </div>
        </div>
    </div>
</section>
<!-- Header Area Start -->
<header class="header header-fixed">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <nav class="navbar navbar-expand-md navbar-light">
					<?php
					$custom_logo_id = get_theme_mod( 'custom_logo' );
					$logo           = wp_get_attachment_image_src( $custom_logo_id, 'full' );
					if ( has_custom_logo() ) {
						echo '<a href="' . site_url() . '"><img src="' . esc_url( $logo[0] ) . '" alt="' . get_bloginfo( 'name' ) . '"></a>';
					} else {
						echo '<a href="' . site_url() . '" class="navbar-brand">' . get_bloginfo( 'name' ) . '</a>';
					}
					?>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
					<?php wp_nav_menu( array(
						'container'       => 'div',
						'container_class' => 'collapse navbar-collapse ml-auto mainmenu',
						'container_id'    => 'navbarNav',
						'menu_class'      => 'menu navbar-nav ml-auto',
						'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
						'theme_location'  => 'main-menu',
					) ) ?>
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- Header Area Start -->