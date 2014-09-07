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

            <div class="widget-title-home"><h3 style="margin-bottom:19px;" ><a style="color:black;" href="/?page_id=2;"><?php _e( 'שלחו הודעות למערכת', 'responsive' ); ?></a></h3></div>


            <button class="btn btn-default btn-lg" style="width:261px;">
            <h4 style="float:right;"><a href="?page_id=2;">
                <div style="color:orange; font-size:50px;">1,500</div>
                </br>הודעות התקבלו            </a></h4>

            <h4 class="fa fa-comment-o fa-5x "
                style="margin-top:25px; line-height:0.5; padding-right:29px !important; padding-left:16px !important;"></h4></button>


            <div class="textwidget"><?php _e( 'בשלבים אלו המערכת מתמקדת בלקבל עותקים מהודעות ספאם, סידור חכם של ההודעות ומינוי נציגים לקבוצות','ponsive'); ?>

                <h6 class="button51" style="margin-bottom:33px; padding:10px; margin-top:57px !important"><a style="color:black;"
                                                                                 href="https://wordy-c9-gbenatov_1.c9.io/?page_id=2">
                    איך פונים אלינו?</a></h6>

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

        <div class="widget-title-home"><h3><?php _e( 'התגבשו לקבוצה ונציג', 'responsive' ); ?></h3></div>
        <button class="btn btn-default btn-lg" style="width:261px">
        <h4 style="float:right;">
            <div style="color:orange; font-size:50px;">30</div>
            </br>קבוצות התגבשו
        </h4>

        <h4 class="fa fa-cog fa-5x" style="margin-top:25px; line-height:0.5; "></h4></button>
        <div
                class="textwidget"><?php _e( 'לכשמצטברות כמות פניות מכובדת מנושא אחד הינכם מתגבשים כקבוצה. כך תוכלו לנקוט פעולות יחד כקבוצה ולממש את היעדים שלכם', 'responsive' ); ?></div>

        <h6 class="button51" style="margin-bottom:33px; font-size:18px; padding:10px; margin-top:30px !important"><a  style="color:black;"
                                                                         href="https://test-c9-gbenatov_1.c9.io/?page_id=27"> למאגר
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

        <div class="widget-title-home"><h3><?php _e( 'פנייה מסודרת לעו"ד', 'responsive' ); ?></h3></div>

        <button class="btn btn-default btn-lg" style=
        "width:261px;">
        <h4 style="float:right;">
            <div style="color:orange; font-size:50px;">3</div>
            </br>ייצוגיות הוגשו
        </h4>

        <h4 class="fa fa-suitcase fa-5x "
            style="margin-top:25px; line-height:0.5; padding-right:29px !important; padding-left:16px !important;"></h4></button>
        <div
                class="textwidget"><?php _e( 'נוצר קשר בין נציג הקבוצה לעו"ד וכשמגיעים להבנות הנציג מעלה אותם להצבעת הקבוצה ואתם מחליטים מה יעלה בגורל המקרה שלכם.', 'responsive' ); ?></div>
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
    <h2 class="title" style="font-size:3.25em;"> סיפורי הצלחה</h2>
</div>
<section class="testimonial">
  <div class="inner">
      <div class="cederholm" id="quote-wrapper">
      <div class="quote">
        <blockquote id="quote-quote" style="overflow:hidden;">בית המשפט פסק לטובת הקבוצה שלי פיצוי של 30,000 ש"ח <a href="http://www.apollowebstudio.com">, גיליתי את SpamFix</a> ,    נעזרתי בגיבוש הקבוצה ולבצע את כל הפעולות הטכניות סביב התביעה.</blockquote><cite id="quote-attrib">יוסי קונפינו, רעננה</cite>
      </div>
      <div class="portrait" style="
    border: 1px solid gray;
    border-radius: 50%;
    margin-bottom:62px;
;"></div>
    </div>
  </div>
</section>

<style type="text/css">
section.testimonial {
background: #F6F4EF;
text-align:right;
}

section .inner {
max-width: 940px;
margin: 0 auto;
text-align: center;
}
section.testimonial .inner {
padding-top: 50px;
text-align: left;
}


section.testimonial #quote-wrapper {
position: relative;
min-height: 358px;
padding-top: 40px;
}

section.testimonial blockquote {
	font-family: "Proxima Nova", "Helvetica Neue", Helvetica, Arial, sans-serif;
color: #666;
font-size: 28px;
line-height: 1.3em;
padding-top: 1em;
position: relative;
z-index: 1;
margin-bottom: 0.75em;
text-align:right;
font-style: italic;
font-family:'Alef';    
}
q, blockquote {
quotes: none;
}
section.testimonial cite {
font-size: 18px;
color: #595756;
font-weight: bold;
margin: 2em 0;
  margin-left: 38px;

}
#quote-quote a {
color: #020202;
text-decoration: none;
overflow:hidden;
}
#quote-quote a:hover {
color: #020202;
text-decoration: underline;
}

section.testimonial #quote-wrapper.lisagor .portrait {
background-repeat: no-repeat;
background-image: url("http://www.getballpark.com/images/home/testimonials/lisagor.jpg");
background-size: 313px 329px;
background-position: center center;
width: 313px;
height: 329px;
}

section.testimonial #quote-wrapper.cederholm .portrait {
background-repeat: no-repeat;
background-image: url("http://www.getballpark.com/images/home/testimonials/cederholm.jpg");
background-size: 275px 305px;
background-position: center center;
width: 275px;
height: 305px;
}


section.testimonial blockquote::before {
content: "“";
color: #E0DDD7;
font-family: georgia, serif;
font-size: 6em;
position: absolute;
left: -0.25em;
top: 0.35em;
z-index: -10;
}


@media screen and (min-width: 750px){
  
section.testimonial #quote-wrapper {
padding-left: 360px;
}  
  
section.testimonial #quote-wrapper .portrait {
position: absolute;
left: 10px;
bottom: 0;
}
  
}



@media screen and (max-width: 750px){
	

section.testimonial .inner {
padding-left: 0;
}

section.testimonial .quote {
max-width: 75%;
margin: 0 auto;
margin-bottom: 20px;
}


section.testimonial .portrait {
display: block;
margin: 0 auto;
max-width: 80%;
background-size: 100% auto !important;
background-position: center bottom !important;
}
  
}


</style>

  

</div>
<?php responsive_widgets_after(); // after widgets container hook ?>