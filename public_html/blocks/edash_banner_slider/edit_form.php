<?php

class block_edash_banner_slider_edit_form extends block_edit_form {

    protected function specific_definition($mform) {

        global $CFG;

        $itemsnumber = 3;
        if(isset($this->block->config->itemsnumber)){
            $itemsnumber = $this->block->config->itemsnumber;
        }

        // Section header title according to language file.
        $mform->addElement('header', 'config_header', get_string('blocksettings', 'block'));

        $itemsrange = array(
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
            31 => '31',
            32 => '32',
            33 => '33',
            34 => '34',
            35 => '35',
            36 => '36',
            37 => '37',
            38 => '38',
            39 => '39',
            40 => '40',
            41 => '41',
            42 => '42',
            43 => '43',
            44 => '44',
            45 => '45',
            46 => '46',
            47 => '47',
            48 => '48',
            49 => '49',
            50 => '50',
        );
        
        $mform->addElement('select', 'config_itemsnumber', get_string('config_items', 'theme_edash'), $itemsrange);
        $mform->setDefault('config_itemsnumber', 3);

        for($i = 1; $i <= $itemsnumber; $i++) {
            $mform->addElement('header', 'config_edash_item' . $i , get_string('config_item', 'theme_edash') . $i);

            $mform->addElement('text', 'config_item_title' . $i, get_string('config_title', 'theme_edash', $i));
            $mform->setDefault('config_item_title' . $i, 'Jasica Lora');
            $mform->setType('config_item_title' . $i, PARAM_TEXT);

            $mform->addElement('text', 'config_item_text' . $i, get_string('config_text', 'theme_edash', $i));
            $mform->setDefault('config_item_text' . $i, 'Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor incididunt ut labore et mag na aliqua. Minim veniam, quis nostrud ullamco laboris nisi ut aliquip ex ea commodo conse quatt adipiscing dolore.');
            $mform->setType('config_item_text' . $i, PARAM_TEXT);

            $mform->addElement('text', 'config_bg_img' . $i, 'Background Image URL');
            $mform->setType('config_bg_img' . $i, PARAM_TEXT);

            // Button Text
            $mform->addElement('text', 'config_button_text' . $i, get_string('config_button_text', 'theme_edash', $i));
            $mform->setDefault('config_button_text' . $i, 'View All Feedback');
            $mform->setType('config_button_text' . $i, PARAM_RAW);

            // Button Link
            $mform->addElement('text', 'config_button_link' . $i, get_string('config_button_link', 'theme_edash', $i));
            $mform->setDefault('config_button_link'. $i, $CFG->wwwroot . '/');
            $mform->setType('config_button_link'. $i, PARAM_RAW);

            $mform->addElement('text', 'config_btn_img' . $i, 'Button Icon Image');
            $mform->setType('config_btn_img' . $i, PARAM_TEXT);

            $mform->addElement('text', 'config_user_img' . $i, 'User Image');
            $mform->setType('config_user_img' . $i, PARAM_TEXT);

            // By Text
            $mform->addElement('text', 'config_by_text' . $i, get_string('config_by_text', 'theme_edash', $i));
            $mform->setDefault('config_by_text' . $i, 'Art Done By');
            $mform->setType('config_by_text' . $i, PARAM_RAW);

            // Name Text
            $mform->addElement('text', 'config_name_text' . $i, get_string('config_name_text', 'theme_edash', $i));
            $mform->setDefault('config_name_text' . $i, 'Art Done By');
            $mform->setType('config_name_text' . $i, PARAM_RAW);

            // Name Link
            $mform->addElement('text', 'config_name_link' . $i, get_string('config_name_link', 'theme_edash', $i));
            $mform->setDefault('config_name_link' . $i, '#');
            $mform->setType('config_name_link' . $i, PARAM_RAW);
        }
    }
}
