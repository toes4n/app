<?php

class block_edash_become_instructor_three_edit_form extends block_edit_form {

    protected function specific_definition($mform) {

        global $CFG;
        $edashFontList = include($CFG->dirroot . '/theme/edash/inc/font_handler/edash_font_select.php');

        // Section header title according to language file.
        $mform->addElement('header', 'config_header', get_string('blocksettings', 'block'));

        $mform->addElement('select', 'config_style', get_string('config_style', 'theme_edash'), array(1 => 'Style 1', 2 => 'Style 2', 3 => 'Style 3', 4 => 'Style 4'));
        $mform->setDefault('config_style', 1);

        // Section
        $mform->addElement('text', 'config_class', get_string('config_class', 'theme_edash'));
        $mform->setType('config_class', PARAM_RAW);
        
        // Title
        $mform->addElement('text', 'config_title', get_string('config_title', 'theme_edash'));
        $mform->setDefault('config_title', 'Become an Instructor And Join with us');
        $mform->setType('config_title', PARAM_RAW);

        // Subtitle
        $mform->addElement('text', 'config_subtitle', get_string('config_subtitle', 'theme_edash'));
        $mform->setDefault('config_subtitle', 'Explore all of our courses and pick your suitable ones to enroll and start learning with us!');
        $mform->setType('config_subtitle', PARAM_RAW);

        // Button Text
        $mform->addElement('text', 'config_button_text', get_string('config_button_text', 'theme_edash'));
        $mform->setDefault('config_button_text', 'Start Teaching Today');
        $mform->setType('config_button_text', PARAM_RAW);

        // Button Link
        $mform->addElement('text', 'config_button_link', get_string('config_button_link', 'theme_edash'));
        $mform->setDefault('config_button_link', $CFG->wwwroot . '/course');
        $mform->setType('config_button_link', PARAM_RAW);

        // Button Icon URL
        $mform->addElement('text', 'config_btn_img', 'Button Icon Image URL');
        $mform->setType('config_btn_img', PARAM_TEXT);

        // Section Image header title according to language file.
        $mform->addElement('header', 'config_image_heading', get_string('config_image_heading', 'theme_edash'));

        $mform->addElement('static', 'config_image_doc', '<b><a style="color: var(--primaryColor)" href="https://docs.envytheme.com/envydoc/edash-moodle-theme-documentation/faqs/how-to-make-image-url/" target="_blank">Doc link: How to make Image URL?</a></b>'); 
            
        // Images
        $mform->addElement('text', 'config_img', 'Section Image URL');
        $mform->setType('config_img', PARAM_TEXT);

        // Shape Image One
        $mform->addElement('text', 'config_shape_img', 'Shape Image One URL');
        $mform->setType('config_shape_img', PARAM_TEXT);

        // Shape Image Two
        $mform->addElement('text', 'config_shape_img2', 'Shape Image Two URL');
        $mform->setType('config_shape_img2', PARAM_TEXT);
    }
}
