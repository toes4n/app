<?php
global $CFG;
require_once($CFG->dirroot . '/theme/edash/inc/block_handler/get-content.php');
class block_edash_banner_3 extends block_base {
    public function init() {
        $this->title = get_string('pluginname', 'block_edash_banner_3');
    }

    // Declare second
    public function specialization()
    {
        global $CFG, $DB;
        include($CFG->dirroot . '/theme/edash/inc/block_handler/specialization.php');
        if (empty($this->config)) {
            $this->config = new \stdClass();
            $this->config->title = 'The World’s Leading Distance Learning Provider';
            $this->config->body = 'Flexible easy to access learning opportunities can bring a significant change in how individuals prefer to learn! The eDash can offer you to enjoy the beauty of eLearning!';
            $this->config->btn = 'Join For Free';
            $this->config->btn_link = $CFG->wwwroot . '/course';
            
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
        }
    }

    public function get_content() {
        global $CFG, $DB;

        if ($this->content !== null) {
          return $this->content;
        }

        $this->content         =  new stdClass;
        if(!empty($this->config->title)){
            $this->content->title = $this->config->title;
        }else{
            $this->content->title = '';
        }
        if(isset($this->config->body) && !empty($this->config->body)){
            $this->content->body = $this->config->body;
        }else{
            $this->content->body = '';
        }
        

        if(isset($this->config->btn) && !empty($this->config->btn)){
            $this->content->btn = $this->config->btn;
        }else{
            $this->content->btn = '';
        }
        
        if(!empty($this->config->btn_link)){$this->content->btn_link = $this->config->btn_link;} else {$this->content->btn_link = '';}

        $shape_image_count = 3;
        for($i = 1; $i <= $shape_image_count; $i++) {
            $shape_img = 'shape_img' .$i;
            if(isset($this->config->$shape_img) && !empty($this->config->$shape_img)){
                $this->content->$shape_img = $this->config->$shape_img;
            }else{
                $this->content->$shape_img = '';
            }
        }

        $img = 'img';
        if(isset($this->config->$img) && !empty($this->config->$img)){
            $this->content->$img = $this->config->$img;
        }else{
            $this->content->$img = '';
        }

        $funfactsnumber = 3;
        if(isset($this->config->funfactsnumber)){
            $funfactsnumber = $this->config->funfactsnumber;
        }
        
        $text = '';
        $text .= '
        <div class="banner-wrapper-area">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-7 col-md-12">
                        <div class="banner-wrapper-content">
                            <h1>'.format_text($this->content->title, FORMAT_HTML, array('filter' => true)).'</h1>
                            <p>'.format_text($this->content->body, FORMAT_HTML, array('filter' => true)).'</p>';

                            if(!empty($this->content->btn) && !empty($this->content->btn_link)){
                                $text .= '
                                <a href="'.$this->content->btn_link.'" class="default-btn">'.format_text($this->content->btn, FORMAT_HTML, array('filter' => true)).'</a>';
                            }
                            $text .= '

                            <div class="funfacts">
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
                                        <div class="col-lg-4 col-md-4 col-6 col-sm-4">
                                            <div class="single-funfacts-box">
                                                <i class="'.$icon.'"></i>
                                                <h3><span class="odometer" data-count="'.$funfacts_number.'">00</span><span class="sign">'.format_text($funfacts_prefix, FORMAT_HTML, array('filter' => true)).'</span></h3>
                                                <p>'.format_text($funfacts_title, FORMAT_HTML, array('filter' => true)).'</p>
                                            </div>
                                        </div>';
                                    } $text .= '
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-12">
                        <div class="banner-wrapper-image">';
                            if($this->content->img):
                                $img = $this->content->img;
                                $text .= '                    
                                <img src="'.edash_block_image_process($img).'" alt="'.strip_tags($this->content->title).'">';
                            endif;
                            $text .= '
                        </div>
                    </div>
                </div>
            </div>';

            if($this->content->shape_img1):
                $shape_img1 = $this->content->shape_img1;
                $text .= '                    
                <div class="shape2"><img src="'.edash_block_image_process($shape_img1).'" alt="'.strip_tags($this->content->title).'"></div>';
            endif;
            if($this->content->shape_img2):
                $shape_img2 = $this->content->shape_img2;
                $text .= '                    
                <div class="shape4"><img src="'.edash_block_image_process($shape_img2).'" alt="'.strip_tags($this->content->title).'"></div>';
            endif;
            if($this->content->shape_img3):
                $shape_img3 = $this->content->shape_img3;
                $text .= '                    
                <div class="shape11"><img src="'.edash_block_image_process($shape_img3).'" alt="'.strip_tags($this->content->title).'"></div>';
            endif;
            $text .= '
        </div>';

        $this->content         =  new stdClass;
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