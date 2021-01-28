<?php
/*
Template Name: teachers
*/
?>
<?php
$args = [
    'post_type' => 'teachers',
    'numberposts' => 20,
    'orderby' => 'date',
    'order' => 'DESC'
];
$posts = get_posts($args);
// my_print($teachers);
?>

<?php get_header(); ?>


<div class="collective">
    <div class="mainBlock">
        <h1 class="mainBlock__title"><?php the_title();?></h1>
        <div class="mainBlock__content">
            <?php if (have_posts()) : ?>
            <?php foreach ($posts as $post) :?>
            
            <div class="person">
                <div class="person__img">
                    <?php
                    $person_imgs = get_field('person_img');
                    $person_img = $person_imgs['sizes']['medium'];  
                    // my_print($person_imgs);
                    ?>
                    <img width="320" height="280" src="<?php echo $person_img;?>">
                </div>
                <h2 class="person__surname">
                    <?php echo $post -> post_title;?>
                </h2>
                <h4 class="person__name">
                    <?php echo $post -> post_content;?>
                </h4>
                <p class="person__position">
                    <?php echo $post -> person_position;?>
                </p>
            </div>
            <?endforeach;?>
            <?endif;?>
        </div>
    </div>

</div>

<?php get_template_part('template-parts/short', 'feedback');?>

<?php get_footer(); ?>