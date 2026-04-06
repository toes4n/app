<?php
global $CFG;
require_once($CFG->dirroot . '/theme/edash/inc/block_handler/get-content.php');
class block_edash_stories_area extends block_base {
    public function init() {
        $this->title = get_string('pluginname', 'block_edash_stories_area');
    }

    // Declare second
    public function specialization()
    {
        global $CFG, $DB;
        include($CFG->dirroot . '/theme/edash/inc/block_handler/specialization.php');
        if (empty($this->config)) {
            $this->config = new \stdClass();
            $this->config->title = 'Affordable online courses and learning opportunities​';
            $this->config->body = 'Explore all of our courses and pick your suitable ones to enroll and start learning with us!';
            $this->config->btn = 'View All Stories';
            $this->config->btn_link = '#';
            $this->config->style = 1;
        }
    }

    public function get_content() {
        global $CFG, $DB;

        if ($this->content !== null) {
          return $this->content;
        }

        $style = 1;
        if(isset($this->config->style)){
            $style = $this->config->style;
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

        if(isset($this->config->btn_link) && !empty($this->config->btn_link)){
            $this->content->btn_link = $this->config->btn_link;
        }else{
            $this->content->btn_link = '';
        }

        $shape_image_count = 5;
        for($i = 1; $i <= $shape_image_count; $i++) {
            $shape_img = 'shape_img' .$i;
            if(isset($this->config->$shape_img) && !empty($this->config->$shape_img)){
                $this->content->$shape_img = $this->config->$shape_img;
            }else{
                $this->content->$shape_img = '';
            }
        }

        if(isset($this->config->img) && !empty($this->config->img)){
            $this->content->img = $this->config->img;
        }else{
            $this->content->img = '';
        }        
        $text = '';
        
        if($style == 2):
            $text .= '
            <div class="stories-area pb-100">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-md-12">
                            <div class="stories-content">
                                <h2>'.format_text($this->content->title, FORMAT_HTML, array('filter' => true)).'</h2>
                                <p>'.format_text($this->content->body, FORMAT_HTML, array('filter' => true)).'</p>';
                                
                                if($this->content->btn): $text .= '
                                    <a href="'.$this->content->btn_link.'" class="default-btn"> '.format_text($this->content->btn, FORMAT_HTML, array('filter' => true)).'</a>'; 
                                endif;  $text .= '
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="stories-img">';
                            if($this->content->img):
                                $img = $this->content->img;
                                $text .= '                    
                                <img src="'.edash_block_image_process($img).'" alt="'.strip_tags($this->content->title).'">
                                ';
                            endif;
                            $text .= '
                            </div>
                        </div>
                    </div>
                </div>';
                if($this->content->shape_img1):
                    $shape_img1 = $this->content->shape_img1;
                    $text .= '                    
                    <div class="shape2 style-two"><img src="'.edash_block_image_process($shape_img1).'" alt="'.strip_tags($this->content->title).'"></div>';
                endif;
                if($this->content->shape_img2):
                    $shape_img2 = $this->content->shape_img2;
                    $text .= '                    
                    <div class="shape3 style-two"><img src="'.edash_block_image_process($shape_img2).'" alt="'.strip_tags($this->content->title).'"></div>';
                endif;
                if($this->content->shape_img3):
                    $shape_img3 = $this->content->shape_img3;
                    $text .= '                    
                    <div class="shape4 style-two"><img src="'.edash_block_image_process($shape_img3).'" alt="'.strip_tags($this->content->title).'"></div>';
                endif;
                if($this->content->shape_img4):
                    $shape_img4 = $this->content->shape_img4;
                    $text .= '                    
                    <div class="shape6"><img src="'.edash_block_image_process($shape_img4).'" alt="'.strip_tags($this->content->title).'"></div>';
                endif;
                if($this->content->shape_img5):
                    $shape_img5 = $this->content->shape_img5;
                    $text .= '                    
                    <div class="shape4"><img src="'.edash_block_image_process($shape_img5).'" alt="'.strip_tags($this->content->title).'"></div>';
                endif;
                $text .= '
            </div>
            ';
        else:
            $text .= '
            <div class="stories-area ptb-100">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-md-12">
                            <div class="stories-image">';
                            if($this->content->img):
                                $img = $this->content->img;
                                $text .= '                    
                                <img src="'.edash_block_image_process($img).'" alt="'.strip_tags($this->content->title).'">
                                ';
                            endif;
                            $text .= '
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="stories-content">
                                <h2>'.format_text($this->content->title, FORMAT_HTML, array('filter' => true)).'</h2>
                                <p>'.format_text($this->content->body, FORMAT_HTML, array('filter' => true)).'</p>';
                                
                                if($this->content->btn): $text .= '
                                    <a href="'.$this->content->btn_link.'" class="default-btn"> '.format_text($this->content->btn, FORMAT_HTML, array('filter' => true)).'</a>'; 
                                endif;  $text .= '
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
                    <div class="shape3"><img src="'.edash_block_image_process($shape_img2).'" alt="'.strip_tags($this->content->title).'"></div>';
                endif;
                if($this->content->shape_img3):
                    $shape_img3 = $this->content->shape_img3;
                    $text .= '                    
                    <div class="shape4"><img src="'.edash_block_image_process($shape_img3).'" alt="'.strip_tags($this->content->title).'"></div>';
                endif;
                if($this->content->shape_img4):
                    $shape_img4 = $this->content->shape_img4;
                    $text .= '                    
                    <div class="shape6"><img src="'.edash_block_image_process($shape_img4).'" alt="'.strip_tags($this->content->title).'"></div>';
                endif;
                if($this->content->shape_img5):
                    $shape_img5 = $this->content->shape_img5;
                    $text .= '                    
                    <div class="shape4"><img src="'.edash_block_image_process($shape_img5).'" alt="'.strip_tags($this->content->title).'"></div>';
                endif;
                $text .= '
            </div>
            ';
        endif;

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