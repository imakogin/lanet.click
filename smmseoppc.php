<?php
/*
Template Name: SMM-SEO-ADS
*/
?>
<?php get_header(); ?>
<div class="first-scr-ssp">
    <?php
    $image = get_field('ssp_mainimg'); // Получение массива изображения из ACF

    if (!empty($image)) {
        $image_url = $image['url']; // URL изображения
        $image_alt = $image['alt']; // Альтернативный текст

        // Вывод изображения с URL и альтернативным текстом
        echo '<img class="smm-h" src="' . esc_url($image_url) . '" alt="' . esc_attr($image_alt) . '">';
    }
    ?>
    <?php
    $image = get_field('ssp_mainimg_mob'); // Получение массива изображения из ACF

    if (!empty($image)) {
        $image_url = $image['url']; // URL изображения
        $image_alt = $image['alt']; // Альтернативный текст

        // Вывод изображения с URL и альтернативным текстом
        echo '<img class="smm-h-m" src="' . esc_url($image_url) . '" alt="' . esc_attr($image_alt) . '">';
    }
    ?>
    <div class="f-text1smm">
        <h5 class="text4f"><?php the_field('opys_zag_ssp'); ?></h5>
        <div class="btn-first-nor"><button class="btn-first cta-b" data-form-name="first-scr-ssp"><?php the_field('tekst_knopky_sli_ssp'); ?></button></div>
    </div>
</div>

<div class="scscr-ssp">
    <div class="bread">
        <img id="homebread" src="/wp-content/uploads/2023/04/bread.svg">
        <?php if (function_exists('aioseo_breadcrumbs')) aioseo_breadcrumbs(); ?>
    </div>
</div>
<div class="scscr-ssp2">
    <h1 class="h1smm"><?php the_field('nazva_poslugy_ssp'); ?></h1>
    <p class="pscp"><?php the_field('opys_poslugy_ssp'); ?></p>
    <?php
    $image = get_field('soty_posl_ssp_pc'); // Получение массива изображения из ACF

    if (!empty($image)) {
        $image_url = $image['url']; // URL изображения
        $image_alt = $image['alt']; // Альтернативный текст

        // Вывод изображения с URL и альтернативным текстом
        echo '<img loading="lazy" class="smm-s" src="' . esc_url($image_url) . '" alt="' . esc_attr($image_alt) . '">';
    }
    ?>
    <div class="slider-mobsmm">
        <?php
        $images = get_field('soty_posl_ssp');
        if ($images) : ?>
            <div class="sliderssp">
                <?php foreach ($images as $image) : ?>
                    <div class="slidessp">
                        <img loading="lazy" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>
</div>

<div class="ad_nab">
    <div class="container">
        <h2 class="case-nab-h2"><?php the_field('zagolovok_dlya_kejsiv'); ?></h2>
        <p class="case-nab-p"><?php the_field('tekst_pid_zagolovkom_k'); ?></p>
        <div class="case_nab_posts swiper">
            <?php
            $cases = get_field('cases');
            if (!empty($cases)) {
                $ids = array_map(function ($case) {
                    return $case['chose_page'];
                }, $cases);
            }


            if (!empty($ids)) {
                $args = array(
                    'post_type' => 'page',
                    'post_status' => 'publish',
                    'paged' => $paged,
                    'post__in' => $ids,
                    'orderby' => 'date',
                    'order' => 'DESC'
                );

                $my_query = new WP_Query($args);
                //var_dump($my_query);
                if ($my_query->have_posts()) : ?>
                    <div class="swiper-wrapper">
                        <?php while ($my_query->have_posts()) : $my_query->the_post();
                            $preview = get_field('preview', get_the_ID());
                        ?>
                            <div class="custom-column swiper-slide">
                                <?php if (has_post_thumbnail()) : ?>
                                    <a href="<?php the_permalink(); ?>">
                                        <img loading="lazy" class="com-case-img" src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
                                    </a>
                                <?php endif; ?>
                                <div class="ad_nab_content">
                                    <h3>
                                        <a class="com-case-h3" href="<?php the_permalink(); ?>">
                                            <?php echo !empty($preview['title']) ?  $preview['title'] : ''; ?>
                                        </a>
                                    </h3>
                                    <?php echo !empty($preview['main_text']) ? $preview['main_text'] : '' ?>
                                    <span>
                                        <?php echo !empty($preview['subtext']) ? $preview['subtext'] : '' ?>
                                    </span>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    </div>
            <?php
                endif;
            }
            wp_reset_query();
            ?>
            <div class="swiper-pagination"></div>
            <?php
            $link_btn = get_field('link_btn');
            if (!empty($link_btn)) :
            ?>
                <a class="btn-nab-case" target="blank" href="<?php echo !empty($link_btn['url']) ? esc_url($link_btn['url']) : ''; ?>">
                    <?php echo $link_btn['title']; ?>
                </a>
            <?php endif; ?>

        </div>


    </div>
</div>

<div class="masthev-ssp">
    <div class="row">
        <div class="col-md-m-1">
            <?php
            $image = get_field('foto_komandy_ssp'); // Получение массива изображения из ACF

            if (!empty($image)) {
                $image_url = $image['url']; // URL изображения
                $image_alt = $image['alt']; // Альтернативный текст

                // Вывод изображения с URL и альтернативным текстом
                echo '<img loading="lazy" class="masthave-team" src="' . esc_url($image_url) . '" alt="' . esc_attr($image_alt) . '">';
            }
            ?>
        </div>
        <div class="col-md-m-2">
            <h4><?php the_field('why_zag_ssp'); ?></h4>
            <p class="masthev-t"><?php the_field('why_its_tekst_ssp'); ?></p>
            <button class="btn-first masthev-b cta-b" data-form-name="masthev-ssp"><?php the_field('tekst_na_knopczi'); ?></button>
        </div>
        <div class="swiper partners-slider-wrapper">
            <?php
            $partners = get_field('partners_slider');
            //var_dump($partners);
            if (!empty($partners)) :
            ?>
                <div class="partners-slider swiper-wrapper">
                    <?php
                    foreach ($partners as $partner) {
                        $img = !empty($partner['image']) ? $partner['image'] : false;
                    ?>
                        <div class="swiper-slide">
                            <img height="<?php echo !empty($img['height']) ? esc_attr($img['height']) : ''; ?>" width="<?php echo !empty($img['width']) ? esc_attr($img['width']) : ''; ?>" alt="<?php echo !empty($img['alt']) ? esc_attr($img['alt']) : ''; ?>" src="<?php echo !empty($img['url']) ? esc_url($img['url']) : ''; ?>">
                        </div>

                    <?php }
                    ?>
                </div>
            <?php endif; ?>
            <div class="swiper-pagination"></div>
        </div>
    </div>
</div>
<div class="prop-ssp-wrapper">
    <div class="prop-ssp">
        <h2 class="prop-h2"><?php the_field('zagolovok_prop_ssp'); ?></h2>
        <p class="prop-p"><?php the_field('pidzagolovok_prop_ssp'); ?></p>
        <div class="slider-container swiper prop-ssp-slide">
            <div class="slider8 swiper-wrapper">
                <?php if (have_rows('slide_prop_ssp')) : ?>
                    <?php while (have_rows('slide_prop_ssp')) : the_row(); ?>
                        <div class="slide8 swiper-slide" data-show-image="true">
                            <img loading="lazy" class="prop-img" src="<?php the_sub_field('ikonka_sli_ssp'); ?>" alt="">
                            <h3><a class="prop-h3" href="<?php the_sub_field('link_sli_prosp_ssp'); ?>"><?php the_sub_field('tekst_sli_prosp_ssp'); ?></a></h3>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
</div>


<div class="etapy-ssp">
    <div class="container">
        <h2><?php the_field('zag_et_ssp'); ?></h2>
        <p class="etapy-pz"><?php the_field('pidzag_et_ssp'); ?></p>
        <?php
        $etaps = get_field('etaps');
        //var_dump($etaps);

        $odd = array_filter($etaps, function ($key) {
            return $key % 2 !== 0;
        }, ARRAY_FILTER_USE_KEY);

        // Фильтрация элементов с четными индексами
        $even = array_filter($etaps, function ($key) {
            return $key % 2 === 0;
        }, ARRAY_FILTER_USE_KEY);

        // Переиндексация массивов для корректного отображения индексов
        $odd = array_values($odd);
        $even = array_values($even);
        //print_r('<pre>');
        //print_r($odd);
        //print_r('</pre>');
        //print_r('<pre>');
        //print_r($even);
        //print_r('</pre>');
        ?>
        <div id="blocks-pc">
            <div class="row">
                <div class="col-md-1-1 left">
                    <?php
                    $indextwo = 2;
                    foreach ($odd as $od) { ?>
                        <div class="block-content">
                            <div class="trih-zag">
                                <p class="trih-num"><?php echo $indextwo; ?>.</p>
                            </div>
                            <div>
                                <h4 class="trih-h4"><?php echo $od['title']; ?></h4>
                                <p class="trih-p2"><?php echo $od['text']; ?></p>
                            </div>
                        </div>
                    <?php
                        $indextwo += 2;
                    }
                    ?>
                </div>
                <div class="col-md-1-2">
                    <img loading="lazy" src="/wp-content/uploads/2023/08/howwew.svg" alt="">
                </div>
                <div class="blocks-pc-mob">
                    <?php
                    $indexmob = 1;
                    foreach ($etaps as $etap) { ?>
                        <div class="block-content">
                            <div class="trih-zag">
                                <p class="trih-num"><?php echo $indexmob; ?>.</p>
                            </div>
                            <div>
                                <h4 class="trih-h4"><?php echo $etap['title']; ?></h4>
                                <p class="trih-p2"><?php echo $etap['text']; ?></p>
                            </div>
                        </div>
                    <?php
                        $indexmob++;
                    }
                    ?>
                </div>
                <div class="col-md-1-1">
                    <?php
                    $indextwo = 1;
                    foreach ($even as $ev) { ?>
                        <div class="block-content">
                            <div class="trih-zag">
                                <p class="trih-num"><?php echo $indextwo; ?>.</p>
                            </div>
                            <div>
                                <h4 class="trih-h4"><?php echo $ev['title']; ?></h4>
                                <p class="trih-p2"><?php echo $ev['text']; ?></p>
                            </div>
                        </div>
                    <?php
                        $indextwo += 2;
                    }
                    ?>
                </div>
                <?php
                $data_id = 4;
                if ('en' == $current_lang) {
                    $data_id = 6;
                } elseif ('ru' == $current_lang) {
                    $data_id = 5;
                }
                ?>
            </div>
            <a class="cta-b" data-form-id="<?php echo $data_id; ?>" href="#" data-form-name="blocks-pc-main-page">
                    <?php echo __('Contact us', 'idol'); ?>
                </a>
        </div>
    </div>
</div>


<div class="tarif-ssp">
    <h2 class="tarif-h2"><?php the_field('zagolovok_tsina'); ?></h2>
    <div class="container">
        <div class="row tarif-slider">
            <?php if (have_rows('czina_tsina')) : ?>
                <?php while (have_rows('czina_tsina')) : the_row(); ?>
                    <div class="col-md-4">
                        <?php if (get_sub_field('top_taryf') == 'yes') : ?>
                            <img loading="lazy" class="top-tarif-i" src="<?php _e('/wp-content/uploads/2023/10/top-def.svg', 'lanetclick'); ?>" alt="">
                        <?php endif; ?>
                        <div class="tarif">
                            <h3><?php the_sub_field('nazva_taryfu_tsina'); ?></h3>
                            <img loading="lazy" class="tarif-image" src="/wp-content/uploads/2023/03/sotahov.svg" alt="" style="display:none;">
                            <div class="services">
                                <?php
                                $counter = 0;
                                if (have_rows('poslugy_shho_vhodyat_tsina')) :
                                    while (have_rows('poslugy_shho_vhodyat_tsina')) : the_row();
                                        $is_visible = $counter < 5 ? '' : ' style="display:none;"';
                                ?>
                                        <div class="service" <?php echo $is_visible; ?>>
                                            <span><?php echo strip_tags(get_sub_field('mitka_posluha_tsina')); ?></span> <?php echo strip_tags(get_sub_field('posluga_tsina')); ?>
                                        </div>
                                <?php
                                        $counter++;
                                    endwhile;
                                endif;
                                ?>
                            </div>
                            <div class="description" style="display:none;"><?php the_sub_field('tekst_dodatkovyj_tsina'); ?></div>
                            <span class="details-toggle"><?php _e('More', 'lanetclick'); ?></span>
                            <div class="price"><?php the_sub_field('vartist_tsina'); ?></div>
                            <div><a class="order-btn cta-b" data-form-name="tarif-ssp"><?php _e('Order', 'lanetclick'); ?></a></div>
                            <span class="hide-toggle" style="display:none;"><?php _e('Hide', 'lanetclick'); ?></span>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</div>


<div class="vidhuki">
    <h2 class="case-h2"><?php the_field('h2_vidguki', 'options'); ?></h2>
    <p class="vidhuk-p"><?php the_field('vidguki_opis', 'options'); ?></p>
    <div class="slider-container3">
        <img loading="lazy" class="mnogog" src="/wp-content/uploads/2023/03/mnogogr.svg">
        <div class="slider3">
            <?php if (have_rows('vidguk', 'options')) : ?>
                <?php while (have_rows('vidguk', 'options')) : the_row(); ?>
                    <div class="slide3">
                        <img loading="lazy" class="lapki" src="/wp-content/uploads/2023/03/lapki.svg">
                        <div class="stars"></div>
                        <p class="vidguk-t"><?php the_sub_field('vidguk_text', 'options'); ?></p>
                        <p class="consumer"> - <?php the_sub_field('avtor_vidguku', 'options'); ?></p>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</div>
<div class="faq">
    <h2><?php the_field('zagolovok_faq'); ?></h2>
    <p><?php the_field('pidzagolovok_faq'); ?></p>
    <div class="faq-container">
        <?php
        $faqs = get_field('pytannya');
        foreach ($faqs as $faq) :
            $question = $faq['pytannya_faq'];
            $answer = $faq['vidpovid_faq'];
        ?>
            <div class="faq-item">
                <div class="faq-question">
                    <h4><?php echo $question; ?></h4>
                    <img loading="lazy" src="https://lanet.click/wp-content/uploads/2023/04/faq-arrow.svg" class="faq-arrow">
                </div>
                <div class="faq-answer">
                    <img loading="lazy" src="https://lanet.click/wp-content/uploads/2023/03/sotahov.svg" class="faq-answer-img">
                    <p class="answers"><?php echo $answer; ?></p>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

    <script>
        var faqs = document.querySelectorAll('.faq-item');
        faqs.forEach(function(faq) {
            var question = faq.querySelector('.faq-question');
            var answer = faq.querySelector('.faq-answer');
            var arrow = faq.querySelector('.faq-arrow');
            question.addEventListener('click', function() {
                answer.classList.toggle('show');
                arrow.classList.toggle('rotate');
            });
        });
    </script>

</div>
<div class="cta">
    <div class="container">
        <div class="row">
            <div class="col-md-3-1">
                <p class="cta-z"><?php the_field('zagolovok_cta'); ?></p>
                <p class="cta-zyall"><?php the_field('zagolovok_cta_y'); ?></p>
                <p class="cta-z"><?php the_field('zagolovok_cta2'); ?></p>
                <p class="cta-pzall"><?php the_field('pid_zagolovkom_cta'); ?></p>
            </div>
            <div class="col-md-3-2">
                <div class="cta-o"><?php the_field('opys_cta'); ?></div>
                <a class="cta-b" data-form-name="cta"><?php the_field('tekst_na_knopczi_sta'); ?></a>
            </div>
        </div>
    </div>
</div>
<?php
get_footer();
?>