<?php
global $CFG;
require_once($CFG->dirroot . '/theme/edash/inc/block_handler/get-content.php');

class block_edash_about_area extends block_base {
    public function init() {
        $this->title = get_string('pluginname', 'block_edash_about_area');
    }

    // Declare second
    public function specialization()
    {
        global $CFG, $DB;
        include($CFG->dirroot . '/theme/edash/inc/block_handler/specialization.php');
        if (empty($this->config)) {
            $this->config = new \stdClass();
            $this->config->title = 'Always take the harmless path, never take shortcuts';
            $this->config->body = 'Here are some of the advantages that we have to describe related to the industrial business. Industries help in making the employment prospects for the people and in a common of the nations after agriculture. Its business has also a lot of opportunities for a job. It’s due to the presence of various industries that we get to use a selection of products like television, clothes, automobiles, furniture, etc';
            $this->config->quote = 'Our project management training equips learners with the knowledge and discipline required to effectively plan, manage, execute, and control projects regardless of industry. You will learn all about the most popular project management methodologies that help organizations deliver successful projects.';
            $this->config->btn = 'Find All Courses';
            $this->config->btn_link = $CFG->wwwroot . '/course';
        }
    }

    public function get_content() {
        global $CFG, $DB, $COURSE, $USER, $PAGE;
        require_once($CFG->libdir . '/filelib.php');

        if ($this->content !== null) {
            return $this->content;
        }

        $this->content         =  new stdClass;
        if(!empty($this->config->title)){$this->content->title = $this->config->title;} else {$this->content->title = '';}

        if(!empty($this->config->body)){$this->content->body = $this->config->body;} else {$this->content->body = '';}

        if(!empty($this->config->quote)){$this->content->quote = $this->config->quote;} else {$this->content->quote = '';}

        if(!empty($this->config->btn)){$this->content->btn = $this->config->btn;} else {$this->content->btn = '';}

        if(!empty($this->config->btn_link)){$this->content->btn_link = $this->config->btn_link;} else {$this->content->btn_link = '';}


        $img = 'img';
        if(isset($this->config->$img) && !empty($this->config->$img)){
            $this->content->img = $this->config->$img;
        }else{
            $this->content->img = '';
        }

        $shape_img = 'shape_img';
        if(isset($this->config->$shape_img) && !empty($this->config->$shape_img)){
            $this->content->$shape_img = $this->config->$shape_img;
        }else{
            $this->content->$shape_img = '';
        }

        $fs = get_file_storage();
        $files = $fs->get_area_files($this->context->id, 'block_edash_about_area', 'content');

        $text = '';
        $text .= '

        <div class="vc-about-area ptb-100">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-5 col-md-12">
                        <div class="vc-about-image">';
                        if($this->content->img):
                            $img = $this->content->img;
                            $text .= '                    
                            <img src="'.edash_block_image_process($img).'" alt="'.strip_tags($this->content->title).'">';
                        endif;
                        $text .= '
                        </div>
                    </div>

                    <div class="col-lg-7 col-md-12">
                        <div class="vc-about-content">
                            <h3>'.format_text($this->content->title, FORMAT_HTML, array('filter' => true)).'</h3>
                            <p>'.format_text($this->content->body, FORMAT_HTML, array('filter' => true)).'</p>
                            <div class="box">
                                <p>'.format_text($this->content->quote, FORMAT_HTML, array('filter' => true)).'</p>

                                <div class="quotation">';
                                    if($this->content->shape_img):
                                        $shape_img = $this->content->shape_img;
                                        $text .= '
                                            <img src="'.edash_block_image_process($shape_img).'" alt="'.strip_tags($this->content->title).'">';
                                    endif;
                                    $text .= '
                                </div>
                            </div>';
                            if(!empty($this->content->btn) && !empty($this->content->btn_link)){
                                $text .= '
                                <div class="about-btn">
                                    <a href="'.$this->content->btn_link.'" class="default-btn">'.format_text($this->content->btn, FORMAT_HTML, array('filter' => true)).'</a>
                                </div>';
                            }
                            $text .= '
                        </div>
                    </div>
                </div>';

                if($files):
                    $text .= '
                    <div class="partner-wrap-inner-box color-with-lavender-blush pt-100 pb-75">
                        <div class="row align-items-center justify-content-center">';
                            foreach ($files as $file) {
                                $filename = $file->get_filename();
                                if ($filename <> '.') {
                                    $url = moodle_url::make_pluginfile_url($file->get_contextid(), $file->get_component(), $file->get_filearea(), null, $file->get_filepath(), $filename);
                                    $text .= '
                                    <div class="col-lg-2 col-6 col-sm-4 col-md-4">
                                        <div class="partner-wrap-card">
                                            <a href="#" class="d-inline-block" target="_blank">
                                                <img src="'. $url.'" alt="'. $filename.'">
                                            </a>
                                        </div>
                                    </div>';
                                }
                            }
                            $text .= '
                        </div>
                    </div>';
                endif;
                $text .= '
            </div>
        </div>';
        $this->content->footer = '';
        $this->content->text   = $text;

        return $this->content;
    }

    /**
     * The block can be used repeatedly in a page.
     */
    function instance_allow_multiple() {
        return true;
    }

    /**
     * Enables global configuration of the block in settings.php.
     *
     * @return bool True if the global configuration is enabled.
     */
    function has_config() {
        return false;
    }

    /**
     * Sets the applicable formats for the block.
     *
     * @return string[] Array of pages and permissions.
     */
    function applicable_formats() {
        return array(
            'all' => true,
            'my' => false,
            'admin' => false,
            'course-view' => true,
            'course' => true,
        );
    }

}