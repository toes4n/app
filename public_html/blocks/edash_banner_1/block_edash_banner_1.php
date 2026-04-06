<?php
global $CFG;
require_once($CFG->dirroot. '/course/renderer.php');
require_once($CFG->dirroot . '/theme/edash/inc/block_handler/get-content.php');
class block_edash_banner_1 extends block_base {
    public function init() {
        $this->title = get_string('pluginname', 'block_edash_banner_1');
    }

    // Declare second
    public function specialization()
    {
        global $CFG, $DB;
        include($CFG->dirroot . '/theme/edash/inc/block_handler/specialization.php');
        if (empty($this->config)) {
            $this->config = new \stdClass();
            $this->config->title = 'Start learning from the world’s best institutions';
            $this->config->body = 'Flexible easy to access learning opportunities can bring a significant change in how individuals prefer to learn! The eDash can offer you to enjoy the beauty of eLearning!';
            $this->config->support_text = '<p>Need help? <a href="#">Contact our eDash support</a> Tell us about your query</p>';
            $this->config->banner_btn = 'Discover all courses';
            $this->config->banner_btn_link = '#';
            $this->config->search_placeholder = 'What do you want to learn today?';
            $this->config->search_btn = 'Search';
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

        if(isset($this->config->support_text) && !empty($this->config->support_text)){
            $this->content->support_text = $this->config->support_text;
        }else{
            $this->content->support_text = '';
        }

        if(isset($this->config->banner_btn) && !empty($this->config->banner_btn)){
            $this->content->banner_btn = $this->config->banner_btn;
        }else{
            $this->content->banner_btn = '';
        }

        if(isset($this->config->banner_btn_link) && !empty($this->config->banner_btn_link)){
            $this->content->banner_btn_link = $this->config->banner_btn_link;
        }else{
            $this->content->banner_btn_link = '';
        }

        if(isset($this->config->banner_btn_icon) && !empty($this->config->banner_btn_icon)){
            $this->content->banner_btn_icon = $this->config->banner_btn_icon;
        }else{
            $this->content->banner_btn_icon = '';
        }

        $banner_image_count = 3;
        for($i = 1; $i <= $banner_image_count; $i++) {
            $banner_img = 'banner_img' .$i;
            if(isset($this->config->$banner_img) && !empty($this->config->$banner_img)){
                $this->content->$banner_img = $this->config->$banner_img;
            }else{
                $this->content->$banner_img = '';
            }
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
        
        $text = '';
        $text .= '
            <div class="main-banner-area">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-md-12">
                            <div class="main-banner-content">
                                <h2>'.format_text($this->content->title, FORMAT_HTML, array('filter' => true)).'</h2>
                                <div class="main-banner-content-p">'.format_text($this->content->body, FORMAT_HTML, array('filter' => true)).'</div>';

                                if($this->content->search_placeholder):
                                    $text .= '
                                    <form class="search-box" action="'.$url->out().'">
                                        <input type="hidden" name="areaids" value="core_course-course">
                                        <input type="text" id="searchform-search" name="q"  class="input-search" placeholder="'.format_text($this->content->search_placeholder, FORMAT_HTML, array('filter' => true)).'">
                                        <button type="submit"><i class="'.$this->content->button_icon.'"></i> '.format_text($this->content->search_btn, FORMAT_HTML, array('filter' => true)).'</button>
                                    </form>';
                                endif;

                                $text .= '
                                <div class="support-box">
                                    <div class="d-flex align-items-center">
                                        <div class="images d-flex align-items-center">';
                                        $support_image_count = 5;
                                        for($i = 1; $i <= $support_image_count; $i++) {
                                            $user_img = 'user_img' .$i;
                                            if(isset($this->config->$user_img) && !empty($this->config->$user_img)){
                                                $user_img = $this->config->$user_img;
                                                $text .= '<img src="'.edash_block_image_process($user_img).'" alt="'.strip_tags($this->content->title).'">';
                                            }
                                        }
                                        $text .= '
                                        </div>

                                        '; if($this->content->support_text): $text .= '
                                        <div class="text">
                                            '.format_text($this->content->support_text, FORMAT_HTML, array('filter' => true)).'
                                        </div>
                                        '; endif; $text .= '
                                    </div>
                                </div>
                                ';if($this->content->banner_btn): $text .= '
                                    <a href="'.$this->content->banner_btn_link.'" class="link-btn"><i class="'.$this->content->banner_btn_icon.'"></i> '.format_text($this->content->banner_btn, FORMAT_HTML, array('filter' => true)).'</a>
                                '; endif;  $text .= '
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="main-banner-image">
                                <div class="row align-items-center">
                                    <div class="col-lg-6 col-md-6">';
                                        if($this->content->banner_img1):
                                            $banner_img1 = $this->content->banner_img1;
                                            $text .= '
                                            <div class="image">
                                                <img src="'.edash_block_image_process($banner_img1).'" data-aos="flip-left" data-aos-easing="ease" data-aos-delay="300" alt="'.strip_tags($this->content->title).'">
                                            </div>';
                                        endif;
                                        $text .= '
                                    </div>
                                    <div class="col-lg-6 col-md-6">';
                                        if($this->content->banner_img2):
                                            $banner_img2 = $this->content->banner_img2;
                                            $text .= '
                                            <div class="image">
                                                <img src="'.edash_block_image_process($banner_img2).'" data-aos="fade-up" data-aos-easing="ease" data-aos-delay="300" alt="'.strip_tags($this->content->title).'">
                                            </div>';
                                        endif;

                                        if($this->content->banner_img3):
                                            $banner_img3 = $this->content->banner_img3;
                                            $text .= '
                                            <div class="image">
                                                <img src="'.edash_block_image_process($banner_img3).'" data-aos="fade-down" data-aos-easing="ease" data-aos-delay="300" alt="'.strip_tags($this->content->title).'">
                                            </div>';
                                        endif;
                                        $text .= '
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>';
                if($this->content->shape_img1):
                    $shape_img1 = $this->content->shape_img1;
                    $text .= '                    
                    <div class="shape1"><img src="'.edash_block_image_process($shape_img1).'" alt="'.strip_tags($this->content->title).'"></div>';
                endif;
                if($this->content->shape_img2):
                    $shape_img2 = $this->content->shape_img2;
                    $text .= '                    
                    <div class="shape2" data-speed="0.10" data-revert="true"><img src="'.edash_block_image_process($shape_img2).'" alt="'.strip_tags($this->content->title).'"></div>';
                endif;
                if($this->content->shape_img3):
                    $shape_img3 = $this->content->shape_img3;
                    $text .= '                    
                    <div class="shape3" data-speed="0.10" data-revert="true"><img src="'.edash_block_image_process($shape_img3).'" alt="'.strip_tags($this->content->title).'"></div>';
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