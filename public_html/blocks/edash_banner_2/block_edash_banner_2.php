<?php
global $CFG;
require_once($CFG->dirroot. '/course/renderer.php');
require_once($CFG->dirroot . '/theme/edash/inc/block_handler/get-content.php');
class block_edash_banner_2 extends block_base {
    public function init() {
        $this->title = get_string('pluginname', 'block_edash_banner_2');
    }

    // Declare second
    public function specialization()
    {
        global $CFG, $DB;
        include($CFG->dirroot . '/theme/edash/inc/block_handler/specialization.php');
        if (empty($this->config)) {
            $this->config = new \stdClass();
            $this->config->title = 'The World’s Leading Distance Learning Provider';
            $this->config->body = 'Flexible easy to access learning opportunities can bring a significant change in how individuals prefer to learn! The Ellen can offer you to enjoy the beauty of eLearning!';
            $this->config->search_placeholder = 'What do you want to learn today?';
            $this->config->search_btn = 'Search Now';
            
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

        if (\core_search\manager::is_global_search_enabled() === false) {
            $this->content->search_placeholder = '';
        }else{
            if(isset($this->config->search_placeholder) && !empty($this->config->search_placeholder)){
                $this->content->search_placeholder = $this->config->search_placeholder;
            }else{
                $this->content->search_placeholder = '';
            }
        }

        $url = new moodle_url('/course/search.php');

        if(isset($this->config->search_btn) && !empty($this->config->search_btn)){
            $this->content->search_btn = $this->config->search_btn;
        }else{
            $this->content->search_btn = '';
        }

        if(isset($this->config->button_icon) && !empty($this->config->button_icon)){
            $this->content->button_icon = $this->config->button_icon;
        }else{
            $this->content->button_icon = '';
        }

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
        if(isset($this->config->img) && !empty($this->config->img)){
            $this->content->img = $this->config->img;
        }else{
            $this->content->img = '';
        }

        $funfactsnumber = 3;
        if(isset($this->config->funfactsnumber)){
            $funfactsnumber = $this->config->funfactsnumber;
        }

        $text = '';
        $text .= '
        <div class="banner-area">
            <div class="container">
                <div class="banner-content">
                    <h1>'.format_text($this->content->title, FORMAT_HTML, array('filter' => true)).'</h1>
                    <p>'.format_text($this->content->body, FORMAT_HTML, array('filter' => true)).'</p>';

                    if($this->content->search_placeholder):
                        $text .= '
                        <form class="search-box" action="'.$url->out().'">
                            <input type="hidden" name="areaids" value="core_course-course">
                            <input type="text" id="searchform-search" name="q"  class="input-search" placeholder="'.format_text($this->content->search_placeholder, FORMAT_HTML, array('filter' => true)).'">
                            <button type="submit"><i class="'.$this->content->button_icon.'"></i> '.format_text($this->content->search_btn, FORMAT_HTML, array('filter' => true)).'</button>
                        </form>';
                    endif;
                    $text .= '

                    <div class="funfacts">
                        <div class="row justify-content-center">';
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
            <div class="banner-image">';
                if($this->content->img):
                    $img = $this->content->img;
                    $text .= '                    
                    <img src="'.edash_block_image_process($img).'" alt="'.strip_tags($this->content->title).'">';
                endif;
                $text .= '
            </div>';

            if($this->content->shape_img1):
                $shape_img1 = $this->content->shape_img1;
                $text .= '                    
                <div class="shape2"><img src="'.edash_block_image_process($shape_img1).'" alt="'.strip_tags($this->content->title).'"></div>';
            endif;
            if($this->content->shape_img2):
                $shape_img2 = $this->content->shape_img2;
                $text .= '                    
                <div class="shape5"><img src="'.edash_block_image_process($shape_img2).'" alt="'.strip_tags($this->content->title).'"></div>';
            endif;
            if($this->content->shape_img3):
                $shape_img3 = $this->content->shape_img3;
                $text .= '                    
                <div class="shape9"><img src="'.edash_block_image_process($shape_img3).'" alt="'.strip_tags($this->content->title).'"></div>';
            endif;
            $text .= '
        </div>
        ';

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