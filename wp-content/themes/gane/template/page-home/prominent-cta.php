<section class="prominent-cta flex-center" data-line-stop>
    <?php render_video_with_poster('roadmap_video_fields', '', 'wood', false, false); ?>
    <div class="prominent-cta__content">
        <h2 class="text-white"><?php echo get_field('roadmap_h2_title'); ?></h2>
        <p class="text-white"><?php echo get_field('roadmap_summary_text'); ?></p>
        <div class="prominent-cta__content__buttons d-flex justify-content-center align-items-center">
            <a href="#" class="btn--yellow--primary"><span><?php echo get_field('first_button_text'); ?></span></a>
            <a href="#"
               class="btn--yellow--secondary"><span><?php echo get_field('second_button_text'); ?></span></a>
        </div>
    </div>
</section>