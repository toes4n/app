<?php

class block_edash_partners_edit_form extends block_edit_form {

    protected function specific_definition($mform) {

        global $CFG;

        $style = 1;
        if(isset($this->block->config->style)){
            $style = $this->block->config->style;
        }

        // Section header title according to language file.
        $mform->addElement('header', 'config_header', get_string('blocksettings', 'block'));

        $mform->addElement('select', 'config_style', get_string('config_style', 'theme_edash'), array(1 => 'Style 1', 2 => 'Style 2'));
        $mform->setDefault('config_style', 1);

        // Class
        $mform->addElement('text', 'config_class', get_string('config_class', 'theme_edash'));
        $mform->setType('config_class', PARAM_RAW);

        // Title
        $mform->addElement('text', 'config_title', get_string('config_title', 'theme_edash'));
        $mform->setDefault('config_title', 'Trusted by companies');
        $mform->setType('config_title', PARAM_RAW);

        // Content
        $mform->addElement('textarea', 'config_body', get_string('config_body', 'theme_edash'), 'wrap="virtual" rows="6" cols="50"');

        // Partners Button Text
        $mform->addElement('text', 'config_partners_btn', get_string('config_partners_btn', 'block_edash_partners'));
        $mform->setDefault('config_partners_btn', 'View All Partners');
        $mform->setType('config_partners_btn', PARAM_RAW);

        // Partners Button Link
        $mform->addElement('text', 'config_partners_btn_link', get_string('config_partners_btn', 'block_edash_partners'));
        $mform->setDefault('config_partners_btn_link', '#');
        $mform->setType('config_partners_btn_link', PARAM_RAW);

        // Section Image header title according to language file.
        $mform->addElement('header', 'config_image_heading', get_string('config_image_heading', 'theme_edash'));

        // Image
        $mform->addElement('filemanager', 'config_image', get_string('config_image', 'block_edash_partners'), null,
                array('subdirs' => 0, 'maxbytes' => 10485760, 'areamaxbytes' => 10485760, 'maxfiles' => null,
                'accepted_types' => array('.png', '.jpg', '.gif') ));

        $mform->addElement('text', 'config_shape_img', 'Section Shape Image 1');
        $mform->setType('config_shape_img', PARAM_TEXT);

        $mform->addElement('text', 'config_shape_img2', 'Section Shape Image 2');
        $mform->setType('config_shape_img2', PARAM_TEXT);

        $mform->addElement('text', 'config_shape_img3', 'Section Shape Image 3');
        $mform->setType('config_shape_img3', PARAM_TEXT);

        $mform->addElement('static', 'config_image_doc', '<b><a style="color: var(--primaryColor)" href="https://docs.envytheme.com/envydoc/edash-moodle-theme-documentation/faqs/how-to-make-image-url/" target="_blank">Doc link: How to make Image URL?</a></b>');  
     
    }

    function set_data($defaults)
    {
        // Begin Image Processing
        if (empty($entry->id)) {
            $entry = new stdClass;
            $entry->id = null;
        }
        $draftitemid = file_get_submitted_draft_itemid('config_image');
        file_prepare_draft_area($draftitemid, $this->block->context->id, 'block_edash_partners', 'content', 0,
            array('subdirs' => true));
        $entry->attachments = $draftitemid;
        parent::set_data($defaults);
        if ($data = parent::get_data()) {
            file_save_draft_area_files($data->config_image, $this->block->context->id, 'block_edash_partners', 'content', 0,
                array('subdirs' => true));
        }
        // END Image Processing
    }
}
