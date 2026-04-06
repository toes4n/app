<?php

class block_edash_feedback_two_edit_form extends block_edit_form {

    protected function specific_definition($mform) {

        global $CFG;

        $itemsnumber = 3;
        if(isset($this->block->config->itemsnumber)){
            $itemsnumber = $this->block->config->itemsnumber;
        }

        // Section header title according to language file.
        $mform->addElement('header', 'config_header', get_string('blocksettings', 'block'));
    
        // Title
        $mform->addElement('text', 'config_title', get_string('config_title', 'theme_edash'));
        $mform->setDefault('config_title', 'What Our Learners say about eDash');
        $mform->setType('config_title', PARAM_RAW);

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

            $mform->addElement('text', 'config_item_subtitle' . $i, get_string('config_subtitle', 'theme_edash', $i));
            $mform->setDefault('config_item_subtitle' . $i, 'TV Model');
            $mform->setType('config_item_subtitle' . $i, PARAM_TEXT);

            $mform->addElement('text', 'config_item_text' . $i, get_string('config_text', 'theme_edash', $i));
            $mform->setDefault('config_item_text' . $i, 'Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor incididunt ut labore et mag na aliqua. Minim veniam, quis nostrud ullamco laboris nisi ut aliquip ex ea commodo conse quatt adipiscing dolore.');
            $mform->setType('config_item_text' . $i, PARAM_RAW);

            $mform->addElement('text', 'config_img' . $i, 'Quote Image URL');
            $mform->setType('config_img' . $i, PARAM_TEXT);

            $mform->addElement('static', 'config_image_doc', '<b><a style="color: var(--primaryColor)" href="https://docs.envytheme.com/envydoc/edash-moodle-theme-documentation/faqs/how-to-make-image-url/" target="_blank">Doc link: How to make Image URL?</a></b>'); 
        }

        $textItemsNumber = 3;
        if(isset($this->block->config->textItemsNumber)){
            $textItemsNumber = $this->block->config->textItemsNumber;
        }

        $mform->addElement('select', 'config_text_items', get_string('config_text_items', 'theme_edash'), $itemsrange);
        $mform->setDefault('config_text_items', 3);

        for($i = 1; $i <= $textItemsNumber; $i++) {
            $mform->addElement('header', 'config_edash_text_item' . $i , 'Text Item' . $i);

            $mform->addElement('text', 'config_text_item_title' . $i, get_string('config_title', 'theme_edash', $i));
            $mform->setDefault('config_text_item_title' . $i, 'Best <span>Online</span> Art <span>Learning</span> Platform');
            $mform->setType('config_text_item_title' . $i, PARAM_RAW);
        }
     
        // Section Image header title according to language file.
        $mform->addElement('header', 'config_image_heading', get_string('config_image_heading', 'theme_edash'));
            
        $mform->addElement('text', 'config_img', 'Section Image URL');
        $mform->setType('config_img', PARAM_TEXT);

        // Shape Images
        $mform->addElement('text', 'config_shape_img', 'Shape Image URL');
        $mform->setType('config_shape_img', PARAM_TEXT);
        
        $mform->addElement('static', 'config_image_doc', '<b><a style="color: var(--primaryColor)" href="https://docs.envytheme.com/envydoc/edash-moodle-theme-documentation/faqs/how-to-make-image-url/" target="_blank">Doc link: How to make Image URL?</a></b>'); 
    }
}
