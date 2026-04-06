<?php
global $CFG;
require_once($CFG->dirroot . '/theme/edash/inc/block_handler/get-content.php');
class block_edash_features_three extends block_base {
    public function init() {
        $this->title = get_string('pluginname', 'block_edash_features_three');
    }

    // Declare second
    public function specialization()
    {
        global $CFG, $DB;
        include($CFG->dirroot . '/theme/edash/inc/block_handler/specialization.php');
        if (empty($this->config)) {
            $this->config = new \stdClass();

            $this->config->features_title1          = 'Meal Planning';
            $this->config->features_content1        = 'This project will guide you through how to set up your kitchen and pantry to ensure you are set up for success';
            $this->config->features_title2          = 'Reducing Food Waste';
            $this->config->features_content2        = 'This project will guide you through how to set up your kitchen and pantry to ensure you are set up for success';
            $this->config->features_title3          = 'Knife Skills';
            $this->config->features_content3        = 'This project will guide you through how to set up your kitchen and pantry to ensure you are set up for success';
            $this->config->features_title4          = 'Party Food';
            $this->config->features_content4        = 'This project will guide you through how to set up your kitchen and pantry to ensure you are set up for success';
        }
    }

    public function get_content() {
        global $CFG, $DB;

        $this->content         =  new stdClass;

        $featuresnumber = 4;
        if(isset($this->config->featuresnumber)){
            $featuresnumber = $this->config->featuresnumber;
        }
       
        $text = '';
            $text .= '
            <div class="features-wrap-area pt-100 pb-75">
                <div class="container">
                    <div class="row justify-content-center">';
                        for($i = 1; $i <= $featuresnumber; $i++) {
                            $img = 'img' . $i;
                            $features_title = 'features_title' . $i;
                            $features_content = 'features_content' . $i;

                            // Image
                            if(isset($this->config->$img)) { $img = $this->config->$img; }else{ $img = ''; }

                            // Title
                            if(isset($this->config->$features_title)) { $features_title = $this->config->$features_title; }else{ $features_title = ''; }

                            // Content
                            if(isset($this->config->$features_content)) { $features_content = $this->config->$features_content; }else{ $features_content = ''; }
                            $text .= '
                                <div class="col-lg-3 col-sm-6">
                                    <div class="features-wrap-card">';
                                        if($img):
                                            $img = $img;
                                            $text .= '                    
                                            <img src="'.edash_block_image_process($img).'" alt="'.format_text($features_title, FORMAT_HTML, array('filter' => true)).'">';
                                        endif;
                                        $text .= '
                                        <h3>'.format_text($features_title, FORMAT_HTML, array('filter' => true)).'</h3>
                                        <p>'.format_text($features_content, FORMAT_HTML, array('filter' => true)).'</p>
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