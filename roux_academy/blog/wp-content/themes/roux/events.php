<?php
/*
Template Name: Events
*/
?>

<?php get_header(); ?>
<link href="<?php bloginfo('stylesheet_directory');?>
/jQueryAssets/jquery.ui.core.min.css" rel="stylesheet" type="text/css">
<link href="<?php bloginfo('stylesheet_directory');?>
/jQueryAssets/jquery.ui.theme.min.css" rel="stylesheet" type="text/css">
<link href="<?php bloginfo('stylesheet_directory');?>
/jQueryAssets/jquery.ui.accordion.min.css" rel="stylesheet" type="text/css">
<script src="<?php bloginfo('stylesheet_directory');?>
/jQueryAssets/jquery-1.11.1.min.js" type="text/javascript"></script>
<script src="<?php bloginfo('stylesheet_directory');?>
/jQueryAssets/jquery.ui-1.10.4.accordion.min.js" type="text/javascript"></script>

<div id="contentWrap">
    <div id="content">
    <h1>Roux Academy Blog</h1>
        <?php if ( have_posts() ) : ?>
            <?php while ( have_posts() ) : the_post(); ?>
                <article <?php post_class() ?> id="post-<?php the_ID(); ?>">
                    <h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
                    <div class="meta">
                        <em>Posted on:</em> <?php the_time('F jS, Y') ?>
                        <em>by</em> <?php the_author() ?>
                    </div>
                    <div class="entry">
                        <?php the_content(); ?>
                    </div>
                    <div class="postmetadata">
                        <?php the_tags('Tags: ', ', ', '<br />'); ?>
                        Posted in <?php the_category(', ') ?> | 
                        <?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?>
                    </div>
                </article>
            <?php endwhile; ?>
        <?php else : ?>
            <h2>Not Found</h2>
        <?php endif; ?>
      <div id="Accordion1">
          <h3><a href="#">Transportation</a></h3>
          <div>
            <p>Public transportation is plentiful in New York, so students are encouraged to not own a vehicle while enrolled. Parking is not provided for students and can be a significant financial burden. If you are traveling from the Kennedy airport (JFK), you can take a cab or arrange for car service to take you to Roux beforehand, for a fee of $40-$60. The AirTrain JFK service connects to the Howard Beach subway station, where you can take the A train into Manhattan and exit on the 34th Street stop. The one-way cost is $8.75.</p>
          </div>
          <h3><a href="#">Restaurants</a></h3>
          <div>
            <p>Roux Academy is in the heart of foodie paradise! Just take a look at a small selection of nearby restaraunts:</p>
<dl>
  <dt>Frying Pan</dt>
  <dd>Pier 68 and West 33 St.</dd>
  <dt>Skylight Veranda</dt>
  <dd>204 W. 34th St.</dd>
  <dt>Johnny Greek</dt>
  <dd>588 W. 35th St.</dd>
  <dt>Hotel Amerino</dt>
  <dd>876 W. 33rd St.</dd>
  <dt>Sara Cubano</dt>
  <dd>342 W. 32nd St.</dd>
  <dt>Westside Pizzorama</dt>
  <dd>432 W. 36th St.</dd>
</dl>
          </div>
          <h3><a href="#">Lodging</a></h3>
          <div>
            <div style="margin-bottom: 20px;">
  <h3><img src="<?php bloginfo('stylesheet_directory');?>
/_images/rage_hotel.png" width="180" height="180" alt="The Rage Hotel">The Rage Hotel</h3>
  <p>New York’s Clinton district plays home to the ultra modern Rage Hotel, that is outfitted with a state-of-the-art computer and printing facility in the penthouse, and draws tech professionals from all over the world for business conferences and vacations, alike.</p>
</div>
<div style="margin-bottom: 20px;">
  <h3><img src="<?php bloginfo('stylesheet_directory');?>
/_images/fancy_hotel.png" width="180" height="180" alt="Fancy Hotel">Gwendoline’s Fancy</h3>
  <p>In the heart of the West Edge district in New York, Gwendoline’s Fancy, named after a Navy submarine that got lost at sea in 1910, is a central landing place for history buffs who can immerse themselves in the Museum of History located in the hotel mezzanine. For those travelers who aren’t into history, there are plenty of other nearby sights to keep them entertained, including The High Line and the USS Enterprise.</p>
</div>
          </div>
        </div>
    </div> <!-- end content -->
<?php get_sidebar(); ?>
</div> <!-- end contentWrap -->
<?php get_footer(); ?>
<script type="text/javascript">
$(function() {
	$( "#Accordion1" ).accordion({
		heightStyle:"content",
		icons:{header: "ui-icon-plusthick", activeHeader: "ui-icon-minusthick"}
	}); 
});
</script>
