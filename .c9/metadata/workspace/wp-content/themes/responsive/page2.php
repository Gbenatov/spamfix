{"filter":false,"title":"page2.php","tooltip":"/wp-content/themes/responsive/page2.php","undoManager":{"mark":2,"position":2,"stack":[[{"group":"doc","deltas":[{"action":"removeText","range":{"start":{"row":41,"column":42},"end":{"row":41,"column":43}},"text":"ר"}]}],[{"group":"doc","deltas":[{"action":"removeText","range":{"start":{"row":41,"column":41},"end":{"row":41,"column":42}},"text":"ק"}]}],[{"group":"doc","deltas":[{"action":"removeLines","range":{"start":{"row":0,"column":0},"end":{"row":75,"column":0}},"nl":"\n","lines":["<?php","","","","","","","// Exit if accessed directly","if( !defined( 'ABSPATH' ) ) {","\texit;","}","","/**"," * Pages Template"," *"," *"," * @file           page.php"," * @package        Responsive"," * @author         Emil Uzelac"," * @copyright      2003 - 2014 CyberChimps"," * @license        license.txt"," * @version        Release: 1.0"," * @filesource     wp-content/themes/responsive/page.php"," * @link           http://codex.wordpress.org/Theme_Development#Pages_.28page.php.29"," * @since          available since Release 1.0"," */","","get_header(); ?>","","<div id=\"content\" class=\"<?php echo implode( ' ', responsive_get_content_classes() ); ?>\">","","\t<?php if( have_posts() ) : ?>","","\t\t<?php while( have_posts() ) : the_post(); ?>","","\t\t\t<?php get_template_part( 'loop-header' ); ?>","","\t\t\t<?php responsive_entry_before(); ?>","\t\t\t<div id=\"post-<?php the_ID(); ?>\" <?php post_class(); ?>>","\t\t\t\t<?php responsive_entry_top(); ?>","","\t\t\t\t<?php get_templatee_part( 'post-meta-page' ); ?>","","\t\t\t\t<div class= \"post-entry\">","\t\t\t\t\t<?php the_content;( __( 'קרא עוד', 'responsive' ) ); ?>","\t\t\t\t\t<?php wp_link_pages( array( 'before' => '<div class=\"pagination\">' . __( 'Pages:', 'responsive' ), 'after' => '</div>' ) ); ?>","\t\t\t\t</div>","\t\t\t\t<!-- end of .post-entry -->","","\t\t\t\t<?php get_template_part( 'post-data' ); ?>","","\t\t\t\t<?php responsive_entry_bottom(); ?>","\t\t\t</div><!-- end of #post-<?php the_ID(); ?> -->","\t\t\t<?php responsive_entry_after(); ?>","","\t\t\t<?php responsive_comments_before(); ?>","\t\t\t<?php comments_template( '', true ); ?>","\t\t\t<?php responsive_comments_after(); ?>","","\t\t<?php","\t\tendwhile;","","\t\tget_template_part( 'loop-nav' );","","\telse :","","\t\tget_template_part( 'loop-no-posts' );","","\tendif;","\t?>","","</div><!-- end of #content -->","","<?php get_sidebar(); ?>","<?php get_footer(); ?>"]},{"action":"insertText","range":{"start":{"row":0,"column":0},"end":{"row":0,"column":5}},"text":"<?php"},{"action":"insertText","range":{"start":{"row":0,"column":5},"end":{"row":1,"column":0}},"text":"\n"},{"action":"insertLines","range":{"start":{"row":1,"column":0},"end":{"row":49,"column":0}},"lines":["/**"," * The template for displaying all pages"," *"," * This is the template that displays all pages by default."," * Please note that this is the WordPress construct of pages and that other"," * 'pages' on your WordPress site will use a different template."," *"," * @package WordPress"," * @subpackage Twenty_Thirteen"," * @since Twenty Thirteen 1.0"," */","","get_header(); ?>","","\t<div id=\"primary\" class=\"content-area\">","\t\t<div id=\"content\" class=\"site-content\" role=\"main\">","","\t\t\t<?php /* The loop */ ?>","\t\t\t<?php while ( have_posts() ) : the_post(); ?>","","\t\t\t\t<article id=\"post-<?php the_ID(); ?>\" <?php post_class(); ?>>","\t\t\t\t\t<header class=\"entry-header\">","\t\t\t\t\t\t<?php if ( has_post_thumbnail() && ! post_password_required() ) : ?>","\t\t\t\t\t\t<div class=\"entry-thumbnail\">","\t\t\t\t\t\t\t<?php the_post_thumbnail(); ?>","\t\t\t\t\t\t</div>","\t\t\t\t\t\t<?php endif; ?>","","\t\t\t\t\t\t<h1 class=\"entry-title\"><?php the_title(); ?></h1>","\t\t\t\t\t</header><!-- .entry-header -->","","\t\t\t\t\t<div class=\"entry-content\">","\t\t\t\t\t\t<?php the_content(); ?>","\t\t\t\t\t\t<?php wp_link_pages( array( 'before' => '<div class=\"page-links\"><span class=\"page-links-title\">' . __( 'Pages:', 'twentythirteen' ) . '</span>', 'after' => '</div>', 'link_before' => '<span>', 'link_after' => '</span>' ) ); ?>","\t\t\t\t\t</div><!-- .entry-content -->","","\t\t\t\t\t<footer class=\"entry-meta\">","\t\t\t\t\t\t<?php edit_post_link( __( 'Edit', 'twentythirteen' ), '<span class=\"edit-link\">', '</span>' ); ?>","\t\t\t\t\t</footer><!-- .entry-meta -->","\t\t\t\t</article><!-- #post -->","","\t\t\t\t<?php comments_template(); ?>","\t\t\t<?php endwhile; ?>","","\t\t</div><!-- #content -->","\t</div><!-- #primary -->","","<?php get_sidebar(); ?>"]},{"action":"insertText","range":{"start":{"row":49,"column":0},"end":{"row":49,"column":22}},"text":"<?php get_footer(); ?>"}]}],[{"group":"doc","deltas":[{"action":"removeText","range":{"start":{"row":38,"column":41},"end":{"row":38,"column":55}},"text":"twentythirteen"},{"action":"insertText","range":{"start":{"row":38,"column":41},"end":{"row":38,"column":42}},"text":"r"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":38,"column":42},"end":{"row":38,"column":43}},"text":"e"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":38,"column":43},"end":{"row":38,"column":44}},"text":"s"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":38,"column":44},"end":{"row":38,"column":45}},"text":"p"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":38,"column":45},"end":{"row":38,"column":46}},"text":"o"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":38,"column":46},"end":{"row":38,"column":47}},"text":"n"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":38,"column":47},"end":{"row":38,"column":48}},"text":"s"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":38,"column":48},"end":{"row":38,"column":49}},"text":"i"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":38,"column":49},"end":{"row":38,"column":50}},"text":"v"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":38,"column":50},"end":{"row":38,"column":51}},"text":"e"}]}]]},"ace":{"folds":[],"scrolltop":295,"scrollleft":0,"selection":{"start":{"row":13,"column":0},"end":{"row":49,"column":22},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":2219,"mode":"ace/mode/php"}},"timestamp":1407164584150,"hash":"8a112b40e2b4718949f2d420a905e94827387435"}