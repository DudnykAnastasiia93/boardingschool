<section class="footerBlock">
    <div class="footer">
        <div class="footer__section">
            <div class="footerMenu__items">

            <?php
            wp_nav_menu([
                'theme_location' => '',
                'menu' => 'footer_menu_one',
                'container' => 'div',
                'container_class' => '',
                'container_id' => '',
                'menu_class' => 'menu points',
                'menu_id' => '',
                'echo' => true,
                'fallback_cb' => 'wp_page_menu',
                'before' => '',
                'after' => '',
                'link_before' => '',
                'link_after' => '',
                'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                'depth' => 0,
                'walker' => '',
            ]);
            ?>

            <?php
            wp_nav_menu([
                'theme_location' => '',
                'menu' => 'footer_menu_two',
                'container' => 'div',
                'container_class' => '',
                'container_id' => '',
                'menu_class' => 'menu points',
                'menu_id' => '',
                'echo' => true,
                'fallback_cb' => 'wp_page_menu',
                'before' => '',
                'after' => '',
                'link_before' => '',
                'link_after' => '',
                'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                'depth' => 0,
                'walker' => '',
            ]);
            ?>

            <?php
            wp_nav_menu([
                'theme_location' => '',
                'menu' => 'footer_menu_three',
                'container' => 'div',
                'container_class' => '',
                'container_id' => '',
                'menu_class' => 'menu points',
                'menu_id' => '',
                'echo' => true,
                'fallback_cb' => 'wp_page_menu',
                'before' => '',
                'after' => '',
                'link_before' => '',
                'link_after' => '',
                'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                'depth' => 0,
                'walker' => '',
            ]);
            ?>
            </div>

            <ul class="officialPage">
                <li class="officialPage__item"><a href="https://mon.gov.ua/ua">Міністерство освіти і науки України</a></li>
                <li class="officialPage__item"><a href="http://poippo.pl.ua/">Полтавський обласни інститут післядипломної освіти</a></li>
                <li class="officialPage__item"><a href="https://testportal.gov.ua/">Український центр оцінювання якості освіти</a></li>
                <li class="officialPage__item"><a href="http://www.poltav-oblosvita.gov.ua/">Департамент освіти і науки Полтавської обласної державної адміністрації</a></li>
            </ul>
        </div>
        <div class="footer__section footer__section-links">
            <a href="https://pravo.minjust.gov.ua/ua">
                <img width="320" height="280" class="pravo" src="<?php echo ASSETS_PATH . '/assets/img/ihave.png' ?>" alt="Я маю право">
            </a>
            <a href="http://www.sqe.gov.ua">
                <img width="320" height="280" class="pravo" src="<?php echo ASSETS_PATH . '/assets/img/tmp.png' ?>" alt="pravo">
            </a>
        </div>
    </div>
</section>


<script src="<?php echo ASSETS_PATH . '/assets/js/main.js'?>"></script>
<?php wp_footer(); ?>
</body>

</html>