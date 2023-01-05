<section class="breadcumb-area">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="breadcumb">

                    <h4><?php echo esc_html( get_the_title() ) ?></h4>
                    <ul>
                        <li>
                            <a href="<?php echo esc_url( site_url() ) ?>"></a><?php echo esc_html__( 'Home', 'halim' ) ?>
                        </li>
                        /
                        <li><?php echo esc_html( get_the_title() ) ?></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>