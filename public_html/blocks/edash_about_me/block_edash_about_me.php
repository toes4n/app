<?php
global $CFG;
require_once($CFG->dirroot . '/theme/edash/inc/block_handler/get-content.php');
class block_edash_about_me extends block_base {
    public function init() {
        $this->title = get_string('pluginname', 'block_edash_about_me');
    }

    // Declare second
    public function specialization()
    {
        global $CFG, $DB;
        include($CFG->dirroot . '/theme/edash/inc/block_handler/specialization.php');
        if (empty($this->config)) {
            $this->config = new \stdClass();
            $this->config->title = 'I’m Ashlika,  The Kitchen Coach';
            $this->config->body = 'I’ve been wanting to write this for a long time. Getting something off my chest that is both important and necessary. This is written for men, to men and will lay bare the out-of-control situation that exists for us today.';
            $this->config->btn = 'Find Courses';
            $this->config->btn_link = $CFG->wwwroot . '/course';
        }
    }

    public function get_content() {
        global $CFG, $DB, $COURSE, $USER, $PAGE;

        if ($this->content !== null) {
            return $this->content;
        }

        $this->content         =  new stdClass;
        if(!empty($this->config->title)){$this->content->title = $this->config->title;} else {$this->content->title = '';}
        if(!empty($this->config->body)){$this->content->body = $this->config->body;} else {$this->content->body = '';}

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

        $text = '';
        $text .= '
        <div class="kc-about-area pb-100">
            <div class="container">
                <div class="kc-about-inner-box">
                    <div class="row m-0">
                        <div class="col-lg-5 col-md-12 p-0">';
                            if($this->content->img):
                                $img = $this->content->img;
                                $text .= '                    
                                <div class="kc-about-image" style="background-image:url('.edash_block_image_process($img).');"></div>';
                            endif;
                            $text .= '
                        </div>
                        <div class="col-lg-7 col-md-12 p-0">
                            <div class="kc-about-content">
                                <h3>'.format_text($this->content->title, FORMAT_HTML, array('filter' => true)).'</h3>
                                '.format_text($this->content->body, FORMAT_HTML, array('filter' => true)).' ';
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
                    if($this->content->shape_img):
                        $shape_img = $this->content->shape_img;
                        $text .= '
                        <div class="kc-about-shape">
                            <img src="'.edash_block_image_process($shape_img).'" alt="'.strip_tags($this->content->title).'">
                        </div>';
                    endif;
                    $text .= '
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