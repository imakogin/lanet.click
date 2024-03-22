<!--FOOTER-->
<?php
/**
 * The template for displaying the footer.
 *
 * @package lanetclic
 */

 $current_lang = ICL_LANGUAGE_CODE;
?>
<footer>
    <div class="contact-f">
        <div class="container">
            <div class="row-f">
                <div class="col-md-4-1">
                    <div class="cont-fh2"><?php the_field('h2_footer', 'options'); ?></div>
                    <?php if (have_rows('info_footer', 'options')) : ?>
                        <?php while (have_rows('info_footer', 'options')) : the_row(); ?>
                            <div class="h4-f"><?php the_sub_field('h4_footer', 'options'); ?></div>
                            <p class="op-f"><?php the_sub_field('opys_h4_footer', 'options'); ?></p>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
                <div class="col-md-4-2 fixet-position">

                    <div class="h3-bf">
                        <?php the_field('h3_beforeform', 'options'); ?>
                    </div>

                    <?php
                  $data_id = 7;
                  if( 'en' == $current_lang ){
                    $data_id = 9;
                  }
                  elseif( 'ru' == $current_lang ){
                    $data_id = 8;
                  }
                ?>
                    <form data-form-id="<?php echo $data_id;?>" data-form-name="comments" action="/wp-admin/admin-ajax.php" class="footer-form no-click">
                        <div class="loading-indicatorb">
                            <img src="/wp-content/uploads/2023/10/hearts.svg" alt="Loading...">
                        </div>
                        <div class="form-left">
                            <div class="input-wrapper">
                                <input class="smal-l name-input" placeholder="<?php _e('Your name', 'lante.click'); ?>" type="text" name='your-name' autocomplete="name">
                                <span class="error-message"><?php echo _e('Required field', 'lanet.click'); ?></span>
                            </div>
                            <div class="input-wrapper">
                                <input class="smal-l phone-input" placeholder="+380 (XX) XXX XX XX" type="tel" name='phone' autocomplete="phone">
                                <span class="error-message"><?php echo _e('Required field', 'lanet.click'); ?></span>
                            </div>
                            <div class="input-wrapper">
                                <input class="smal-l" placeholder="<?php _e('Email', 'lante.click'); ?>" type="email" name="email" autocomplete="email">
                                <span class="error-message"><?php echo _e('Wrong email', 'lanet.click'); ?></span>
                            </div>
                        </div>
                        <div class='form-right'>
                            <div class="input-wrapper texterial">
                                <textarea cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea big-l" aria-invalid="false" placeholder="<?php _e('Purpose of cooperation', 'lante.click'); ?>" name="comments"></textarea>
                            </div>
                            <div class="form-btn-wrapper">
                                <input class="form-btn send-c" type="submit" value="<?php _e('Send', 'lante.click'); ?>">
                            </div>

                        </div>
                    </form>
                </div>
                <div id="popup-formf" class="popup">
                    <div class="popup-content-tnxf" style="display: none;">
                        <span class="close-btn"><?php _e('Close', 'lanetclick'); ?></span>
                        <div class="h1pptnx"><?php the_field('h1pptnx', 'options'); ?></div>
                        <p class="ppptnx"><?php the_field('p_hopup_tnx', 'options'); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer">
        <div class="cont-s">
            <div class="container">
                <div class="row-f">
                    <div class="col-md-5-1">
                        <div class="logo">
                            <?php if (is_front_page() || is_home()) : ?>
                                <img loading="lazy" src="/wp-content/uploads/2023/03/logo-bl.svg" alt="Logo">
                            <?php else : ?>
                                <a href="<?php echo home_url(); ?>">
                                    <img loading="lazy" src="/wp-content/uploads/2023/03/logo-bl.svg" alt="Logo">
                                </a>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="col-md-5-1">
                        <?php if (have_rows('soczmerezhi_footer', 'options')) : ?>
                            <?php while (have_rows('soczmerezhi_footer', 'options')) : the_row(); ?>
                                <a rel="nofollow" href="<?php the_sub_field('link_soc_footer', 'options'); ?>"><img loading="lazy" class="soc-f" src="<?php the_sub_field('ikonka', 'options'); ?>"></a>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
        <?php wp_nav_menu(array(
            'theme_location'  => 'footer-menu',
            'container'       => 'div',
            'container_class' => 'menu-ff',
            'container_id'    => '',
            'menu_class'      => 'menu-f',
            'menu_id'         => '',
        )); ?>
        <div id="s-menu">
            <div class="s-menu-1">
                <div class="container">
                    <div class="row-f">
                        <div class="col-md-6-1">
                            <nav class="s-m-z">
                                <a href="<?php the_field('zag_col1_url', 'options'); ?>"><?php the_field('zag_col1', 'options'); ?></a></nav>
                            <?php if (have_rows('link_1_blok', 'options')) : ?>
                                <?php while (have_rows('link_1_blok', 'options')) : the_row(); ?>
                                    <nav class="s-m-s"><a href="<?php the_sub_field('link_1_blok', 'options'); ?>"><?php the_sub_field('name_1_blok', 'options'); ?></a></nav>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </div>
                        <div class="col-md-6-1">
                            <nav class="s-m-z"><a href="<?php the_field('zag_col2_url', 'options'); ?>"><?php the_field('zag_col2', 'options'); ?></a></nav>
                            <?php if (have_rows('link_2_blok', 'options')) : ?>
                                <?php while (have_rows('link_2_blok', 'options')) : the_row(); ?>
                                    <nav class="s-m-s"><a href="<?php the_sub_field('link_2_blok', 'options'); ?>"><?php the_sub_field('name_2_blok', 'options'); ?></a></nav>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </div>
                        <div class="col-md-6-1">
                            <nav class="s-m-z"><a href="<?php the_field('zag_col3_url', 'options'); ?>"><?php the_field('zag_col3', 'options'); ?></a></nav>
                            <?php if (have_rows('posylannya_tret_kolonky', 'options')) : ?>
                                <?php while (have_rows('posylannya_tret_kolonky', 'options')) : the_row(); ?>
                                    <nav class="s-m-s"><a href="<?php the_sub_field('link_3col', 'options'); ?>"><?php the_sub_field('nazva_link_3col', 'options'); ?></a></nav>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </div>
                        <div class="col-md-6-1">
                            <nav class="s-m-z"><a href="<?php the_field('zag_col4_url', 'options'); ?>"><?php the_field('zag_col4', 'options'); ?></a></nav>
                            <?php if (have_rows('posylannya_four_kolonky', 'options')) : ?>
                                <?php while (have_rows('posylannya_four_kolonky', 'options')) : the_row(); ?>
                                    <nav class="s-m-s"><a href="<?php the_sub_field('link_4col', 'options'); ?>"><?php the_sub_field('nazva_link_4col', 'options'); ?></a></nav>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="s-menu-2">
                <div class="container">
                    <div class="row-f">
                        <div class="col-md-6-1">
                            <nav class="s-m-z"><a href="<?php the_field('2zag_col1_url', 'options'); ?>"><?php the_field('2zag_col1', 'options'); ?></a></nav>
                            <nav class="s-m-z"><a href="<?php the_field('3zag_col1_url', 'options'); ?>"><?php the_field('3zag_col1', 'options'); ?></a></nav>
                            <nav class="s-m-z"><a href="<?php the_field('4zag_col1_url', 'options'); ?>"><?php the_field('4zag_col1', 'options'); ?></a></nav>
                        </div>
                        <div class="col-md-6-1">
                            <nav class="s-m-z"><a href="<?php the_field('2zag_col2_url', 'options'); ?>"><?php the_field('2zag_col2', 'options'); ?></a></nav>
                            <nav class="s-m-z"><a href="<?php the_field('3zag_col2_url', 'options'); ?>"><?php the_field('3zag_col2', 'options'); ?></a></nav>
                            <nav class="s-m-z"><a href="<?php the_field('4zag_col2_url', 'options'); ?>"><?php the_field('4zag_col2', 'options'); ?></a></nav>
                        </div>
                        <div class="col-md-6-1">
                            <nav class="s-m-z"><a href="<?php the_field('2zag_col3_url', 'options'); ?>"><?php the_field('2zag_col3', 'options'); ?></a></nav>
                            <?php if (have_rows('posylannya_tret_kolonky2', 'options')) : ?>
                                <?php while (have_rows('posylannya_tret_kolonky2', 'options')) : the_row(); ?>
                                    <nav class="s-m-s"><a href="<?php the_sub_field('link_3col2', 'options'); ?>"><?php the_sub_field('nazva_link_3col2', 'options'); ?></a></nav>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </div>
                        <div class="col-md-6-1">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <button id="show-services-btn">
            <img loading="lazy" class="op-cl-btn" src="/wp-content/uploads/2023/03/open-btn.svg" alt=""><br>
            <?php _e('All services', 'lanetclick'); ?>
        </button>
        <div class="line-f"></div>
        <p class="copywrite"><?php the_field('kopirajt', 'options'); ?></p>
    </div>
</footer>
</div>
</div>

<div id="popup-form" class="popup">
    <div class="popup-content">
        <span class="close-btn">
            <?php _e('Close', 'lanetclick'); ?>
        </span>
        <div class="h1pp1">
            <?php the_field('h1pp1', 'options'); ?>
        </div>
        <div class=formpp>
            <div class="loading-indicatorb">
                <img src="/wp-content/uploads/2023/10/hearts.svg" alt="Loading...">
            </div>
            <form action="/wp-admin/admin-ajax.php">
                <div class='header-fields'>
                    <div class="input-wrapper">
                        <input class="smal-l name-input" placeholder="<?php _e('Your name', 'lante.click'); ?>" type="text" name='your-name' autocomplete="name">
                        <span class="error-message"><?php echo _e('Required field', 'lanet.click'); ?></span>
                    </div>
                    <div class="input-wrapper">
                        <input class="smal-l phone-input" placeholder="+380 (XX) XXX XX XX" type="tel" name='phone' autocomplete="phone">
                        <span class="error-message"><?php echo _e('Required field', 'lanet.click'); ?></span>
                    </div>
                </div>
                <div class="input-wrapper">
                    <input class="smal-l" placeholder="<?php _e('Email', 'lante.click'); ?>" type="email" name="email" autocomplete="email">
                    <span class="error-message"><?php echo _e('Wrong email', 'lanet.click'); ?></span>
                </div>
                <div class="input-wrapper texterial">
                    <textarea cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea big-l" aria-invalid="false" placeholder="<?php _e('Purpose of cooperation', 'lante.click'); ?>" name="comments"></textarea>
                </div>
                <input class="form-btn send-c" type="submit" value="<?php _e('Send', 'lante.click'); ?>">
            </form>
        </div>
    </div>
    <div class="popup-content-tnx" style="display: none;">
        <span class="close-btn">
            <?php _e('Close', 'lanetclick'); ?>
        </span>
        <div class="h1pptnx">
            <?php the_field('h1pptnx', 'options'); ?>
        </div>
        <p class="ppptnx">
            <?php the_field('p_hopup_tnx', 'options'); ?>
        </p>
    </div>
</div>
<div id="popup-formm" class="popup">
    <div class="popup-contentm">
        <span class="close-btn">
            <?php _e('Close', 'lanetclick'); ?>
        </span>
        <div class="h1pp3">
            <?php the_field('h1pp3', 'options'); ?>
        </div>
        <div class='formppm'>
            <div class="loading-indicatorb">
                <img src="/wp-content/uploads/2023/10/hearts.svg" alt="Loading...">
            </div>
            <form action="/wp-admin/admin-ajax.php">
                <div class="input-wrapper">
                    <input class="smal-l phone-input" placeholder="+380 (XX) XXX XX XX" type="tel" name='phone' autocomplete="phone">
                    <span class="error-message"><?php echo _e('Required field', 'lanet.click'); ?></span>
                </div>
                <div class="input-wrapper">
                    <input class="smal-l" placeholder="Email" type="email" name="email" autocomplete="email">
                    <span class="error-message"><?php echo _e('Wrong email', 'lanet.click'); ?></span>
                </div>
                <div class="input-wrapper">
                    <input class="smal-l" placeholder="https://" type="text" name="url">
                    <span class="error-message"><?php echo _e('Required field', 'lanet.click'); ?></span>
                </div>
                <button class='form-btn send-c'>
                    <?php _e('Send', 'lante.click'); ?>
                </button>
            </form>
        </div>
        <p class="pppmain">
            <?php the_field('p_hopup_main', 'options'); ?>
        </p>
    </div>
    <div class="popup-content-tnxm" style="display: none;">
        <span class="close-btn">
            <?php _e('Close', 'lanetclick'); ?>
        </span>
        <div class="h1pptnx">
            <?php the_field('h1pptnx', 'options'); ?>
        </div>
        <p class="ppptnx">
            <?php the_field('p_hopup_tnx', 'options'); ?>
        </p>
    </div>
</div>
</body>
<script>
    window.onload = function() {
        if (window.location.href.substr(-1) !== '/') {
            history.replaceState(null, null, window.location.href + '/');
        }
    }
</script>
<script>
    document.addEventListener('DOMContentLoaded', () => {
        // Получаем ссылки на блок и кнопки
        const servicesBlock = document.getElementById('s-menu');
        const showServicesBtn = document.getElementById('show-services-btn');
        const closeServicesBtn = document.createElement('button');
        const closeServicesImg = document.createElement('img');
        const closeServicesText = document.createTextNode('<?php _e('All services', 'lanetclick'); ?>');

        // Функция для установки высоты в зависимости от ширины экрана
        const setInitialHeight = () => {
            if (window.matchMedia('(max-width: 660px)').matches) {
                servicesBlock.style.height = '360px';
            } else if (window.matchMedia('(max-width: 1360px)').matches) {
                servicesBlock.style.height = '220px';
            } else {
                servicesBlock.style.height = '120px';
            }
        };

        // Устанавливаем начальную высоту
        setInitialHeight();

        // Обработчик изменения размера окна
        window.addEventListener('resize', setInitialHeight);

        // Добавляем обработчик событий на кнопку "Всі послуги"
        showServicesBtn.addEventListener('click', () => {
            // Показываем скрытый контент
            servicesBlock.style.height = '100%';

            // Добавляем кнопку "Закрыть"
            closeServicesImg.src = '/wp-content/uploads/2023/03/close-btn.svg';
            closeServicesImg.alt = '<?php _e('All servises', 'lanetclick'); ?>';
            closeServicesBtn.appendChild(closeServicesImg);
            closeServicesBtn.appendChild(document.createElement('br'));
            closeServicesBtn.appendChild(closeServicesText);
            closeServicesBtn.id = 'close-services-btn';
            servicesBlock.appendChild(closeServicesBtn);

            // Скрываем кнопку "Все услуги"
            showServicesBtn.style.display = 'none';
        });

        // Добавляем обработчик событий на кнопку "Закрыть"
        servicesBlock.addEventListener('click', (event) => {
            if (event.target.id === 'close-services-btn' || event.target === closeServicesImg || event.target === closeServicesText) {
                // Возвращаем высоту к начальному значению
                setInitialHeight();

                // Удаляем кнопку "Закрыть"
                servicesBlock.removeChild(closeServicesBtn);

                // Показываем кнопку "Всі послуги"
                showServicesBtn.style.display = 'block';
            }
        });
    });
</script>
<?php //wp_footer();
?>

</html>