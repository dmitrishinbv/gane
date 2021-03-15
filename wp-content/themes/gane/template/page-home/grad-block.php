<?php global $theme_uri; ?>
<section class="scroll-out" id='line-container'>
    <div class="linear-grad__container">
        <section class="grad-block">
            <div class="container-box--full d-flex flex-column-reverse flex-md-row justify-content-between">
                <div class="grad-block__left" data-aos="fade up">
                    <?php render_video_with_poster('left_column_video_fields', 'grad-block__left__img', 'sky'); ?>
                </div>
                <div class="grad-block__right d-flex flex-column justify-content-center" data-aos="fade up">
                    <h2><?php echo get_field('right_column_h2_title'); ?></h2>
                    <h4><?php echo get_field('right_column_h4_title'); ?></h4>
                    <p><?php echo get_field('right_column_summary_text'); ?></p>
                </div>
            </div>
        </section>
        <div class="container-box">
            <section class="home-phrase" data-aos="fade up" data-aos-anchor-placement="center-bottom">
                <h2><?php echo get_field('h2_title_home_phrase'); ?></h2>
            </section>
        </div>
    </div>

    <section class="home-grad-block">
        <div class="container-box--full d-flex flex-column flex-md-row justify-content-between">
            <div class="home-grad-block__left" data-aos="fade up" data-line-switch>
                <div class="home-grad-block__left__content">
                    <h2><?php echo get_field('grad_block_left_column_h2_title'); ?></h2>
                    <p><?php echo get_field('grad_block_left_column_summary'); ?></p>
                    <a href="#" class="btn--link"><?php echo get_field('grad_block_left_column_link_text'); ?></a>
                </div>
            </div>
            <div class="home-grad-block__right" data-aos="fade up">
                <?php render_video_with_poster('right_column_video_fields', 'home-grad-block__right__img', 'fog', 'fade up'); ?>
            </div>
        </div>
    </section>
    <?php if (is_array(get_field('fuel_structure_block'))) : ?>
        <div class="linear-grad-2__container">
            <div class="container-box">
                <section class="fuel-structure d-flex align-items-center justify-content-center">
                    <div class="fuel-structure__left" data-aos="fade up">
                        <div class="fuel-structure__left__drop"
                             style="background-image: url('<?php echo get_field('fuel_structure_block')['background_image'] ?>')">
                            <img class="lazy"
                                 data-src="<?php echo get_field('fuel_structure_block')['fuel_structure_image'] ?>"
                                 alt="#">
                            <?php if (is_array(get_field('fuel_structure_block')['fuel_structure_components'])) : ?>
                                <div class="fuel-structure__left__text">
                                    <?php
                                    for ($i = 1; $i < 5; $i++) :
                                        $key = 'component' . $i;
                                        if (get_field('fuel_structure_block')['fuel_structure_components'][$key]) :
                                            echo "<span>" . get_field('fuel_structure_block')['fuel_structure_components'][$key] . "</span>";
                                        endif;
                                    endfor; ?>
                                    <p><?php echo get_field('fuel_structure_block')['fuel_structure_components']['fuel_structure_final_text']; ?></p>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="fuel-structure__right" data-aos="fade up">
                        <h2><?php echo get_field('fuel_structure_block')['fuel_structure_components']['fuel_structure_right_column_h2_title']; ?></h2>
                        <p><?php echo get_field('fuel_structure_block')['fuel_structure_components']['fuel_structure_right_column_summary']; ?></p>
                        <a href="#"
                           class="btn--link"><?php echo get_field('fuel_structure_block')['fuel_structure_components']['fuel_structure_right_column_ link_text']; ?></a>
                    </div>
                </section>
            </div>

            <div class="container-box">
                <section class="graph-cta d-flex align-items-center">
                    <div class="graph-cta__text" data-aos="fade up">
                        <h2><?php echo get_field('fuel_structure_block')['alternative_fuels_h2_title']; ?></h2>
                        <p><?php echo get_field('fuel_structure_block')['alternative_fuels_summary']; ?></p>
                        <a href="#"
                           class="btn--link"><?php echo get_field('fuel_structure_block')['alternative_fuels_link_text']; ?></a>
                    </div>
                    <div class="graph-cta__graph flex-center" data-aos="fade up">
                        <img src="<?php echo $theme_uri . "/images/graph/Combined_Shape.svg"; ?>" alt="#">
                    </div>
                </section>
            </div>
        </div>
    <?php endif; ?>
</section>