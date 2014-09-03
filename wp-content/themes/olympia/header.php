<?php if (wp_loaded() === true) { ?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />



<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?> </title>

<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="alternate" type="application/atom+xml" title="<?php bloginfo('name'); ?> Atom Feed" href="<?php bloginfo('atom_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />



<?php 
wp_enqueue_script('jquery');
wp_enqueue_script('superfish', get_stylesheet_directory_uri() .'/js/superfish.js');
wp_enqueue_script('jqui', get_stylesheet_directory_uri() .'/js/jquery-ui-personalized-1.5.2.packed.js');
wp_enqueue_script('effects', get_stylesheet_directory_uri() .'/js/effects.js');
if(get_option('olymp_cufon') == true) { 
wp_enqueue_script('cufon', get_stylesheet_directory_uri() .'/js/cufon.js');
wp_enqueue_script('droid', get_stylesheet_directory_uri() .'/js/droid-sans.cufonfonts.js');
wp_enqueue_script('titillium', get_stylesheet_directory_uri() .'/js/titillium-text.cufonfonts.js');
wp_enqueue_script('cufonts', get_stylesheet_directory_uri() .'/js/cufonts.js');
}
?>

<?php wp_get_archives('type=monthly&format=link'); ?>
<?php //comments_popup_script(); // off by default ?>

<?php 
if ( is_singular() ) wp_enqueue_script( 'comment-reply' );
wp_head(); 
?>

</head>
<body>

<div id="wrapper"> 

<div id="masthead">
	<div id="top"> 
		<div id="blogname">

<img src="https://wordy-c9-gbenatov_1.c9.io/wp-content/uploads/2014/07/1404578720_music-e1404562179461.png"style= "margin-top: 30px;float:right; margin:9px;padding-top: 13px;";/>

			<h1 class="logo">


<a href="<?php bloginfo('siteurl');?>/>

 title="<?php bloginfo('name');?>"><?php bloginfo('name');?>

</h1>

</a>
			
			<div class="top-right">
				<div class="feedlist">
					<ul>


<li class="hide"><a href="<?php bloginfo('rss2_url'); ?>" ><img src="<?php bloginfo('stylesheet_directory'); ?>/images/rss.png" title="subscribe" alt="RSS"/></a></li>
						<li class="hide"><a href="<?php $face = get_option('olymp_face'); echo ($face); ?>"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/facebook.png" title="Facebook" alt="Facebook"/></a></li> 
						<li class="hide"><a href="http://twitter.com/<?php $twit = get_option('olymp_twitter'); echo ($twit); ?>"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/twitter.png" title="Twitter" alt="Twitter"/></a></li>


						
					</ul>
				</div>
				
				<?php include (TEMPLATEPATH . '/searchform.php'); ?>	
			</div>
			
		</div>
	</div>
	
	<div id="botmenu">
	<?php wp_nav_menu( array( 'container_id' => 'submenu', 'theme_location' => 'primary','menu_class'=>'sfmenu','fallback_cb'=> 'fallbackmenu' ) ); ?>
	</div><!-- END botmenu --><?php } ?>
	