<?php
get_header();
get_template_part('sections/menu_header');
?>

<section id="projects_single">
    <div class="container-fluid">
        <div class="row">
            <div class="our_companion_page_height">
                <div class="our_companion_page_bg">
                    <div>
                        <h1><?php echo get_field('page_our_companion_tilte', 'option') ?></h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section id="projects_single_post">
    <div class="container">
        <div class="col-md-7 projects_single_slider">

            <script src="<?php echo get_template_directory_uri() . '/js/jssor.slider-23.1.1.min.js' ?>" type="text/javascript"></script>

            <script type="text/javascript">
                jssor_1_slider_init = function() {

                    var jssor_1_SlideshowTransitions = [
                        {$Duration:1200,x:0.3,$During:{$Left:[0.3,0.7]},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
                        {$Duration:1200,x:-0.3,$SlideOut:true,$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
                        {$Duration:1200,x:-0.3,$During:{$Left:[0.3,0.7]},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
                        {$Duration:1200,x:0.3,$SlideOut:true,$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
                        {$Duration:1200,y:0.3,$During:{$Top:[0.3,0.7]},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
                        {$Duration:1200,y:-0.3,$SlideOut:true,$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
                        {$Duration:1200,y:-0.3,$During:{$Top:[0.3,0.7]},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
                        {$Duration:1200,y:0.3,$SlideOut:true,$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
                        {$Duration:1200,x:0.3,$Cols:2,$During:{$Left:[0.3,0.7]},$ChessMode:{$Column:3},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
                        {$Duration:1200,x:0.3,$Cols:2,$SlideOut:true,$ChessMode:{$Column:3},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
                        {$Duration:1200,y:0.3,$Rows:2,$During:{$Top:[0.3,0.7]},$ChessMode:{$Row:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
                        {$Duration:1200,y:0.3,$Rows:2,$SlideOut:true,$ChessMode:{$Row:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
                        {$Duration:1200,y:0.3,$Cols:2,$During:{$Top:[0.3,0.7]},$ChessMode:{$Column:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
                        {$Duration:1200,y:-0.3,$Cols:2,$SlideOut:true,$ChessMode:{$Column:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
                        {$Duration:1200,x:0.3,$Rows:2,$During:{$Left:[0.3,0.7]},$ChessMode:{$Row:3},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
                        {$Duration:1200,x:-0.3,$Rows:2,$SlideOut:true,$ChessMode:{$Row:3},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
                        {$Duration:1200,x:0.3,y:0.3,$Cols:2,$Rows:2,$During:{$Left:[0.3,0.7],$Top:[0.3,0.7]},$ChessMode:{$Column:3,$Row:12},$Easing:{$Left:$Jease$.$InCubic,$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
                        {$Duration:1200,x:0.3,y:0.3,$Cols:2,$Rows:2,$During:{$Left:[0.3,0.7],$Top:[0.3,0.7]},$SlideOut:true,$ChessMode:{$Column:3,$Row:12},$Easing:{$Left:$Jease$.$InCubic,$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
                        {$Duration:1200,$Delay:20,$Clip:3,$Assembly:260,$Easing:{$Clip:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
                        {$Duration:1200,$Delay:20,$Clip:3,$SlideOut:true,$Assembly:260,$Easing:{$Clip:$Jease$.$OutCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
                        {$Duration:1200,$Delay:20,$Clip:12,$Assembly:260,$Easing:{$Clip:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
                        {$Duration:1200,$Delay:20,$Clip:12,$SlideOut:true,$Assembly:260,$Easing:{$Clip:$Jease$.$OutCubic,$Opacity:$Jease$.$Linear},$Opacity:2}
                    ];

                    var jssor_1_options =
                        {
                            $AutoPlay: 1,
                            $SlideshowOptions: {
                                $Class: $JssorSlideshowRunner$,
                                $Transitions: jssor_1_SlideshowTransitions,
                                $TransitionsOrder: 1
                            },
                            $ArrowNavigatorOptions: {
                                $Class: $JssorArrowNavigator$
                            },
                            $ThumbnailNavigatorOptions: {
                                $Class: $JssorThumbnailNavigator$,
                                $Cols: 10,
                                $SpacingX: 8,
                                $SpacingY: 8,
                                $Align: 360
                            }
                        };

                    var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

                    /*responsive code begin*/
                    /*remove responsive code if you don't want the slider scales while window resizing*/
                    function ScaleSlider() {
                        var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
                        if (refSize) {
                            refSize = Math.min(refSize, 634);
                            jssor_1_slider.$ScaleWidth(refSize);
                        }
                        else {
                            window.setTimeout(ScaleSlider, 30);
                        }
                    }
                    ScaleSlider();
                    $Jssor$.$AddEvent(window, "load", ScaleSlider);
                    $Jssor$.$AddEvent(window, "resize", ScaleSlider);
                    $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
                    /*responsive code end*/
                };
            </script>

            <style>
                /* jssor slider arrow navigator skin 05 css */
                /*
                .jssora05l                  (normal)
                .jssora05r                  (normal)
                .jssora05l:hover            (normal mouseover)
                .jssora05r:hover            (normal mouseover)
                .jssora05l.jssora05ldn      (mousedown)
                .jssora05r.jssora05rdn      (mousedown)
                .jssora05l.jssora05lds      (disabled)
                .jssora05r.jssora05rds      (disabled)
                */
                .jssora05l, .jssora05r {
                    display: block;
                    position: absolute;
                    /* size of arrow element */
                    width: 40px;
                    height: 40px;
                    cursor: pointer;
                    background: url('<?php echo get_template_directory_uri() .'/images/a17.png' ?>') no-repeat;
                    overflow: hidden;
                }
                .jssora05l { background-position: -10px -40px; }
                .jssora05r { background-position: -70px -40px; }
                .jssora05l:hover { background-position: -130px -40px; }
                .jssora05r:hover { background-position: -190px -40px; }
                .jssora05l.jssora05ldn { background-position: -250px -40px; }
                .jssora05r.jssora05rdn { background-position: -310px -40px; }
                .jssora05l.jssora05lds { background-position: -10px -40px; opacity: .3; pointer-events: none; }
                .jssora05r.jssora05rds { background-position: -70px -40px; opacity: .3; pointer-events: none; }

                /* jssor slider thumbnail navigator skin 01 css *//*.jssort01 .p            (normal).jssort01 .p:hover      (normal mouseover).jssort01 .p.pav        (active).jssort01 .p.pdn        (mousedown)*/
                .jssort01 .p {
                    position: absolute;
                    top: 0;
                    left: 0;
                    width: 170px;
                    height: 120px;
                }

                .jssort01 .t {
                    position: absolute;
                    top: 0;
                    left: 0;
                    width: 100%;
                    height: 100%;
                    border: none;
                }

                .jssort01 .w {
                    position: absolute;
                    top: 0px;
                    left: 0px;
                    width: 100%;
                    height: 100%;
                }

                .jssort01 .c {
                    position: absolute;
                    top: 0px;
                    left: 0px;
                    width: 170px;
                    height: 120px;
                    border: #000 2px solid;
                    box-sizing: content-box;
                    background: url('<?php echo get_template_directory_uri() .'/images/t01.png' ?>') -800px -800px no-repeat;
                    _background: none;
                }

                .jssort01 .pav .c {
                    top: 2px;
                    _top: 0px;
                    left: 2px;
                    _left: 0px;
                    width: 168px;
                    height: 117px;
                    border: #000 0px solid;
                    _border: #fff 2px solid;
                    background-position: 50% 50%;
                    background-size: 100% 100%;
                }

                .jssort01 .p:hover .c {
                    top: 0px;
                    left: 0px;
                    width: 168px;
                    height: 117px;
                    border: #fff 1px solid;
                    background-position: 50% 50%;
                    background-size: 100% 100%;
                }

                .jssort01 .p.pdn .c {
                    background-position: 50% 50%;
                    width: 170px;
                    height: 120px;
                    border: #000 2px solid;
                }

                * html .jssort01 .c, * html .jssort01 .pdn .c, * html .jssort01 .pav .c {
                    /* ie quirks mode adjust */
                    width /**/: 170px;
                    height /**/: 120px;
                }
            </style>

            <div id="jssor_1" style="position:relative;top:-26px;left:0px;width:800px ;height:700px;overflow:hidden;visibility:hidden;background-color:#24262e;">
                <!-- Loading Screen -->
                <div data-u="loading" style="position:absolute;top:0px;left:0px;background-color:rgba(0,0,0,0.7);">
                    <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
                    <div style="position:absolute;display:block;background:url('<?php echo get_template_directory_uri() .'/images/loading.gif' ?>') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
                </div>


                <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:800px;height:550px;overflow:hidden;">
                    <?php while(have_rows('images_slider')) : the_row() ?>
                        <div class="title-slider">
                            <img data-u="image" src="<?php echo get_sub_field('images') ?>" />
                            <img data-u="thumb" src="<?php echo get_sub_field('images') ?>" />
                            <a href=""><?php echo get_sub_field('title' , 'option') ?></a>

                        </div>
                    <?php endwhile ?>

                </div>



                <!-- Thumbnail Navigator -->
                <div data-u="thumbnavigator" class="jssort01" style="position:absolute;left:0px;bottom:25px;width:100%;height:100px;" data-autocenter="1">
                    <!-- Thumbnail Item Skin Begin -->
                    <div data-u="slides" style="cursor: default;">
                        <div data-u="prototype" class="p">
                            <div class="w">
                                <div data-u="thumbnailtemplate" class="t"></div>
                            </div>
                            <div class="c"></div>
                        </div>
                    </div>
                    <!-- Thumbnail Item Skin End -->
                </div>
                <!-- Arrow Navigator -->
                <span data-u="arrowleft" class="jssora05l" style="top:200px;left:8px;width:40px;height:40px;"></span>
                <span data-u="arrowright" class="jssora05r" style="top:200px;right:8px;width:40px;height:40px;"></span>
            </div>
            <script type="text/javascript">jssor_1_slider_init();</script>
            <!-- #endregion Jssor Slider End -->

        </div>
        <?php while(have_posts()) : the_post() ?>
        <div class="col-md-5 projects_single_Information">
            <div class="projects_post_title">
                <h1><?php the_title() ?></h1>
            </div>
            <div class="projects_post_content">
                <?php the_content() ?>
            </div>
        </div>
    <?php endwhile;?>
    </div>
</section>

<section id="relevant_projects">
    <div class="container">
        <div class="row">
            <div class="projects_single_title">
                <h1><?php echo get_field('relevant_projects' , 'option') ?>
                </h1>
            </div>
            <div class="gallery_all" id="projects_single_slider">
                <?php
                $product2 = get_the_terms($post->id , 'category-projects');
                foreach ($product2 as $value){
                    $value->term_id;
                    $terms = $value->slug;
                }
                if($value->parent != 29) {
                    $list = array(
                        'post_type' => 'du-an',
                        'posts_per_page' => '16',
                        "tax_query" => array(
                            array(
                                'taxonomy' => 'category-projects',
                                'field' => 'slug',
                                'terms' => $terms,
                            ),
                        ),
                    );
                }
                $query = new WP_Query($list);
                if($query->have_posts()):
                    while($query->have_posts()):
                        $query->the_post();
                        ?>
                        <div class="projects_single_pd">



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
    </div>
</section>
<?php get_footer() ?>