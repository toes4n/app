<?php
global $CFG;
require_once($CFG->dirroot. '/course/renderer.php');
require_once($CFG->dirroot . '/theme/edash/inc/block_handler/get-content.php');
class block_edash_banner_8 extends block_base {
    public function init() {
        $this->title = get_string('pluginname', 'block_edash_banner_8');
    }

    // Declare second
    public function specialization()
    {
        global $CFG, $DB;
        include($CFG->dirroot . '/theme/edash/inc/block_handler/specialization.php');
        if (empty($this->config)) {
            $this->config = new \stdClass();
            $this->config->title = 'Find Simple & Effective Training Courses Now';
            $this->config->body = '<b>eDash</b> is a Global training provider based across the UK that specialists in accredited and bespoke training courses. Flexible easy to access learning opportunities can bring a significant change.';
            $this->config->support_text = '<span>500K+</span> People already trusted us.';
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
        if(!empty($this->config->title)){ $this->content->title = $this->config->title;}else{ $this->content->title = ''; }

        if(isset($this->config->body) && !empty($this->config->body)){ $this->content->body = $this->config->body;}else{$this->content->body = '';}

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

        // Banner Image URL
        $banner_img = 'banner_img';
        if(isset($this->config->$banner_img) && !empty($this->config->$banner_img)){
            $this->content->$banner_img = $this->config->$banner_img;
        }else{
            $this->content->$banner_img = '';
        }

        // Banner BG Image URL
        $banner_bg_img = 'banner_bg_img';
        if(isset($this->config->$banner_bg_img) && !empty($this->config->$banner_bg_img)){ $this->content->$banner_bg_img = $this->config->$banner_bg_img; }else{ $this->content->$banner_bg_img = ''; }

        if($this->content->banner_bg_img):
            $banner_bg_img = $this->content->banner_bg_img;
        else:
            $banner_bg_img = '';
        endif;

        // Shape Image URL
        $shape_img = 'shape_img';
        if(isset($this->config->$shape_img) && !empty($this->config->$shape_img)){ $this->content->$shape_img = $this->config->$shape_img; }else{ $this->content->$shape_img = ''; }

        // Video URL 1
        $video_url1 = 'video_url1';
        if(isset($this->config->$video_url1) && !empty($this->config->$video_url1)){ $this->content->$video_url1 = $this->config->$video_url1; }else{ $this->content->$video_url1 = ''; }
        
        // Video URL 2
        $video_url2 = 'video_url2';
        if(isset($this->config->$video_url2) && !empty($this->config->$video_url2)){ $this->content->$video_url2 = $this->config->$video_url2; }else{ $this->content->$video_url2 = ''; }

        // YouTube Video URL
        $youtube_url = 'youtube_url';
        if(isset($this->config->$youtube_url) && !empty($this->config->$youtube_url)){ $this->content->$youtube_url = $this->config->$youtube_url; }else{ $this->content->$youtube_url = ''; }
        
        $text = '';
        $text .= '
            <div class="remote-training-banner-area" style="background-image:url('.edash_block_image_process($banner_bg_img).');">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-md-12">
                            <div class="remote-training-banner-content">
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
                                        <div class="text">'; 
                                            if($this->content->support_text): $text .= '
                                                <p>
                                                    '.format_text($this->content->support_text, FORMAT_HTML, array('filter' => true)).'';
                                                    if($this->content->banner_btn): $text .= '
                                                        <a href="'.$this->content->banner_btn_link.'">'.format_text($this->content->banner_btn, FORMAT_HTML, array('filter' => true)).'</a>'; 
                                                    endif;  
                                                    $text .= '
                                                </p>'; 
                                            endif; $text .= '
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="remote-training-banner-image">';
                                if($this->content->banner_img):
                                    $banner_img = $this->content->banner_img;
                                    $text .= '
                                    <div class="image">
                                        <img src="'.edash_block_image_process($banner_img).'" alt="'.strip_tags($this->content->title).'">
                                    </div>';
                                endif;
                                
                                if($this->content->video_url1):
                                    $text .= '
                                    <div class="banner-video-1">
                                        <video loop="" muted="" autoplay="" poster="#" class="video">
                                            <source src="'.$this->content->video_url1.'" type="video/mp4">
                                        </video>
                                    </div>';
                                endif;

                                if($this->content->video_url2):
                                    $text .= '
                                    <div class="banner-video-2">
                                        <video loop="" muted="" autoplay="" poster="#" class="video">
                                            <source src="'.$this->content->video_url2.'" type="video/mp4">
                                        </video>';

                                        if($this->content->youtube_url):
                                            $text .= '
                                            <a href="'.$this->content->youtube_url.'" class="popup-video">
                                                <i class="bx bx-play"></i>
                                            </a>';
                                        endif;
                                        $text .= '
                                    </div>';
                                endif;
                                    
                                if($this->content->shape_img):
                                    $shape_img = $this->content->shape_img;
                                    $text .= '
                                    <div class="banner-wrap-shape">
                                        <img src="'.edash_block_image_process($shape_img).'" alt="'.strip_tags($this->content->title).'">
                                    </div>';
                                endif;
                                $text .= '
                            </div>
                        </div>
                    </div>
                </div>
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