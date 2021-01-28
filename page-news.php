<?php
/*
Template Name: news
*/
?>

<?php
// $args = [
//     'post_type' => 'school-news',
//     'numberposts' => 2,
//     'orderby' => 'date',
//     'order' => 'DESC',
//     // 'paged'=>2
// ];
// $posts = get_posts($args);
// $posts_count = wp_count_posts('school-news')->publish;
// $next = '';
// $prev = '';

?>

<?php get_header(); ?>

<div class="container">
    <h1 class="titleBlock">
        НОВИНИ
    </h1>
    
    <div class="mainBlock mainBlock-news">
        <?php 
        $current_page = (get_query_var('paged')) ? get_query_var('paged') : 1;
        $params = array(
            'posts_per_page' => 6, // количество постов на странице
            'post_type'       => 'school-news', // тип постов
            'paged'           => $current_page,
            'orderby' => 'date',
            'order' => 'DESC', // текущая страница
        );
        query_posts($params);
        
        $wp_query->is_archive = true;
        $wp_query->is_home = false;
        
        while(have_posts()): the_post();?>
            <div class="mainBlock__news ">
                <div class="newsImg">
                    <?php 
                    $imgs = get_field('news_img');
                    $news_img = $imgs['sizes']['medium'];
                    ?>
                    <img width="320" height="280" src="<?php echo $news_img;?>" alt="news">
                </div>
                <div class="newsText">
                    <div class="newsText__title">
                        <a href="<?php echo get_permalink(); ?>"><?php the_title();?></a>
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
        <?php endwhile;?>
     </div>
    <?php wp_pagenavi();?>

<?php get_template_part('template-parts/short', 'feedback');?>

<?php get_footer(); ?>