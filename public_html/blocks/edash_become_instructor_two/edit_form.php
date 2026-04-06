<?php

class block_edash_become_instructor_two_edit_form extends block_edit_form {

    protected function specific_definition($mform) {

        global $CFG;
        $edashFontList = include($CFG->dirroot . '/theme/edash/inc/font_handler/edash_font_select.php');

        // Section header title according to language file.
        $mform->addElement('header', 'config_header', get_string('blocksettings', 'block'));

        $mform->addElement('select', 'config_style', get_string('config_style', 'theme_edash'), array(1 => 'Style 1', 2 => 'Style 2',));
        $mform->setDefault('config_style', 1);
        
        // Title
        $mform->addElement('text', 'config_title', get_string('config_title', 'theme_edash'));
        $mform->setDefault('config_title', 'Become an instructor');
        $mform->setType('config_title', PARAM_RAW);

        // Subtitle
        $mform->addElement('text', 'config_subtitle', get_string('config_subtitle', 'theme_edash'));
        $mform->setDefault('config_subtitle', 'Explore all of our courses and pick your suitable ones to enroll and start learning with us!');
        $mform->setType('config_subtitle', PARAM_RAW);

        // Button Text
        $mform->addElement('text', 'config_button_text', get_string('config_button_text', 'theme_edash'));
        $mform->setDefault('config_button_text', 'Start Teaching Today');
        $mform->setType('config_button_text', PARAM_RAW);

        // Button Link
        $mform->addElement('text', 'config_button_link', get_string('config_button_link', 'theme_edash'));
        $mform->setDefault('config_button_link', $CFG->wwwroot . '/course');
        $mform->setType('config_button_link', PARAM_RAW);

        // Section Image header title according to language file.
        $mform->addElement('header', 'config_image_heading', get_string('config_image_heading', 'theme_edash'));

        $mform->addElement('static', 'config_image_doc', '<b><a style="color: var(--primaryColor)" href="https://docs.envytheme.com/envydoc/edash-moodle-theme-documentation/faqs/how-to-make-image-url/" target="_blank">Doc link: How to make Image URL?</a></b>'); 
            
        // Images
        $mform->addElement('text', 'config_img', 'Section Image URL');
        $mform->setType('config_img', PARAM_TEXT);

        // Shape Image One
        $mform->addElement('text', 'config_shape_img', 'Shape Image One URL');
        $mform->setType('config_shape_img', PARAM_TEXT);

        // Shape Image Two
        $mform->addElement('text', 'config_shape_img2', 'Shape Image Two URL');
        $mform->setType('config_shape_img2', PARAM_TEXT);

        // Shape Image Three
        $mform->addElement('text', 'config_shape_img3', 'Shape Image Three URL(Style 2)');
        $mform->setType('config_shape_img3', PARAM_TEXT);

        // Shape Image Four
        $mform->addElement('text', 'config_shape_img4', 'Shape Image Four URL(Style 2)');
        $mform->setType('config_shape_img4', PARAM_TEXT);

        // Social Links
        $mform->addElement('header', 'config_social_heading', get_string('config_social_heading', 'theme_edash'));

        // Social Title
        $mform->addElement('text', 'config_follow_title', get_string('config_title', 'theme_edash'));
        $mform->setDefault('config_follow_title', 'Follow Us:');
        $mform->setType('config_follow_title', PARAM_RAW);

        $numbers = 4;
        if(isset($this->block->config->numbers)){
            $numbers = $this->block->config->numbers;
        }

        $range = array(
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

        $mform->addElement('select', 'config_numbers', get_string('config_items', 'theme_edash'), $range);
        $mform->setDefault('config_numbers', 4);

        for($i = 1; $i <= $numbers; $i++) {
            $mform->addElement('text', 'config_social_link' . $i, get_string('config_link', 'theme_edash', $i));
            $mform->setDefault('config_social_link' . $i, '#');
            $mform->setType('config_social_link' . $i, PARAM_TEXT);

            $select = $mform->addElement('select', 'config_icon' . $i, get_string('config_icon', 'theme_edash'), $edashFontList, array('class'=>'edash_icon_class'));
        }
    }
}
