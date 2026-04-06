<?php

class block_edash_contact_edit_form extends block_edit_form {

    protected function specific_definition($mform) {

        $contactnumber = 3;
        if(isset($this->block->config->contactnumber)){
            $contactnumber = $this->block->config->contactnumber;
        }

        // Section header title according to language file.
        $mform->addElement('header', 'config_header', get_string('blocksettings', 'block'));

        $contactrange = array(
            1 => '1',
            2 => '2',
            3 => '3',
            4 => '4',
            5 => '5',
            6 => '6',
            7 => '7',
            8 => '8',
            9 => '9',
            10 => '10',
        );

        // Title
        $mform->addElement('text', 'config_title', get_string('config_title', 'theme_edash'));
        $mform->setDefault('config_title', 'Get in Touch');
        $mform->setType('config_title', PARAM_RAW);

        // Subtitle
        $mform->addElement('text', 'config_subtitle', get_string('config_subtitle', 'theme_edash'));
        $mform->setDefault('config_subtitle', 'Have a inquiry or some feedback for us? Fill out the form below to contact our team. For partnership and business development inquiries.');
        $mform->setType('config_subtitle', PARAM_RAW);

        $mform->addElement('select', 'config_contactnumber', get_string('config_items', 'theme_edash'), $contactrange);
        $mform->setDefault('config_contactnumber', 3);

        $mform->addElement('textarea', 'config_contact_from_code', get_string('config_contact_from_code', 'theme_edash'), 'wrap="virtual" rows="6" cols="50"');

        $mform->addElement('static', 'config_cotact_doc', '<b><a style="color: var(--primaryColor)" href="https://moodle.org/plugins/local_contact" target="_blank">Please make sure this plugin is installed.</a></b>'); 

        // Image
        $mform->addElement('text', 'config_img', 'Contact Image URL');
        $mform->setType('config_img', PARAM_TEXT);

        $mform->addElement('static', 'config_image_doc', '<b><a style="color: var(--primaryColor)" href="https://docs.envytheme.com/envydoc/edash-moodle-theme-documentation/faqs/how-to-make-image-url/" target="_blank">Doc link: How to make Image URL?</a></b>');    

        for($i = 1; $i <= $contactnumber; $i++) {
            $mform->addElement('header', 'config_edash_item' . $i , get_string('config_item', 'theme_edash') . $i);

            $mform->addElement('text', 'config_contact_title' . $i, get_string('config_title', 'theme_edash', $i));
            $mform->setDefault('config_contact_title' . $i, 'San Francisco, CA');
            $mform->setType('config_contact_title' . $i, PARAM_TEXT);

            $mform->addElement('text', 'config_contact_subtitle' . $i, get_string('config_subtitle', 'theme_edash', $i));
            $mform->setDefault('config_contact_subtitle' . $i, '1890 Sutter St. State CA 94115');
            $mform->setType('config_contact_subtitle' . $i, PARAM_TEXT);
        }     
    }
}
