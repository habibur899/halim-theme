<!-- CTA Area Start -->
<section class="cta">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
				<?php
				$cta_title       = get_field( 'title', 'option' );
				$cta_sub_title   = get_field( 'sub_title', 'option' );
				$cta_button_text = get_field( 'button_text', 'option' );
				$cta_link        = get_field( 'link', 'option' );
				?>
                <h4><?php echo esc_html( $cta_title ) ?>

                    <span><?php echo esc_html( $cta_sub_title ) ?></span>
                </h4>
            </div>
            <div class="col-md-6 text-center">
                <a href="<?php echo esc_url( $cta_link ) ?>"
                   class="box-btn"><?php echo esc_html( $cta_button_text ) ?><i
                            class="fa fa-angle-double-right"></i></a>
            </div>
        </div>
    </div>
</section>