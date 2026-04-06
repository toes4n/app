<?php

class block_edash_features_three_edit_form extends block_edit_form {

    protected function specific_definition($mform) {

        global $CFG;

        $featuresnumber = 4;
        if(isset($this->block->config->featuresnumber)){
            $featuresnumber = $this->block->config->featuresnumber;
        }

        // Section header title according to language file.
        $mform->addElement('header', 'config_header', get_string('blocksettings', 'block'));

        $featuresrange = array(
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

        $mform->addElement('select', 'config_features_number', get_string('config_items', 'theme_edash'), $featuresrange);
        $mform->setDefault('config_features_number', 4);

        for($i = 1; $i <= $featuresnumber; $i++) {
            $mform->addElement('header', 'config_edash_item' . $i , get_string('config_item', 'theme_edash') . $i);

            // Image URL
            $mform->addElement('static', 'config_image_doc' . $i, '<b><a style="color: var(--primaryColor)" href="https://docs.envytheme.com/envydoc/edash-moodle-theme-documentation/faqs/how-to-make-image-url/" target="_blank">Doc link: How to make Image URL?</a></b>'); 

            $mform->addElement('text', 'config_img' . $i, 'Icon Image' . $i);
            $mform->setType('config_img' . $i, PARAM_TEXT);

            // Title
            $mform->addElement('text', 'config_features_title' . $i, get_string('config_title', 'theme_edash', $i));
            $mform->setDefault('config_features_title' . $i, 'Meal Planning');
            $mform->setType('config_features_title' . $i, PARAM_TEXT);

            // Card Content
            $mform->addElement('text', 'config_features_content' . $i, get_string('config_content', 'theme_edash', $i));
            $mform->setDefault('config_features_content' . $i, 'This project will guide you through how to set up your kitchen and pantry to ensure you are set up for success');
            $mform->setType('config_features_content' . $i, PARAM_TEXT);
        }
    }
}
