</body>

<footer id="app-footer">
    <div class="container">
        <div class="row">
            <div class="logo_footer">
                <div class="logo_img">
                    <img src="<?php echo get_field('logo_footer' , 'option') ?>" alt="">
                </div>
            </div>
            <div class="col-md-6 col-sm-5">
                <div class="footer_about">
                    <h4>about</h4>
                    <?php echo get_field('about_text' , 'option') ?>

                </div>

            </div>
            <div class="col-md-4 col-sm-4">
                <div class="footer_contact_information">
                    <h4>contact information</h4>
                    <div class="address">
                        <p>Address:</p>
                        <span><?php echo get_field('address' , 'option') ?>
                        </span>
                    </div>
                    <div class="email">
                        <p>Email:</p>
                        <span><?php echo get_field('email' , 'option') ?>
                        </span>
                    </div>
                    <div class="phone">
                        <p>Helpline:</p>
                        <span><?php echo get_field('helpline' , 'option') ?>
                        </span>
                    </div>
                </div>
            </div>
            <div class="col-md-2 col-sm-3">
                <div class="footer_follow_us">
                    <h4>follow us</h4>
                    <ul>
                        <?php while(have_rows('follow_us' , 'option')) : the_row() ?>

                        <li>
                            <a href="<?php echo get_sub_field('link' , 'option') ?>">
                                <?php echo get_sub_field('title' , 'option') ?>
                            </a>
                        </li>

                        <?php endwhile; ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <?php wp_footer() ?>
</footer>

</html>