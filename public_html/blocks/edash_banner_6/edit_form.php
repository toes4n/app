<?php

class block_edash_banner_6_edit_form extends block_edit_form {

    protected function specific_definition($mform) {

        global $CFG;

        // Section header title according to language file.
        $mform->addElement('header', 'config_header', get_string('blocksettings', 'block'));

        // Title
        $mform->addElement('text', 'config_title', get_string('config_title', 'theme_edash'));
        $mform->setDefault('config_title', 'Simply certified with the enterprise');
        $mform->setType('config_title', PARAM_RAW);

        // Content
        $mform->addElement('textarea', 'config_body', get_string('config_body', 'theme_edash'), 'wrap="virtual" rows="6" cols="50"');

        // Button Text
        $mform->addElement('text', 'config_btn', get_string('config_btn', 'block_edash_banner_6'));
        $mform->setDefault('config_btn', 'Register Now');
        $mform->setType('config_btn', PARAM_RAW);

        // Button Link
        $mform->addElement('text', 'config_btn_link', get_string('config_btn_link', 'block_edash_banner_6'));
        $mform->setDefault('config_btn_link', $CFG->wwwroot . '/login/signup.php');
        $mform->setType('config_btn_link', PARAM_RAW);

        // Video Button Text
        $mform->addElement('text', 'config_btn_video', get_string('config_btn_video', 'block_edash_banner_6'));
        $mform->setDefault('config_btn_video', 'Watch Video');
        $mform->setType('config_btn_video', PARAM_RAW);

        // Video Button Link
        $mform->addElement('text', 'config_btn_video_link', get_string('config_btn_video_link', 'block_edash_banner_6'));
        $mform->setDefault('config_btn_video_link', 'https://www.youtube.com/watch?v=PWvPbGWVRrU');
        $mform->setType('config_btn_video_link', PARAM_RAW);

        // Video Button Image
        $mform->addElement('text', 'config_btn_img', get_string('config_btn_img', 'theme_edash'));
        $mform->setType('config_btn_img', PARAM_TEXT);

        // Section Image header title according to language file.
        $mform->addElement('header', 'config_image_heading', get_string('config_image_heading', 'theme_edash'));

        $mform->addElement('static', 'config_image_doc', '<b><a style="color: var(--primaryColor)" href="https://docs.envytheme.com/envydoc/edash-moodle-theme-documentation/faqs/how-to-make-image-url/" target="_blank">Doc link: How to make Image URL?</a></b>');      
            
        $mform->addElement('text', 'config_img', get_string('config_image', 'theme_edash'));
        $mform->setType('config_img', PARAM_TEXT);

        // Shape Image
        $mform->addElement('text', 'config_shape_img', 'Banner Background Shape Image ');
        $mform->setType('config_shape_img', PARAM_TEXT);
     
    }
}
