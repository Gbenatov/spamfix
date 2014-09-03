
<?php

wp_get_header();


?>




	
</div><!--end masthead-->

<div class="stripe"></div>

<div id="casing">

<div id="content" >


<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
		
<div class="post" id="post-<?php the_ID(); ?>">

<div class="entry">
<?php the_content('לקרוא את המשך הכתבה &raquo;'); ?>
</div>
</div>

<?php endwhile; endif; ?>
</div>		

<?php get_sidebar(); ?>
<?php wp_get_footer(); ?>