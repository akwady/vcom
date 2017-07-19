
<?php
/**
 * template name: search
 */


$value = $_GET['s'];
global $wpdb;




get_header();
get_template_part('sections/top-header');
get_template_part('sections/menu-top-header');
?>
<section id="category">
    <div class="container">
        <div class="row">
            <div class="category-title">
                <h1>
                    Kết quả tìm kiếm
                </h1>
            </div>

            <div class="col-md-12 col-sm-12">
                <div class="category-all">


                    <div class="category-post">
                        <?php foreach ($posts as $value1) : ?>

                            <div class="col-md-4 col-sm-6 category-post-all">
                                <div class="post-bg">
                                    <div class="category-post-all-img">

                                        <?php echo get_the_post_thumbnail( $value1->ID ); ?>




                                        <?php $category = get_the_category($value1->ID) ?>
                                        <div class="category-post-all-category">
                                            <?php foreach ($category as $value) : ?>
                                                <a href="<?php echo home_url("/category/$value->slug"); ?>"><?php echo $value->name ?>
                                                    <span>,</span></a>
                                            <?php endforeach ?>
                                        </div>
                                        <div class="hover-bg"></div>
                                        <div class="hover-see">
                                            <a href="<?php the_permalink() ?>">Xem chi tiết</a>
                                        </div>
                                    </div>
                                    <div class="category-post-title-category">

                                        <div class="category-post-title">
                                            <a href="<?php the_permalink() ?>"><?php echo $value1->post_title ?></a>
                                        </div>
                                        <div class="category-post-date">
                                            <i class="fa fa-clock-o" aria-hidden="true"></i>
                                            <?php echo get_the_date() ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>