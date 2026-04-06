<?php
require_once($CFG->dirroot. '/course/renderer.php');
require_once($CFG->dirroot . '/theme/edash/inc/block_handler/get-content.php');
global $CFG;
class block_edash_become_instructor_three extends block_base {
    public function init() {
        $this->title = get_string('pluginname', 'block_edash_become_instructor_three');
    }

    // Declare second
    public function specialization()
    {
        global $CFG, $DB;
        include($CFG->dirroot . '/theme/edash/inc/block_handler/specialization.php');
        if (empty($this->config)) {
            $this->config = new \stdClass();
            $this->config->title = 'Become an Instructor And Join with us';
            $this->config->subtitle = 'Explore all of our courses and pick your suitable ones to enroll and start learning with us!';
            $this->config->button_text = 'Start Teaching Today';
            $this->config->button_link = $CFG->wwwroot . '/course';
            $this->config->style = 1;
        }
    }

    public function get_content() {
        global $CFG, $DB, $COURSE, $USER, $PAGE;

        if ($this->content !== null) {
            return $this->content;
        }

        $this->content         =  new stdClass;
        if(!empty($this->config->title)){$this->content->title = $this->config->title;} else {$this->content->title = '';}
        if(!empty($this->config->class)){$this->content->class = $this->config->class;} else {$this->content->class = '';}
        if(!empty($this->config->subtitle)){$this->content->subtitle = $this->config->subtitle;} else {$this->content->subtitle = '';}
        if(!empty($this->config->button_text)){$this->content->button_text = $this->config->button_text;} else {$this->content->button_text = '';}
        if(!empty($this->config->button_link)){$this->content->button_link = $this->config->button_link;} else {$this->content->button_link = '';}

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

        $shape_img2 = 'shape_img2';
        if(isset($this->config->$shape_img2) && !empty($this->config->$shape_img2)){
            $this->content->$shape_img2 = $this->config->$shape_img2;
        }else{
            $this->content->$shape_img2 = '';
        }

        if($this->content->$shape_img):
            $shape_img = $this->content->$shape_img;
        else:
            $shape_img = '';
        endif;

        $btn_img = 'btn_img';
        if(isset($this->config->$btn_img) && !empty($this->config->$btn_img)){
            $this->content->$btn_img = $this->config->$btn_img;
        }else{
            $this->content->$btn_img = '';
        }

        $img = 'img';
        if(isset($this->config->$img) && !empty($this->config->$img)){
            $this->content->$img = $this->config->$img;
        }else{
            $this->content->$img = '';
        }
        $text = '';

        if($style == 2):
            $text .='
            <div class="'.$this->content->class.'">
                <div class="rt-opportunities-area ptb-100 '.$this->content->class.'" style="background-image:url('.edash_block_image_process($shape_img).');">
                    <div class="container">
                        <div class="row align-items-center justify-content-center">
                            <div class="col-lg-6 col-md-12">
                                <div class="rt-opportunities-content">
                                    <h3>'.format_text($this->content->title, FORMAT_HTML, array('filter' => true)).'</h3>
                                    <p>'.format_text($this->content->subtitle, FORMAT_HTML, array('filter' => true)).'</p>
                                    ';

                                    if(!empty($this->content->button_text) && !empty($this->content->button_link)){
                                        $text .= '
                                        <div class="opportunities-btn">
                                            <a href="'.$this->content->button_link.'" class="default-btn">'.format_text($this->content->button_text, FORMAT_HTML, array('filter' => true)).'';
                                                if($this->content->btn_img):
                                                    $btn_img = $this->content->btn_img;
                                                    $text .= '                    
                                                    <img src="'.edash_block_image_process($btn_img).'" alt="'.strip_tags($this->content->title).'">';
                                                endif;
                                            $text .= '
                                            </a>
                                        </div>';
                                    }
                                    $text .= '
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-12">
                                <div class="rt-opportunities-image">';
                                    if($this->content->img):
                                        $img = $this->content->img;
                                        $text .= '                    
                                        <img src="'.edash_block_image_process($img).'" alt="'.strip_tags($this->content->title).'">';
                                    endif;
                                    $text .= '
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>';
        elseif($style == 3):
            $text .='
            <div class="'.$this->content->class.'">
                <div class="rt-opportunities-area oa-opportunities-area ptb-100 ptb-100" style="background-image:url('.edash_block_image_process($shape_img).');">
                    <div class="container">
                        <div class="row align-items-center justify-content-center">
                            <div class="col-lg-6 col-md-12">
                                <div class="rt-opportunities-content">
                                    <h3>'.format_text($this->content->title, FORMAT_HTML, array('filter' => true)).'</h3>
                                    <p>'.format_text($this->content->subtitle, FORMAT_HTML, array('filter' => true)).'</p>
                                    ';

                                    if(!empty($this->content->button_text) && !empty($this->content->button_link)){
                                        $text .= '
                                        <div class="opportunities-btn">
                                            <a href="'.$this->content->button_link.'" class="default-btn">'.format_text($this->content->button_text, FORMAT_HTML, array('filter' => true)).'';
                                                if($this->content->btn_img):
                                                    $btn_img = $this->content->btn_img;
                                                    $text .= '                    
                                                    <img src="'.edash_block_image_process($btn_img).'" alt="'.strip_tags($this->content->title).'">';
                                                endif;
                                            $text .= '
                                            </a>
                                        </div>';
                                    }
                                    $text .= '
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-12">
                                <div class="rt-opportunities-image">';
                                    if($this->content->img):
                                        $img = $this->content->img;
                                        $text .= '                    
                                        <img src="'.edash_block_image_process($img).'" alt="'.strip_tags($this->content->title).'">';
                                    endif;
                                    $text .= '
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>';
        elseif($style == 4):
            $text .='
            <div class="'.$this->content->class.'">
                <div class="rt-instructor-area oa-instructor-area ptb-100">
                    <div class="container">
                        <div class="row align-items-center justify-content-center">
                            <div class="col-lg-6 col-md-12">
                                <div class="rt-instructor-image">';
                                    if($this->content->img):
                                        $img = $this->content->img;
                                        $text .= '                    
                                        <img src="'.edash_block_image_process($img).'" alt="'.strip_tags($this->content->title).'">';
                                    endif;
                                    $text .= '
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-12">
                                <div class="rt-instructor-content">
                                    <h3>'.format_text($this->content->title, FORMAT_HTML, array('filter' => true)).'</h3>
                                    <p>'.format_text($this->content->subtitle, FORMAT_HTML, array('filter' => true)).'</p>
                                    ';

                                    if(!empty($this->content->button_text) && !empty($this->content->button_link)){
                                        $text .= '
                                        <div class="instructor-btn">
                                            <a href="'.$this->content->button_link.'" class="default-btn">'.format_text($this->content->button_text, FORMAT_HTML, array('filter' => true)).'';
                                                if($this->content->btn_img):
                                                    $btn_img = $this->content->btn_img;
                                                    $text .= '                    
                                                    <img src="'.edash_block_image_process($btn_img).'" alt="'.strip_tags($this->content->title).'">';
                                                endif;
                                            $text .= '
                                            </a>
                                        </div>';
                                    }
                                    $text .= '
                                </div>
                            </div>
                        </div>
                    </div>';

                    if($this->content->shape_img):
                        $shape_img = $this->content->shape_img;
                        $text .= '                    
                        <div class="rt-instructor-shape-1"><img src="'.edash_block_image_process($shape_img).'" alt="'.strip_tags($this->content->title).'"></div>';
                    endif;
                    
                    if($this->content->shape_img2):
                        $shape_img2 = $this->content->shape_img2;
                        $text .= '                    
                        <div class="rt-instructor-shape-2"><img src="'.edash_block_image_process($shape_img2).'" alt="'.strip_tags($this->content->title).'"></div>';
                    endif;
                    $text .= '
                </div>
            </div>';
        else:
            $text .='
            <div class="rt-instructor-area ptb-100 '.$this->content->class.'">
                <div class="container">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-lg-6 col-md-12">
                            <div class="rt-instructor-image">';
                                if($this->content->img):
                                    $img = $this->content->img;
                                    $text .= '                    
                                    <img src="'.edash_block_image_process($img).'" alt="'.strip_tags($this->content->title).'">';
                                endif;
                                $text .= '
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-12">
                            <div class="rt-instructor-content">
                                <h3>'.format_text($this->content->title, FORMAT_HTML, array('filter' => true)).'</h3>
                                <p>'.format_text($this->content->subtitle, FORMAT_HTML, array('filter' => true)).'</p>
                                ';

                                if(!empty($this->content->button_text) && !empty($this->content->button_link)){
                                    $text .= '
                                    <div class="instructor-btn">
                                        <a href="'.$this->content->button_link.'" class="default-btn">'.format_text($this->content->button_text, FORMAT_HTML, array('filter' => true)).'';
                                            if($this->content->btn_img):
                                                $btn_img = $this->content->btn_img;
                                                $text .= '                    
                                                <img src="'.edash_block_image_process($btn_img).'" alt="'.strip_tags($this->content->title).'">';
                                            endif;
                                        $text .= '
                                        </a>
                                    </div>';
                                }
                                $text .= '
                            </div>
                        </div>
                    </div>
                </div>';

                if($this->content->shape_img):
                    $shape_img = $this->content->shape_img;
                    $text .= '                    
                    <div class="rt-instructor-shape-1"><img src="'.edash_block_image_process($shape_img).'" alt="'.strip_tags($this->content->title).'"></div>';
                endif;
                
                if($this->content->shape_img2):
                    $shape_img2 = $this->content->shape_img2;
                    $text .= '                    
                    <div class="rt-instructor-shape-2"><img src="'.edash_block_image_process($shape_img2).'" alt="'.strip_tags($this->content->title).'"></div>';
                endif;
                $text .= '
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