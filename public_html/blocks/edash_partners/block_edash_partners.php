<?php
global $CFG;
require_once($CFG->dirroot . '/theme/edash/inc/block_handler/get-content.php');
class block_edash_partners extends block_base {
    public function init() {
        $this->title = get_string('pluginname', 'block_edash_partners');
    }

    // Declare second
    public function specialization()
    {
        global $CFG, $DB;
        include($CFG->dirroot . '/theme/edash/inc/block_handler/specialization.php');
        if (empty($this->config)) {
            $this->config = new \stdClass();
            $this->config->style = 1;
            $this->config->title = 'Trusted by companies';
            $this->config->body = 'Explore all of our courses and pick your suitable ones to enroll and start learning with us!';
            $this->config->partners_btn = 'View All Partners';
            $this->config->partners_btn_link = '#';
        }
    }

    public function get_content() {
        global $CFG, $DB;
        require_once($CFG->libdir . '/filelib.php');

        if ($this->content !== null) {
          return $this->content;
        }

        $this->content         =  new stdClass;
        if(!empty($this->config->title)){
            $this->content->title = $this->config->title;
        }else{
            $this->content->title = '';
        }

        $style = 1;
        if(isset($this->config->style)){
            $style = $this->config->style;
        }

        if(isset($this->config->body) && !empty($this->config->body)){
            $this->content->body = $this->config->body;
        }else{
            $this->content->body = '';
        }
        if(isset($this->config->class) && !empty($this->config->class)){
            $this->content->class = $this->config->class;
        }else{
            $this->content->class = '';
        }

        if(isset($this->config->partners_btn) && !empty($this->config->partners_btn)){ $this->content->partners_btn = $this->config->partners_btn; }else{ $this->content->partners_btn = ''; }

        if(isset($this->config->partners_btn_link) && !empty($this->config->partners_btn_link)){
            $this->content->partners_btn_link = $this->config->partners_btn_link;
        }else{
            $this->content->partners_btn_link = '';
        }

        $shape_img = 'shape_img';
        if(isset($this->config->$shape_img) && !empty($this->config->$shape_img)){
            $this->content->$shape_img = $this->config->$shape_img;
        }else{
            $this->content->$shape_img = '';
        }

        $shape_img2 = 'shape_img2';
        if(isset($this->config->$shape_img2) && !empty($this->config->$shape_img2)){
            $this->content->$shape_img2 = $this->config->$shape_img2;
        }else{
            $this->content->$shape_img2 = '';
        }

        $shape_img3 = 'shape_img3';
        if(isset($this->config->$shape_img3) && !empty($this->config->$shape_img3)){
            $this->content->$shape_img3 = $this->config->$shape_img3;
        }else{
            $this->content->$shape_img3 = '';
        }

        $text = '';

        if($style == 2):
            $text .= '
            <div class="dark-home-with-seven">
                <div class="partner-area '.$this->content->class.'">
                    <div class="container">
                        <div class="partner-inner-area">
                            <div class="row">
                                <div class="col-lg-5 col-md-12">
                                    <h2>'.format_text($this->content->title, FORMAT_HTML, array('filter' => true)).'</h2>
                                    <p>'.format_text($this->content->body, FORMAT_HTML, array('filter' => true)).'</p>';
                                    if($this->content->partners_btn): $text .= '
                                        <a href="'.$this->content->partners_btn_link.'" class="default-btn">'.$this->content->partners_btn.'</a>
                                    '; endif;  $text .= '
                                </div>
                                <div class="col-lg-7 col-md-12">
                                    <div class="partner-lists">
                                        <div class="row align-items-center">';
                                            $fs = get_file_storage();
                                            $files = $fs->get_area_files($this->context->id, 'block_edash_partners', 'content');
                                            foreach ($files as $file) {
                                                $filename = $file->get_filename();
                                                if ($filename <> '.') {
                                                    $url = moodle_url::make_pluginfile_url($file->get_contextid(), $file->get_component(), $file->get_filearea(), null, $file->get_filepath(), $filename);
                                                    $text .= '
                                                    <div class="col-lg-4 col-md-4 col-sm-4 col-6">
                                                        <div class="item">
                                                            <img src="'. $url.'" alt="'. $filename.'">
                                                        </div>
                                                    </div>
                                                    ';
                                                }
                                            }
                                            $text .= '
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>';
                    if($this->content->shape_img):
                        $shape_img = $this->content->shape_img;
                        $text .= '                    
                        <div class="shape2"><img src="'.edash_block_image_process($shape_img).'" alt="'.strip_tags($this->content->title).'"></div>';
                    endif;
                    $text .= '';
                    if($this->content->shape_img2):
                        $shape_img2 = $this->content->shape_img2;
                        $text .= '                    
                        <div class="shape4"><img src="'.edash_block_image_process($shape_img2).'" alt="'.strip_tags($this->content->title).'"></div>';
                    endif;
                    $text .= '';
                    if($this->content->shape_img3):
                        $shape_img3 = $this->content->shape_img3;
                        $text .= '                    
                        <div class="shape5"><img src="'.edash_block_image_process($shape_img3).'" alt="'.strip_tags($this->content->title).'"></div>';
                    endif;
                    $text .= '
                </div>
            </div>';
        else:
            $text .= '
            <div class="partner-area '.$this->content->class.'">
                <div class="container">
                    <div class="partner-inner-area">
                        <div class="row">
                            <div class="col-lg-5 col-md-12">
                                <h2>'.format_text($this->content->title, FORMAT_HTML, array('filter' => true)).'</h2>
                                <p>'.format_text($this->content->body, FORMAT_HTML, array('filter' => true)).'</p>';
                                if($this->content->partners_btn): $text .= '
                                    <a href="'.$this->content->partners_btn_link.'" class="default-btn">'.format_text($this->content->partners_btn, FORMAT_HTML, array('filter' => true)).'</a>
                                '; endif;  $text .= '
                            </div>
                            <div class="col-lg-7 col-md-12">
                                <div class="partner-lists">
                                    <div class="row align-items-center">';
                                        $fs = get_file_storage();
                                        $files = $fs->get_area_files($this->context->id, 'block_edash_partners', 'content');
                                        foreach ($files as $file) {
                                            $filename = $file->get_filename();
                                            if ($filename <> '.') {
                                                $url = moodle_url::make_pluginfile_url($file->get_contextid(), $file->get_component(), $file->get_filearea(), null, $file->get_filepath(), $filename);
                                                $text .= '
                                                <div class="col-lg-3 col-md-3 col-sm-4 col-6">
                                                    <div class="item">
                                                        <img src="'. $url.'" alt="'. $filename.'">
                                                    </div>
                                                </div>
                                                ';
                                            }
                                        }
                                        $text .= '
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>';
                if($this->content->shape_img):
                    $shape_img = $this->content->shape_img;
                    $text .= '                    
                    <div class="shape2"><img src="'.edash_block_image_process($shape_img).'" alt="'.strip_tags($this->content->title).'"></div>';
                endif;
                $text .= '';
                if($this->content->shape_img2):
                    $shape_img2 = $this->content->shape_img2;
                    $text .= '                    
                    <div class="shape4"><img src="'.edash_block_image_process($shape_img2).'" alt="'.strip_tags($this->content->title).'"></div>';
                endif;
                $text .= '';
                if($this->content->shape_img3):
                    $shape_img3 = $this->content->shape_img3;
                    $text .= '                    
                    <div class="shape5"><img src="'.edash_block_image_process($shape_img3).'" alt="'.strip_tags($this->content->title).'"></div>';
                endif;
                $text .= '
            </div>';
        endif;

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