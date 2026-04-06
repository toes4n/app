<?php

class block_edash_why_choose_area_edit_form extends block_edit_form {

    protected function specific_definition($mform) {

        global $CFG;

        $featuresnumber = 4;
        if(isset($this->block->config->featuresnumber)){
            $featuresnumber = $this->block->config->featuresnumber;
        }

        // Section header title according to language file.
        $mform->addElement('header', 'config_header', get_string('blocksettings', 'block'));

        $mform->addElement('static', 'config_image_doc', '<b><a style="color: var(--primaryColor)" href="https://docs.envytheme.com/envydoc/edash-moodle-theme-documentation/faqs/how-to-make-image-url/" target="_blank">Doc link: How to make Image URL?</a></b>');

        $mform->addElement('text', 'config_bg_img', 'Background Image');
        $mform->setType('config_bg_img', PARAM_TEXT);

        $mform->addElement('text', 'config_title', get_string('config_title', 'theme_edash'));
        $mform->setDefault('config_title', 'Why you Should choose eDash');
        $mform->setType('config_title', PARAM_TEXT);

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
        );

        $mform->addElement('select', 'config_features_number', get_string('config_items', 'theme_edash'), $itemsrange);
        $mform->setDefault('config_features_number', 4);

        for($i = 1; $i <= $featuresnumber; $i++) {
            $mform->addElement('header', 'config_edash_item' . $i , get_string('config_item', 'theme_edash') . $i);

            $mform->addElement('text', 'config_feature_img' . $i, get_string('config_icon', 'theme_edash', $i));
            $mform->setType('config_feature_img' . $i, PARAM_TEXT);

            $mform->addElement('text', 'config_features_title' . $i, get_string('config_title', 'theme_edash', $i));
            $mform->setDefault('config_features_title' . $i, 'Short & Accredited');
            $mform->setType('config_features_title' . $i, PARAM_TEXT);
        }

        // Video Area
        $mform->addElement('header', 'config_header', 'Video Area');

        // Video Title
        $mform->addElement('text', 'config_video_title', get_string('config_video_title', 'theme_edash'));
        $mform->setDefault('config_video_title', 'See Our Student Success Story');
        $mform->setType('config_video_title', PARAM_TEXT); 

        // Video Image
        $mform->addElement('text', 'config_video_img', get_string('config_image', 'theme_edash'));
        $mform->setType('config_video_img', PARAM_TEXT); 

        // YouTube Video Link
        $mform->addElement('text', 'config_video_link', get_string('edash_youtube_url', 'theme_edash'));
        $mform->setDefault('config_video_link', 'https://www.youtube.com/watch?v=PWvPbGWVRrU');
            $mform->setType('config_video_link', PARAM_TEXT); 

        // Icon Image
        $mform->addElement('text', 'config_video_icon', get_string('config_icon', 'theme_edash'));
        $mform->setType('config_video_icon', PARAM_TEXT); 

        // Feedback Area
        $mform->addElement('header', 'config_header', 'Feedback Area');

        // Title
        $mform->addElement('text', 'config_fb_title', get_string('config_title', 'theme_edash'));
        $mform->setDefault('config_fb_title', 'What Our Learners say about eDash');
        $mform->setType('config_fb_title', PARAM_RAW);

        // Images
        $mform->addElement('text', 'config_fb_img', 'Feedback Image URL');
        $mform->setType('config_fb_img', PARAM_TEXT);

        $itemsnumber = 3;
        if(isset($this->block->config->itemsnumber)){
            $itemsnumber = $this->block->config->itemsnumber;
        }

        $mform->addElement('select', 'config_itemsnumber', get_string('config_items', 'theme_edash'), $itemsrange);
        $mform->setDefault('config_itemsnumber', 3);

        for($i = 1; $i <= $itemsnumber; $i++) {
            $mform->addElement('header', 'config_edash_fb_item' . $i , get_string('config_item', 'theme_edash') . $i);

            $mform->addElement('text', 'config_item_title' . $i, get_string('config_title', 'theme_edash', $i));
            $mform->setDefault('config_item_title' . $i, 'Jasica Lora');
            $mform->setType('config_item_title' . $i, PARAM_TEXT);

            $mform->addElement('text', 'config_item_subtitle' . $i, get_string('config_subtitle', 'theme_edash', $i));
            $mform->setDefault('config_item_subtitle' . $i, 'TV Model');
            $mform->setType('config_item_subtitle' . $i, PARAM_TEXT);

            $mform->addElement('text', 'config_item_text' . $i, get_string('config_text', 'theme_edash', $i));
            $mform->setDefault('config_item_text' . $i, 'Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor incididunt ut labore et mag na aliqua. Minim veniam, quis nostrud ullamco laboris nisi ut aliquip ex ea commodo conse quatt adipiscing dolore.');
            $mform->setType('config_item_text' . $i, PARAM_TEXT);

            $mform->addElement('text', 'config_img' . $i, 'Quote Image URL');
            $mform->setType('config_img' . $i, PARAM_TEXT);

            $mform->addElement('static', 'config_image_doc', '<b><a style="color: var(--primaryColor)" href="https://docs.envytheme.com/envydoc/edash-moodle-theme-documentation/faqs/how-to-make-image-url/" target="_blank">Doc link: How to make Image URL?</a></b>'); 
        }
    }
}
