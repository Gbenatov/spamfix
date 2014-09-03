<?php
/**
 * Template Name: thumbnails1
 *
 * Print posts of a Custom Post Type.
 */


get_header(); ?>
<head>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</head>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Articles Layout Template | PrepBootstrap</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css" />

    <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">

<div class="page-header">
    <h1>Articles Layout <small>Bootstrap template, demonstrating an articles layout</small></h1>
</div>

<!-- Articles Layout - START -->
<div class="container" style="margin-left:20px;">
    <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-3">
            <div class="thumbnail">
                <?php echo get_the_post_thumbnail( 1, 30, $attr ); ?>  
                <div class="caption">
                    <h4 class="text-center"><a href="www.ynet.co.il"><?php echo get_the_title(1);  ?></a> </h4>
                    <p>
                       <?php  $my_postid = 1;//This is page id or post id
$content_post = get_post($my_postid);
$content = $content_post->post_content;
$content = apply_filters('the_content', $content);
$content = str_replace(']]>', ']]&gt;', $content);
echo $content;  ?>
                    </p>
                    <p class="text-center">
                        <i class="fa fa-thumbs-o-up votes"></i><i class="fa fa-thumbs-o-down votes"></i>
                    </p>
                </div>
            </div>
        </div>        
         <div class="col-xs-12 col-sm-6 col-md-3">
            <div class="thumbnail">
                <img src="http://placehold.it/600x270" alt="">
                <div class="caption">
                    <h4 class="text-center">Article 2</h4>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                        Suspendisse aliquam, augue vitae pulvinar feugiat, magna ipsum varius tellus, quis lobortis est nulla nec ligula. 
                        Aenean cursus enim sit amet tortor rutrum lobortis. 
                        Vestibulum mattis mauris fringilla mauris volutpat, in euismod arcu ultricies. 
                        Nunc eget hendrerit lectus. Proin rutrum elit ut orci fringilla, sit amet ornare turpis molestie. 
                        Proin nec neque eget nulla scelerisque rhoncus sit amet vitae augue. 
                        Vivamus ipsum eros, sodales sed enim ac, malesuada iaculis mi. 
                        Morbi ut orci sit amet tellus posuere convallis. 
                        Cras rhoncus tincidunt ultrices.
                    </p>
                    <p class="text-center">
                        <i class="fa fa-thumbs-o-up votes"></i><i class="fa fa-thumbs-o-down votes"></i>
                    </p>
                </div>
            </div>
        </div>        
         <div class="col-xs-12 col-sm-6 col-md-3">
            <div class="thumbnail">
                <img src="http://placehold.it/600x270" alt="">
                <div class="caption">
                    <h4 class="text-center">Article 3</h4>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                        Suspendisse aliquam, augue vitae pulvinar feugiat, magna ipsum varius tellus, quis lobortis est nulla nec ligula. 
                        Aenean cursus enim sit amet tortor rutrum lobortis. 
                        Vestibulum mattis mauris fringilla mauris volutpat, in euismod arcu ultricies. 
                        Nunc eget hendrerit lectus. Proin rutrum elit ut orci fringilla, sit amet ornare turpis molestie. 
                        Proin nec neque eget nulla scelerisque rhoncus sit amet vitae augue. 
                        Vivamus ipsum eros, sodales sed enim ac, malesuada iaculis mi. 
                        Morbi ut orci sit amet tellus posuere convallis. 
                        Cras rhoncus tincidunt ultrices.
                    </p>
                    <p class="text-center">
                        <i class="fa fa-thumbs-o-up votes"></i><i class="fa fa-thumbs-o-down votes"></i>
                    </p>
                </div>
            </div>
        </div>        
         <div class="col-xs-12 col-sm-6 col-md-3">
            <div class="thumbnail">
                <img src="http://placehold.it/600x270" alt="">
                <div class="caption">
                    <h4 class="text-center">Article 4</h4>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                        Suspendisse aliquam, augue vitae pulvinar feugiat, magna ipsum varius tellus, quis lobortis est nulla nec ligula. 
                        Aenean cursus enim sit amet tortor rutrum lobortis. 
                        Vestibulum mattis mauris fringilla mauris volutpat, in euismod arcu ultricies. 
                        Nunc eget hendrerit lectus. Proin rutrum elit ut orci fringilla, sit amet ornare turpis molestie. 
                        Proin nec neque eget nulla scelerisque rhoncus sit amet vitae augue. 
                        Vivamus ipsum eros, sodales sed enim ac, malesuada iaculis mi. 
                        Morbi ut orci sit amet tellus posuere convallis. 
                        Cras rhoncus tincidunt ultrices.
                    </p>
                    <p class="text-center">
                        <i class="fa fa-thumbs-o-up votes"></i><i class="fa fa-thumbs-o-down votes"></i>
                    </p>
                </div>
            </div>
        </div>        
    </div>

   
</div>
<!-- End container -->

<style>   
.thumbnail {
    position: relative;
    padding: 0px;
    margin-bottom: 20px;
}

.thumbnail:hover {
    background-color:#5CB85C;
}

.votes {
    font-size: 47px;    
    color:#197BB5;
    padding:10px;
}

.thumbnail img {
    width: 100%;
}
</style>

<!-- Articles Layout - END -->

</div>

</body>
</html>
<?php get_sidebar(); ?>
<?php get_footer(); ?>