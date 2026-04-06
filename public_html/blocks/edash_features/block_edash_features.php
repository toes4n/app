<?php
global $CFG;
require_once($CFG->dirroot . '/theme/edash/inc/block_handler/get-content.php');
class block_edash_features extends block_base {
    public function init() {
        $this->title = get_string('pluginname', 'block_edash_features');
    }

    // Declare second
    public function specialization()
    {
        global $CFG, $DB;
        include($CFG->dirroot . '/theme/edash/inc/block_handler/specialization.php');
        if (empty($this->config)) {
            $this->config = new \stdClass();
            $this->config->features_title1 = 'Learn the Latest Top Skills';
            $this->config->icon1 = 'flaticon-technology';
            $this->config->features_title2 = 'Learn From Industry Experts';
            $this->config->icon2 = 'flaticon-idea';
            $this->config->features_title3 = 'Learn in Your Own Pace';
            $this->config->icon3 = 'flaticon-laptop';
            $this->config->style = 1;
        }
    }

    public function get_content() {
        global $CFG, $DB;

        $this->content         =  new stdClass;

        $featuresnumber = 3;
        if(isset($this->config->featuresnumber)){
            $featuresnumber = $this->config->featuresnumber;
        }

        $style = 1;
        if(isset($this->config->style)){
            $style = $this->config->style;
        }

        $shape_img = 'shape_img';
        if(isset($this->config->$shape_img) && !empty($this->config->$shape_img)){
            $this->content->$shape_img = $this->config->$shape_img;
        }else{
            $this->content->$shape_img = '';
        }
       
        $text = '';
        if($style == 1):
            $text .= '
            <div class="features-area bg-color">
                <div class="features-inner">
                    <div class="container">
                        <div class="row">';
                            for($i = 1; $i <= $featuresnumber; $i++) {
                                $features_title = 'features_title' . $i;
                                $icon           = 'icon' . $i;

                                if(isset($this->config->$features_title)) {
                                    $features_title = $this->config->$features_title;
                                }else{
                                    $features_title = '';
                                }
                                if(isset($this->config->$icon)) {
                                    $icon = $this->config->$icon;
                                }else{
                                    $icon = '';
                                }
                                if($i == 1){
                                    $grid_class = 'col-xl-3 col-lg-4 col-md-4 col-6 col-sm-4 offset-xl-3';
                                }else{
                                    $grid_class = 'col-xl-3 col-lg-4 col-md-4 col-6 col-sm-4';
                                }

                                $text .= '
                                <div class="'.$grid_class.'">
                                    <div class="single-features-box white-color">
                                        <i class="'.$icon.'"></i>
                                        <h3>'.format_text($features_title, FORMAT_HTML, array('filter' => true)).'</h3>
                                    </div>
                                </div>';
                            } $text .= '
                        </div>
                    </div>
                </div>';
                if($this->content->shape_img):
                    $shape_img = $this->content->shape_img;
                    $text .= '                    
                    <div class="shape5"><img src="'.edash_block_image_process($shape_img).'" alt="Shape Image"></div>';
                endif;
                $text .= '
            </div>
            ';
        elseif($style == 2):
            $text .= '
            <div class="features-area pt-100 pb-75 bg-image">
                <div class="container">
                    <div class="row justify-content-center">';
                        for($i = 1; $i <= $featuresnumber; $i++) {
                            $features_title = 'features_title' . $i;
                            $icon           = 'icon' . $i;

                            if(isset($this->config->$features_title)) {
                                $features_title = $this->config->$features_title;
                            }else{
                                $features_title = '';
                            }
                            if(isset($this->config->$icon)) {
                                $icon = $this->config->$icon;
                            }else{
                                $icon = '';
                            }
                            if($i == 1){
                                $grid_class = 'col-xl-3 col-lg-4 col-md-4 col-6 col-sm-4 offset-xl-1';
                            }else{
                                $grid_class = 'col-xl-3 col-lg-4 col-md-4 col-6 col-sm-4';
                            }

                            $text .= '
                            <div class="'.$grid_class.'">
                                <div class="single-features-box white-color">
                                    <i class="'.$icon.'"></i>
                                    <h3>'.format_text($features_title, FORMAT_HTML, array('filter' => true)).'</h3>
                                </div>
                            </div>';
                        } $text .= '
                    </div>
                </div>';
                if($this->content->shape_img):
                    $shape_img = $this->content->shape_img;
                    $text .= '                    
                    <div class="shape5"><img src="'.edash_block_image_process($shape_img).'" alt="Shape Image"></div>';
                endif;
                $text .= '
            </div>';
        elseif($style == 3):
            $text .= '
            <div class="features-area pt-100 pb-75 style-two bg-image">
                <div class="container">
                    <div class="row justify-content-center">';
                        for($i = 1; $i <= $featuresnumber; $i++) {
                            $features_title = 'features_title' . $i;
                            $icon           = 'icon' . $i;

                            if(isset($this->config->$features_title)) {
                                $features_title = $this->config->$features_title;
                            }else{
                                $features_title = '';
                            }
                            if(isset($this->config->$icon)) {
                                $icon = $this->config->$icon;
                            }else{
                                $icon = '';
                            }
                            if($i == 1){
                                $grid_class = 'col-xl-3 col-lg-3 col-md-3 col-6 col-sm-6';
                            }else{
                                $grid_class = 'col-xl-3 col-lg-3 col-md-3 col-6 col-sm-6';
                            }

                            $text .= '
                            <div class="'.$grid_class.'">
                                <div class="single-features-box white-color style-two">
                                    <i class="'.$icon.'"></i>
                                    <h3>'.format_text($features_title, FORMAT_HTML, array('filter' => true)).'</h3>
                                </div>
                            </div>';
                        } $text .= '
                    </div>
                </div>
                <div class="lines">
                    <div class="line"></div>
                    <div class="line"></div>
                    <div class="line"></div>
                </div>
                ';
                if($this->content->shape_img):
                    $shape_img = $this->content->shape_img;
                    $text .= '                    
                    <div class="shape5"><img src="'.edash_block_image_process($shape_img).'" alt="Shape Image"></div>';
                endif;
                $text .= '
            </div>';
        elseif($style == 4):
            $text .= '
            <div class="dark-home-with-seven">
                <div class="features-area pt-100 pb-75 bg-image">
                    <div class="container">
                        <div class="features-inner-box">
                            <div class="row">';
                                for($i = 1; $i <= $featuresnumber; $i++) {
                                    $features_title = 'features_title' . $i;
                                    $icon           = 'icon' . $i;

                                    if(isset($this->config->$features_title)) {
                                        $features_title = $this->config->$features_title;
                                    }else{
                                        $features_title = '';
                                    }
                                    if(isset($this->config->$icon)) {
                                        $icon = $this->config->$icon;
                                    }else{
                                        $icon = '';
                                    }
                                    if($i == 1){
                                        $grid_class = 'col-lg-4 col-md-4 col-6 col-sm-4';
                                    }else{
                                        $grid_class = 'col-lg-4 col-md-4 col-6 col-sm-4';
                                    }
                                    $text .= '
                                    <div class="'.$grid_class.'">
                                        <div class="single-features-box white-color">
                                            <i class="'.$icon.'"></i>
                                            <h3>'.format_text($features_title, FORMAT_HTML, array('filter' => true)).'</h3>
                                        </div>
                                    </div>';
                                } $text .= '
                            </div>
                        </div>

                    </div>
                </div>
            </div>';
        endif;
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