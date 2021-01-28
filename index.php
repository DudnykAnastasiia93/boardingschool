<?php get_header(); ?>

<?php
$args = [
    'post_type' => 'school-news',
    'numberposts' => 4,
    'orderby' => 'date',
    'order' => 'DESC'
];
$posts = get_posts($args);

?>
<section class="mainBlock">
    <div class="mainBlock__img">
        <img width="320" height="280" width="320" height="150" src="<?= ASSETS_PATH  . '/assets/img/main.webp'; ?>" alt="main">
        <h3>Вітаємо Вас на сайті ПСMШІ!</h3>
    </div>
    <div class="mainBlock__points">
        <div class="center">
            <div class="section">
                <div class="section__icon section__icon-red">
                    <i class="fas fa-graduation-cap"></i>
                </div>
                <div class="section__title">
                    <a href="<?php echo get_permalink(141); ?>">Інклюзивна освіта</a>
                </div>
            </div>
            <div class="section">
                <div class="section__icon section__icon-yellow">
                    <i class="fas fa-users"></i>
                </div>
                <div class="section__title">
                    <a href="<?php echo get_permalink(119); ?>">Козацький загін</a>
                </div>
            </div>
            <div class="section">
                <div class="section__icon section__icon-blue">
                    <i class="fas fa-trophy"></i>
                </div>
                <div class="section__title">
                    <a href="<?php echo get_permalink(145); ?>">Учнівські досягнення</a>
                </div>
            </div>
            <div class="section">
                <div class="section__icon section__icon-green">
                    <i class="fas fa-school"></i>
                </div>
                <div class="section__title">
                    <a href="<?php echo get_permalink(127); ?>">Профільне навчання</a>
                </div>
            </div>
        </div>

    </div>
    <div class="mainBlock__points mainBlock__points-two">
        <div class="center">
            <div class="section section-two">
                <div class="section__icon">
                    <i class="fas fa-clipboard-list"></i>
                </div>
                <div class="section__text">
                    <h4 class="title"><a href="<?php echo get_permalink(434); ?>">РОЗКЛАД</a></h4>
                    <p class="text">Розклад занять</p>
                </div>
            </div>
            <div class="section section-two">
                <div class="section__icon">
                    <i class="fas fa-people-carry"></i>
                </div>
                <div class="section__text">
                    <h4 class="title"><a href="<?php echo get_permalink(162); ?>">ГУРТКОВА РОБОТА</a></h4>
                    <p class="text">Гурткова робота забезпечує можливості щодо вибору діяльності, до якої дитина проявляє зацікавленість</p>
                </div>
            </div>
            <div class="section section-two">
                <div class="section__icon">
                    <i class="fas fa-volume-up"></i>
                </div>
                <div class="section__text">
                    <h4 class="title"><a href="<?php echo get_permalink(168); ?>">Я МАЮ ПРАВО</a></h4>
                    <p class="text">Все про права дитини</p>
                </div>
            </div>
            <div class="section section-two">
                <div class="section__icon">
                    <i class="fab fa-internet-explorer"></i>
                </div>
                <div class="section__text">
                    <h4 class="title"><a href="<?php echo get_permalink(174); ?>">БЕЗПЕЧНИЙ ІНТЕРНЕТ</a></h4>
                    <p class="text">Правила поведінки користувача під час користування всесвітньою мережею</p>
                </div>
            </div>
        </div>

    </div>
    <div class="mainBlock__news">
        <div class="center">
        <a class="title "href="<?php echo get_permalink(10); ?>">    
                НОВИНИ
        </a>
            <div class="delimiter">
                <i class="fas fa-newspaper"></i>
            </div>
            <p class="text">Пропонуємо Вам ознайомитися із подіями, що відбуваються в нашому закладі
            </p>
                      
            <div class="news__items">
                <?php 
                if (have_posts()) : ?>
                <?php 
                foreach ($posts as $post):?>
                <?php
                $imgs = get_field ('main_img');
                $img_news = $imgs['sizes']['medium'];
                // my_print($imgs); 
                
                ?>
                <div class="item">
                    <div class="item__img">                      
                        <img width="320" height="280" src="<?php echo $img_news;?>" alt="news">
                    </div>
                    <h3 class="item__title"><a href="<?php echo get_permalink(); ?>"><?php the_title();?></a></h3>
                    <div class="item__text"><?php echo kama_excerpt();?></div>
                </div>
                <?endforeach;?>
                <?endif;?>
            </div>
        </div>

    </div>
    <div class="mainBlock__points mainBlock__points-about">
        <div class="center">
            <div class="section">
                <div class="section__icon section__icon-red">
                    <i class="fas fa-graduation-cap"></i>
                </div>
                <div class="section__title">
                    <a href="<?php echo get_permalink(462); ?>">ВЛАСНА МЕТОДИЧНА БАЗА</a>
                </div>
            </div>
            <div class="section">
                <div class="section__icon section__icon-yellow">
                    <i class="fas fa-users"></i>
                </div>
                <div class="section__title">
                    <a href="<?php echo get_permalink(110); ?>">РЕСПУБЛІКА ШКІДС</a>
                </div>
            </div>
            <div class="section">
                <div class="section__icon section__icon-blue">
                    <i class="fas fa-trophy"></i>
                </div>
                <div class="section__title">
                    <a href="<?php echo get_permalink(178); ?>">ВОЛОНТЕРСЬКА РОБОТА</a>
                </div>
            </div>
            <div class="section">
                <div class="section__icon section__icon-green">
                    <i class="fas fa-school"></i>
                </div>
                <div class="section__title">
                    <a href="<?php echo get_permalink(85); ?>">НАШІ ШЕФИ</a>
                </div>
            </div>
            <div class="section">
                <div class="section__icon section__icon-purple">
                    <i class="fas fa-school"></i>
                </div>
                <div class="section__title">
                    <a href="<?php echo get_permalink(182); ?>">МУЗЕЙ НАРОДОЗНАВСТВА</a>
                </div>
            </div>
            <div class="section">
                <div class="section__icon section__icon-turq">
                    <i class="fas fa-school"></i>
                </div>
                <div class="section__title">
                    <a href="<?php echo get_permalink(218); ?>">ФОТОГАЛЕРЕЯ</a>
                </div>
            </div>
        </div>

    </div>
    <div class="mainBlock__news mainBlock__facts">
        <div class="facts">
            <div class="center">
                <h2 class="title">ДЕЯКІ ФАКТИ ПРО НАС</h2>
                <div class="delimiter">
                    <i class="fas fa-newspaper"></i>
                </div>
                <div class="factsBlock">
                    <div class="factsBlock__item">
                        <div class="icon">
                            <i class="fas fa-university"></i>
                        </div>
                        <div class="quantity">120</div>
                        <div class="text">КІЛЬКІСТЬ УЧНІВ</div>
                    </div>
                    <div class="factsBlock__item">
                        <div class="icon">
                            <i class="fas fa-user-friends"></i>
                        </div>
                        <div class="quantity">2</div>
                        <div class="text">ВИХОВНІ ГРУПИ
                        </div>
                    </div>
                    <div class="factsBlock__item">
                        <div class="icon">
                            <i class="fas fa-user-graduate"></i>
                        </div>
                        <div class="quantity">80</div>
                        <div class="text">ПРАЦІВНИКІВ</div>
                    </div>

                </div>
            </div>

        </div>

    </div>
    <div class="mainBlock__director">
        <div class="center">
            <div class="directorImg">
                <img width="320" height="280" src="<?php echo ASSETS_PATH . '/assets/img/director.png' ?>" alt="director">
            </div>
            <div class="directorText">
                <div class="directorText__name">КЛЮЧИНСЬКА АЛЕВТИНА ВОЛОДИМИРІВНА</div>
                <div class="directorText__about">Директор школи, «Заслужений працівник освіти України», «Відмінник освіти України», нагороджена медаллю Міністерства Внутрішніх справ України «за сприяння протидії правопорушень у дитячому середовищі». Пройшла шлях від вихованки до керівника цього закладу, який очолює з 1998 року.</div>
            </div>
        </div>
    </div>

</section>

<?php get_template_part('template-parts/short', 'feedback');?>




<?php get_footer(); ?>