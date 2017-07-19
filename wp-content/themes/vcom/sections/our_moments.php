<section id="our_moments">
    <div class="container-fluid">
        <div class="row">
            <div class="all_title">
                <h3><?php echo get_field('our_moments_title' , 'option') ?>
                </h3>
                <?php echo get_field('our_moments_text' , 'option') ?>

            </div>
            <div class="our_moments_tag">
                <ul class="nav nav-tabs" role="tablist">
                    <?php
                    $product = get_terms('category-projects');
                    foreach($product as $value) : ?>
                        <?php if($value->term_id == 25 || $value->term_id == 27) : ?>
                    <li role="presentation">
                        <a href="#<?php echo $value->slug ?>"   data-toggle="tab">
                            <?php echo $value->name ?>
                        </a>
                    </li>
                    <?php endif; endforeach ?>
                </ul>
                <div class="tab-content">
                    <?php
                    $product2 = get_terms('category-projects');
                    foreach($product2 as $value2):
                        if($value2->term_id == 25 || $value2->term_id == 27) :
                    ?>

                        <div  class="tab-pane fade in" id="<?php echo $value2->slug ?>">

                        <div class="gallery_all">
                        <?php
                        $terms = $value2->slug;
                        $list = array(
                            'post_type' => 'du-an',
                            'posts_per_page' => '16',
                            "tax_query" =>array(
                                array(
                                    'taxonomy' => 'category-projects',
                                    'field'    => 'slug',
                                    'terms'    => $terms,
                                ),
                            ),
                        );
                        $query = new WP_Query($list);
                        if($query->have_posts()):
                            while($query->have_posts()):
                                $query->the_post();
                                ?>
                            <div class="col-md-4 col-sm-4 col-xs-6">



                                <div class="gallery_img">
                                    <?php the_post_thumbnail() ?>

                                    <div class="gallery_hover">
                                        <div class="gallery_background"></div>

                                        <div class="gallery_text">
                                            <div class="gallery_text_title">
                                                <h3><?php the_title() ?></h3>
                                            </div>
                                            <div class="gallery_text_text">
                                                <p><?php the_excerpt() ?></p>
                                            </div>
                                            <div class="gallery_buttom_view">
                                                <a href="<?php the_permalink()?>">view detail</a>
                                            </div>
                                        </div>
                                    </div>

                                </div>


                            </div>
                            <?php  endwhile;endif; ?>
                        </div>
                    </div>

                    <?php endif; endforeach; ?>

                    <div class="our_moments_view_more">
                        <a href="">view more</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>