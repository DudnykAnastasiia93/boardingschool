<?php
$args = [
    'post_type' => 'school-news',
    'numberposts' => 6,
    'orderby' => 'date',
    'order' => 'DESC'
];
$posts = get_posts($args);
// my_print($posts);

?>

<?php get_header(); ?>

<div class="container">
    <div class="center">
        <div class="headerBlock">
            <div class="headerBlock__page">
                <h4>Сторінка</h4>
                <span><i class="fas fa-play"></i></span>
            </div>
            <h2 class="headerBlock__title"><?php the_title(); ?></h2>
            <p class="headerBlock__date">
                <i class="far fa-clock"></i>

                <?php the_field('date'); ?>
            </p>
        </div>
        <div class="mainBlock">
            <div class="content">
                <div class="content__img">
                    <?php
                    $imgs = get_field('main_img');
                    $page_img = $imgs['sizes']['large'];
                    ?>
                    <?php if($page_img):?>
                    <img width="320" height="280" src="<?php echo $page_img;?>"> 
                    <?endif;?>
                </div>
                <div class="content__text">
                    <?php the_content(); ?>
                </div>
                <?php if( $post -> post_type === 'school-news' ):?>
                <?php the_post_navigation( array(
                    'next_text'                  => '<span>%title</span> <i class="fas fa-long-arrow-alt-right"></i>',
                    'prev_text'                  => '<i class="fas fa-long-arrow-alt-left"></i> <span>%title</span>',
                    'in_same_term'          => false
                    ) ); 
                ?>
                <?endif;?>
            </div>
            <div class="news">
                <h2 class="news__title">ОСТАННІ НОВИНИ</h2>
                
                <div class="news__item">
                    <?php 
                    if (have_posts()) : ?>
                    <?php
                    foreach ($posts as $post) :?>
                    <a href="<?php echo get_permalink(); ?>">
                        <div class="mainBlock__news ">
                            <div class="newsImg">
                                <?php 
                                $imgs = get_field('news_img');
                                $news_img = $imgs['sizes']['thumbnail'];
                                // my_print($imgs);
                                ?>
                                <img width="320" height="280" src="<?php echo $news_img;?>">
                            </div>
                            <div class="newsText">
                                <div class="newsText__title">
                                    <?php the_title();?>
                                </div>
                                <div class="newsText__date">
                                    <i class="far fa-clock"></i>
                                    <?php the_field('date');?>
                                </div>
                                
                            </div>
                        </div>
                    </a>

                    <?endforeach;?>
                    <?endif;?>
                </div>
                <a href="<?php the_permalink(10); ?>">
                    <button class="news__button">
                        ВСІ НОВИНИ
                    </button>
                </a>
            </div>
        </div>
    </div>

</div>
<?php get_template_part('template-parts/short', 'feedback');?>

<?php get_footer(); ?>