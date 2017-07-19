<section id="slider_header">
    <div class="container-fluid">
        <div class="row">
            <div class="slider_main">
                <?php while(have_rows('slider_img' , 'option')) : the_row() ?>

                    <div class="slider_img">
                        <div class="slider_background"></div>
                        <div
                            style="
                                background: url(<?php echo get_sub_field('image' , 'option') ?>);
                                background-size: cover;
                                height: 100%;
                                background-position: center bottom;
                                ">

                        </div>
                    </div>
                <?php endwhile;?>
            </div>
            <div class="logo_slider">
                <img src="<?php echo get_field('logo_slider' , 'option') ?>" alt="">
            </div>
        </div>
    </div>
</section>