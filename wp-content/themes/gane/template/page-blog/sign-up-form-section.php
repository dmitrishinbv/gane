<?php $page_blog_id = 141; ?>

<div class="row">
    <div class="newsletter-box d-flex flex-column align-items-center">
        <h4><?php echo get_field('newsletter_sign_up', $page_blog_id) ['newsletter_h4_title']; ?></h4>
        <form action="#" class="newsletter-box__form flex-center flex-column flex-lg-row">
            <div class="field-wrap">
                <label class="control-label" for="name">
                    <?php echo get_field('newsletter_sign_up', $page_blog_id) ['newsletter_form_name_label']; ?>
                </label>
                <input type="text" class="form-control" id="name" name="name"/>
            </div>
            <div class="field-wrap">
                <label class="control-label" for="email">
                    <?php echo get_field('newsletter_sign_up', $page_blog_id) ['newsletter_form_email_address_label']; ?>
                </label>
                <input type="email" class="form-control" id="email" name="email"/>
            </div>
            <button class="btn--yellow--primary newsletter-box__submit__btn">
                <span>
                    <?php echo get_field('newsletter_sign_up', $page_blog_id) ['newsletter_form_submit_button_text']; ?>
                </span>
            </button>
        </form>
        <div class="newsletter-box__submit__thank-you flex-center">
            <h4><?php echo get_field('newsletter_sign_up', $page_blog_id) ['form_success_send_msg_title']; ?></h4>
            <p><b><?php echo get_field('newsletter_sign_up', $page_blog_id) ['form_success_send_msg_text']; ?></b></p>
        </div>
    </div>
</div>

</div>
</section>