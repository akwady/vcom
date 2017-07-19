<div class="col-md-3 col-sm-3 col-xs-12" style="float:right;">
    <div class="sidebal-right">
        <h4>dự án nổi bật</h4>
    </div>
    <div id="sidebal-right-slider" class="owl-carousel owl-theme">
        <?php
            $list = array(
                'post_type' => 'post',
                'category_name' => 'du-an-noi-bat'
            );
            $query = new WP_Query($list);
            while($query->have_posts()) : $query->the_post()
        ?>
        <div class="item">
            <div class="sidebal-right-slider-post">
                <div class="sidebal-right-slider-img">
                    <?php the_post_thumbnail() ?>
                </div>
                <div class="sidebal-right-slider-title">
                    <a href=""><?php the_title() ?></a>
                    <p>
                        <i class="fa fa-clock-o" aria-hidden="true"></i>
                        <?php echo get_the_date() ?>
                    </p>
                </div>
            </div>
        </div>
        <?php endwhile ?>
    </div>
    <div class="sidebal-right-post-all">
        <?php
            $list = array(
                'post_type' => 'post',
                'category_name' => 'du-an-noi-bat'
            );
            $query = new WP_Query($list);
            while($query->have_posts()) : $query->the_post()
        ?>
        <div class="sidebal-right-post-all-for">
            <div class="col-md-6 col-sm-6 col-xs-6">
                <div class="sidebal-right-post-all-img">
                    <?php the_post_thumbnail() ?>
                </div>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-6">
                <div class="sidebal-right-post-all-title width_1200">
                    <p>
                        <a href="<?php the_permalink() ?>" class="text_transform">
                            <?php echo catchuoi(get_the_title() ,30) ?>
                        </a>
                    </p
                    <span> <i class="fa fa-clock-o" aria-hidden="true"></i></span>
                    <span><?php echo get_the_date()  ?></span>
                </div>

            </div>
        </div>
        <?php endwhile ?>

    </div>
    <div class="sidebal-right-banner">
        <?php if(get_field('banner' , 'option')) : ?>
        <img src="<?php echo get_field('banner' , 'option')  ?>" alt="">
        <?php endif ?>
        <?php if(get_field('banner2' , 'option')) : ?>
            <img src="<?php echo get_field('banner2' , 'option')  ?>" alt="">
        <?php endif ?>
    </div>
</div>

