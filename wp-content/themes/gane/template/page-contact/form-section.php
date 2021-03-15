<?php global $theme_options; ?>

<section class="form__block d-flex">
    <div class="form__block__left" data-aos="fade up">
        <h4><?php echo get_field('contact_form_texts') ['contact_form_location_title']; ?></h4>
        <p><?php echo $theme_options['company_location']; ?></p>
        <h4><?php echo get_field('contact_form_texts') ['contact_form_call_title']; ?></h4>
        <p><?php echo $theme_options['company_contact_person']; ?><br>
            <a href="callto:+<?php echo preg_replace("/[^0-9]/", '',
                $theme_options['company_phone']); ?>"><?php echo $theme_options['company_phone'] ?></a>
        </p>
    </div>

    <div class="form__block__right" data-aos="fade up">
        <form action="#" class="form d-flex flex-column">
            <div class="field-wrap">
                <label class="control-label" for="name">
                    <?php echo get_field('contact_form_texts') ['name_label']; ?>
                </label>
                <input type="text" class="form-control" id="name" name="name"/>
            </div>
            <div class="field-wrap">
                <label class="control-label" for="mobile">
                    <?php echo get_field('contact_form_texts') ['mobile_number_label']; ?>
                </label>
                <input type="text" class="form-control" id="mobile" name="mobile"/>
            </div>
            <div class="field-wrap">
                <label class="control-label" for="email">
                    <?php echo get_field('contact_form_texts') ['email_label']; ?>
                </label>
                <input type="email" class="form-control" id="email" name="email"/>
            </div>
            <div class="field-wrap">
                <select name="reasons" id="reasons" class="form-control form__select2">
                    <option></option>
                    <option value="1">
                        <?php echo get_field('contact_form_texts') ['form_select_option1']; ?>
                    </option>
                    <option value="2">
                        <?php echo get_field('contact_form_texts') ['form_select_option2']; ?>
                    </option>
                    <option value="3">
                        <?php echo get_field('contact_form_texts') ['form_select_option3']; ?>
                    </option>
                </select>
            </div>
            <div class="field-wrap">
                <label class="control-label" for="message">
                    <?php echo get_field('contact_form_texts') ['message_label']; ?>
                </label>
                <textarea type="text" class="form-control" id="message" name="message"></textarea>
            </div>
            <button class="btn--blue--primary align-self-end form__submit__btn" type="submit">
                <span><?php echo get_field('contact_form_texts') ['form_submit_button_text']; ?></span>
            </button>
        </form>
        <div class="form__submit__thank-you">
            <h4><?php echo get_field('contact_form_texts') ['success_message_title']; ?></h4>
            <p><b><?php echo get_field('contact_form_texts') ['success_message_text']; ?></b></p>
        </div>
    </div>
</section>