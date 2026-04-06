<?php
global $CFG;
require_once($CFG->dirroot . '/theme/edash/inc/block_handler/get-content.php');
class block_edash_stories_area_two extends block_base {
    public function init() {
        $this->title = get_string('pluginname', 'block_edash_stories_area_two');
    }

    // Declare second
    public function specialization()
    {
        global $CFG, $DB;
        include($CFG->dirroot . '/theme/edash/inc/block_handler/specialization.php');
        if (empty($this->config)) {
            $this->config = new \stdClass();
            $this->config->title = 'Affordable Online Courses and Learning Opportunities';
            $this->config->body = 'Explore all of our courses and pick your suitable ones to enroll and start learning with us!';
            $this->config->quote = 'Marry the person who gives you a similar inclination you get when you see nourishment coming at an eatery.';
            $this->config->btn = 'View All Courses';
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

        $text = '';
        $text .= '
        <div class="kc-stories-area ptb-100">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-lg-7 col-md-12">
                        <div class="kc-stories-content">
                            <h3>'.format_text($this->content->title, FORMAT_HTML, array('filter' => true)).'</h3>
                            <p>'.format_text($this->content->body, FORMAT_HTML, array('filter' => true)).'</p>
                            <div class="box">
                                <p>'.format_text($this->content->quote, FORMAT_HTML, array('filter' => true)).'</p>
                            </div>
                            <div class="stories-btn">';
                                if(!empty($this->content->btn) && !empty($this->content->btn_link)){
                                    $text .= '
                                    <a href="'.$this->content->btn_link.'" class="default-btn">'.format_text($this->content->btn, FORMAT_HTML, array('filter' => true)).'</a>';
                                }
                                $text .= '
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-5 col-md-12">
                        <div class="kc-stories-image">';
                            if($this->content->img):
                                $img = $this->content->img;
                                $text .= '                    
                                <img src="'.edash_block_image_process($img).'" alt="'.strip_tags($this->content->title).'">';
                            endif;

                            if($this->content->shape_img):
                                $shape_img = $this->content->shape_img;
                                $text .= '
                                <div class="stories-shape">
                                    <img src="'.edash_block_image_process($shape_img).'" alt="'.strip_tags($this->content->title).'">
                                </div>';
                            endif;
                            $text .= '
                        </div>
                    </div>
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