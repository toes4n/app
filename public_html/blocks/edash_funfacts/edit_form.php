<?php

class block_edash_funfacts_edit_form extends block_edit_form {

    protected function specific_definition($mform) {

        global $CFG;
        $edashFontList = include($CFG->dirroot . '/theme/edash/inc/font_handler/edash_font_select.php');

        $funfactsnumber = 3;
        if(isset($this->block->config->funfactsnumber)){
            $funfactsnumber = $this->block->config->funfactsnumber;
        }

        $funfactsstyle = 1;
        if(isset($this->block->config->funfactsstyle)){
            $funfactsstyle = $this->block->config->funfactsstyle;
        }

        // Section header title according to language file.
        $mform->addElement('header', 'config_header', get_string('blocksettings', 'block'));

        // Class
        $mform->addElement('text', 'config_class', get_string('config_class', 'theme_edash'));
        $mform->setDefault('config_class', '');
        $mform->setType('config_class', PARAM_RAW);

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

        $mform->addElement('select', 'config_funfactsstyle', get_string('config_style', 'theme_edash'), array(1 => 'Style 1', 2 => 'Style 2',  3 => 'Style 3',  4 => 'Style 4(without icon)'));
        $mform->setDefault('config_funfactsstyle', 1);

        if($funfactsstyle == 2){
            // Title
            $mform->addElement('text', 'config_title', get_string('config_title', 'theme_edash'));
            $mform->setDefault('config_title', 'We just keep growing');
            $mform->setType('config_title', PARAM_RAW);

            // Subtitle
            $mform->addElement('text', 'config_subtitle', get_string('config_subtitle', 'theme_edash'));
            $mform->setDefault('config_subtitle', 'Explore all of our courses and pick your suitable ones to enroll and start learning with us!');
            $mform->setType('config_subtitle', PARAM_RAW);
        }

        $mform->addElement('select', 'config_funfactsnumber', get_string('config_items', 'theme_edash'), $funfactsrange);
        $mform->setDefault('config_funfactsnumber', 3);

        for($i = 1; $i <= $funfactsnumber; $i++) {
            $mform->addElement('header', 'config_edash_item' . $i , get_string('config_item', 'theme_edash') . $i);

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
