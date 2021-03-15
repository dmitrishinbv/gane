<?php
if (!function_exists('render_video_with_poster')) :
    function render_video_with_poster($field_group_key, $container_class, $video_id, $data_aos = false, $has_div_container = true)
    {
        $div = ($data_aos) ? "<div class=" . '"' . $container_class . '" data-aos="' . $data_aos . '">' : "<div class=" . '"' . $container_class . '">';
        if (is_array(get_field($field_group_key))) : ?>
            <?php if ($has_div_container) : echo $div; endif; ?>
            <video class="lazy" id="<?php echo $video_id; ?>"
                   poster="<?php echo get_field($field_group_key)['poster_image']; ?>"
                   muted autoplay loop>
                <?php if (get_field($field_group_key)['mp4_video']) : ?>
                    <source type="video/mp4" data-src="<?php echo get_field($field_group_key)['mp4_video']; ?>"/>
                <?php endif; ?>
                <?php if (get_field($field_group_key)['webm_video']) : ?>
                    <source type=video/webm" data-src="<?php echo get_field($field_group_key)['webm_video']; ?>"/>
                <?php endif; ?>
                <?php if (get_field($field_group_key)['ogv_video']) : ?>
                    <source type="video/ogg" data-src="<?php echo get_field($field_group_key)['ogv_video']; ?>"/>
                <?php endif; ?>
            </video>
            <?php if ($has_div_container) : echo '</div>'; endif; ?>
        <?php endif;
    }
endif;