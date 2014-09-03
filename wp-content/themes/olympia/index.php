<?php wp_get_header(); ?>
<div class="subhead">
	<div class="welcome insubhead">
		<h1>
		ברוכים הבאים לייצוגיות להמונים
		</h1>
		<p>
		העלו את העוולות היומיומיות שלכם למערכת ואנו נקדם פגיעות רוחביות 
		</p>
		<h2 class="button" style="
    padding-right: 26px;
width=100px;
    height: 25px;
    margin-right: 444px;
    margin-top: 22px;
    width: 136px;
">
  צור עוולה חדשה
</h2>
	
	</div>

</div>
</div><!--end masthead-->
<div class="stripe"></div>

<div id="casing">
	    <?php if (get_option('olymp_homewidgets')== true) { ?>
	<div id="home-widgets" > <!-- BEGIN home widgets -->
		<div class="homewidget">
			<?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar('Homepage-left') ) : else : ?>
			<?php endif; ?>
		</div>
		<div class="homewidget">
			<?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar('Homepage-middle') ) : else : ?>
			<?php endif; ?>
		</div>
		<div class="homewidget hwr">
			<?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar('Homepage-right') ) : else : ?>
			<?php endif; ?>
		</div>
			<div class="clear"></div>
	</div> <!-- END home widgets -->
	<?php } else { ?>
		<?php } ?>
		
	<?php if (get_option('olymp_showtwit')== true) { ?>
	<div class="twitblock">
	    <ul id="twitter_update_list">
               <li><p></p></li>
        </ul>
			<?php $account= get_option('olymp_twitter');?>
            <a class="twitlink" href="http://twitter.com/<?php echo $account ?>" class="twitter-link">עקבו אחרינו </a>
			<script type="text/javascript" src="http://twitter.com/javascripts/blogger.js"></script>
			<script type="text/javascript" src="http://twitter.com/statuses/user_timeline/<?php echo $account ?>.json?callback=twitterCallback2&amp;count=1"></script>
	</div>
		<?php } else { ?>
		<?php } ?>
		
<div id="content">

<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
<div class="post" id="post-<?php the_ID(); ?>">

<div class="title">
	<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h2>
</div>
<div class="postmeta">
	<span class="author">פורסם ע"י <?php the_author(); ?> </span> <span class="clock">  <?php the_time('M - j - Y'); ?></span> <span class="comm"><?php comments_popup_link('0 תגובות', 'תגובה אחת', '% תגובות'); ?></span>
</div>

<div class="entry">


<?php
if ( has_post_thumbnail() ) { ?>
	<a href="<?php the_permalink() ?>"><img class="postimg" src="<?php bloginfo('stylesheet_directory'); ?>/timthumb.php?src=<?php get_image_url(); ?>&amp;h=150&amp;w=150&amp;zc=1" alt=""/></a>
<?php } else { ?>
	<a href="<?php the_permalink() ?>"><img class="postimg" src="<?php bloginfo('template_directory'); ?>/images/dummy.png" alt="" /></a>
<?php } ?>


<?php wpe_excerpt('wpe_excerptlength_index', ''); ?>
<a class="morer" href="<?php the_permalink() ?>">המשך</a>
<div class="clear"></div>

</div>

</div>



<?php endwhile; ?>

<div class="clear"></div>

<?php getpagenavi(); ?>

<?php else : ?>
		<h1 class="title">לא נמצא</h1>
		<p>Sorry, but you are looking for something that isn't here.</p>
<?php endif; ?>
      <?php wp_reset_query(); ?>
</div>

<?php get_sidebar(); ?>

<?php wp_get_footer(); ?>