<?php

// Exit if accessed directly
if( !defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Home Widgets Template
 *
 *
 * @file           sidebar-home.php
 * @package        Responsive
 * @author         Emil Uzelac
 * @copyright      2003 - 2014 CyberChimps
 * @license        license.txt
 * @version        Release: 1.0
 * @filesource     wp-content/themes/responsive/sidebar-home.php
 * @link           http://codex.wordpress.org/Theme_Development#Widgets_.28sidebar.php.29
 * @since          available since Release 1.0
 */
?>


<?php responsive_widgets_before(); // above widgets container hook ?>
<div style="fold1">
<h2 class="title" style="font-size:3.25em;"> איך זה עובד</h2>
    <div id="home_widget_1" class="grid col-300">
        <?php responsive_widgets(); // above widgets hook ?>

        <?php if( !dynamic_sidebar( 'home-widget-1' ) ) : ?>
        <div class="widget-wrapper" style="height:360px !important">

            <div class="widget-title-home"><h3 ><a style="color:#3498DB;" href="/?page_id=2;"><?php _e( 'העלו עוולות למערכת', 'responsive' ); ?></a></h3></div>


            <button class="btn btn-default btn-lg" style="width:261px;">
            <h4 style="float:right;"><a href="?page_id=2;">
                <div style="color:orange; font-size:50px;">1,500</div>
                </br>עוולות עד כה
            </a></h4>

            <h4 class="fa fa-comment-o fa-5x "
                style="margin-top:25px; line-height:0.5; padding-right:29px !important; padding-left:16px !important;"></h4></button>


            <div class="textwidget"><?php _e( 'העלו עוולות למערכת אשר ראויות מוגשות כתביעה ייצוגית. למשל פגיעה מחברת סלולר, הטעיית לקוחות מצד הבנקים ועוד', 'responsive'); ?>

                <h6 class="button5" style="margin-bottom:33px; padding:10px; margin-top:30px !important"><a style="color:white;"
                                                                                 href="https://wordy-c9-gbenatov_1.c9.io/?page_id=2">
                    צור עוולה חדשה</a></h6>

            </div>
        </div>

        <?php endif; //end of home-widget-1 ?>

        <?php responsive_widgets_end(); // responsive after widgets hook ?>
    </div>



<!-- end of .col-300 -->

<div id="home_widget_2" class="grid col-300">
    <?php responsive_widgets(); // responsive above widgets hook ?>

    <?php if( !dynamic_sidebar( 'home-widget-2' ) ) : ?>
    <div class="widget-wrapper" style="height:360px !important;">

        <div class="widget-title-home"><h3><?php _e( 'עו"ד סורקים עוולות', 'responsive' ); ?></h3></div>
        <button class="btn btn-default btn-lg" style="width:261px">
        <h4 style="float:right;">
            <div style="color:orange; font-size:50px;">30</div>
            </br>פניות נסרקות כרגע
        </h4>

        <h4 class="fa fa-cog fa-5x" style="margin-top:25px; line-height:0.5; "></h4></button>
        <div
                class="textwidget"><?php _e( 'עו"ד סורקים את הדיווחים שלכם ובודקים אלו תופעות הם בגדר "מכת מדינה" ועם סיכוי ההצלחה הגבוהים ביותר.', 'responsive' ); ?></div>

        <h6 class="button51" style="margin-bottom:33px; font-size:18px; padding:10px; margin-top:30px !important"><a  style="color:black;"
                                                                         href="https://wordy-c9-gbenatov_1.c9.io/?page_id=232"> למאגר
            עורכי הדין></a></h6>
    </div>
    <?php endif; //end of home-widget-2 ?>

    <?php responsive_widgets_end(); // after widgets hook ?>
</div>
<!-- end of .col-300 -->

<div id="home_widget_3" class="grid col-300 fit">
    <?php responsive_widgets(); // above widgets hook ?>

    <?php if( !dynamic_sidebar( 'home-widget-3' ) ) : ?>
    <div class="widget-wrapper" style="height:360px !important;">

        <div class="widget-title-home"><h3><?php _e( 'מוגשות תביעות ייצוגיות', 'responsive' ); ?></h3></div>

        <button class="btn btn-default btn-lg" style=
        "width:261px;">
        <h4 style="float:right;">
            <div style="color:orange; font-size:50px;">3</div>
            </br>ייצוגיות הוגשו
        </h4>

        <h4 class="fa fa-suitcase fa-5x "
            style="margin-top:25px; line-height:0.5; padding-right:29px !important; padding-left:16px !important;"></h4></button>
        <div
                class="textwidget"><?php _e( 'אתם נשארים מעודכנים לאורך כל הדרך ולבסוף אתם מקבלים את הפיצוי שבית המשפט מחליט עליו וכך "שיטת המצליח " נחלשת', 'responsive' ); ?></div>
        <h6 class="button51" style="margin-bottom:33px; font-size:18px; padding:10px; margin-top:30px !important"><a style="color:black;"
                                                                         href="https://wordy-c9-gbenatov_1.c9.io/?cat=5">
            לתובענות הייצוגיות></a></h6>
    </div>
    <!-- end of .widget-wrapper -->
    <?php endif; //end of home-widget-3 ?>

    <?php responsive_widgets_end(); // after widgets hook ?>
</div>
<!-- end of .col-300 fit -->


<div class="clearfix">
    <h2 class="title" style="font-size:3.25em;"> מקרים פופולרים</h2>
</div>

<div class="my-con" style="width: 100%" > <!--class="home-widgets"-->
    <div id="home_widget_4" class="grid col-300">

        <?php responsive_widgets(); // above widgets hook ?>


        <?php if( !dynamic_sidebar( 'home-widget-1' ) ) : ?>
        <div class="widget-wrapper"

             style="
    padding-top: 3px;
    padding-left: 3px;
    padding-right: 1px;
    padding-bottom:0px;
    border:2px solid #3498DB;
    background:white !important;
    "

                >

            <div class="widget-title-home"><div style="float:center; margin-right:5px; width: 100px; float: center; font-size:14px; "><a class="lawyer"  href="https://wordy-c9-gbenatov_1.c9.io/?page_id=120">עו"ד גולדברג</a></div><h3 class="fa fa-tag" style="
					
    padding-bottom: 0px;
    border-left-width: 5px;
    margin-left: 5px;
    padding-left: 10px;
    padding-right: 5px;
    margin-top: -17px;
    
    margin-bottom: 17px;
    margin-right:150px;
    font-size:16px !important;
    background:transparent;
    float:left;
    border-bottom:2px solid orange;
    "

                    ><a href="?cat=5">צרכנות</a></h3>
                    <hr>


                <ul>
                    <?php $the_query = new WP_Query( 'showposts=1' ); ?>
                    <?php while ($the_query -> have_posts()) : $the_query -> the_post(); the_post_thumbnail(30,30); ?>
                    <li style="list-style-type:none;"><h6 style="margin-top:5px !important; "><a style="color:#3498DB;  font-style:italic;"
                        href="<?php the_permalink() ?>"><?php the_title();  ?></a></h6></li>
                        
                    <li style="list-style-type:none;"><h5
                            style="margin-right:10 px;"><?php the_content() ?></h5></li>
                            
                    <i class="fa fa-book" style="color:gray; margin-top:44px; margin-right:0px; "><h4 style="font-size:16px; margin-top:-17px; color:gray;  font-family:'alef' !important;"><a href="?p=133  ">&nbsp&nbsp&nbsp קרא עוד></a></h4></i>
                   
                   
                            
                    <?php endwhile;?>

                </ul>

            </div>


        </div>
    </div>


    <!-- end of .widget-wrapper -->
    <?php endif; //end of home-widget-1 ?>


    <?php responsive_widgets_end(); // responsive after widgets hook ?>

<!-- end of .col-300 -->


<div id="home_widget_5" class="grid col-300">

    <?php responsive_widgets(); // above widgets hook ?>


    <?php if( !dynamic_sidebar( 'home-widget-1' ) ) : ?>




    <div class="widget-wrapper"

         style="
    padding-top: 3px;
    padding-left: 3px;
    padding-right: 1px;
    padding-bottom:0px;
    border:2px solid #3498DB;
    background:white !important;
    "

            >

        <div class="widget-title-home"><div style="float:center; margin-right:5px; width: 100px; float: center; font-size:14px; "><a class="lawyer"  href="https://wordy-c9-gbenatov_1.c9.io/?page_id=120">עו"ד גולדברג</a></div><h3 class="fa fa-tag" style="
					
    padding-bottom: 0px;
    border-left-width: 5px;
    margin-left: 5px;
    padding-left: 10px;
    padding-right: 5px;
    margin-top: -17px;
    
    margin-bottom: 17px;
    margin-right:150px;
    font-size:16px !important;
    background:transparent;
    float:left;
    border-bottom:2px solid orange;
    "

                ><a href="?cat=5">צרכנות</a></h3>
                <hr>


            <ul>
                <?php $the_query = new WP_Query( 'showposts=1' ); ?>
                <?php while ($the_query -> have_posts()) : $the_query -> the_post(); the_post_thumbnail(30,30); ?>
                <li style="list-style-type:none;"><h6 style="margin-top:5px !important; "  ><a style="color:#3498DB;"
                    href="<?php the_permalink() ?>"><?php the_title();  ?></a></h6></li>
                <li style="list-style-type:none;"><h5
                        ><?php the_content('<span class="moretext" style="color:white; float:left;">קרא עוד></span>'); ?></h5></li>
                
                
                    <i class="fa fa-book" style="color:gray; margin-top:44px; margin-right:0px; "><h4 style="font-size:16px; margin-top:-17px; color:gray;  font-family:'alef' !important;"><a href="?p=133">&nbsp&nbsp&nbsp קרא עוד></a></h4></i>     
                    
                <?php endwhile;?>

            </ul>

        </div>


    </div>
</div>


<!-- end of .widget-wrapper -->
<?php endif; //end of home-widget-1 ?>




<div id="home_widget_6" class="grid col-300 fit">

    <?php responsive_widgets(); // above widgets hook ?>


    <?php if( !dynamic_sidebar( 'home-widget-1' ) ) : ?>
    <div class="widget-wrapper"

         style="
    padding-top: 3px;
    padding-left: 3px;
    padding-right: 1px;
    padding-bottom:0px;
    border:2px solid #3498DB;
    background:white !important;
    "

            >

        <div class="widget-title-home"><div style="float:center; margin-right:5px; width: 100px; float: center; font-size:14px; "><a class="lawyer"  href="https://wordy-c9-gbenatov_1.c9.io/?page_id=120">עו"ד גולדברג</a></div><h3 class="fa fa-tag" style="
					
    padding-bottom: 0px;
    border-left-width: 5px;
    margin-left: 5px;
    padding-left: 10px;
    padding-right: 5px;
    margin-top: -17px;
    
    margin-bottom: 0px;
    margin-right:150px;
    font-size:16px !important;
    background:transparent;
    float:left;
    border-bottom:2px solid orange;
    "

                ><a href="?cat=5">צרכנות</a></h3>
                <hr>


            <ul>
                <?php $the_query = new WP_Query( 'showposts=1' ); ?>
                <?php while ($the_query -> have_posts()) : $the_query -> the_post(); the_post_thumbnail(30,30); ?>
                <li style="list-style-type:none;"><h6 style="margin-top:5px !important; "  ><a style="color:#3498DB;"
                        href="<?php the_permalink() ?>"><?php the_title();  ?></a></h6></li>
                <li style="list-style-type:none;"><h5
                        ><?php the_content('<span class="moretext" style="color:white !important; float:left; ">קרא עוד></span>'); ?></h5></li>
                      
                
                    
                     <i class="fa fa-book" style="color:gray; margin-top:44px; margin-right:0px; "><h4 style="font-size:16px; margin-top:-17px; color:gray;  font-family:'alef' !important;"><a href="?p=133">&nbsp&nbsp&nbsp קרא עוד></a></h4></i>     
                    
                <?php endwhile;?>

            </ul>

        </div>


    </div>
</div>


<!-- end of .widget-wrapper -->
<?php endif; //end of home-widget-1 ?>



<div id="home_widget_8" class="grid col-300">

        <?php responsive_widgets(); // above widgets hook ?>


        <?php if( !dynamic_sidebar( 'home-widget-1' ) ) : ?>
        <div class="widget-wrapper"

             style="
    padding-top: 3px;
    padding-left: 3px;
    padding-right: 1px;
    padding-bottom:0px;
    border:2px solid #3498DB;
    background:white !important;
    "

                >

            <div class="widget-title-home"><div style="float:center; margin-right:5px; width: 100px; float: center; font-size:14px; "><a class="lawyer"  href="https://wordy-c9-gbenatov_1.c9.io/?page_id=120">עו"ד גולדברג</a></div><h3 class="fa fa-tag" style="
					
    padding-bottom: 0px;
    border-left-width: 5px;
    margin-left: 5px;
    padding-left: 10px;
    padding-right: 5px;
    margin-top: -18px;
    color:black !important;
    margin-bottom: 0px;
    margin-right:150px;
    font-size:16px !important;
    background:transparent;
    float:left;
    border-bottom:2px solid orange;
    "

                    ><a href="?cat=5">צרכנות</a></h3>
                    <hr>


                <ul>
                    <?php $the_query = new WP_Query( 'showposts=1' ); ?>
                    <?php while ($the_query -> have_posts()) : $the_query -> the_post(); the_post_thumbnail(30,30); ?>
                    <li style="list-style-type:none;"><h6 style="margin-top:5px !important; color:#3498DB;"  ><a style="color:#3498DB;"
                            href="<?php the_permalink() ?>"><?php the_title();  ?></a></h6></li>
                    <li style="list-style-type:none;"><h5
                            ><?php the_content('<span class="moretext" style="color:white !important; float:left;">קרא עוד></span>'); ?></h5></li>
                           
                  
                        <i class="fa fa-book" style="color:gray; margin-top:44px; margin-right:0px; "><h4 style="font-size:16px; margin-top:-17px; color:gray;  font-family:'alef' !important;"><a href="?p=133">&nbsp&nbsp&nbsp קרא עוד></a></h4></i>
                    <?php endwhile;?>

                </ul>

            </div>


        </div>
    </div>



<!-- end of .widget-wrapper -->
<?php endif; //end of home-widget-1 ?>



    <div id="home_widget_8" class="grid col-300">

        <?php responsive_widgets(); // above widgets hook ?>


        <?php if( !dynamic_sidebar( 'home-widget-1' ) ) : ?>
        <div class="widget-wrapper"

             style="
    padding-top: 3px;
    padding-left: 3px;
    padding-right: 1px;
    padding-bottom:0px;
    border:2px solid #3498DB;
    background:white !important;
    "

                >

            <div class="widget-title-home"><div style="float:center; margin-right:5px; width: 100px; float: center; font-size:14px; "><a class="lawyer"  href="https://wordy-c9-gbenatov_1.c9.io/?page_id=120">עו"ד גולדברג</a></div><h3 class="fa fa-tag" style="
					
    padding-bottom: 0px;
    border-left-width: 5px;
    margin-left: 5px;
    padding-left: 10px;
    padding-right: 5px;
    margin-top: -18px;
    
    margin-bottom: 0px;
    margin-right:150px;
    font-size:16px !important;
    background:transparent;
    float:left;
    border-bottom:2px solid orange;
    "

                    ><a href="?cat=5">צרכנות</a></h3>
                    <hr>


                <ul>
                    <?php $the_query = new WP_Query( 'showposts=1' ); ?>
                    <?php while ($the_query -> have_posts()) : $the_query -> the_post(); the_post_thumbnail(30,30); ?>
                    <li style="list-style-type:none;"><h6 style="margin-top:5px !important; color:orange;"  ><a style="color:#3498DB;"
                            href="<?php the_permalink() ?>"><?php the_title();  ?></a></h6></li>
                    <li style="list-style-type:none;"><h5
                            ><?php the_content('<span class="moretext" style="color:white; float:left;">קרא עוד></span>'); ?></h5></li>
                     
                         <i class="fa fa-book" style="color:gray; margin-top:44px; margin-right:0px; "><h4 style="font-size:16px; margin-top:-17px; color:gray;  font-family:'alef' !important;"><a href="?p=133">&nbsp&nbsp&nbsp קרא עוד></a></h4></i>
                    <?php endwhile;?>

                </ul>

            </div>


        </div>
    </div>


    <!-- end of .widget-wrapper -->
    <?php endif; //end of home-widget-1 ?>



        <div id="home_widget_9" class="grid col-300 fit">

            <?php responsive_widgets(); // above widgets hook ?>


            <?php if( !dynamic_sidebar( 'home-widget-1' ) ) : ?>
            <div class="widget-wrapper"

                 style="
    padding-top: 3px;
    padding-left: 3px;
    padding-right: 1px;
    padding-bottom:0px;
    border:2px solid #3498DB;
    background:white !important;
    "

                    >

                <div class="widget-title-home"><div style="float:center; margin-right:5px; width: 100px; float: center; font-size:14px; "><a class="lawyer"  href="https://wordy-c9-gbenatov_1.c9.io/?page_id=120">עו"ד גולדברג</a></div><h3 class="fa fa-tag" style="
					
    padding-bottom: 0px;
    border-left-width: 5px;
    margin-left: 5px;
    padding-left: 10px;
    padding-right: 5px;
    margin-top: -18px;
    
    margin-bottom: 0px;
    margin-right:150px;
    font-size:16px !important;
    background:transparent;
    float:left;
    border-bottom:2px solid orange;
    "

                        ><a href="?cat=5">צרכנות</a></h3>
<hr>

                    <ul>
                        <?php $the_query = new WP_Query( 'showposts=1' ); ?>
                        <?php while ($the_query -> have_posts()) : $the_query -> the_post(); the_post_thumbnail(30,30);
                        ?>
                        <li style="list-style-type:none;"><h6 style="margin-top:5px !important;"  ><a style="color:#3498DB;"
                                href="<?php the_permalink() ?>"><?php the_title();  ?></a></h6></li>
                        <li style="list-style-type:none;"><h5
                                ><?php the_content('<span class="moretext" style=" float:left; ">קרא עוד></span>'); ?></h5></li>
                       
                            
                           <i class="fa fa-book" style="color:gray; margin-top:44px; margin-right:0px; "><h4 style="font-size:16px; margin-top:-17px; color:gray;  font-family:'alef' !important;"><a href="?p=133">&nbsp&nbsp&nbsp קרא עוד></a></h4></i>
                            
                            
                            
                        <?php endwhile;?>

                    </ul>

                </div>


            </div>
        </div>


        <!-- end of .widget-wrapper -->
        <?php endif; //end of home-widget-1 ?>


    </div>
    <!-- end of #widgets -->
    <h1><strong>קטגוריות</strong></h1>
<ul class="bycategories">
<?php wp_list_categories('title_li='); ?>
</ul>
<div class="clear"></div>

</div>
<?php responsive_widgets_after(); // after widgets container hook ?>