<?php
global $CFG;
require_once($CFG->dirroot. '/course/renderer.php');
require_once($CFG->dirroot . '/theme/edash/inc/block_handler/get-content.php');
class block_edash_become_instructor extends block_base {
    public function init() {
        $this->title = get_string('pluginname', 'block_edash_become_instructor');
    }

    // Declare second
    public function specialization()
    {
        global $CFG, $DB;
        include($CFG->dirroot . '/theme/edash/inc/block_handler/specialization.php');
        if (empty($this->config)) {
            $this->config = new \stdClass();
            $this->config->title = 'Become an instructor';
            $this->config->subtitle = 'Explore all of our courses and pick your suitable ones to enroll and start learning with us!';
            $this->config->button_text = 'Start Teaching Today';
            $this->config->button_link = $CFG->wwwroot . '/course';
            $this->config->icon = 'flaticon-coaching';
        }
    }

    public function get_content() {
        global $CFG, $DB, $COURSE, $USER, $PAGE;

        if ($this->content !== null) {
            return $this->content;
        }

        $this->content         =  new stdClass;
        if(!empty($this->config->title)){$this->content->title = $this->config->title;} else {$this->content->title = '';}
        if(!empty($this->config->subtitle)){$this->content->subtitle = $this->config->subtitle;} else {$this->content->subtitle = '';}
        if(!empty($this->config->button_text)){$this->content->button_text = $this->config->button_text;} else {$this->content->button_text = '';}
        if(!empty($this->config->button_link)){$this->content->button_link = $this->config->button_link;} else {$this->content->button_link = '';}
        if(!empty($this->config->icon)){$this->content->icon = $this->config->icon;} else {$this->content->icon = '';}

        $shape_img = 'shape_img';
        if(isset($this->config->$shape_img) && !empty($this->config->$shape_img)){
            $this->content->$shape_img = $this->config->$shape_img;
        }else{
            $this->content->$shape_img = '';
        }

        $text = '';
        $text .= '
        <div class="become-instructor-area bg-color">
            <div class="become-instructor-inner">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-8 col-md-12">
                            <div class="become-instructor-content">
                                <i class="'.$this->content->icon.'"></i>
                                <h2>'.format_text($this->content->title, FORMAT_HTML, array('filter' => true)).'</h2>
                                <p>'.format_text($this->content->subtitle, FORMAT_HTML, array('filter' => true)).'</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12">
                            <div class="become-instructor-btn">';
                                if(!empty($this->content->button_text) && !empty($this->content->button_link)){
                                    $text .= '
                                    <a href="'.$this->content->button_link.'" class="default-btn">'.format_text($this->content->button_text, FORMAT_HTML, array('filter' => true)).'</a>';
                                }
                                $text .= '
                            </div>
                        </div>
                    </div>
                </div>
            </div>';
            if($this->content->shape_img):
                $shape_img = $this->content->shape_img;
                $text .= '                    
                <div class="shape8"><img src="'.edash_block_image_process($shape_img).'" alt="'.strip_tags($this->content->title).'"></div>';
            endif;
            $text .= '
        </div>
        ';

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