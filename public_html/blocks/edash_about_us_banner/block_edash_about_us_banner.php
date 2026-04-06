<?php
global $CFG;
class block_edash_about_us_banner extends block_base {
    public function init() {
        $this->title = get_string('pluginname', 'block_edash_about_us_banner');
    }

    // Declare second
    public function specialization()
    {
        global $CFG, $DB;
        include($CFG->dirroot . '/theme/edash/inc/block_handler/specialization.php');
        if (empty($this->config)) {
            $this->config = new \stdClass();
            $this->config->title = 'We share knowledge with the world';
            $this->config->subtitle = 'Whether you want to learn or to share what you know, you’ve come to the right place. As a global destination for online learning, we connect people through knowledge.';
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

        $bg_img = 'bg_img';
        if(isset($this->config->$bg_img) && !empty($this->config->$bg_img)){
            $this->content->bg_img = $this->config->$bg_img;
        }else{
            $this->content->bg_img = '';
        }

        $text = '';

        if($this->content->bg_img){
            $text .= '
            <style>
            .about-area.bg-image{background: center/cover no-repeat url('.$this->content->bg_img.');}
            </style>
            ';
        }
        $text .= '
        <div class="about-area bg-image">
            <div class="container">
                <div class="about-title">
                    <h1>'.format_text($this->content->title, FORMAT_HTML, array('filter' => true)).'</h1>
                    <p>'.format_text($this->content->subtitle, FORMAT_HTML, array('filter' => true)).'</p>
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