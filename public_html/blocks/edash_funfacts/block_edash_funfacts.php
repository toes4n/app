<?php
global $CFG;
class block_edash_funfacts extends block_base {
    public function init() {
        $this->title = get_string('pluginname', 'block_edash_funfacts');
    }

    // Declare second
    public function specialization()
    {
        global $CFG, $DB;
        include($CFG->dirroot . '/theme/edash/inc/block_handler/specialization.php');
        if (empty($this->config)) {
            $this->config = new \stdClass();
            $this->config->funfactsstyle = 1;
            $this->config->funfacts_title1 = 'COURSES';
            $this->config->funfacts_number1 = '7500';
            $this->config->funfacts_prefix1 = '+';
            $this->config->icon1 = 'flaticon-books';
            $this->config->funfacts_title2 = 'INSTRUCTORS';
            $this->config->funfacts_number2 = '1500';
            $this->config->funfacts_prefix2 = '+';
            $this->config->icon2 = 'flaticon-teacher';
            $this->config->funfacts_title3 = 'STUDENTS';
            $this->config->funfacts_number3 = '165000';
            $this->config->funfacts_prefix3 = '+';
            $this->config->icon3 = 'flaticon-people';
            $this->config->class = '';
        }
    }

    public function get_content() {
        global $CFG, $DB;

        $this->content         =  new stdClass;
        if(!empty($this->config->class)){$this->content->class = $this->config->class;} else {$this->content->class = '';}
        if(!empty($this->config->title)){$this->content->title = $this->config->title;} else {$this->content->title = '';}
        if(!empty($this->config->subtitle)){$this->content->subtitle = $this->config->subtitle;} else {$this->content->subtitle = '';}

        $funfactsnumber = 3;
        if(isset($this->config->funfactsnumber)){
            $funfactsnumber = $this->config->funfactsnumber;
        }

        $funfactsstyle = 1;
        if(isset($this->config->funfactsstyle)){
            $funfactsstyle = $this->config->funfactsstyle;
        }

        $text = '';
        if($funfactsstyle == 2):
            $text .= '
            <div class="funfacts-area pb-75 '. $this->content->class .'">
                <div class="container">';
                    if($this->content->title || $this->content->subtitle):
                        $text .= '
                        <div class="section-title style-two">
                            <h2>'.format_text($this->content->title, FORMAT_HTML, array('filter' => true)).'</h2>
                            <p>'.format_text($this->content->subtitle, FORMAT_HTML, array('filter' => true)).'</p>
                        </div>';
                    endif;
                    $text .= '
                    <div class="row">';
                        for($i = 1; $i <= $funfactsnumber; $i++) {
                            $funfacts_title = 'funfacts_title' . $i;
                            $funfacts_number = 'funfacts_number' . $i;
                            $funfacts_prefix = 'funfacts_prefix' . $i;
                            $icon           = 'icon' . $i;

                            if(isset($this->config->$funfacts_title)) {
                                $funfacts_title = $this->config->$funfacts_title;
                                
                            }else{
                                $funfacts_title = '';
                            }
                            if(isset($this->config->$funfacts_number)) {
                                $funfacts_number = $this->config->$funfacts_number;
                            }else{
                                $funfacts_number = '';
                            }
                            if(isset($this->config->$funfacts_prefix)) {
                                $funfacts_prefix = $this->config->$funfacts_prefix;
                            }else{
                                $funfacts_prefix = '';                                
                            }
                            if(isset($this->config->$icon)) {
                                $icon = $this->config->$icon;
                            }else{
                                $icon = '';
                            }

                            $text .= '
                            <div class="col-lg-3 col-md-3 col-6 col-sm-6">
                            <div class="single-funfacts-box style-two">
                                    <i class="'.$icon.'"></i>
                                    <h3><span class="odometer" data-count="'.$funfacts_number.'">00</span><span class="sign">'.$funfacts_prefix.'</span></h3>
                                    <p>'.$funfacts_title.'</p>
                                </div>
                            </div>';
                        } $text .= '
                    </div>
                </div>
            </div>';
        elseif($funfactsstyle == 3):
            $text .= '
            <div class="dark-home-with-seven funfacts-area pt-100 pb-75 '. $this->content->class .'">
                <div class="container">
                    <div class="row">';
                        for($i = 1; $i <= $funfactsnumber; $i++) {
                            $funfacts_title = 'funfacts_title' . $i;
                            $funfacts_number = 'funfacts_number' . $i;
                            $funfacts_prefix = 'funfacts_prefix' . $i;
                            $icon           = 'icon' . $i;

                            if(isset($this->config->$funfacts_title)) {
                                $funfacts_title = $this->config->$funfacts_title;
                                
                            }else{
                                $funfacts_title = '';
                            }
                            if(isset($this->config->$funfacts_number)) {
                                $funfacts_number = $this->config->$funfacts_number;
                            }else{
                                $funfacts_number = '';
                            }
                            if(isset($this->config->$funfacts_prefix)) {
                                $funfacts_prefix = $this->config->$funfacts_prefix;
                            }else{
                                $funfacts_prefix = '';                                
                            }
                            if(isset($this->config->$icon)) {
                                $icon = $this->config->$icon;
                            }else{
                                $icon = '';
                            }

                            $text .= '
                            <div class="col-lg-3 col-md-3 col-6 col-sm-6">
                                <div class="single-funfacts-box style-two">
                                    <i class="'.$icon.'"></i>
                                    <h3><span class="odometer" data-count="'.$funfacts_number.'">00</span><span class="sign">'.$funfacts_prefix.'</span></h3>
                                    <p>'.$funfacts_title.'</p>
                                </div>
                            </div>';
                        } $text .= '
                    </div>
                </div>
            </div>';
        elseif($funfactsstyle == 4):
            $text .= '
            <div class="rt-funfacts-area pt-100 pb-75 '. $this->content->class .'">
                <div class="container">
                    <div class="row">';
                        for($i = 1; $i <= $funfactsnumber; $i++) {
                            $funfacts_title = 'funfacts_title' . $i;
                            $funfacts_number = 'funfacts_number' . $i;
                            $funfacts_prefix = 'funfacts_prefix' . $i;
                            $icon           = 'icon' . $i;

                            if(isset($this->config->$funfacts_title)) {
                                $funfacts_title = $this->config->$funfacts_title;
                                
                            }else{
                                $funfacts_title = '';
                            }
                            if(isset($this->config->$funfacts_number)) {
                                $funfacts_number = $this->config->$funfacts_number;
                            }else{
                                $funfacts_number = '';
                            }
                            if(isset($this->config->$funfacts_prefix)) {
                                $funfacts_prefix = $this->config->$funfacts_prefix;
                            }else{
                                $funfacts_prefix = '';                                
                            }
                            if(isset($this->config->$icon)) {
                                $icon = $this->config->$icon;
                            }else{
                                $icon = '';
                            }

                            $text .= '
                            <div class="col-lg-3 col-md-3 col-6 col-sm-6">
                                <div class="rt-funfacts-box">
                                    <h3>
                                        <span class="odometer" data-count="'.$funfacts_number.'">00</span><span class="plus">'.$funfacts_prefix.'</span>
                                    </h3>
                                    <p>'.$funfacts_title.'</p>
                                </div>
                            </div>';
                        } $text .= '
                    </div>
                </div>
            </div>';
        else:
            $text .= '
            <div class="funfacts-area bg-color '. $this->content->class .'">
                <div class="funfacts-inner">
                    <div class="container">
                        <div class="row">';
                            for($i = 1; $i <= $funfactsnumber; $i++) {
                                $funfacts_title = 'funfacts_title' . $i;
                                $funfacts_number = 'funfacts_number' . $i;
                                $funfacts_prefix = 'funfacts_prefix' . $i;
                                $icon           = 'icon' . $i;

                                if(isset($this->config->$funfacts_title)) {
                                    $funfacts_title = $this->config->$funfacts_title;
                                    
                                }else{
                                    $funfacts_title = '';
                                }
                                if(isset($this->config->$funfacts_number)) {
                                    $funfacts_number = $this->config->$funfacts_number;
                                }else{
                                    $funfacts_number = '';
                                }
                                if(isset($this->config->$funfacts_prefix)) {
                                    $funfacts_prefix = $this->config->$funfacts_prefix;
                                }else{
                                    $funfacts_prefix = '';                                
                                }
                                if(isset($this->config->$icon)) {
                                    $icon = $this->config->$icon;
                                }else{
                                    $icon = '';
                                }

                                $text .= '
                                <div class="col-lg-3 col-md-4 col-6 col-sm-4">
                                    <div class="single-funfacts-box white-color">
                                        <i class="'.$icon.'"></i>
                                        <h3><span class="odometer" data-count="'.$funfacts_number.'">00</span><span class="sign">'.$funfacts_prefix.'</span></h3>
                                        <p>'.format_text($funfacts_title, FORMAT_HTML, array('filter' => true)).'</p>
                                    </div>
                                </div>';
                            } $text .= '
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