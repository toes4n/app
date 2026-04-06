<?php

class block_edash_banner_4_edit_form extends block_edit_form {

    protected function specific_definition($mform) {

        global $CFG;
        $edashFontList = include($CFG->dirroot . '/theme/edash/inc/font_handler/edash_font_select.php');

        $linknumber = 4;
        if(isset($this->block->config->linknumber)){
            $linknumber = $this->block->config->linknumber;
        }

        // Section header title according to language file.
        $mform->addElement('header', 'config_header', get_string('blocksettings', 'block'));

        // Title
        $mform->addElement('text', 'config_title', get_string('config_title', 'theme_edash'));
        $mform->setDefault('config_title', 'Build Skills With Experts Any Time, Anywhere');
        $mform->setType('config_title', PARAM_RAW);

        // Content
        $mform->addElement('textarea', 'config_body', get_string('config_body', 'theme_edash'), 'wrap="virtual" rows="6" cols="50"');

        // Search Placeholder Text
        $mform->addElement('text', 'config_search_placeholder', get_string('config_search_placeholder', 'block_edash_banner_4'));
        $mform->setDefault('config_search_placeholder', 'What do you want to learn today?');
        $mform->setType('config_search_placeholder', PARAM_RAW);

        // Search Button Text
        $mform->addElement('text', 'config_search_btn', get_string('config_search_btn', 'block_edash_banner_4'));
        $mform->setDefault('config_search_btn', 'Search');
        $mform->setType('config_search_btn', PARAM_RAW);

        $select = $mform->addElement('select', 'config_button_icon', get_string('config_button_icon', 'block_edash_banner_4'), $edashFontList, array('class'=>'edash_icon_class'));
        $select->setSelected('flaticon-search');

        $mform->addElement('text', 'config_link_title', get_string('config_link_title', 'block_edash_banner_4'));
        $mform->setDefault('config_link_title', 'Popular:');
        $mform->setType('config_link_title', PARAM_RAW);

        $numberrange = array(
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

        $mform->addElement('select', 'config_linknumber', get_string('config_links', 'block_edash_banner_4'), $numberrange);
        $mform->setDefault('config_linknumber', 4);

        for($i = 1; $i <= $linknumber; $i++) {
            $mform->addElement('header', 'config_edash_item' . $i , get_string('config_link', 'block_edash_banner_4') . $i);

            $mform->addElement('text', 'config_link_title' . $i, get_string('config_title', 'theme_edash', $i));
            $mform->setDefault('config_link_title' . $i, 'Development');
            $mform->setType('config_link_title' . $i, PARAM_TEXT);

            $mform->addElement('text', 'config_list_link' . $i, get_string('config_list_link', 'block_edash_banner_4', $i));
            $mform->setDefault('config_list_link' . $i, '#');
            $mform->setType('config_list_link' . $i, PARAM_TEXT);

        }   

        // Section Image header title according to language file.
        $mform->addElement('header', 'config_image_heading', get_string('config_image_heading', 'theme_edash'));

        $mform->addElement('static', 'config_image_doc', '<b><a style="color: var(--primaryColor)" href="https://docs.envytheme.com/envydoc/edash-moodle-theme-documentation/faqs/how-to-make-image-url/" target="_blank">Doc link: How to make Image URL?</a></b>');      
            
        $mform->addElement('text', 'config_img', 'Image URL(Leave this blank if you want to use default image)'  );
        $mform->setType('config_img', PARAM_TEXT);      
     
    }
}
