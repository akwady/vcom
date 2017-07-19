<?php
/**
 * template name: Our Companion
 */

get_header();
get_template_part('sections/menu_header');
?>
<section id="our_companion_page">
    <div class="container-fluid">
        <div class="row">
            <div class="our_companion_page_height">
                <div class="our_companion_page_bg">
                    <div>
                        <h1><?php echo get_field('page_our_companion_tilte', 'option') ?>
                        </h1>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="our_companion_page_project">
                <div class="our_companion_page_text">
                    <?php echo get_field('page_companion_text', 'option') ?>

                </div>
                <?php $project = get_terms('category-projects'); ?>





                <div class="our_companion_page_project_category">
                    <div class="our_companion_all_2">
                        <?php
                        foreach($project as $value) :
                        echo $GLOBALS['enhanced_category']->setup_ec_data($value->term_id);
                            if($value->parent == 29) :
                                pri

                        ?>
                        <div class="col-md-3 col-sm-3 col-xs-3">
                            <div class="logo_brand">
                                <a href="<?php echo get_home_url() . '/category-projects/' . $value->slug ?>">
                                    <img src="<?php echo get_field('category_projects_image' ,'category-projects_' . $value->term_id) ?>
                                    " alt="">
                                </a>
                            </div>
                        </div>
                        <?php endif; endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="clients_slider">
    <div class="container-fluid clients_slider_hide">
        <div class="row">
            <div class="all_title">
                <h3><?php echo get_field('page_clients_companion_title', 'option') ?></h3>
                <?php echo get_field('page_clients_companion_text', 'option') ?>
            </div>
            <div class="slider_our">
                <?php while (have_rows('slider_our', 'option')) : the_row() ?>
                    <div class="slider_our_bg">
                        <div class="slider_our_bg_img"
                             style="background: url('<?php echo get_sub_field('image', 'option') ?>');background-size: cover;background-position: center center;"></div>
                        <div class="slider_our_bg_text">
                            <?php echo get_sub_field('text', 'option') ?>

                        </div>
                        <div class="slider_our_bg_user">
                            <h4><?php echo get_sub_field('user', 'option') ?></h4>
                        </div>
                        <div class="slider_our_bg_Job">
                            <p><?php echo get_sub_field('job', 'option') ?></p>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
        </div>
    </div>
</section>

<?php get_footer() ?>

