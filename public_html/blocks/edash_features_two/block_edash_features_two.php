<?php
global $CFG;
require_once($CFG->dirroot . '/theme/edash/inc/block_handler/get-content.php');
class block_edash_features_two extends block_base {
    public function init() {
        $this->title = get_string('pluginname', 'block_edash_features_two');
    }

    // Declare second
    public function specialization()
    {
        global $CFG, $DB;
        include($CFG->dirroot . '/theme/edash/inc/block_handler/specialization.php');
        if (empty($this->config)) {
            $this->config = new \stdClass();
            $this->config->top_title = 'INSTRUCTORS & STUDENTS';
            $this->config->title = 'What You Looking For?';

            $this->config->features_title1          = 'Do you want to teach here?';
            $this->config->features_content1        = 'Explore all of our courses and pick your suitable ones to enroll and start learning with us!';
            $this->config->features_button1         = 'Register Now';
            $this->config->features_button_link1    = '#';

            $this->config->features_title2          = 'Do you want to learn here?';
            $this->config->features_content2        = 'Explore all of our courses and pick your suitable ones to enroll and start learning with us!';
            $this->config->features_button2         = 'Register Now';
            $this->config->features_button_link2    = '#';
        }
    }

    public function get_content() {
        global $CFG, $DB;

        $this->content         =  new stdClass;

        $featuresnumber = 2;
        if(isset($this->config->featuresnumber)){
            $featuresnumber = $this->config->featuresnumber;
        }

        // Title
        if(!empty($this->config->title)){$this->content->title = $this->config->title;} else {$this->content->title = '';}

        // Top Title
        if(!empty($this->config->top_title)){$this->content->top_title = $this->config->top_title;} else {$this->content->top_title = '';}
       
        $text = '';
            $text .= '
            <div class="features-area pt-100 pb-75">
                <div class="container">
                    <div class="section-title style-two">
                        <span class="sub-title">'.format_text($this->content->top_title, FORMAT_HTML, array('filter' => true)).'</span>
                        <h2>'.format_text($this->content->title, FORMAT_HTML, array('filter' => true)).'</h2>
                    </div>

                    <div class="row justify-content-center">';
                        for($i = 1; $i <= $featuresnumber; $i++) {
                            $img = 'img' . $i;
                            $features_title = 'features_title' . $i;
                            $features_content = 'features_content' . $i;
                            $features_button = 'features_button' . $i;
                            $features_button_link = 'features_button_link' . $i;

                            // Image
                            if(isset($this->config->$img)) { $img = $this->config->$img; }else{ $img = ''; }

                            // Title
                            if(isset($this->config->$features_title)) { $features_title = $this->config->$features_title; }else{ $features_title = ''; }

                            // Content
                            if(isset($this->config->$features_content)) { $features_content = $this->config->$features_content; }else{ $features_content = ''; }

                            // Button
                            if(isset($this->config->$features_button)) { $features_button = $this->config->$features_button; }else{ $features_button = ''; }

                            // Button Link
                            if(isset($this->config->$features_button_link)) { $features_button_link = $this->config->$features_button_link; }else{ $features_button_link = ''; }
                            $text .= '
                                <div class="col-lg-6 col-md-6">
                                    <div class="single-features-item">';
                                        if($img):
                                            $img = $img;
                                            $text .= '                    
                                            <img src="'.edash_block_image_process($img).'" alt="'.format_text($features_title, FORMAT_HTML, array('filter' => true)).'">';
                                        endif;
                                        $text .= '
                                        <h3>'.format_text($features_title, FORMAT_HTML, array('filter' => true)).'</h3>
                                        <p>'.format_text($features_content, FORMAT_HTML, array('filter' => true)).'</p>';
                                        if($features_button):
                                            $text .= '
                                            <a href="'.$features_button_link.'" class="default-btn style-two">'.format_text($features_button, FORMAT_HTML, array('filter' => true)).'</a>';
                                        endif;
                                        $text .= '
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