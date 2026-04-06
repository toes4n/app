<?php
global $CFG;
require_once($CFG->dirroot . '/theme/edash/inc/block_handler/get-content.php');

class block_edash_banner_6 extends block_base {
    public function init() {
        $this->title = get_string('pluginname', 'block_edash_banner_6');
    }

    // Declare second
    public function specialization()
    {
        global $CFG, $DB;
        include($CFG->dirroot . '/theme/edash/inc/block_handler/specialization.php');
        if (empty($this->config)) {
            $this->config = new \stdClass();
            $this->config->title = 'Simply certified with the enterprise';
            $this->config->body = 'Flexible easy to access learning opportunities can bring a significant change in how individuals prefer to learn! The eDash can offer you enjoy the beauty of eLearning!';
            $this->config->btn = 'Register Now';
            $this->config->btn_link = $CFG->wwwroot . '/login/signup.php';
            $this->config->btn_video = 'Watch Video';
            $this->config->btn_video_link = 'https://www.youtube.com/watch?v=PWvPbGWVRrU';
        }
    }

    public function get_content() {
        global $CFG, $DB;

        if ($this->content !== null) {
          return $this->content;
        }

        $this->content         =  new stdClass;

        // Title
        if(!empty($this->config->title)){ $this->content->title = $this->config->title; }else{ $this->content->title = ''; }

        // Content
        if(isset($this->config->body) && !empty($this->config->body)){ $this->content->body = $this->config->body; }else{ $this->content->body = ''; }
        
        // Button
        if(isset($this->config->btn) && !empty($this->config->btn)){  $this->content->btn = $this->config->btn; }else{ $this->content->btn = ''; }
        
         // Button Link
        if(!empty($this->config->btn_link)){$this->content->btn_link = $this->config->btn_link;} else {$this->content->btn_link = '';}

        // Video Button
        if(isset($this->config->btn_video) && !empty($this->config->btn_video)){ $this->content->btn_video = $this->config->btn_video; }else{ $this->content->btn_video = ''; }
        
        // Video Link
        if(!empty($this->config->btn_video_link)){$this->content->btn_video_link = $this->config->btn_video_link;} else {$this->content->btn_video_link = '';}

        // Background Shape Image
        $shape_img = 'shape_img';
        if(isset($this->config->$shape_img) && !empty($this->config->$shape_img)){ $this->content->$shape_img = $this->config->$shape_img; }else{ $this->content->$shape_img = ''; }

        // Button Image
        $btn_img = 'btn_img';
        if(isset($this->config->$btn_img) && !empty($this->config->$btn_img)){  $this->content->$btn_img = $this->config->$btn_img; }else{ $this->content->$btn_img = ''; }

        // Section Image
        $img = 'img';
        if(isset($this->config->$img) && !empty($this->config->$img)){ $this->content->$img = $this->config->$img; }else{ $this->content->$img = ''; }

        if($this->content->shape_img){
            $bg_shape = $this->content->shape_img;
        }else{
            $bg_shape = '';
        }
        
        $text = '';
        $text .= '
        <div class="vc-banner-area" style="background-image:url('.edash_block_image_process($bg_shape).');">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-7 col-md-12">
                        <div class="vc-banner-content">
                            <h1>'.format_text($this->content->title, FORMAT_HTML, array('filter' => true)).'</h1>
                            <p>'.format_text($this->content->body, FORMAT_HTML, array('filter' => true)).'</p>

                            <ul class="banner-btn-list">';
                                if(!empty($this->content->btn) && !empty($this->content->btn_link)){
                                    $text .= '
                                    <li>
                                        <a href="'.$this->content->btn_link.'" class="default-btn">'.format_text($this->content->btn, FORMAT_HTML, array('filter' => true)).'</a>
                                    </li>';
                                }

                                if(!empty($this->content->btn_video) && !empty($this->content->btn_video_link)){
                                    $text .= '
                                    <li>
                                        <a href="'.$this->content->btn_video_link.'" class="popup-video">'.format_text($this->content->btn_video, FORMAT_HTML, array('filter' => true)).' ';
                                            if($this->content->btn_img):
                                                $btn_img = $this->content->btn_img;
                                                $text .= '                    
                                                <img src="'.edash_block_image_process($btn_img).'" alt="'.strip_tags($this->content->title).'">';
                                            endif;
                                        $text .= '
                                        </a>
                                    </li>';
                                }
                                $text .= '
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-12">
                        <div class="vc-banner-image">';
                            if($this->content->img):
                                $img = $this->content->img;
                                $text .= '                    
                                <img src="'.edash_block_image_process($img).'" alt="'.strip_tags($this->content->title).'">';
                            endif;
                            $text .= '
                        </div>
                    </div>
                </div>
            </div>
        </div>';

        $this->content         =  new stdClass;
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