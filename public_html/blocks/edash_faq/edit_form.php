<?php

class block_edash_faq_edit_form extends block_edit_form {

    protected function specific_definition($mform) {

        global $CFG;

        $faqnumber = 3;
        if(isset($this->block->config->faqnumber)){
            $faqnumber = $this->block->config->faqnumber;
        }

        // Section header title according to language file.
        $mform->addElement('header', 'config_header', get_string('blocksettings', 'block'));

        // Title
        $mform->addElement('text', 'config_title', get_string('config_title', 'theme_edash'));
        $mform->setDefault('config_title', 'Ciao! How Can We Help You?');
        $mform->setType('config_title', PARAM_RAW);

        // Search Placeholder Text
        $mform->addElement('text', 'config_search_placeholder', get_string('config_placeholder', 'theme_edash'));
        $mform->setDefault('config_search_placeholder', 'Search a question...');
        $mform->setType('config_search_placeholder', PARAM_RAW);

        // Search Button Text
        $mform->addElement('text', 'config_search_btn', get_string('config_btn', 'theme_edash'));
        $mform->setDefault('config_search_btn', 'Search');
        $mform->setType('config_search_btn', PARAM_RAW);

        $faqrange = array(
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
            11 => '11',
            12 => '12',
            13 => '13',
            14 => '14',
            15 => '15',
            16 => '16',
            17 => '17',
            18 => '18',
            19 => '19',
            20 => '20',
            21 => '21',
            22 => '22',
            23 => '23',
            24 => '24',
            25 => '25',
            26 => '26',
            27 => '27',
            28 => '28',
            29 => '29',
            30 => '30',
        );

        $mform->addElement('select', 'config_faqnumber', get_string('config_items', 'theme_edash'), $faqrange);
        $mform->setDefault('config_faqnumber', 3);

        for($i = 1; $i <= $faqnumber; $i++) {
            $mform->addElement('header', 'config_edash_item' . $i , get_string('config_item', 'theme_edash') . $i);

            $mform->addElement('text', 'config_faq_title' . $i, get_string('config_title', 'theme_edash', $i));
            $mform->setDefault('config_faq_title' . $i, 'What if I change my mind and want to drop my class?');
            $mform->setType('config_faq_title' . $i, PARAM_TEXT);

            $mform->addElement('textarea', 'config_faq_body' . $i, get_string('config_body', 'theme_edash', $i), 'wrap="virtual" rows="6" cols="50"');
        }
    }
}
