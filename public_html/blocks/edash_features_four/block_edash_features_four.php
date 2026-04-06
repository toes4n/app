<?php
global $CFG;
require_once($CFG->dirroot . '/theme/edash/inc/block_handler/get-content.php');
class block_edash_features_four extends block_base {
    public function init() {
        $this->title = get_string('pluginname', 'block_edash_features_four');
    }

    // Declare second
    public function specialization()
    {
        global $CFG, $DB;
        include($CFG->dirroot . '/theme/edash/inc/block_handler/specialization.php');
        if (empty($this->config)) {
            $this->config = new \stdClass();
            $this->config->features_title1 = 'Short & Accredited';
            $this->config->features_content1 = 'Ranging from 1 -14 Days or up to 12 Months. Courses length 30m.';
            $this->config->features_title2 = 'Classroom';
            $this->config->features_content2 = 'Nationwide Locations running monthly whether Face2face.';
            $this->config->features_title3 = 'Company’s Courses';
            $this->config->features_content3 = 'Design and Tailor courses for your team and deliver at a location.';
            $this->config->features_title4 = 'Online Training';
            $this->config->features_content4 = 'Self-paced, Study from anywhere E-learning Video courses.';
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
            <div class="rt-features-area pt-100 pb-75">
                <div class="container-fluid">
                    <div class="row justify-content-center">';
                        for($i = 1; $i <= $featuresnumber; $i++) {
                            $features_title = 'features_title' . $i;
                            $features_content  = 'features_content' . $i;
                            $icon           = 'icon' . $i;

                            if(isset($this->config->$features_title)) {
                                $features_title = $this->config->$features_title;
                            }else{
                                $features_title = '';
                            }

                            if(isset($this->config->$features_content)) {
                                $features_content = $this->config->$features_content;
                            }else{
                                $features_content = '';
                            }

                            if(isset($this->config->$icon)) {
                                $icon = $this->config->$icon;
                            }else{
                                $icon = '';
                            }
                            
                            $grid_class = 'col-xl-3 col-lg-4 col-md-6 col-sm-6';

                            $text .= '
                            <div class="'.$grid_class.'">
                                <div class="rt-features-card">
                                    <div class="content">';
                                        if($icon):
                                            $text .= '                    
                                            <div class="icon-image">
                                                <img src="'.edash_block_image_process($icon).'" alt="'.$features_title.'">
                                            </div>';
                                        endif;
                                        $text .= '
                                        <h3>'.format_text($features_title, FORMAT_HTML, array('filter' => true)).'</h3>
                                        <p>'.format_text($features_content, FORMAT_HTML, array('filter' => true)).'</p>
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