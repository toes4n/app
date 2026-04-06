<?php

class block_edash_cta_area_edit_form extends block_edit_form {

    protected function specific_definition($mform) {

        global $CFG;
        $edashFontList = include($CFG->dirroot . '/theme/edash/inc/font_handler/edash_font_select.php');

        // Section header title according to language file.
        $mform->addElement('header', 'config_header', get_string('blocksettings', 'block'));
        
        $ctastyle = 1;
        if(isset($this->block->config->ctastyle)){
            $ctastyle = $this->block->config->ctastyle;
        }
        $mform->addElement('select', 'config_ctastyle', get_string('config_style', 'theme_edash'), array(1 => 'Style 1', 2 => 'Style 2', 3 => 'Style 3', 4 => 'Style 4'));
        $mform->setDefault('config_ctastyle', 1);

        // Class
        $mform->addElement('text', 'config_class', get_string('config_class', 'theme_edash'));
        $mform->setDefault('config_class', '');
        $mform->setType('config_class', PARAM_RAW);

        // Title
        $mform->addElement('text', 'config_title', get_string('config_title', 'theme_edash'));
        $mform->setDefault('config_title', 'Transform access to education');
        $mform->setType('config_title', PARAM_RAW);

        // Subtitle
        $mform->addElement('text', 'config_subtitle', get_string('config_subtitle', 'theme_edash'));
        $mform->setDefault('config_subtitle', 'Explore all of our courses and pick your suitable ones to enroll and start learning with us!');
        $mform->setType('config_subtitle', PARAM_RAW);

        // Icon
        $select = $mform->addElement('select', 'config_edash_icon', get_string('config_icon', 'theme_edash'), $edashFontList, array('class'=>'edash_icon_class'));
        $select->setSelected('flaticon-coaching');

        // Button Text
        $mform->addElement('text', 'config_button_text', get_string('config_button_text', 'theme_edash'));
        $mform->setDefault('config_button_text', 'Register For Free');
        $mform->setType('config_button_text', PARAM_RAW);

        // Button Link
        $mform->addElement('text', 'config_button_link', get_string('config_button_link', 'theme_edash'));
        $mform->setDefault('config_button_link', $CFG->wwwroot . '/course');
        $mform->setType('config_button_link', PARAM_RAW);

        // Section Image header title according to language file.
        $mform->addElement('header', 'config_image_heading', get_string('config_image_heading', 'theme_edash'));

        $mform->addElement('static', 'config_image_doc', '<b><a style="color: var(--primaryColor)" href="https://docs.envytheme.com/envydoc/edash-moodle-theme-documentation/faqs/how-to-make-image-url/" target="_blank">Doc link: How to make Image URL?</a></b>');

        // Shape Images
        $mform->addElement('text', 'config_shape_img', ' Shape Image(for Style 3)');
        $mform->setType('config_shape_img', PARAM_TEXT);
    }
}
