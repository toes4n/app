<?php
global $CFG;
require_once($CFG->dirroot. '/course/renderer.php');
require_once($CFG->dirroot . '/theme/edash/inc/block_handler/get-content.php');
class block_edash_why_choose_us extends block_base {
    public function init() {
        $this->title = get_string('pluginname', 'block_edash_why_choose_us');
    }

    // Declare second
    public function specialization()
    {
        global $CFG, $DB;
        include($CFG->dirroot . '/theme/edash/inc/block_handler/specialization.php');
        if (empty($this->config)) {
            $this->config = new \stdClass();
            $this->config->top_title = 'WHY CHOOSE US?';
            $this->config->title = 'Learn the Latest Top Skills';
            $this->config->body = 'Explore all of our courses and pick your suitable ones to enroll and start learning with us!';
            $this->config->button_text = 'Start Learning Today';
            $this->config->button_link = $CFG->wwwroot . '/course';
            $this->config->class = '';
        }
    }

    public function get_content() {
        global $CFG, $DB, $COURSE, $USER, $PAGE;

        if ($this->content !== null) {
            return $this->content;
        }

        $this->content         =  new stdClass;
        if(!empty($this->config->class)){$this->content->class = $this->config->class;} else {$this->content->class = '';}
        if(!empty($this->config->title)){$this->content->title = $this->config->title;} else {$this->content->title = '';}
        if(!empty($this->config->top_title)){$this->content->top_title = $this->config->top_title;} else {$this->content->top_title = '';}
        if(!empty($this->config->body)){$this->content->body = $this->config->body;} else {$this->content->body = '';}
        if(!empty($this->config->button_text)){$this->content->button_text = $this->config->button_text;} else {$this->content->button_text = '';}
        if(!empty($this->config->button_link)){$this->content->button_link = $this->config->button_link;} else {$this->content->button_link = '';}

        if(isset($this->config->img) && !empty($this->config->img)){
            $this->content->img = $this->config->img;
        }else{
            $this->content->img = '';
        }

        $text = '';
            $text .= '
            <div class="why-choose-us-area pb-100 '. $this->content->class .'">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-md-12">';
                            if($this->content->img):
                                $img = $this->content->img;
                                $text .= '
                                <div class="why-choose-us-image">
                                    <img src="'.edash_block_image_process($img).'" alt="'.strip_tags($this->content->title).'">
                                </div>                 
                                ';
                            endif;
                            $text .= '
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="why-choose-us-content">
                                <span class="sub-title">'.format_text($this->content->top_title, FORMAT_HTML, array('filter' => true)).'</span>
                                <h2>'.format_text($this->content->title, FORMAT_HTML, array('filter' => true)).'</h2>
                                '.format_text($this->content->body, FORMAT_HTML, array('filter' => true)).'
                                ';
                                if(!empty($this->content->button_text) && !empty($this->content->button_link)){
                                    $text .= '
                                    <a href="'.$this->content->button_link.'" class="default-btn style-two">'.format_text($this->content->button_text, FORMAT_HTML, array('filter' => true)).'</a>';
                                }
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