<?php

class block_edash_overview_area_two_edit_form extends block_edit_form {

    protected function specific_definition($mform) {

        global $CFG;

        // Section header title according to language file.
        $mform->addElement('header', 'config_header', get_string('blocksettings', 'block'));
        
        // Title
        $mform->addElement('text', 'config_title', get_string('config_title', 'theme_edash'));
        $mform->setDefault('config_title', 'Industrial business black sheep among white ones');
        $mform->setType('config_title', PARAM_RAW);

        // Content
        $mform->addElement('textarea', 'config_body', get_string('config_body', 'theme_edash'));
        $mform->setDefault('config_body', 'Explore all of our courses and pick your suitable ones to enroll and start learning with us!');
        $mform->setType('config_body', PARAM_RAW);

        // Content
        $mform->addElement('textarea', 'config_quote', get_string('config_quote', 'theme_edash'));
        $mform->setDefault('config_quote', 'It is expected that the vendor will already be providing their services for the county and that the vendor’s system is being updated with results, prior to performing this process');
        $mform->setType('config_quote', PARAM_RAW);

        // Button Text
        $mform->addElement('text', 'config_btn', get_string('config_btn', 'block_edash_overview_area_two'));
        $mform->setDefault('config_btn', 'Register Now');
        $mform->setType('config_btn', PARAM_RAW);

        // Button Link
        $mform->addElement('text', 'config_btn_link', get_string('config_btn_link', 'block_edash_overview_area_two'));
        $mform->setDefault('config_btn_link', $CFG->wwwroot . '/login/signup.php');
        $mform->setType('config_btn_link', PARAM_RAW);

        // Section Image header title according to language file.
        $mform->addElement('header', 'config_image_heading', get_string('config_image_heading', 'theme_edash'));

        $mform->addElement('static', 'config_image_doc', '<b><a style="color: var(--primaryColor)" href="https://docs.envytheme.com/envydoc/edash-moodle-theme-documentation/faqs/how-to-make-image-url/" target="_blank">Doc link: How to make Image URL?</a></b>'); 
            
        // Image
        $mform->addElement('text', 'config_img', 'Overview Area Image URL');
        $mform->setType('config_img', PARAM_TEXT);

        // Shape Image
        $mform->addElement('text', 'config_shape_img', 'Background Image URL');
        $mform->setType('config_shape_img', PARAM_TEXT);
    }
}
