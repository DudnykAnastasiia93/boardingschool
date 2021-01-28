<?php
/*
Template Name: schedule
*/
?>

<?php get_header();?>
<div class="container container-schedule">
    <div class="textBlock">
        <h2 class="textBlock__schedule">РОЗКЛАД</h2>
        <h4 class="textBlock__shift">І зміна</h4>
    </div>
    <div class="mainBlock">
        <div class="mainBlock__schedule">
        <?php
        the_content();
        ?>
        </div>
    </div>
</div>

<?php get_template_part('template-parts/short', 'feedback');?>

<?php get_footer();?>
