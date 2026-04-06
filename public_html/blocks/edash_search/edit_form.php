<?php

class block_edash_search_edit_form extends block_edit_form {

    protected function specific_definition($mform) {

        global $CFG;

        // Section header title according to language file.
        $mform->addElement('header', 'config_header', get_string('blocksettings', 'block'));

        // Title
        $mform->addElement('text', 'config_title', get_string('config_title', 'theme_edash'));
        $mform->setDefault('config_title', 'Search');
        $mform->setType('config_title', PARAM_RAW);

        // Search Placeholder Text
        $mform->addElement('text', 'config_search_placeholder', get_string('config_search_placeholder', 'block_edash_search'));
        $mform->setDefault('config_search_placeholder', 'What do you want to learn today?');
        $mform->setType('config_search_placeholder', PARAM_RAW);
     
    }
}
