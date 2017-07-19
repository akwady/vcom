<?php
    get_header();
    get_template_part('sections/menu_header');
?>
<section id="our_companion_page">
    <div class="container-fluid">
        <div class="row">
            <div class="our_companion_page_height">
                <div class="our_companion_page_bg">
                    <div>
                        <h1><?php echo get_field('page_our_companion_tilte' , 'option') ?>
                        </h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="all_title all_title_after">
                <?php $category_name = get_the_terms($post ,'category-projects'); ?>
                <?php foreach ($category_name as $name) : ?>
                <?php if($name->parent == 29) : ?>
                <h3><?php echo $name->name ?></h3>
                <?php endif; endforeach;?>
            </div>
            <div class="col-md-6 category_projects_img">
                <img src="<?php if (function_exists('z_taxonomy_image_url')) echo z_taxonomy_image_url(); ?>" />
            </div>

            <?php
            foreach($category_name as $value) :
            $GLOBALS['enhanced_category']->setup_ec_data($value->term_id);
            if($value->parent == 29) :
            ?>


            <div class="col-md-6 category_projects_content">
                <?php the_content() ?>
            </div>
            <?php endif; endforeach; ?>
        </div>
    </div>
</section>

<section id="category_projects_category">
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
                    $ss2 = get_queried_object()->term_id;
                    foreach($product as $value) : ?>
                        <?php if($value->parent == $ss2) : ?>

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
                    $ss2 = get_queried_object()->term_id;
                    foreach($product2 as $value2):

                        if($value2->parent == $ss2) :
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
                                                                <?php the_excerpt() ?>
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
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer() ?>
