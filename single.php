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
                    <img src="<?php echo $page_img; ?>">
                </div>
                <div class="content__text">
                    <?php the_content(); ?>
                </div>
            </div>
            <div class="news">
                <h2 class="news__title">ОСТАННІ НОВИНИ</h2>
                <div class="news__item">
                    <?php 
                    if (have_posts()) : ?>
                    <?php
                    foreach ($posts as $post) :?>
                    <div class="mainBlock__news ">
                        <div class="newsImg">
                            <?php 
                            $imgs = get_field('news_img');
                            $news_img = $imgs['sizes']['thumbnail'];
                            // my_print($imgs);
                            ?>
                            <img src="<?php echo $news_img;?>">
                        </div>
                        <div class="newsText">
                            <div class="newsText__title">
                                <a href="#"><?php the_title();?></a>
                            </div>
                            <div class="newsText__date">
                                <i class="far fa-clock"></i>
                                <?php the_field('date');?>
                            </div>
                            
                        </div>
                    </div>
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

<?php get_footer(); ?>