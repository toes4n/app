<?php

class block_edash_why_choose_us_edit_form extends block_edit_form {

    protected function specific_definition($mform) {

        global $CFG;
        $edashFontList = include($CFG->dirroot . '/theme/edash/inc/font_handler/edash_font_select.php');

        // Section header title according to language file.
        $mform->addElement('header', 'config_header', get_string('blocksettings', 'block'));
        
        // Class
        $mform->addElement('text', 'config_class', get_string('config_class', 'theme_edash'));
        $mform->setDefault('config_class', '');
        $mform->setType('config_class', PARAM_RAW);

        // Top Title
        $mform->addElement('text', 'config_top_title', get_string('config_top_title', 'theme_edash'));
        $mform->setDefault('config_top_title', 'WHY CHOOSE US?');
        $mform->setType('config_top_title', PARAM_RAW);

        // Title
        $mform->addElement('text', 'config_title', get_string('config_title', 'theme_edash'));
        $mform->setDefault('config_title', 'Learn the Latest Top Skills');
        $mform->setType('config_title', PARAM_RAW);

        // Content
        $mform->addElement('textarea', 'config_body', get_string('config_body', 'theme_edash'), 'wrap="virtual" rows="6" cols="50"');

        // Button Text
        $mform->addElement('text', 'config_button_text', get_string('config_button_text', 'theme_edash'));
        $mform->setDefault('config_button_text', 'Get Started For Free');
        $mform->setType('config_button_text', PARAM_RAW);

        // Button Link
        $mform->addElement('text', 'config_button_link', get_string('config_button_link', 'theme_edash'));
        $mform->setDefault('config_button_link', $CFG->wwwroot . '/course');
        $mform->setType('config_button_link', PARAM_RAW);

        // Section Image header title according to language file.
        $mform->addElement('header', 'config_image_heading', get_string('config_image_heading', 'theme_edash'));

        $mform->addElement('static', 'config_image_doc', '<b><a style="color: var(--primaryColor)" href="https://docs.envytheme.com/envydoc/edash-moodle-theme-documentation/faqs/how-to-make-image-url/" target="_blank">Doc link: How to make Image URL?</a></b>');

        // Shape Images
        $mform->addElement('text', 'config_img', ' Image');
        $mform->setType('config_img', PARAM_TEXT);
    }
}
