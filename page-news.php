<?php
/*
Template Name: news
*/
?>

<?php
$args = [
    'post_type' => 'school-news',
    'numberposts' => 0,
    'orderby' => 'date',
    'order' => 'DESC'
];
$posts = get_posts($args);

?>

<?php get_header(); ?>

<div class="container">
    <h1 class="titleBlock">
        НОВИНИ
    </h1>
    <div class="mainBlock mainBlock-news">
        <?php 
            if (have_posts()) : ?>
            <?php
            foreach ($posts as $post) :?>
            <div class="mainBlock__news ">
                <div class="newsImg">
                    <?php 
                    $imgs = get_field('news_img');
                    $news_img = $imgs['sizes']['medium'];
                    // my_print($imgs);
                    ?>
                    <img src="<?php echo $news_img;?>">
                </div>
                <div class="newsText">
                    <div class="newsText__title">
                        <?php the_title();?>
                    </div>
                    <div class="newsText__date">
                        <i class="far fa-clock"></i>
                        <?php the_field('date');?>
                    </div>
                    
                    <div class="newsText__text">
                        <?php echo kama_excerpt();?>
                    </div>
                </div>
            </div>
            <?endforeach;?>
            <?endif;?>
    </div>
    <div class="paginationBlock">

    </div>
</div>
<?php get_footer(); ?>