<section class="entry-screen">
    <div class="container-box d-flex flex-column flex-lg-row justify-content-between aos-init">
        <div class="entry-screen__text aos-init aos-animate">
            <?php if (is_array(get_field('entry_screen_texts'))) : ?>
            <h1>
                <?php if (get_field('entry_screen_texts')['title_h1']) :
                    echo get_field('entry_screen_texts')['title_h1'];
                endif;
                ?></h1>
            <?php if (get_field('entry_screen_texts')['summary_text']) : ?>
            <p class="summary">
                <?php echo get_field('entry_screen_texts')['summary_text'];
                endif;
                ?>
            </p></div>
        <?php endif; ?>
        <?php render_video_with_poster('video_fields', 'entry-screen__video aos-init', 'clouds'); ?>
    </div>
</section>
