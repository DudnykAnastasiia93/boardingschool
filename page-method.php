<?php
/*
Template Name: method
*/
?>


<?php get_header(); ?>


<div class="method">
    <div class="mainBlock">
        <h1 class="mainBlock__title"><?php the_title();?></h1>
        <div class="mainBlock__content">
                <!-- <div class="documentBlock__name">ВИКОРИСТАННЯ НАЦІОНАЛЬНО-КУЛЬТУРНИХ ТРАДИЦІЙ У ВИХОВАННІ ШКОЛЯРІВ</div>
                <div class="documentBlock__btn">ВІДКРИТИ</div> -->
            <?php the_content();?>

        </div>
    </div>

</div>

<?php get_template_part('template-parts/short', 'feedback');?>

<?php get_footer(); ?>