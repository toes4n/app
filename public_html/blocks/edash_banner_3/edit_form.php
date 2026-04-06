<?php

class block_edash_banner_3_edit_form extends block_edit_form {

    protected function specific_definition($mform) {

        global $CFG;
        $edashFontList = include($CFG->dirroot . '/theme/edash/inc/font_handler/edash_font_select.php');

        $funfactsnumber = 3;
        if(isset($this->block->config->funfactsnumber)){
            $funfactsnumber = $this->block->config->funfactsnumber;
        }

        // Section header title according to language file.
        $mform->addElement('header', 'config_header', get_string('blocksettings', 'block'));

        // Title
        $mform->addElement('text', 'config_title', get_string('config_title', 'theme_edash'));
        $mform->setDefault('config_title', 'The World’s Leading Distance Learning Provider');
        $mform->setType('config_title', PARAM_RAW);

        // Content
        $mform->addElement('textarea', 'config_body', get_string('config_body', 'theme_edash'), 'wrap="virtual" rows="6" cols="50"');

        // Button Text
        $mform->addElement('text', 'config_btn', get_string('config_btn', 'block_edash_banner_3'));
        $mform->setDefault('config_btn', 'Join For Free');
        $mform->setType('config_btn', PARAM_RAW);

        // Button Link
        $mform->addElement('text', 'config_btn_link', get_string('config_btn_link', 'block_edash_banner_3'));
        $mform->setDefault('config_btn_link', $CFG->wwwroot . '/course');
        $mform->setType('config_btn_link', PARAM_RAW);

        
        $funfactsrange = array(
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

        $mform->addElement('select', 'config_funfactsnumber', get_string('config_funfacts_items', 'block_edash_banner_3'), $funfactsrange);
        $mform->setDefault('config_funfactsnumber', 3);

        // Section Image header title according to language file.
        $mform->addElement('header', 'config_image_heading', get_string('config_image_heading', 'theme_edash'));

        $mform->addElement('static', 'config_image_doc', '<b><a style="color: var(--primaryColor)" href="https://docs.envytheme.com/envydoc/edash-moodle-theme-documentation/faqs/how-to-make-image-url/" target="_blank">Doc link: How to make Image URL?</a></b>');      
            
        $mform->addElement('text', 'config_img', get_string('config_image', 'theme_edash'));
        $mform->setType('config_img', PARAM_TEXT);

        // Shape Images
        $shape_image_count = 3;
        for($i = 1; $i <= $shape_image_count; $i++) {
            $mform->addElement('text', 'config_shape_img' . $i, 'Banner Shape Image ' . $i);
            $mform->setType('config_shape_img' . $i, PARAM_TEXT);
        }

        for($i = 1; $i <= $funfactsnumber; $i++) {
            $mform->addElement('header', 'config_edash_item' . $i , get_string('config_funfacts_items', 'block_edash_banner_3') . $i);

            $mform->addElement('text', 'config_funfacts_title' . $i, get_string('config_title', 'theme_edash', $i));
            $mform->setDefault('config_funfacts_title' . $i, 'COURSES');
            $mform->setType('config_funfacts_title' . $i, PARAM_TEXT);

            $mform->addElement('text', 'config_funfacts_number' . $i, get_string('config_number', 'theme_edash', $i));
            $mform->setDefault('config_funfacts_number' . $i, '7500');
            $mform->setType('config_funfacts_number' . $i, PARAM_TEXT);

            $mform->addElement('text', 'config_funfacts_prefix' . $i, get_string('config_number_prefix', 'theme_edash', $i));
            $mform->setDefault('config_funfacts_prefix' . $i, '+');
            $mform->setType('config_funfacts_prefix' . $i, PARAM_TEXT);

            $select = $mform->addElement('select', 'config_icon' . $i, get_string('config_icon', 'theme_edash'), $edashFontList, array('class'=>'edash_icon_class'));

        }   
     
    }
}
