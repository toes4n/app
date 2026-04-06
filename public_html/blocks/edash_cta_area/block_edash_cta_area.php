<?php
require_once($CFG->dirroot. '/course/renderer.php');
require_once($CFG->dirroot . '/theme/edash/inc/block_handler/get-content.php');
global $CFG;
class block_edash_cta_area extends block_base {
    public function init() {
        $this->title = get_string('pluginname', 'block_edash_cta_area');
    }

    // Declare second
    public function specialization()
    {
        global $CFG, $DB;
        include($CFG->dirroot . '/theme/edash/inc/block_handler/specialization.php');
        if (empty($this->config)) {
            $this->config = new \stdClass();
            $this->config->title = 'Transform access to education';
            $this->config->subtitle = 'Explore all of our courses and pick your suitable ones to enroll and start learning with us!';
            $this->config->button_text = 'Start Learning Today';
            $this->config->button_link = $CFG->wwwroot . '/course';
            $this->config->edash_icon = 'flatedash_icon-user';
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
        if(!empty($this->config->subtitle)){$this->content->subtitle = $this->config->subtitle;} else {$this->content->subtitle = '';}
        if(!empty($this->config->button_text)){$this->content->button_text = $this->config->button_text;} else {$this->content->button_text = '';}
        if(!empty($this->config->button_link)){$this->content->button_link = $this->config->button_link;} else {$this->content->button_link = '';}
        if(!empty($this->config->edash_icon)){$this->content->edash_icon = $this->config->edash_icon;} else {$this->content->edash_icon = '';}

        $ctastyle = 1;
        if(isset($this->config->ctastyle)){
            $ctastyle = $this->config->ctastyle;
        }

        if(isset($this->config->shape_img) && !empty($this->config->shape_img)){
            $this->content->shape_img = $this->config->shape_img;
        }else{
            $this->content->shape_img = '';
        }

        $text = '';
        if($ctastyle == 2):
            $text .= '
            <div class="free-trial-area ptb-100 style-two bg-image '. $this->content->class .'">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-md-12">
                            <div class="free-trial-content">
                                <i class="'.$this->content->edash_icon.'"></i>
                                <h2>'.format_text($this->content->title, FORMAT_HTML, array('filter' => true)).'</h2>
                                <p>'.format_text($this->content->subtitle, FORMAT_HTML, array('filter' => true)).'</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12">
                            <div class="free-trial-btn">';
                                if(!empty($this->content->button_text) && !empty($this->content->button_link)){
                                    $text .= '
                                    <a href="'.$this->content->button_link.'" class="default-btn">'.format_text($this->content->button_text, FORMAT_HTML, array('filter' => true)).'</a>';
                                }
                                $text .= '
                            </div>
                        </div>
                    </div>
                </div>
                <div class="lines">
                    <div class="line"></div>
                    <div class="line"></div>
                    <div class="line"></div>
                </div>
            </div>';
        elseif($ctastyle == 3):
            $text .= '
            <div class="free-trial-area ptb-100 bg-image '. $this->content->class .'">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-8 col-md-12">
                            <div class="free-trial-content">
                                <i class="'.$this->content->edash_icon.'"></i>
                                <h2>'.format_text($this->content->title, FORMAT_HTML, array('filter' => true)).'</h2>
                                <p>'.format_text($this->content->subtitle, FORMAT_HTML, array('filter' => true)).'</p>
                            </div>
                        </div>
                        
                        <div class="col-lg-4 col-md-12">
                        <div class="free-trial-btn">';
                            if(!empty($this->content->button_text) && !empty($this->content->button_link)){
                                $text .= '
                                <a href="'.$this->content->button_link.'" class="default-btn">'.format_text($this->content->button_text, FORMAT_HTML, array('filter' => true)).'</a>';
                            }
                            $text .= '
                        </div>
                    </div>
                    </div>
                </div>';
                    if($this->content->shape_img):
                        $shape_img = $this->content->shape_img;
                        $text .= '   
                        <div class="shape5">
                            <img src="'.edash_block_image_process($shape_img).'" alt="'.strip_tags($this->content->title).'">
                        </div>                 
                        ';
                    endif;
                    $text .= '
            </div>';
        elseif($ctastyle == 4):
            $text .= '
            <div class="dark-home-with-seven">
                <div class="free-trial-area ptb-100 bg-image '. $this->content->class .'">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-8 col-md-12">
                                <div class="free-trial-content">
                                    <i class="'.$this->content->edash_icon.'"></i>
                                    <h2>'.format_text($this->content->title, FORMAT_HTML, array('filter' => true)).'</h2>
                                    <p>'.format_text($this->content->subtitle, FORMAT_HTML, array('filter' => true)).'</p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-12">
                                <div class="free-trial-btn">';
                                    if(!empty($this->content->button_text) && !empty($this->content->button_link)){
                                        $text .= '
                                        <a href="'.$this->content->button_link.'" class="default-btn">'.format_text($this->content->button_text, FORMAT_HTML, array('filter' => true)).'</a>';
                                    }
                                    $text .= '
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>';
        else:
        $text .= '
            <div class="free-trial-area bg-color '. $this->content->class .'">
                <div class="free-trial-inner">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8 col-md-12 offset-lg-3">
                                <div class="free-trial-content">
                                    <i class="'.$this->content->edash_icon.'"></i>
                                    <h2>'.format_text($this->content->title, FORMAT_HTML, array('filter' => true)).'</h2>
                                    <p>'.format_text($this->content->subtitle, FORMAT_HTML, array('filter' => true)).'</p>';
                                    if(!empty($this->content->button_text) && !empty($this->content->button_link)){
                                        $text .= '
                                        <a href="'.$this->content->button_link.'" class="default-btn">'.format_text($this->content->button_text, FORMAT_HTML, array('filter' => true)).'</a>';
                                    }
                                    $text .= '
                                </div>
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