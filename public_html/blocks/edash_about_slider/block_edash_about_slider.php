<?php
global $CFG;
require_once($CFG->dirroot. '/course/renderer.php');
require_once($CFG->dirroot . '/theme/edash/inc/block_handler/get-content.php');
class block_edash_about_slider extends block_base {
    public function init() {
        $this->title = get_string('pluginname', 'block_edash_about_slider');
    }

    // Declare second
    public function specialization()
    {
        global $CFG, $DB;
        include($CFG->dirroot . '/theme/edash/inc/block_handler/specialization.php');
        if (empty($this->config)) {
            $this->config = new \stdClass();
            $this->config->title = 'Changing learning for the better';
            $this->config->body = 'Explore all of our courses and pick your suitable ones to enroll and start learning with us!';

            $this->config->about_slider_title1 = 'About Our Story';
            $this->config->body1 = 'Whether you want to learn or to share what you know, you’ve come to the right place. As a global destination for online learning, we connect people through knowledge.';
            $this->config->about_slider_title2 = 'Learn From Industry Experts';
            $this->config->body2 = 'Whether you want to learn or to share what you know, you’ve come to the right place. As a global destination for online learning, we connect people through knowledge.';
            $this->config->about_slider_title3 = 'Learn in Your Own Pace';
            $this->config->body3 = 'Whether you want to learn or to share what you know, you’ve come to the right place. As a global destination for online learning, we connect people through knowledge.';
        }
    }

    public function get_content() {
        global $CFG, $DB;

        $this->content         =  new stdClass;

        if(!empty($this->config->title)){
            $this->content->title = $this->config->title;
        }else{
            $this->content->title = '';
        }
        if(isset($this->config->body) && !empty($this->config->body)){
            $this->content->body = $this->config->body;
        }else{
            $this->content->body = '';
        }

        $about_slidernumber = 3;
        if(isset($this->config->about_slidernumber)){
            $about_slidernumber = $this->config->about_slidernumber;
        }
        $text = '';
        $text .= '
        <div class="about-area ptb-100">
            <div class="container">
                <div class="section-title style-two">
                    <h2>'.format_text($this->content->title, FORMAT_HTML, array('filter' => true)).'</h2>
                    <p>'.format_text($this->content->body, FORMAT_HTML, array('filter' => true)).'</p>

                </div>
                <div class="about-slides owl-carousel owl-theme">';
                    for($i = 1; $i <= $about_slidernumber; $i++) {
                        $about_slider_title = 'about_slider_title' . $i;
                        $about_slider_content = 'body' . $i;
                        $video           = 'about_slider_video_link' . $i;
                        $img           = 'about_slider_img_link' . $i;

                        if(isset($this->config->$about_slider_title)) {
                            $about_slider_title = $this->config->$about_slider_title;
                        }else{
                            $about_slider_title = '';
                        }

                        if(isset($this->config->$video)) {
                            $video = $this->config->$video;
                        }else{
                            $video = '';
                        }

                        if(isset($this->config->$about_slider_content)) {
                            $about_slider_content = $this->config->$about_slider_content;
                        }else{
                            $about_slider_content = '';
                        }

                        if(isset($this->config->$img)) {
                            $img = $this->config->$img;
                        }else{
                            $img = '';
                        }
                        $text .= '
                            <div class="single-about-box">
                                <div class="row m-0 align-items-center">
                                    <div class="col-lg-7 col-md-6 p-0">
                                        <div class="image">';
                                            if($img):
                                                $img = $img;
                                                $text .= '
                                                <img src="'.edash_block_image_process($img).'" alt="'.strip_tags($about_slider_title).'">';
                                            endif;
                                            if($video):
                                            $text .= '
                                                <a href="'.$video.'" class="popup-video"></a>
                                                <i class="bx bx-play"></i>';
                                            endif;
                                            $text .= '
                                        </div>
                                    </div>
                                    <div class="col-lg-5 col-md-6 p-0">
                                        <div class="content">
                                            <h3>'.format_text($about_slider_title, FORMAT_HTML, array('filter' => true)).'</h3>
                                            <p>'.format_text($about_slider_content, FORMAT_HTML, array('filter' => true)).'</p>
                                        </div>
                                    </div>
                                </div>
                            </div>';
                        } $text .= '
                </div>
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