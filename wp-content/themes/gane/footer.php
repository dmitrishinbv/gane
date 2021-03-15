<?php global $theme_uri; global $theme_options; ?>

<div class="footer d-flex flex-column flex-lg-row justify-content-between">
    <div class="footer__img">
        <a href="<?php echo get_home_url(); ?>">
            <img src="<?php echo $theme_uri.'/images/logos/logo.svg'; ?>" alt="Gane Energy Logo">
        </a>
    </div>
    <div class="footer__item">
        <ul>
            <li><a href="<?php echo get_home_url(); ?>" class="btn--link">HOME</a></li>
            <li><a href="#" class="btn--link">ENVIRONMENTAL IMPACT</a></li>
            <li><a href="#" class="btn--link">WHY GANE FUEL</a></li>
            <li><a href="#" class="btn--link">CORPORATE PROFILE</a></li>
        </ul>
    </div>
    <div class="footer__item">
        <ul>
            <li><a href="<?php echo get_home_url(); ?>/blog" class="btn--link">NEWS & INSIGHTS</a></li>
            <li><a href="<?php echo get_home_url(); ?>/contact" class="btn--link">Contact</a></li>
            <li><a href="#" class="btn--link">Privacy Policy</a></li>
            <li><a href="#" class="btn--link">Terms & Conditions</a></li>
        </ul>
    </div>
    <div class="footer__item">
        <p><?php echo $theme_options['commercialisation_title'] ?></p>
        <p><?php echo $theme_options['commercialisation_summary'] ?></p>
    </div>
</div>

<footer class="footer d-flex flex-column flex-sm-row align-items-center justify-content-center justify-content-sm-between">
    <div class="footer__social d-flex align-items-center">
        <a href="<?php echo $theme_options['linkedin_link'] ?>" class="mr-3">
            <img src="<?php echo $theme_uri.'/images/social/linkedin.svg' ?>" alt="LinkedIn Logo">
        </a>
        <a href="<?php echo $theme_options['twitter_link'] ?>">
            <img src="<?php echo $theme_uri.'/images/social/twitter.svg' ?>" alt="Twitter Logo">
        </a>
    </div>
    <p class="rights-text"><?php echo $theme_options['copyright_text'] ?> <?php echo  date('Y'); ?></p>
    <a href="#">
        <img src="<?php echo $theme_uri.'/images/logos/true.svg' ?>" alt="True Logo" class="footer__true-logo">
    </a>
</footer>

<?php
do_action('footer_script');
wp_footer();
?>

</body>
</html>