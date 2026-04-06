<?php

class block_edash_banner_7_edit_form extends block_edit_form {

    protected function specific_definition($mform) {

        global $CFG;
        $edashFontList = include($CFG->dirroot . '/theme/edash/inc/font_handler/edash_font_select.php');

        // Section header title according to language file.
        $mform->addElement('header', 'config_header', get_string('blocksettings', 'block'));

        // Title
        $mform->addElement('text', 'config_title', get_string('config_title', 'theme_edash'));
        $mform->setDefault('config_title', 'The World’s Leading Distance Learning Provider');
        $mform->setType('config_title', PARAM_RAW);

        // Content
        $mform->addElement('textarea', 'config_body', get_string('config_body', 'theme_edash'), 'wrap="virtual" rows="6" cols="50"');

        // Search Placeholder Text
        $mform->addElement('text', 'config_search_placeholder', get_string('config_search_placeholder', 'block_edash_banner_7'));
        $mform->setDefault('config_search_placeholder', 'What do you want to learn today?');
        $mform->setType('config_search_placeholder', PARAM_RAW);

        // Search Button Text
        $mform->addElement('text', 'config_search_btn', get_string('config_search_btn', 'block_edash_banner_7'));
        $mform->setDefault('config_search_btn', 'Search');
        $mform->setType('config_search_btn', PARAM_RAW);

        $select = $mform->addElement('select', 'config_banner_search_icon', get_string('config_banner_search_icon', 'block_edash_banner_7'), $edashFontList, array('class'=>'edash_icon_class'));
        $select->setSelected('flaticon-search');

        // Section Image header title according to language file.
        $mform->addElement('header', 'config_image_heading', get_string('config_image_heading', 'theme_edash'));

        $mform->addElement('static', 'config_image_doc', '<b><a style="color: var(--primaryColor)" href="https://docs.envytheme.com/envydoc/edash-moodle-theme-documentation/faqs/how-to-make-image-url/" target="_blank">Doc link: How to make Image URL?</a></b>');        

        // Support Images
       
        // Banner Image
        $mform->addElement('text', 'config_banner_img', 'Banner Image');
        $mform->setType('config_banner_img', PARAM_TEXT);

        // Shape Images
        $shape_image_count = 3;
        for($i = 1; $i <= $shape_image_count; $i++) {
            $mform->addElement('text', 'config_shape_img' . $i, 'Banner Shape Image ' . $i);
            $mform->setType('config_shape_img' . $i, PARAM_TEXT);
        }
     
    }
}
