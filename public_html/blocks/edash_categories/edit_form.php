<?php
require_once($CFG->dirroot . '/theme/edash/inc/course_handler/edash_course_handler.php');

class block_edash_categories_edit_form extends block_edit_form {

    protected function specific_definition($mform) {

        global $CFG;
        $edashFontList = include($CFG->dirroot . '/theme/edash/inc/font_handler/edash_font_select.php');
        $edashCourseHandler = new edashCourseHandler();
        $edashCourseCategories = $edashCourseHandler->edashListCategories();

        $style = 1;
        if(isset($this->block->config->style)){
            $style = $this->block->config->style;
        }

        // Section header title according to language file.
        $mform->addElement('header', 'config_header', get_string('blocksettings', 'block'));

        $mform->addElement('select', 'config_style', get_string('config_style', 'theme_edash'), array(1 => 'Style 1', 2 => 'Style 2',));
        $mform->setDefault('config_style', 1);
        
        // Title
        $mform->addElement('text', 'config_title', get_string('config_title', 'theme_edash'));
        $mform->setDefault('config_title', 'Top categories');
        $mform->setType('config_title', PARAM_RAW);

        // Subtitle
        $mform->addElement('text', 'config_subtitle', get_string('config_subtitle', 'theme_edash'));
        $mform->setDefault('config_subtitle', 'Explore all of our courses and pick your suitable ones to enroll and start learning with us!');
        $mform->setType('config_subtitle', PARAM_RAW);

        // Button Text
        $mform->addElement('text', 'config_button_text', get_string('config_button_text', 'theme_edash'));
        $mform->setDefault('config_button_text', 'View All Categories');
        $mform->setType('config_button_text', PARAM_RAW);

        // Button Link
        $mform->addElement('text', 'config_button_link', get_string('config_button_link', 'theme_edash'));
        $mform->setDefault('config_button_link', $CFG->wwwroot . '/course');
        $mform->setType('config_button_link', PARAM_RAW);

        $items = 8;
        if(isset($this->block->config->items)){
            $items = $this->block->config->items;
        }

        $items_range = array(
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
        $items_max = 30;

        $mform->addElement('select', 'config_items', get_string('config_items', 'theme_edash'), $items_range);
        $mform->setDefault('config_items', 8);

        for($i = 1; $i <= $items; $i++) {
            $mform->addElement('header', 'config_edash_item' . $i , get_string('config_item', 'theme_edash') .' '. $i);

            $options = array(
                'multiple' => false,
            );
            $mform->addElement('autocomplete', 'config_category' . $i, get_string('category'), $edashCourseCategories, $options);

            $select = $mform->addElement('select', 'config_icon' . $i, get_string('config_icon_class', 'theme_edash'), $edashFontList, array('class'=>'edash_icon_class'));
            $select->setSelected('flaticon-web-programming');
        }
        
        // Section Image header title according to language file.
        $mform->addElement('header', 'config_image_heading', get_string('config_image_heading', 'theme_edash'));

        $mform->addElement('static', 'config_image_doc', '<b><a style="color: var(--primaryColor)" href="https://docs.envytheme.com/envydoc/edash-moodle-theme-documentation/faqs/how-to-make-image-url/" target="_blank">Doc link: How to make Image URL?</a></b>'); 
            
        // Shape Images
        $mform->addElement('text', 'config_shape_img', 'Shape Image URL');
        $mform->setType('config_shape_img', PARAM_TEXT);
    }
}
