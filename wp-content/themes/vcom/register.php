<?php
/**
 * template name: Ký Gửi BĐS
 */
    get_header();
        get_template_part('sections/top-header');
        get_template_part('sections/menu-top-header');
?>
    <section id="register-bds">
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-sm-9 col-xs-12">
                    <div class="form-register">
                        <div class="register-pd">
                            <div class="form-register-title">
                                <h1>Đăng Ký Thông Tin Ký Gửi BĐS</h1>
                            </div>
                        </div>
                        <?php echo do_shortcode('[gravityform id=2 title=false description=false ajax=false tabindex=49]') ?>
                    </div>
                </div>
                <?php get_sidebar() ?>
            </div>
        </div>
    </section>


<?php get_footer() ?>
