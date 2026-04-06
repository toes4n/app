<?php

class block_edash_about_slider_edit_form extends block_edit_form {

    protected function specific_definition($mform) {

        global $CFG;
        $edashFontList = include($CFG->dirroot . '/theme/edash/inc/font_handler/edash_font_select.php');

        $about_slidernumber = 3;
        if(isset($this->block->config->about_slidernumber)){
            $about_slidernumber = $this->block->config->about_slidernumber;
        }

        // Section header title according to language file.
        $mform->addElement('header', 'config_header', get_string('blocksettings', 'block'));

        // Title
        $mform->addElement('text', 'config_title', get_string('config_title', 'theme_edash'));
        $mform->setDefault('config_title', 'Changing learning for the better');
        $mform->setType('config_title', PARAM_RAW);

        // Content
        $mform->addElement('textarea', 'config_body', get_string('config_body', 'theme_edash'), 'wrap="virtual" rows="6" cols="50"');

        $about_sliderrange = array(
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

        $mform->addElement('select', 'config_about_slidernumber', get_string('config_items', 'theme_edash'), $about_sliderrange);
        $mform->setDefault('config_about_slidernumber', 3);

        for($i = 1; $i <= $about_slidernumber; $i++) {
            $mform->addElement('header', 'config_edash_item' . $i , get_string('config_item', 'theme_edash') . $i);

            $mform->addElement('text', 'config_about_slider_title' . $i, get_string('config_title', 'theme_edash', $i));
            $mform->setDefault('config_about_slider_title' . $i, 'About Our Story');
            $mform->setType('config_about_slider_title' . $i, PARAM_TEXT);

            $mform->addElement('textarea', 'config_body' . $i, get_string('config_body', 'theme_edash', $i), 'wrap="virtual" rows="6" cols="50"');

            $mform->addElement('text', 'config_about_slider_video_link' . $i, get_string('config_video', 'theme_edash', $i));
            $mform->setType('config_about_slider_video_link' . $i, PARAM_TEXT);

            $mform->addElement('static', 'config_image_doc', '<b><a style="color: var(--primaryColor)" href="https://docs.envytheme.com/envydoc/edash-moodle-theme-documentation/faqs/how-to-make-image-url/" target="_blank">Doc link: How to make Image URL?</a></b>'); 

            $mform->addElement('text', 'config_about_slider_img_link' . $i, get_string('config_image', 'theme_edash', $i));
            $mform->setType('config_about_slider_img_link' . $i, PARAM_TEXT);
        }
    }
}
