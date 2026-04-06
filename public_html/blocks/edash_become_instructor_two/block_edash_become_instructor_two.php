<?php
require_once($CFG->dirroot. '/course/renderer.php');
require_once($CFG->dirroot . '/theme/edash/inc/block_handler/get-content.php');
global $CFG;
class block_edash_become_instructor_two extends block_base {
    public function init() {
        $this->title = get_string('pluginname', 'block_edash_become_instructor_two');
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
            $this->config->follow_title = 'Follow Us:';
            $this->config->button_link = $CFG->wwwroot . '/course';

            $this->config->link1 = '#';
            $this->config->icon1 = 'bx bxl-facebook';
            $this->config->link2 = '#';
            $this->config->icon2 = 'bx bxl-twitter';
            $this->config->link3 = '#';
            $this->config->icon3 = 'bx bxl-instagram';
            $this->config->link4 = '#';
            $this->config->icon4 = 'bx bxl-linkedin';

            $this->config->style = 1;
        }
    }

    public function get_content() {
        global $CFG, $DB, $COURSE, $USER, $PAGE;

        if ($this->content !== null) {
            return $this->content;
        }

        $numbers = 3;
        if(isset($this->config->numbers)){
            $numbers = $this->config->numbers;
        }

        $style = 1;
        if(isset($this->config->style)){
            $style = $this->config->style;
        }

        $this->content         =  new stdClass;
        if(!empty($this->config->title)){$this->content->title = $this->config->title;} else {$this->content->title = '';}
        if(!empty($this->config->subtitle)){$this->content->subtitle = $this->config->subtitle;} else {$this->content->subtitle = '';}
        if(!empty($this->config->button_text)){$this->content->button_text = $this->config->button_text;} else {$this->content->button_text = '';}
        if(!empty($this->config->button_link)){$this->content->button_link = $this->config->button_link;} else {$this->content->button_link = '';}
        if(!empty($this->config->follow_title)){$this->content->follow_title = $this->config->follow_title;} else {$this->content->follow_title = '';}

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

        $shape_img3 = 'shape_img3';
        if(isset($this->config->$shape_img2) && !empty($this->config->$shape_img3)){
            $this->content->$shape_img3 = $this->config->$shape_img3;
        }else{
            $this->content->$shape_img3 = '';
        }

        $shape_img4 = 'shape_img4';
        if(isset($this->config->$shape_img4) && !empty($this->config->$shape_img4)){
            $this->content->$shape_img4 = $this->config->$shape_img4;
        }else{
            $this->content->$shape_img4 = '';
        }

        $img = 'img';
        if(isset($this->config->$img) && !empty($this->config->$img)){
            $this->content->$img = $this->config->$img;
        }else{
            $this->content->$img = '';
        }

        $text = '';
        if($style == 2):
            $text .= '
            <div class="become-instructor-area pt-100">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-md-6">
                            <div class="become-insinstructor-img">';
                                if($this->content->img):
                                    $img = $this->content->img;
                                    $text .= '                    
                                    <img src="'.edash_block_image_process($img).'" alt="'.strip_tags($this->content->title).'">';
                                endif;
                                $text .= '
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="become-instructor-content black-color">
                                <h2>'.format_text($this->content->title, FORMAT_HTML, array('filter' => true)).'</h2>
                                <p>'.format_text($this->content->subtitle, FORMAT_HTML, array('filter' => true)).'</p>';

                                if(!empty($this->content->button_text) && !empty($this->content->button_link)){
                                    $text .= '
                                    <a href="'.$this->content->button_link.'" class="default-btn">'.format_text($this->content->button_text, FORMAT_HTML, array('filter' => true)).'</a>';
                                }
                                $text .= '
                                <div class="social">
                                    <div class="d-flex align-items-center">
                                        <span>'.format_text($this->content->follow_title, FORMAT_HTML, array('filter' => true)).'</span>
                                        <ul>';
                                        for($i = 1; $i <= $numbers; $i++) {
                                            $link   = 'link' . $i;
                                            $icon   = 'icon' . $i;
                
                                            if(isset($this->config->$link)) {
                                                $link = $this->config->$link;
                                            }else{
                                                $link = '';
                                            }
                                            if(isset($this->config->$icon)) {
                                                $icon = $this->config->$icon;
                                            }else{
                                                $icon = '';
                                            }
                
                                            $text .= '
                                                <li><a href="'.$link.'" target="_blank"><i class="'.$icon.'"></i></a></li>
                                            ';
                                        } $text .= '
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>';
                if($this->content->shape_img):
                    $shape_img = $this->content->shape_img;
                    $text .= '                    
                    <div class="shape1"><img src="'.edash_block_image_process($shape_img).'" alt="'.strip_tags($this->content->title).'"></div>';
                endif;
                
                if($this->content->shape_img2):
                    $shape_img2 = $this->content->shape_img2;
                    $text .= '                    
                    <div class="shape8"><img src="'.edash_block_image_process($shape_img2).'" alt="'.strip_tags($this->content->title).'"></div>';
                endif;

                if($this->content->shape_img3):
                    $shape_img3 = $this->content->shape_img3;
                    $text .= '                    
                    <div class="shape5"><img src="'.edash_block_image_process($shape_img3).'" alt="'.strip_tags($this->content->title).'"></div>';
                endif;

                if($this->content->shape_img4):
                    $shape_img4 = $this->content->shape_img4;
                    $text .= '                    
                    <div class="shape10"><img src="'.edash_block_image_process($shape_img4).'" alt="'.strip_tags($this->content->title).'"></div>';
                endif;
                $text .= '
            </div>';
        else:
            $text .= '
            <div class="become-instructor-area">
                <div class="container">
                    <div class="become-instructor-inner-area">
                        <div class="row align-items-center">
                            <div class="col-lg-6 col-md-12">
                                <div class="become-insinstructor-image">';
                                    if($this->content->img):
                                        $img = $this->content->img;
                                        $text .= '                    
                                        <img src="'.edash_block_image_process($img).'" alt="'.strip_tags($this->content->title).'">';
                                    endif;
                                    $text .= '
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <div class="become-instructor-content">
                                    <h2>'.format_text($this->content->title, FORMAT_HTML, array('filter' => true)).'</h2>
                                    <p>'.format_text($this->content->subtitle, FORMAT_HTML, array('filter' => true)).'</p>';

                                    if(!empty($this->content->button_text) && !empty($this->content->button_link)){
                                        $text .= '
                                        <a href="'.$this->content->button_link.'" class="default-btn">'.format_text($this->content->button_text, FORMAT_HTML, array('filter' => true)).'</a>';
                                    }
                                    $text .= '
                                    <div class="social">
                                        <div class="d-flex align-items-center">
                                            <span>'.format_text($this->content->follow_title, FORMAT_HTML, array('filter' => true)).'</span>
                                            <ul>';
                                            for($i = 1; $i <= $numbers; $i++) {
                                                $link   = 'link' . $i;
                                                $icon   = 'icon' . $i;
                    
                                                if(isset($this->config->$link)) {
                                                    $link = $this->config->$link;
                                                }else{
                                                    $link = '';
                                                }
                                                if(isset($this->config->$icon)) {
                                                    $icon = $this->config->$icon;
                                                }else{
                                                    $icon = '';
                                                }
                    
                                                $text .= '
                                                    <li><a href="'.$link.'" target="_blank"><i class="'.$icon.'"></i></a></li>
                                                ';
                                            } $text .= '
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>';
                if($this->content->shape_img):
                    $shape_img = $this->content->shape_img;
                    $text .= '                    
                    <div class="shape4"><img src="'.edash_block_image_process($shape_img).'" alt="'.strip_tags($this->content->title).'"></div>';
                endif;
                
                if($this->content->shape_img2):
                    $shape_img2 = $this->content->shape_img2;
                    $text .= '                    
                    <div class="shape6"><img src="'.edash_block_image_process($shape_img2).'" alt="'.strip_tags($this->content->title).'"></div>';
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