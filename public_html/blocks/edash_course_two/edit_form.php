<?php

class block_edash_course_two_edit_form extends block_edit_form {

    protected function specific_definition($mform) {

        global $CFG;
        $edashFontList = include($CFG->dirroot . '/theme/edash/inc/font_handler/edash_font_select.php');

        // Section header title according to language file.
        $mform->addElement('header', 'config_header', get_string('blocksettings', 'block'));
        
        // Top Title
        $mform->addElement('text', 'config_top_title', get_string('config_top_title', 'theme_edash'));
        $mform->setDefault('config_top_title', 'COURSES');
        $mform->setType('config_top_title', PARAM_RAW);

        // Title
        $mform->addElement('text', 'config_title', get_string('config_title', 'theme_edash'));
        $mform->setDefault('config_title', 'Explore Our Popular Courses');
        $mform->setType('config_title', PARAM_RAW);

        $options = array(
            '0' => 'Hidden',
            '1' => 'Visible',
        );
        $select = $mform->addElement('select', 'config_price', get_string('config_price', 'theme_edash'), $options);
        $select->setSelected('1');

        $options = array(
            'multiple' => true,
            'noselectionstring' => get_string('select_from_dropdown_multiple', 'theme_edash'),
        );
        $mform->addElement('course', 'config_courses', get_string('courses'), $options);

        // Button
        $mform->addElement('text', 'config_button', get_string('config_button', 'theme_edash'));
        $mform->setDefault('config_button', 'Enroll Now');
        $mform->setType('config_button', PARAM_RAW);
    }
}
