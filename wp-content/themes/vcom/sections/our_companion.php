<section id="our_companion">
    <div class="container">
        <div class="row">
            <div class="all_title">
                <h3>
                    <?php echo get_field('our_companion_title' , 'option') ?>
                </h3>
                <?php echo get_field('our_companion_text' , 'option') ?>
            </div>
            <div class="our_companion_all">
                <?php while(have_rows('logo_brand' , 'option')) : the_row() ?>
                <div class="col-md-2 col-sm-2 col-xs-2">
                    <div class="logo_brand">
                        <a href="<?php echo get_sub_field('link' , 'option') ?>">
                            <img src="<?php echo get_sub_field('image' , 'option') ?>" alt="">
                        </a>
                    </div>
                </div>
                <?php endwhile; ?>
            </div>
            <div class="our_moments_view_more">
                <a href="<?php echo get_home_url() . '/our-companion'?>">view more</a>
            </div>
        </div>
    </div>
</section>