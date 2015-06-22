<div class="widget-area">
	<?php if ( ! dynamic_sidebar( 'Sidebar Widgets' ) ) : ?>
        <aside id="search" class="widget">
            <?php get_search_form(); ?>
        </aside>
        <aside id="archives" class="widget">
            <h3 class="widget-title">Archives</h3>
            <ul>
                <?php wp_get_archives('type=monthly&limit=12'); ?>
            </ul>
        </aside>
    <?php endif; // end sidebar widget area ?>
    <?php
		$options = get_option('plugin_options');
	?>
    <?php
		if ($options['home_page_ads']>=1) {
	?>
    <div id="home_ad_1" class="advert" style="background: transparent url(<?php bloginfo('stylesheet_directory'); ?>/_images/ad_box.gif) no-repeat;">
        <?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('home_ad_1')) : else : ?>
        <div class="pre-widget">
            <p>&nbsp;</p>
            <p>&nbsp;</p>
        </div>
        <?php endif; ?>
    </div>
    <?php } ?>

	<?php
		if ($options['home_page_ads']>=1) {
	?>
    <div id="home_ad_2" class="advert" style="background: transparent url(<?php bloginfo('stylesheet_directory'); ?>/_images/ad_box.gif) no-repeat;">
        <?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('home_ad_2')) : else : ?>
        <div class="pre-widget">
            <p>&nbsp;</p>
            <p>&nbsp;</p>
        </div>
        <?php endif; ?>
    </div>
    <?php } ?>
    
	<?php
		if ($options['home_page_ads']>=1) {
	?>
    <div id="home_ad_3" class="advert" style="background: transparent url(<?php bloginfo('stylesheet_directory'); ?>/_images/ad_box.gif) no-repeat;">
        <?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('home_ad_3')) : else : ?>
        <div class="pre-widget">
            <p>&nbsp;</p>
            <p>&nbsp;</p>
        </div>
        <?php endif; ?>
    </div>
    <?php } ?>
</div>