<?php

class block_edash_stories_area_edit_form extends block_edit_form {

    protected function specific_definition($mform) {

        global $CFG;

        // Section header title according to language file.
        $mform->addElement('header', 'config_header', get_string('blocksettings', 'block'));

        $mform->addElement('select', 'config_style', get_string('config_style', 'theme_edash'), array(1 => 'Style 1', 2 => 'Style 2',));
        $mform->setDefault('config_style', 1);

        // Title
        $mform->addElement('text', 'config_title', get_string('config_title', 'theme_edash'));
        $mform->setDefault('config_title', 'Affordable online courses and learning opportunities​');
        $mform->setType('config_title', PARAM_RAW);

        // Content
        $mform->addElement('textarea', 'config_body', get_string('config_body', 'theme_edash'), 'wrap="virtual" rows="6" cols="50"');

        //  Button Text
        $mform->addElement('text', 'config_btn', get_string('config_button_text', 'theme_edash'));
        $mform->setDefault('config_btn', 'View All Stories');
        $mform->setType('config_btn', PARAM_RAW);

        //  Button Link
        $mform->addElement('text', 'config_btn_link', get_string('config_button_link', 'theme_edash'));
        $mform->setDefault('config_btn_link', '#');
        $mform->setType('config_btn_link', PARAM_RAW);

        // Section Image header title according to language file.
        $mform->addElement('header', 'config_image_heading', get_string('config_image_heading', 'theme_edash'));

        $mform->addElement('static', 'config_image_doc', '<b><a style="color: var(--primaryColor)" href="https://docs.envytheme.com/envydoc/edash-moodle-theme-documentation/faqs/how-to-make-image-url/" target="_blank">Doc link: How to make Image URL?</a></b>');
            
        $mform->addElement('text', 'config_img', get_string('config_image', 'theme_edash'));
        $mform->setType('config_img', PARAM_TEXT);

        // Shape Images
        $shape_image_count = 5;
        for($i = 1; $i <= $shape_image_count; $i++) {
            $mform->addElement('text', 'config_shape_img' . $i, ' Shape Image ' . $i);
            $mform->setType('config_shape_img' . $i, PARAM_TEXT);
        }
     
    }
}
