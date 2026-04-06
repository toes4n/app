<?php

class block_edash_newsletter_edit_form extends block_edit_form {

    protected function specific_definition($mform) {

        global $CFG;

        // Section header title according to language file.
        $mform->addElement('header', 'config_header', get_string('blocksettings', 'block'));

        $newsletter_style = 1;
        if(isset($this->block->config->newsletter_style)){
            $newsletter_style = $this->block->config->newsletter_style;
        }
        
        $mform->addElement('select', 'config_newsletter_style', get_string('config_style', 'theme_edash'), array(1 => 'Style 1', 2 => 'Style 2',));
        $mform->setDefault('config_newsletter_style', 1);

        // Title
        $mform->addElement('text', 'config_title', get_string('config_title', 'theme_edash'));
        $mform->setDefault('config_title', 'Theres a better way to get healthy subscribe to my newsletter');
        $mform->setType('config_title', PARAM_RAW);

        // Content
        $mform->addElement('textarea', 'config_body', get_string('config_body', 'theme_edash'));
        $mform->setDefault('config_body', 'Explore all of our courses and pick your suitable ones to enroll and start learning with us!');
        $mform->setType('config_body', PARAM_RAW);

        // Action URL
        $mform->addElement('text', 'config_action_url', get_string('config_action_url', 'block_edash_newsletter'));
        $mform->setType('config_action_url', PARAM_RAW);

        $mform->addElement('static', 'config_newsletter_doc', '<b><a style="color: var(--primaryColor)" href="https://docs.envytheme.com/docs/edash-moodle-theme-documentation/faqs/get-mailchimp-newsletter-form-action-url/" target="_blank">Doc link: Get MailChimp Newsletter Form Action URL</a></b>'); 

        // Placeholder Text
        $mform->addElement('text', 'config_placeholder', get_string('config_placeholder', 'block_edash_newsletter'));
        $mform->setDefault('config_placeholder', 'Theres a better way to get healthy subscribe to my newsletter');
        $mform->setType('config_placeholder', PARAM_RAW);

        // Button Text
        $mform->addElement('text', 'config_btn', get_string('config_btn', 'block_edash_newsletter'));
        $mform->setDefault('config_btn', 'Subscribe Now');
        $mform->setType('config_btn', PARAM_RAW);

        // Section Image header title according to language file.
        $mform->addElement('header', 'config_image_heading', get_string('config_image_heading', 'theme_edash'));


        $mform->addElement('static', 'config_image_doc', '<b><a style="color: var(--primaryColor)" href="https://docs.envytheme.com/envydoc/edash-moodle-theme-documentation/faqs/how-to-make-image-url/" target="_blank">Doc link: How to make Image URL?</a></b>'); 
            
        // Shape Image
        $mform->addElement('text', 'config_img', 'Shape Image 1 URL');
        $mform->setType('config_img', PARAM_TEXT);

        // Shape Image
        $mform->addElement('text', 'config_shape_img', 'Shape Image 2 URL');
        $mform->setType('config_shape_img', PARAM_TEXT);
    }
}
