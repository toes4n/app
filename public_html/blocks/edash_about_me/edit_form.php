<?php

class block_edash_about_me_edit_form extends block_edit_form {

    protected function specific_definition($mform) {

        global $CFG;

        // Section header title according to language file.
        $mform->addElement('header', 'config_header', get_string('blocksettings', 'block'));
        
        // Title
        $mform->addElement('text', 'config_title', get_string('config_title', 'theme_edash'));
        $mform->setDefault('config_title', 'I’m Ashlika, The Kitchen Coach');
        $mform->setType('config_title', PARAM_RAW);

        // Content
        $mform->addElement('textarea', 'config_body', get_string('config_body', 'theme_edash'));
        $mform->setDefault('config_body', 'I’ve been wanting to write this for a long time. Getting something off my chest that is both important and necessary. This is written for men, to men and will lay bare the out-of-control situation that exists for us today.');
        $mform->setType('config_body', PARAM_RAW);

        // Button Text
        $mform->addElement('text', 'config_btn', get_string('config_btn', 'block_edash_about_me'));
        $mform->setDefault('config_btn', 'Find Courses');
        $mform->setType('config_btn', PARAM_RAW);

        // Button Link
        $mform->addElement('text', 'config_btn_link', get_string('config_btn_link', 'block_edash_about_me'));
        $mform->setDefault('config_btn_link', $CFG->wwwroot . '/course');
        $mform->setType('config_btn_link', PARAM_RAW);

        // Section Image header title according to language file.
        $mform->addElement('header', 'config_image_heading', get_string('config_image_heading', 'theme_edash'));

        $mform->addElement('static', 'config_image_doc', '<b><a style="color: var(--primaryColor)" href="https://docs.envytheme.com/envydoc/edash-moodle-theme-documentation/faqs/how-to-make-image-url/" target="_blank">Doc link: How to make Image URL?</a></b>'); 
            
        // Shape Image
        $mform->addElement('text', 'config_img', 'About Me Image URL');
        $mform->setType('config_img', PARAM_TEXT);

        // Shape Image
        $mform->addElement('text', 'config_shape_img', 'Shape Image URL');
        $mform->setType('config_shape_img', PARAM_TEXT);
    }
}
