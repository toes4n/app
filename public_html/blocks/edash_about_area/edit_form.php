<?php

class block_edash_about_area_edit_form extends block_edit_form {

    protected function specific_definition($mform) {

        global $CFG;

        // Section header title according to language file.
        $mform->addElement('header', 'config_header', get_string('blocksettings', 'block'));
        
        // Title
        $mform->addElement('text', 'config_title', get_string('config_title', 'theme_edash'));
        $mform->setDefault('config_title', 'Always take the harmless path, never take shortcuts');
        $mform->setType('config_title', PARAM_RAW);

        // Content
        $mform->addElement('textarea', 'config_body', get_string('config_body', 'theme_edash'));
        $mform->setDefault('config_body', 'Here are some of the advantages that we have to describe related to the industrial business. Industries help in making the employment prospects for the people and in a common of the nations after agriculture. Its business has also a lot of opportunities for a job. It’s due to the presence of various industries that we get to use a selection of products like television, clothes, automobiles, furniture, etc');
        $mform->setType('config_body', PARAM_RAW);

        // Content
        $mform->addElement('textarea', 'config_quote', get_string('config_quote', 'theme_edash'));
        $mform->setDefault('config_quote', 'Our project management training equips learners with the knowledge and discipline required to effectively plan, manage, execute, and control projects regardless of industry. You will learn all about the most popular project management methodologies that help organizations deliver successful projects.');
        $mform->setType('config_quote', PARAM_RAW);

        // Button Text
        $mform->addElement('text', 'config_btn', get_string('config_btn', 'block_edash_about_area'));
        $mform->setDefault('config_btn', 'Find All Courses');
        $mform->setType('config_btn', PARAM_RAW);

        // Button Link
        $mform->addElement('text', 'config_btn_link', get_string('config_btn_link', 'block_edash_about_area'));
        $mform->setDefault('config_btn_link', $CFG->wwwroot . '/course');
        $mform->setType('config_btn_link', PARAM_RAW);

        // Section Image header title according to language file.
        $mform->addElement('header', 'config_image_heading', get_string('config_image_heading', 'theme_edash'));

        $mform->addElement('static', 'config_image_doc', '<b><a style="color: var(--primaryColor)" href="https://docs.envytheme.com/envydoc/edash-moodle-theme-documentation/faqs/how-to-make-image-url/" target="_blank">Doc link: How to make Image URL?</a></b>'); 
            
        // Shape Image
        $mform->addElement('text', 'config_img', 'About Me Image URL');
        $mform->setType('config_img', PARAM_TEXT);

        // Shape Image
        $mform->addElement('text', 'config_shape_img', 'Shape Image URL');
        $mform->setType('config_shape_img', PARAM_TEXT);

        // Section Image header title according to language file.
        $mform->addElement('header', 'config_image_heading', get_string('config_image_heading', 'theme_edash'));

        // Image
        $mform->addElement('filemanager', 'config_image', get_string('config_image', 'block_edash_about_area'), null,
                array('subdirs' => 0, 'maxbytes' => 10485760, 'areamaxbytes' => 10485760, 'maxfiles' => null,
                'accepted_types' => array('.png', '.jpg', '.gif') ));
    }

    function set_data($defaults)
    {
        // Begin Image Processing
        if (empty($entry->id)) {
            $entry = new stdClass;
            $entry->id = null;
        }
        $draftitemid = file_get_submitted_draft_itemid('config_image');
        file_prepare_draft_area($draftitemid, $this->block->context->id, 'block_edash_about_area', 'content', 0,
            array('subdirs' => true));
        $entry->attachments = $draftitemid;
        parent::set_data($defaults);
        if ($data = parent::get_data()) {
            file_save_draft_area_files($data->config_image, $this->block->context->id, 'block_edash_about_area', 'content', 0,
                array('subdirs' => true));
        }
        // END Image Processing
    }
}
