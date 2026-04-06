<?php
global $CFG;
require_once($CFG->dirroot . '/theme/edash/inc/block_handler/get-content.php');
class block_edash_feedback extends block_base {
    public function init() {
        $this->title = get_string('pluginname', 'block_edash_feedback');
    }

    // Declare second
    public function specialization()
    {
        global $CFG, $DB;
        include($CFG->dirroot . '/theme/edash/inc/block_handler/specialization.php');
        if (empty($this->config)) {
            $this->config = new \stdClass();
            $this->config->title = 'Learners say about eDash';
            $this->config->subtitle = 'Explore all of our courses and pick your suitable ones to enroll and start learning with us!';
            $this->config->button_text = 'View All Courses';
            $this->config->button_link = $CFG->wwwroot . '/course';
            $this->config->itemsnumber = '3';
            $this->config->item_title1 = 'Ali Tufan';
            $this->config->item_subtitle1 = 'TV Model';
            $this->config->item_text1 = 'Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor incididunt ut labore et mag na aliqua. Minim veniam, quis nostrud ullamco laboris nisi ut aliquip ex ea commodo conse quatt adipiscing dolore.';
            $this->config->item_title2 = 'Allien Zampa';
            $this->config->item_subtitle2 = 'Developer';
            $this->config->item_text2 = 'Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor incididunt ut labore et mag na aliqua. Minim veniam, quis nostrud ullamco laboris nisi ut aliquip ex ea commodo conse quatt adipiscing dolore.';
            $this->config->item_title3 = 'Ramos Leo';
            $this->config->item_subtitle3 = 'Designer';
            $this->config->item_text3 = 'Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor incididunt ut labore et mag na aliqua. Minim veniam, quis nostrud ullamco laboris nisi ut aliquip ex ea commodo conse quatt adipiscing dolore.';
            $this->config->style = 1;
        }
    }

    public function get_content() {
        global $CFG, $PAGE;

        require_once($CFG->libdir . '/filelib.php');

        if ($this->content !== null) {
            return $this->content;
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

        $shape_img = 'shape_img';
        if(isset($this->config->$shape_img) && !empty($this->config->$shape_img)){
            $this->content->$shape_img = $this->config->$shape_img;
        }else{
            $this->content->$shape_img = '';
        }

        if (!empty($this->config) && is_object($this->config)) {
            $data = $this->config;
            $data->itemsnumber = is_numeric($data->itemsnumber) ? (int)$data->itemsnumber : 3;
        } else {
            $data = new stdClass();
            $data->itemsnumber = '3';
        }

        $text = '';
        if($style == 2):
            $text .= '
            <div class="feedback-area pt-100 pb-75">
                <div class="container">
                    <div class="section-title">
                        <h2>'.format_text($this->content->title, FORMAT_HTML, array('filter' => true)).'</h2>
                        <p>'.format_text($this->content->subtitle, FORMAT_HTML, array('filter' => true)).'</p>';
                        if(!empty($this->content->button_text) && !empty($this->content->button_link)){
                            $text .= '
                            <a href="'.$this->content->button_link.'" class="default-btn">'.format_text($this->content->button_text, FORMAT_HTML, array('filter' => true)).'</a>';
                        }
                        $text .= '
                    </div>
                    <div class="feedback-slides owl-carousel owl-theme">';
                        if ($data->itemsnumber > 0) {
                            $fs = get_file_storage();
                            for ($i = 1; $i <= $data->itemsnumber; $i++) {
                                $image = 'img' . $i;
                                $item_title = 'item_title' . $i;
                                $item_subtitle = 'item_subtitle' . $i;
                                $item_text = 'item_text' . $i;
                                $text .= '
                                <div class="single-feedback-box">';
                                    if(isset($data->$item_text)){
                                        $text .= '
                                        <p>'.format_text($data->$item_text, FORMAT_HTML, array('filter' => true)).'</p>';
                                    }
                                    $text .= '
                                    <div class="client-info d-flex align-items-center">';
                                        if(isset($data->$image)){
                                            $image = $data->$image;
                                            $text .= '
                                            <img src="' . edash_block_image_process($image) . '" alt="'.format_text($data->$item_title, FORMAT_HTML, array('filter' => true)).'">';
                                        } 
                                        $text .= '
                                        
                                        <div class="info">';
                                            if(isset($data->$item_title)){
                                                $text .= '
                                                <h3>'.format_text($data->$item_title, FORMAT_HTML, array('filter' => true)).'</h3>';
                                            }
                                            if(isset($data->$item_subtitle)){
                                                $text .= '
                                                <span>'.format_text($data->$item_subtitle, FORMAT_HTML, array('filter' => true)).'</span>';
                                            }
                                            $text .= '
                                        </div>
                                    </div>
                                </div>';
                            }
                        }
                        $text .= '
                    </div>
                </div>';
                if($this->content->shape_img):
                    $shape_img = $this->content->shape_img;
                    $text .= '                    
                    <div class="shape4"><img src="'.edash_block_image_process($shape_img).'" alt="'.strip_tags($this->content->title).'"></div>';
                endif;
                $text .= '
            </div>';
        elseif($style == 3):
            $text .= '
            <div class="feedback-area pb-75">
                <div class="container">
                    <div class="section-title style-two">
                        <h2>'.format_text($this->content->title, FORMAT_HTML, array('filter' => true)).'</h2>
                        <p>'.format_text($this->content->subtitle, FORMAT_HTML, array('filter' => true)).'</p>
                    </div>
                    <div class="feedback-slides owl-carousel owl-theme">';
                        if ($data->itemsnumber > 0) {
                            $fs = get_file_storage();
                            for ($i = 1; $i <= $data->itemsnumber; $i++) {
                                $image = 'img' . $i;
                                $item_title = 'item_title' . $i;
                                $item_subtitle = 'item_subtitle' . $i;
                                $item_text = 'item_text' . $i;
                                $text .= '
                                <div class="single-feedback-box">';
                                    if(isset($data->$item_text)){
                                        $text .= '
                                        <p>'.format_text($data->$item_text, FORMAT_HTML, array('filter' => true)).'</p>';
                                    }
                                    $text .= '
                                    <div class="client-info d-flex align-items-center">';
                                        if(isset($data->$image)){
                                            $image = $data->$image;
                                            $text .= '
                                            <img src="' . edash_block_image_process($image) . '" alt="'.format_text($data->$item_title, FORMAT_HTML, array('filter' => true)).'">';
                                        } 
                                        $text .= '
                                        
                                        <div class="info">';
                                            if(isset($data->$item_title)){
                                                $text .= '
                                                <h3>'.format_text($data->$item_title, FORMAT_HTML, array('filter' => true)).'</h3>';
                                            }
                                            if(isset($data->$item_subtitle)){
                                                $text .= '
                                                <span>'.format_text($data->$item_subtitle, FORMAT_HTML, array('filter' => true)).'</span>';
                                            }
                                            $text .= '
                                        </div>
                                    </div>
                                </div>';
                            }
                        }
                        $text .= '
                    </div>
                </div>
            </div>';
        elseif($style == 4):
            $text .= '
            <div class="feedback-area pt-100 pb-100">
                <div class="container">
                    <div class="section-title">
                        <h2>'.format_text($this->content->title, FORMAT_HTML, array('filter' => true)).'</h2>
                        <p>'.format_text($this->content->subtitle, FORMAT_HTML, array('filter' => true)).'</p>
                    </div>
                    <div class="feedback-slides-with-owl-dots owl-carousel owl-theme">';
                        if ($data->itemsnumber > 0) {
                            $fs = get_file_storage();
                            for ($i = 1; $i <= $data->itemsnumber; $i++) {
                                $image = 'img' . $i;
                                $item_title = 'item_title' . $i;
                                $item_subtitle = 'item_subtitle' . $i;
                                $item_text = 'item_text' . $i;
                                $text .= '
                                <div class="single-feedback-box">';
                                    if(isset($data->$item_text)){
                                        $text .= '
                                        <p>'.$data->$item_text.'</p>';
                                    }
                                    $text .= '
                                    <div class="client-info d-flex align-items-center">';
                                        if(isset($data->$image)){
                                            $image = $data->$image;
                                            $text .= '
                                            <img src="' . edash_block_image_process($image) . '" alt="'.format_text($data->$item_title, FORMAT_HTML, array('filter' => true)).'">';
                                        } 
                                        $text .= '
                                        
                                        <div class="info">';
                                            if(isset($data->$item_title)){
                                                $text .= '
                                                <h3>'.format_text($data->$item_title, FORMAT_HTML, array('filter' => true)).'</h3>';
                                            }
                                            if(isset($data->$item_subtitle)){
                                                $text .= '
                                                <span>'.format_text($data->$item_subtitle, FORMAT_HTML, array('filter' => true)).'</span>';
                                            }
                                            $text .= '
                                        </div>
                                    </div>
                                </div>';
                            }
                        }
                        $text .= '
                    </div>
                </div>
            </div>';
        elseif($style == 5):
            $text .= '
            <div class="feedback-area color-with-light-blue pt-100 pb-75">
                <div class="container">
                    <div class="section-title text-center">
                        <h2>'.format_text($this->content->title, FORMAT_HTML, array('filter' => true)).'</h2>
                        <p>'.format_text($this->content->subtitle, FORMAT_HTML, array('filter' => true)).'</p>
                    </div>
                    <div class="row justify-content-center">';
                        if ($data->itemsnumber > 0) {
                            $fs = get_file_storage();
                            for ($i = 1; $i <= $data->itemsnumber; $i++) {
                                $image = 'img' . $i;
                                $item_title = 'item_title' . $i;
                                $item_subtitle = 'item_subtitle' . $i;
                                $item_text = 'item_text' . $i;
                                if($i == 1 || $i == 2){
                                    $grid_class = 'col-lg-6 col-md-6';
                                }else{
                                    $grid_class = 'col-lg-4 col-md-6';
                                }
                                $text .= '
                                <div class="'.$grid_class.'">
                                    <div class="single-feedback-box">';
                                        if(isset($data->$item_text)){
                                            $text .= '
                                            <p>'.format_text($data->$item_text, FORMAT_HTML, array('filter' => true)).'</p>';
                                        }
                                        $text .= '
                                        <div class="client-info d-flex align-items-center">';
                                            if(isset($data->$image)){
                                                $image = $data->$image;
                                                $text .= '
                                                <img src="' . edash_block_image_process($image) . '" alt="'.format_text($data->$item_title, FORMAT_HTML, array('filter' => true)).'">';
                                            } 
                                            $text .= '
                                            
                                            <div class="info">';
                                                if(isset($data->$item_title)){
                                                    $text .= '
                                                    <h3>'.format_text($data->$item_title, FORMAT_HTML, array('filter' => true)).'</h3>';
                                                }
                                                if(isset($data->$item_subtitle)){
                                                    $text .= '
                                                    <span>'.format_text($data->$item_subtitle, FORMAT_HTML, array('filter' => true)).'</span>';
                                                }
                                                $text .= '
                                            </div>
                                        </div>
                                    </div>
                                </div>';
                            }
                        }
                        $text .= '
                    </div>
                </div>
            </div>';
        elseif($style == 6):
            $text .= '
            <div class="dark-home-with-seven">
            <div class="feedback-area pt-100 pb-75">
                <div class="container">
                    <div class="section-title">
                        <h2>'.format_text($this->content->title, FORMAT_HTML, array('filter' => true)).'</h2>
                        <p>'.format_text($this->content->subtitle, FORMAT_HTML, array('filter' => true)).'</p>';
                        if(!empty($this->content->button_text) && !empty($this->content->button_link)){
                            $text .= '
                            <a href="'.$this->content->button_link.'" class="default-btn">'.format_text($this->content->button_text, FORMAT_HTML, array('filter' => true)).'</a>';
                        }
                        $text .= '
                    </div>
                    <div class="feedback-slides owl-carousel owl-theme">';
                        if ($data->itemsnumber > 0) {
                            $fs = get_file_storage();
                            for ($i = 1; $i <= $data->itemsnumber; $i++) {
                                $image = 'img' . $i;
                                $item_title = 'item_title' . $i;
                                $item_subtitle = 'item_subtitle' . $i;
                                $item_text = 'item_text' . $i;
                                $text .= '
                                <div class="single-feedback-box">';
                                    if(isset($data->$item_text)){
                                        $text .= '
                                        <p>'.format_text($data->$item_text, FORMAT_HTML, array('filter' => true)).'</p>';
                                    }
                                    $text .= '
                                    <div class="client-info d-flex align-items-center">';
                                        if(isset($data->$image)){
                                            $image = $data->$image;
                                            $text .= '
                                            <img src="' . edash_block_image_process($image) . '" alt="'.format_text($data->$item_title, FORMAT_HTML, array('filter' => true)).'">';
                                        } 
                                        $text .= '
                                        
                                        <div class="info">';
                                            if(isset($data->$item_title)){
                                                $text .= '
                                                <h3>'.format_text($data->$item_title, FORMAT_HTML, array('filter' => true)).'</h3>';
                                            }
                                            if(isset($data->$item_subtitle)){
                                                $text .= '
                                                <span>'.format_text($data->$item_subtitle, FORMAT_HTML, array('filter' => true)).'</span>';
                                            }
                                            $text .= '
                                        </div>
                                    </div>
                                </div>';
                            }
                        }
                        $text .= '
                    </div>
                </div>
            </div>';
        else:
            $text .= '
            <div class="feedback-area bg-f5f5f5 pt-100 pb-75">
                <div class="container">
                    <div class="section-title">
                        <h2>'.format_text($this->content->title, FORMAT_HTML, array('filter' => true)).'</h2>
                        <p>'.format_text($this->content->subtitle, FORMAT_HTML, array('filter' => true)).'</p>
                    </div>
                    <div class="row justify-content-center">';
                        if ($data->itemsnumber > 0) {
                            $fs = get_file_storage();
                            for ($i = 1; $i <= $data->itemsnumber; $i++) {
                                $image = 'img' . $i;
                                $item_title = 'item_title' . $i;
                                $item_subtitle = 'item_subtitle' . $i;
                                $item_text = 'item_text' . $i;
                                $text .= '
                                <div class="col-lg-4 col-md-6">
                                    <div class="single-feedback-box">';
                                        if(isset($data->$item_text)){
                                            $text .= '
                                            <p>'.format_text($data->$item_text, FORMAT_HTML, array('filter' => true)).'</p>';
                                        }
                                        $text .= '
                                        <div class="client-info d-flex align-items-center">';
                                            if(isset($data->$image)){
                                                $image = $data->$image;
                                                $text .= '
                                                <img src="' . edash_block_image_process($image) . '" alt="'.format_text($data->$item_title, FORMAT_HTML, array('filter' => true)).'">';
                                            } 
                                            $text .= '
                                            
                                            <div class="info">';
                                                if(isset($data->$item_title)){
                                                    $text .= '
                                                    <h3>'.format_text($data->$item_title, FORMAT_HTML, array('filter' => true)).'</h3>';
                                                }
                                                if(isset($data->$item_subtitle)){
                                                    $text .= '
                                                    <span>'.format_text($data->$item_subtitle, FORMAT_HTML, array('filter' => true)).'</span>';
                                                }
                                                $text .= '
                                            </div>
                                        </div>
                                    </div>
                                </div>';
                            }
                        }
                        $text .= '
                    </div>
                </div>';
                if($this->content->shape_img):
                    $shape_img = $this->content->shape_img;
                    $text .= '                    
                    <div class="shape4"><img src="'.edash_block_image_process($shape_img).'" alt="'.strip_tags($this->content->title).'"></div>';
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