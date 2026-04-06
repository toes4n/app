<?php
global $CFG;
require_once($CFG->dirroot . '/theme/edash/inc/block_handler/get-content.php');
class block_edash_banner_7 extends block_base {
    public function init() {
        $this->title = get_string('pluginname', 'block_edash_banner_7');
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
            $this->config->search_placeholder = 'What do you want to learn today?';
            $this->config->search_btn = 'Search Courses Now';
        }
    }

    public function get_content() {
        global $CFG, $DB;

        if ($this->content !== null) {
          return $this->content;
        }

        $this->content         =  new stdClass;

        if(!empty($this->config->title)){$this->content->title = $this->config->title;} else {$this->content->title = '';}

        if(!empty($this->config->body)){$this->content->body = $this->config->body;} else {$this->content->body = '';}

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

        if(!empty($this->config->search_btn)){$this->content->search_btn = $this->config->search_btn;} else {$this->content->search_btn = '';}

        if(!empty($this->config->banner_search_icon)){$this->content->banner_search_icon = $this->config->banner_search_icon;} else {$this->content->banner_search_icon = '';}

        $banner_img = 'banner_img';
        if(isset($this->config->$banner_img) && !empty($this->config->$banner_img)){
            $this->content->$banner_img = $this->config->$banner_img;
        }else{
            $this->content->$banner_img = '';
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
            <div class="dark-home-banner-area dark-home-with-seven">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-lg-7 col-md-12">
                            <div class="dark-home-banner-content">
                                <h1>'.format_text($this->content->title, FORMAT_HTML, array('filter' => true)).'</h1>
                                <p>'.format_text($this->content->body, FORMAT_HTML, array('filter' => true)).'</p>';

                                if($this->content->search_placeholder):
                                    $text .= '
                                    <form class="search-box" action="'.$url->out().'">
                                        <input type="hidden" name="areaids" value="core_course-course">
                                        <input type="text" class="input-search" name="q" placeholder="'.format_text($this->content->search_placeholder, FORMAT_HTML, array('filter' => true)).'">
                                        <button type="submit">'.format_text($this->content->search_btn, FORMAT_HTML, array('filter' => true)).'</button>
                                        <div class="icon"><i class="'.$this->content->banner_search_icon.'"></i></div>
                                    </form>';
                                endif;
                                $text .= '
                            </div>
                        </div>

                        <div class="col-lg-5 col-md-12">
                            <div class="dark-home-banner-image">';
                                    $banner_img = 'banner_img';
                                    if(isset($this->config->$banner_img) && !empty($this->config->$banner_img)){
                                        $banner_img = $this->config->$banner_img;
                                        $text .= '<img src="'.edash_block_image_process($banner_img).'" alt="'.strip_tags($this->content->title).'">';
                                    }
                                $text .= '
                            </div>
                        </div>
                    </div>
                </div>';

                if($this->content->shape_img1):
                    $shape_img1 = $this->content->shape_img1;
                    $text .= '                    
                    <div class="dark-home-banner-shape-1"><img src="'.edash_block_image_process($shape_img1).'" alt="'.strip_tags($this->content->title).'"></div>';
                endif;
                if($this->content->shape_img2):
                    $shape_img2 = $this->content->shape_img2;
                    $text .= '                    
                    <div class="dark-home-banner-shape-2"><img src="'.edash_block_image_process($shape_img2).'" alt="'.strip_tags($this->content->title).'"></div>';
                endif;
                if($this->content->shape_img3):
                    $shape_img3 = $this->content->shape_img3;
                    $text .= '                    
                    <div class="dark-home-banner-shape-3"><img src="'.edash_block_image_process($shape_img3).'" alt="'.strip_tags($this->content->title).'"></div>';
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