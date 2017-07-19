<section id="menu_header">
	<div class="container">
		<div class="row">
			<div class="menu_left col-md-3 col-sm-3">
				<div class="logo_header">
                    <a href="<?php echo get_home_url() ?>">
                        <img src="<?php echo get_field('logo_header' , 'option') ?>">
                    </a>
				</div>
			</div>
            <div class="menu_center col-md-7 col-sm-7">
                <div class="menu_main">
                    <?php wp_nav_menu(['theme-location' => 'main_menu']) ?>
                </div>
            </div>
            <div class="menu_right col-md-2 col-sm-2">
                <div class="menu_language">
                    <p>Language: <a href="#">VN</a></p>
                </div>
            </div>
		</div>
	</div>
</section>
